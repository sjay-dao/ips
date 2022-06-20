var _table_frame = document.getElementById("_table_frame");
var is_monitoring_scroll, after_scroll_cnt = 0,
    fixed_column_count, is_footer_exists, is_scrollTop;
var rows_init_data, _column_left, _def_height, old_scrollVal;
var _close_load_cnt, _interval_build;

function _setTable() {
    _table_frame.innerHTML = "<img id='loading_img' src=''/>";
    _close_load_cnt = 0;
    _interval_build = 0;
    closeLoad();
    _def_height = 12.5;
    rows_init_data = [];
    _column_left = [];
    fixed_column_count = 4;
    footer_top = parseFloat(_table_frame.offsetHeight * .9);
    // console.log(footer_top + " - footer top");
    // console.log(_table_frame.offsetHeight + " - Offset Height");
    is_monitoring_scroll = false;
}

function addCell(obj) {
    // _interval_build++;

    // if(_interval_build == 10){
    setTimeout(function() { addCellConstruct(obj) }, 1);
    // _interval_build=0;
    // }

    // else
    // addCellConstruct(obj);
}

function addCellConstruct(obj) {
    col_no = rows_init_data[obj.row].cols + 1;
    left_sum = rows_init_data[obj.row].left;
    if (_column_left[col_no - 1] == undefined) {
        _column_left[col_no - 1] = left_sum;
        //console.log("yeah - _column_left:" + _column_left[col_no-1]);
    }

    row_length = rows_init_data.length;
    tops = rows_init_data[obj.row].top;
    cell_width = obj.width;
    //console.log("col no - " + col_no + ", left_sum - " + rows_init_data[obj.row].left);


    if (obj.row == 0) {
        header_name = 'headers';
        //console.log("header");
    } else if (obj.footer == true) {
        header_name = 'footers';
        is_footer_exists = true;
        tops = '';
    } else
        header_name = 'normal_cells';

    fixed_header_margin = 0;
    if (obj.row == 0 && col_no < fixed_column_count + 1) { // fixed column header
        fixed_header = 'fixed_header';
        fixed_header_margin = 0;
    } else if (obj.footer == true && col_no == 1)
        fixed_header = 'fixed_footer';
    else {
        fixed_header = 'normal_cell';
    }

    if (header_name == 'normal_cells' && fixed_header == 'normal_cell' && obj.value.indexOf("</") == -1)
        fixed_header_margin = 5;

    document.getElementById(obj.frame).innerHTML +=
        "<aside class=" + header_name + " name='_fixed_column" + col_no + "' target='" + fixed_header +
        "' style='text-align:center;   box-shadow: 0 0 10px grey; height:" + _def_height + "%; width:" + cell_width +
        "%;position:absolute; left:" + left_sum + "%; top:" + tops + "%;'>" + obj.value + "</aside>";


    rows_init_data[obj.row].left = parseFloat(rows_init_data[obj.row].left + cell_width);
    rows_init_data[obj.row].cols += 1;
    //console.log("rows_init_data[obj.row].left  - " + rows_init_data[obj.row].left  + ", rows_init_data[obj.row].cols- " + rows_init_data[obj.row].cols);

}

function addRow() {
    var length = rows_init_data.length;
    rows_init_data.push({ left: 0, cols: 0, top: (_def_height * rows_init_data.length) });
    //console.log("Row total - " + length);
    return length;

}

function closeLoad() {
    console.log(_close_load_cnt);
    _close_load_cnt++;
    if (_close_load_cnt < 2)
        setTimeout("closeLoad()", 100);
    else
        document.getElementById('loading_img').style.display = "none";
}

function endTable() {
    console.log("end of the table");
    _table_frame.innerHTML += "<div style='height:10%; background:#F000; width:100%; position:absolute; top:" + ((rows_init_data.length) * _def_height) + "%'>End of the table :)</div>";
}

function hideFixedCells() {
    if (is_scrollTop) {
        for (var x = 0; x < rows_init_data[0].cols; x++) //fixed header;
            document.getElementsByClassName('headers')[x].style.display = "none";

        //////fixed footer;
        if (is_footer_exists) {
            for (var x = 0; x < rows_init_data[rows_init_data.length - 1].cols; x++) //fixed footer;
                document.getElementsByClassName('footers')[x].style.display = "none";
        }
    } else {
        //fixed column
        for (var i = 0; i < fixed_column_count; i++) {
            for (var x = 1; x < rows_init_data.length - 1; x++) {
                if (i != 0 && x == rows_init_data.length - 1) continue;
                document.getElementsByName("_fixed_column" + (i + 1))[x].style.display = "none";
            }
        }
    }
}

function monitorScroll() {
    var scroll_top = document.getElementById('_table_frame').scrollTop;
    var scroll_left = document.getElementById('_table_frame').scrollLeft;
    // <!-- console.log(scroll_left+ " - Scroll left"); -->
    // <!-- console.log(scroll_top + " - Scroll Top"); -->
    is_scrollTop = false;
    if (old_scrollVal != scroll_top) {
        old_scrollVal = scroll_top;
        is_scrollTop = true;
    }


    //fixed header and footer;
    for (var x = 0; x < rows_init_data[0].cols; x++) {
        document.getElementsByClassName('headers')[x].style.top = scroll_top;
    }
    //////fixed footer;
    if (is_footer_exists) {
        for (var x = 0; x < rows_init_data[rows_init_data.length - 1].cols; x++)
            document.getElementsByClassName('footers')[x].style.top = scroll_top + footer_top;
    }

    //fixed column
    for (var i = 0; i < fixed_column_count; i++) {
        for (var x = 0; x < rows_init_data.length; x++) {
            if (i != 0 && x == rows_init_data.length - 1) continue;
            document.getElementsByName("_fixed_column" + (i + 1))[x].style.left = parseInt(_table_frame.offsetWidth * (_column_left[i] / 100) + scroll_left);
        }
    }

    if (!is_monitoring_scroll && scroll_top < _table_frame.offsetHeight) {
        hideFixedCells();
        is_monitoring_scroll = true;
        monitorScrollMovement();
    }
    after_scroll_cnt = 100; //milliseconds


    //just display the left of one of the cells
    //console.log(scroll_left + " - " + _table_frame.offsetWidth);
}

function monitorScrollMovement() {
    if (after_scroll_cnt > 0) {
        after_scroll_cnt--;
        setTimeout('monitorScrollMovement()', 1);
    } else {
        is_monitoring_scroll = false;
        //console.log("Scroll count finish");
        viewFixedCells();
    }
}

function showDimensionMeasurement() {
    table_info.innerHTML = "Height = " + _table_frame.offsetHeight + "px<br>";
    table_info.innerHTML += "Width = " + _table_frame.offsetWidth + "px";
}

function viewFixedCells() {
    //fixed header and footer;
    for (var x = 0; x < rows_init_data[0].cols; x++) {
        document.getElementsByClassName('headers')[x].style.display = "block";
    }
    //fixed footer;
    if (is_footer_exists) {
        for (var x = 0; x < rows_init_data[rows_init_data.length - 1].cols; x++)
            document.getElementsByClassName('footers')[x].style.display = "block";
    }

    //fixed column
    for (var i = 0; i < fixed_column_count; i++) {
        for (var x = 0; x < rows_init_data.length; x++) {
            if (i != 0 && x == rows_init_data.length - 1) continue;
            document.getElementsByName("_fixed_column" + (i + 1))[x].style.display = "block";
        }
    }
}