<style>

  
.ip-view{
  border-bottom:1px solid white;
}


table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
}
table th{
  background:#2076b7;
  font-size:10px;
  color:white
  /* text-align: center */
}
table thead{
  position:sticky;
  top:0px;
  text-align:center;
}

table td{
  font-size:9px;
}

#tbl_paramter_box{
  display:flex; justify-content: space-between; flex-wrap: wrap; align-content: center;
}

.ip-type{
  border-radius: .5rem .5rem 0 0;
  background:linear-gradient(to bottom,#00c2f8, #ffffff, #00c2f8);
  font-weight:bold;
  font-size:13px;
}

.selected-ip{
  background:linear-gradient(to bottom,#b5b5b5, #ffffff, #dbdbdb);
  color:rgb(7, 103, 7);
  box-shadow: 1px 1px 5px #0008;
}

table#dtBasicExample.dataTable tbody tr:hover {
  background-color: rgb(252, 233, 112);
  cursor: pointer;
}
 
table#dtBasicExample.dataTable tbody tr:hover > .sorting_1 {
  background-color: rgb(255, 223, 126);
  cursor: pointer;
}


@media only screen and (max-width: 700px) {
  #tbl_paramter_box{
    justify-content: center; gap: 20px;
  }
}
</style>

{{-- @include("home.tabngraph") --}}
<style>
  #ip_trends_box{
      width:100%;display:flex; padding:50px 0 50px 0;
      text-align:center; flex-wrap:wrap; flex-direction: row;
      justify-content: center; 
  }

  .ip_trends_box_contents:hover, .ip_trends_box_selected{
      opacity:0.7;
      transform: scale(1.1);
  }

  

  .ip_trends_box_contents{
      height:170px; margin:10px; width:200px; border-radius:1rem; border:1px solid #aaa;
      display:flex; justify-content: center; align-items: center; color:white; cursor:pointer;
  }

  
  #btn_dau{
    height:40px; width:40%; display:none; text-align:center; 
    background:rgb(24, 64, 108); font-weight:bolder
  }
  @media only screen and (max-width: 500px) {
        .ip_trends_box_contents{ 
            height:128px; margin:5px; width:150px; 
        }
    }
</style>

<style>
   .btn_pagination{
        background:#055da1;
        border:1px solid #75c3ff;
        width:15%;
        color:white;
    }
</style>

<div id="ip_trends_box" style="">
      <button type="button" class="ip_trends_box_contents"  value="0" style="background:rgb(99, 126, 143); position:relative" >
        <label style="position:absolute; z-index:100; ">
            <h2 id="all_count" style=" font-weight:bolder; font-family:Arial Black"></h2><br>
            <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">All</h6>
        </label>  
        <i class="fa fa-border-all" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
      </button>
      <button type="button" class="ip_trends_box_contents"  value="1" style="background:rgb(37, 97, 162); position:relative" >
          <label style="position:absolute; z-index:100; ">
              <h2 id="patent_count" style=" font-weight:bolder; font-family:Arial Black"></h2><br>
              <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Patent</h6>
          </label>  
          <i class="fa fa-lightbulb" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
      </button>
      <button type="button" class="ip_trends_box_contents"  value="2" style="background:rgb(89, 103, 119)">
          <label for="">
              <h2 id="um_count" style=" font-weight:bolder; font-family:Arial Black"></h2><br>
              <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Utility Model</h6>
          </label>  
          <i class="fa fa-wrench" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
      </button>
      <button type="button" class="ip_trends_box_contents"  value="3" style="background:rgb(24, 64, 108)">
          <label for="">
              <h2 id="tm_count" style=" font-weight:bolder; font-family:Arial Black"></h2><br>
              <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Trademark</h6>
          </label>
          <i class="fa fa-university" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
      </button>
      <button type="button" class="ip_trends_box_contents"  value="4" style="background:rgb(39, 58, 74)">
          <label for="">
              <h2 id="cr_count" style=" font-weight:bolder; font-family:Arial Black"></h2><br>
              <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Copyright</h6>
          </label>  
          <i class="fa fa-copyright" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
      </button>
</div>
    
<button class="ip_trends_box_contents"  id= "btn_dau"  value = "-1">TM Declaration of Use</button>
    <div  class="row mt-1" style="width:98%; background:#98d3ff; margin:auto; display:flex; flex-wrap: wrap; align-items: center;">
        <div class="col-lg-4">
            <div class="row">
              <div class="col-sm-3">
                <span> Search </span> 
                <i class="fas fa-search"></i>   
              </div>
             
              <input class="col-lg-9 border-0" type="text" id="search_chars_bar" style="border-radius:.5rem;"/>
            </div>
         
        </div>
        <div class="col-lg-8" id="tbl_paramter_box" style="">
          {{-- <button class="ip-type"  value="0">ALL</button>
          <button class="ip-type"  value="1">PATENT</button>
          <button class="ip-type"  value = "3">TRADEMARK</button> --}}
          {{-- <button class="ip-type"  value = "2">UTILIY MODEL</button>
          <button class="ip-type"  value = "4">COPYRIGHT</button> --}}
          <button type="button" class="btn-sm btn-success btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg" >Add IP +</button>
          <div id= "quick_search_sort_box" style="width:320px; display:">
            <label type="button" style="border-radius:.5rem ; width:;">Sort By</label>
            <select id="tbl_search_sorter" class=" p-2" name="" id="" style="width:60%">
                <option value="doc_code">Document Code</option>
                <option value="date_filed">Date Filed</option>
                <option value="name">Title</option>
                <option value="reg_no">Application No.</option>
                <option value="author_r_inventor">Inventors/ Authors</option>
                <option value="status">Status</option>
                <option value="date_approved">Date Approved/ Granted</option>
            </select>
            <button type="button " onclick="$('#tbl_search_sorter').trigger('change', [{}, true]);" 
            style="border-radius:.5rem ;color:#259; "><i class="fas fa-sort-alpha-down"></i></button>
            <button type="button " onclick="$('#tbl_search_sorter').trigger('change', [{}, false]);"  
            style="border-radius:.5rem ;color:#259; "><i class="fas fa-sort-alpha-up"></i></button>
        </div>
          <div style="width:200px;">
            <button type="button" onclick="displayRowsOfIpToTable(rows, -1)" value='-1' class='btn_pagination'  style="border-radius: .5rem 0 0 0 ; ">
                <i class="fas fa-chevron-left fa-lg"></i>
            </button>
            <label type="button" class="m-0">Page 
                <b><span id='current_page'>1</span></b> of
                <b><span id='page_total'>1</span></b>
            </label>
            <button type="button" onclick="displayRowsOfIpToTable(rows, 1)" value ='1' class='btn_pagination' style="border-radius: 0 .5rem 0 0 ;">
                <i class="fas fa-chevron-right fa-lg"></i> 
            </button>
            <input type="text" onchange="displayRowsOfIpToTable(rows)" style="width:25px; border:none" id='page_rows_cnt' value='15'/>
          </div>
        </div>

        
    </div>

    <section class="overflow-auto" id="table_box" style="width:98%; background:#Ffeadf; margin:auto; padding:0; box-shadow:1px 1px 5px #0005; overflow-y:auto; margin-bottom:50px;">
      <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" style="background:rgb(255, 255, 255)">
        <thead id="ip_tbl_head">
          {{-- <th>Document Code</th> <th>Name of Technology</th> <th>Date Filed</th> <th>Registration No.</th>  <th>Authors/ Inventors</th> <th>Status</th> 
          <th>Date Approved</th> <th>Project Title</th> <th>Duration</th> <th>Project Cost</th> <th>Funding Source</th> <th>Income Gross</th> <th>Praise Award</th> <th>NAST Award</th> --}}
        </thead>
        <tbody id="ip_tbl_body">
          <!-- @foreach ($vars as $var)
          <tr>  
              <td>{{$var->type_id}}</td> 
              <td>{{$var->doc_code}}</td>
              <td>{{$var->name}}</td>
              <td>{{$var->date_filed}}</td>
              <td>{{$var->reg_no}}</td>
              <td>{{$var->author_r_inventor}}</td>
              <td>{{$var->status}}</td>
              <td>{{$var->date_approved}}</td>
              <td>{{$var->project_title}}</td>
              <td>{{$var->duration}}</td>
              <td>{{$var->project_cost}}</td>
              <td>{{$var->funding_source}}</td>
              <td>{{$var->income_gross}}</td>
              <td>{{$var->praise_award}}</td>
              <td>{{$var->nast_award}}</td>
          </tr>
          @endforeach -->
        </tbody>
      </table>
    </section>

    
<script>
  
  var table_heads = [
    ["No.", "Document Code", "Date Filed", "Title as Filed", "Application No.",  "Authors/ Inventors", "Status", 
      "Date Granted", "Date of Expiration", "Certificate", "Project Info", "AWARDS<br>Year Awarded by:"],
    ["No.", "Document Code", "Date Filed", "Title as Filed", "Application No.",  "Authors/ Inventors", "Status", 
     "Title as Granted", "Date Granted", "Date of Expiration", "Certificate", "Project Info", "AWARDS<br>Year Awarded by:"],
     ["No.", "Document Code", "Date Filed", "Title as Filed", "Application No.",  "Authors/ Inventors", "Status", 
     "Title as Granted", "Date Granted", "Date of Expiration", "Certificate", "Project Info", "AWARDS<br>Year Awarded by:"],
     ["No.", "Document Code", "Date Filed", "Title as Filed", "Application No.",  "Authors/ Inventors", "Status", 
     "Date Registered", "Date of Renewal", "Certificate", "Project Info", "AWARDS<br>Year Awarded by:"],
     ["No.", "Document Code", "Date Filed", "Title", "Application No.",  "Authors/ Inventors", "Status", 
     "Date Issued", "Certificate", "Material", "Project Info", "AWARDS<br>Year Awarded by:"],
    // ["Options","Name of Technology", "Registration No.","Status", "3rd Year", "5th Year", "Renewal", 
    // "Used for the ff. classes of goods/services", "First Used On", "Name of Outlet", "Address", "5 Labels or Pictures"]
    ["Options", "Title", "Date Filed", "Register No.", "Date Registered", "Status", "3rd DAU", "5th DAU", "Renewal"]
  ];

  var subheads = [
    ["Title", "Duration", "Cost", "Fund Source", "FNRI PRAISE", "DOST NAST"],
    ["Title", "Duration", "Cost", "Fund Source", "FNRI PRAISE", "DOST NAST"],
    ["Title", "Duration", "Cost", "Fund Source", "FNRI PRAISE", "DOST NAST"],
    ["Title", "Duration", "Cost", "Fund Source", "FNRI PRAISE", "DOST NAST"],
    ["Title", "Duration", "Cost", "Fund Source", "FNRI PRAISE", "DOST NAST"],
    ["Date", "Status", "Register No", "Date", "Status", "Register No"]
  ];


// $(document).ready(function () {
  setIpTableHeader(0);

  $('#dtBasicExample').DataTable({searching: false, paging: false, info: false});//remove the data table additional functions
  // $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');

  
  // })

  function setIpTableHeader(ind){
    console.log("Table header set - "+ind);
    
    // $("#ip_tbl_head").html("<tr>");
    let tbl_str = "<tr>";
    $.each(table_heads[ind], function( x, value ) {
    // console.log( x + ": " + value );
      if(table_heads[ind][x] == "Project Info"){
        // $("#ip_tbl_head").append("<th colspan=4>"+table_heads[ind][x]+"</th>");
        tbl_str += "<th colspan=4>"+table_heads[ind][x]+"</th>";
      }else  if(table_heads[ind][x] == "AWARDS<br>Year Awarded by:"){
        // $("#ip_tbl_head").append("<th colspan=4>"+table_heads[ind][x]+"</th>");
        tbl_str += "<th colspan=2 >"+table_heads[ind][x]+"</th>";
      }else  if(table_heads[ind][x] == "Title as Filed" || table_heads[ind][x] == "Authors/ Inventors"){
        // $("#ip_tbl_head").append("<th colspan=4>"+table_heads[ind][x]+"</th>");
        tbl_str += "<th style='min-width:100px;' rowspan=2>"+table_heads[ind][x]+"</th>";
      }else  if(table_heads[ind][x] == "3rd DAU" || table_heads[ind][x] == "5th DAU"){
        // $("#ip_tbl_head").append("<th colspan=4>"+table_heads[ind][x]+"</th>");
        tbl_str += "<th style='min-width:100px;' colspan=3>"+table_heads[ind][x]+"</th>";
      }else{
        // $("#ip_tbl_head").append("<th rowspan=2>"+table_heads[ind][x]+"</th>");
        tbl_str += "<th rowspan=2>"+table_heads[ind][x]+"</th>";
      }
    });
    tbl_str += "</tr>";
      // $("#ip_tbl_head").append(tbl_str);

      //another row for subheader
      // $("#ip_tbl_head").append("<tr>");
      tbl_str += "<tr>";
      for(x=0; x<6; x++){
        // $("#ip_tbl_head").append("<th>"+subheads[ind][x]+"</th>");
        tbl_str += "<th>"+subheads[ind][x]+"</th>";
      }
      // $("#ip_tbl_head").append("</tr>");
      tbl_str += "</tr>";
      $("#ip_tbl_head").html(tbl_str);
  }
</script>


<script>

  let window_height = $(window). height();
  let window_width = $(window). width();
  let ip_type_no, rows, table_order;
  $("#table_box").css("height", window_height - (window_height*.15));
  $("#header").css("width", window_width);
  // console.log("hieghit - " + );
  
  function displayRowsOfIpToTable(rows_of_ip, val){
    let search_word = $("#search_chars_bar").val();
    let page_current_num = (val!=undefined)?parseInt($("#current_page").text())+val:$("#current_page").text();
    $("#current_page").text((page_current_num<=parseInt($("#page_total").text()) && page_current_num>0)?page_current_num:$("#current_page").text());
    let page_rows = parseInt($("#page_rows_cnt").val()); //number of rows for each page (limit 0, rows)
    let start_row = (parseInt($("#current_page").text())-1) * page_rows; //which row will start (limit start, rows)
    // console.log(rows_of_ip + "; start_row + " + start_row + "start_row+page_rows" + (start_row+page_rows));
    let end_row = start_row+page_rows<rows_of_ip.length?start_row+page_rows:rows_of_ip.length; // to precise end rows

    $("#page_total").text(Math.ceil(rows_of_ip.length/page_rows));// for pagination
    $("#ip_tbl_body").html("");
    for(x=start_row; x<end_row; x++){
        // console.log(JSON.stringify(rows_of_ip[x]) + " - success");
        let rx = new RegExp(search_word, "i");
        // let result = text.match(rx);
        let doc_code = rows_of_ip[x].doc_code.match(rx)!=null&&search_word!=''?"<mark>"+rows_of_ip[x].doc_code+"</mark>":rows_of_ip[x].doc_code;
        let date_filed = rows_of_ip[x].date_filed.match(rx)!=null&&search_word!=''?"<mark>"+rows_of_ip[x].date_filed+"</mark>":rows_of_ip[x].date_filed;
        let name = rows_of_ip[x].name.match(rx)!=null&&search_word!=''?"<mark>"+rows_of_ip[x].name+"</mark>":rows_of_ip[x].name;
        let reg_no = rows_of_ip[x].reg_no.match(rx)!=null&&search_word!=''?"<mark>"+rows_of_ip[x].reg_no+"</mark>":rows_of_ip[x].reg_no;
        let author_r_inventor = rows_of_ip[x].author_r_inventor.match(rx)!=null&&search_word!=''?"<mark>"+rows_of_ip[x].author_r_inventor+"</mark>":rows_of_ip[x].author_r_inventor;
        let temp_status = rows_of_ip[x].status.split('&').join("<br>");
        let status = temp_status.match(rx)!=null&&search_word!=''?"<mark>"+temp_status+"</mark>":temp_status;
        let temp_date_approved = rows_of_ip[x].date_approved==null?"null":rows_of_ip[x].date_approved;
        let date_approved = temp_date_approved.match(rx)!=null&&search_word!=''?"<mark>"+temp_date_approved +"</mark>": temp_date_approved;
        let project_title = rows_of_ip[x].project_title.match(rx)!=null&&search_word!=''?"<mark>"+rows_of_ip[x].project_title+"</mark>":rows_of_ip[x].project_title;
        // let temp_duration = rows_of_ip[x].duration.toString().replaceAll('&', ' to ').replaceAll('^', '<br>');
        let temp_duration = rows_of_ip[x].duration.toString().split('&').join(" - ").split('^').join("<br>");
        let duration = temp_duration.match(rx)!=null&&search_word!=''?"<mark>"+temp_duration+"</mark>":temp_duration;
        let cost_split = rows_of_ip[x].project_cost.split('^');
        let new_project_cost = "";
        cost_split.forEach((element, index) => {
              let cost_n_comment = element.split('&');
              cost_n_comment[0] = formatter.format(parseInt(cost_n_comment[0]));
              new_project_cost +=  (cost_n_comment.length > 1)?cost_n_comment[0] + " - " + cost_n_comment[1]: cost_n_comment[0] ;
        });
        let project_cost = new_project_cost.match(rx)!=null&&search_word!=''?"<mark>"+new_project_cost+"</mark>":new_project_cost;
        project_cost = project_cost.split('^').join("<br>").split('&').join(" - ");
        let praise_award = rows_of_ip[x].praise_award.match(rx)!=null&&search_word!=''?"<mark>"+rows_of_ip[x].praise_award+"</mark>":rows_of_ip[x].praise_award;
        let funding_source = rows_of_ip[x].funding_source.match(rx)!=null&&search_word!=''?"<mark>"+rows_of_ip[x].funding_source+"</mark>":rows_of_ip[x].funding_source;
        funding_source = funding_source.split('^').join("<br>");
        let nast_award = rows_of_ip[x].nast_award.match(rx)!=null&&search_word!=''?"<mark>"+rows_of_ip[x].nast_award+"</mark>":rows_of_ip[x].nast_award;
        
        //for forfeited ips
        if(status.toLowerCase() == "forfeited"){
          date_filed = "Forfeited";
          praise_award = "Forfeited";
          nast_award = "Forfeited";
        }

          $("tbody").append("<tr id='tr_"+x+"'>");
            if(ip_type_no == 1 || ip_type_no == 2){//if Patent/UM
              let date_expired =rows_of_ip[x].date_filed.substring(0,4);
                if(ip_type_no == 1)
                  date_expired = parseInt(date_expired)+20 + rows_of_ip[x].date_filed.substring(4); 
                else
                  date_expired = parseInt(date_expired)+7 + rows_of_ip[x].date_filed.substring(4); 
              $("#tr_"+x).append(
                "<td>"+(x+1)+"</td>" + 
                "<td>"+doc_code+"</td>" + 
                "<td>"+date_filed+"</td>" + 
                "<td>"+name+"</td>" + 
                "<td>"+reg_no+"</td>" + 
                "<td>"+author_r_inventor+"</td>" + 
                "<td>"+status+"</td>" +
                "<td>Title as Granted</td>" +
                "<td>"+date_approved+"</td>" +
                "<td>"+date_expired+"</td>" + 
                "<td>Pending</td>"+
                "<td>"+project_title+"</td>"+
                "<td>"+duration+"</td>"+
                "<td>"+project_cost+"</td>"+
                "<td>"+funding_source+"</td>"+
                "<td>"+praise_award+"</td>"+
                "<td>"+nast_award+"</td>");
            }else if(ip_type_no == 3){//if trademark
                      let d = new Date(rows_of_ip[x].date_approved.replaceAll("\-\g", "/"));
                      console.log(d.toLocaleDateString());
                      d.setMonth(d.getMonth() - 6);
                      d.setFullYear(d.getFullYear() + 10);
                      // console.log(d.toLocaleDateString());
                      $("#tr_"+x).append(
                        "<td>"+(x+1)+"</td>"+
                        "<td>"+doc_code+"</td>"+
                        "<td>"+date_filed+"</td>"+
                        "<td>"+name+"</td>"+
                        "<td>"+reg_no+"</td>"+
                        "<td>"+author_r_inventor+"</td>"+
                        "<td>"+status+"</td>"+
                        "<td>"+date_approved+"</td>"+
                        "<td>"+d.toLocaleDateString()+"</td>"+
                        "<td>Certificate</td>"+
                        "<td>"+project_title+"</td>"+
                        "<td>"+duration+"</td>"+
                        "<td>"+project_cost+"</td>"+
                        "<td>"+funding_source+"</td>"+
                        // "<td>"+income_gross+"</td>"+
                        "<td>"+praise_award+"</td>"+
                        "<td>"+nast_award+"</td>"
                      );
            }else if(ip_type_no == 4){//if copyright
                    $("#tr_"+x).append(
                      "<td>"+(x+1)+"</td>"+
                      "<td>"+doc_code+"</td>"+
                      "<td>"+date_filed+"</td>"+
                      "<td>"+name+"</td>"+
                      "<td>"+reg_no+"</td>"+
                      "<td>"+author_r_inventor+"</td>"+
                      "<td>"+status+"</td>"+
                      "<td>"+date_approved+"</td>"+
                      "<td>Pending</td>"+
                      "<td>Pending</td>"+
                      "<td>"+project_title+"</td>"+
                      "<td>"+duration+"</td>"+
                      "<td>"+project_cost+"</td>"+
                      "<td>"+funding_source+"</td>"+
                      // "<td>"+income_gross+"</td>"+
                      "<td>"+nast_award+"</td>"+
                      "<td>"+praise_award+"</td>"
                    );
            }else  if(ip_type_no == -1){
                    $("#tr_"+x).append(
                      "<td><i class='fas fa-eye m-2' onclick='viewIP("+JSON.stringify(rows_of_ip[x])+")'></i><i class='fas fa-edit m-2' onclick='editIP("+JSON.stringify(rows_of_ip[x])+")'></i></td>"+
                      "<td>"+name+"</td>"+
                      "<td>"+date_filed+"</td>"+
                      "<td>"+reg_no+"</td>"+
                      "<td>"+date_approved+"</td>"+
                      "<td>"+status+"</td>"+
                      "<td>"+rows_of_ip[x].date_3rd_dou+"</td>"+
                      "<td>"+rows_of_ip[x].status_3rd_dou+"</td>"+
                      "<td>"+rows_of_ip[x].regno_3rd_dou+"</td>"+
                      "<td>"+rows_of_ip[x].date_5th_dou+"</td>"+
                      "<td>"+rows_of_ip[x].status_5th_dou+"</td>"+
                      "<td>"+rows_of_ip[x].regno_5th_dou+"</td>"+
                      "<td>"+rows_of_ip[x].status_renewal + "</td>"
                      // "<td>"+rows_of_ip[x].goods_n_services+"</td>"+
                      // "<td>"+rows_of_ip[x].first_use+"</td>"+
                      // "<td>"+rows_of_ip[x].outlet+"</td>"+
                      // "<td>"+rows_of_ip[x].outlet_address+"</td>"+
                      // "<td>"+rows_of_ip[x].pic_n_lbl+"</td>"
                    );
            }else{
                    $("#tr_"+x).append(
                      "<td>"+(x+1)+"</td>"+
                      "<td>"+doc_code+"</td>"+
                      "<td>"+date_filed+"</td>"+
                      "<td>"+name+"</td>"+
                      "<td>"+reg_no+"</td>"+
                      "<td>"+author_r_inventor+"</td>"+
                      "<td>"+status+"</td>"+
                      "<td>"+date_approved+"</td>"+
                      "<td>Pending</td>"+
                      "<td>Pending</td>"+
                      "<td>"+project_title+"</td>"+
                      "<td>"+duration+"</td>"+
                      "<td>"+project_cost+"</td>"+
                      "<td>"+funding_source+"</td>"+
                      // "<td>"+income_gross+"</td>"+
                      "<td>"+nast_award+"</td>"+
                      "<td>"+praise_award+"</td>"
                    );
          }
          $("#tbody").append("</tr>");
    }
  }

  $("#tbl_search_sorter").change("Hi Sjay", function(e, json, order){ 
        // alert(e.data + " - show - " + order);
        // console.log(this.value + JSON.stringify(rows));
        // alert(this.value);
        let asc;
        order==undefined?asc = true:asc=order;
        //sort algorithm
        for(x=0; x<rows.length; x++){
            for(y=x+1; y<rows.length; y++){
                if(rows[x][this.value] > rows[y][this.value] && asc == true){ // for asc
                    let temp = rows[y];
                    rows[y]= rows[x];
                    rows[x] = temp;
                } else if(rows[x][this.value] < rows[y][this.value] && asc == false){ // for desc
                    let temp = rows[y];
                    rows[y]= rows[x];
                    rows[x] = temp;
                }
            }
            // rows[x].sort(function(a, b){return a[this.value] - b[this.value]});
        }
          displayRowsOfIpToTable(rows);
  });

  $("#search_chars_bar").on('keyup', function (e) {
    console.log("Came from search bar");
      let search_word = this.value;
      $('.ip_trends_box_contents').eq(ip_type_no).trigger('click',[{"search_word":search_word},])
  });
  
  $(".ip_trends_box_contents").click(function(e, json, val){
    // console.log("Came from IP-type click - " + (this.value==3));
      let ip_type = ["Patent", "Utility Model", "Trademark", "Copyright"];
      ip_type_no = parseInt(this.value);
        // json.search_word = json!=undefined?json.search_word:"";
        // search_word  = json==undefined?"":json.search_word;
        search_word = $("#search_chars_bar").val();
          // console.log(search_word + " - search_word" );
        
    //fro TM DAU UI function
    if($(this).prop('id') == "btn_dau"){
        $("#btn_dau").val($("#btn_dau").val() == -1?3:-1);
        $("#btn_dau").text($("#btn_dau").val() == 3?"Back to Trademark table":"Go to Trademark Declaration of Use");
       
      }else if(ip_type_no == 3 ){
        $("#btn_dau").show();
        $("#btn_dau").text("Go to Trademark Declaration of Use");
        console.log('he');
      }else{
        $("#btn_dau").hide();
      }

    //change ui design once clicked
    $( ".ip_trends_box_contents" ).each(function( index ) {
            // console.log( index + ": " + this.value);
            $(this).prop('class', 'ip_trends_box_contents');
            if(this.value == ip_type_no){
                $(this).addClass("ip_trends_box_selected");
            }
            
    });

      // for pagination variables
      let page_current_num = (val!=undefined)?parseInt($("#current_page").text())+val:$("#current_page").text();
      $("#current_page").text((page_current_num<=parseInt($("#page_total").text()) && page_current_num>0)?page_current_num:$("#current_page").text());
      let page_rows = parseInt($("#page_rows_cnt").val()); //number of rows for each page (limit 0, rows)
      let start_row = (parseInt($("#current_page").text())-1) * page_rows; //which row will start (limit start, rows)


    //connects with the db and specify the type of ip list to fetch
      $.ajax({
              url : "ips/search_iptype",
              method:"POST",
              data:  {'ip_type':ip_type_no,
                      'start_row':start_row,
                      // 'page_rows':page_rows,
                      'search_word':search_word
                    },
              success: function (data) {
                  rows = JSON.parse(data);
                  // console.log(rows + " - success");
                  // for table header of IP
                  let ind = (ip_type_no == -1)?5:ip_type_no;
                  
                  setIpTableHeader(ind);
                  $('#tbl_search_sorter').trigger('change', [{}, true]);
                  //for table body of Ip
                 
                  // console.log($("#ip_tbl_body").html());
                  
              },
              error: function (data, textStatus, errorThrown) {
                  console.log(JSON.stringify(data) + "error");
              }
      });

  });

  function viewIP(ip_data){
    console.log(ip_data);
    $("#btn_open_viewip").trigger('click', [{},'view']);
    fillIpData(ip_data);
  }

  function editIP(ip_data){
    console.log(ip_data);
    $("#btn_open_viewip").trigger('click', [{},'edit']);
    fillIpData(ip_data);
  }

</script>



<script>
    
  getIpTypesCounts(); 
  function getIpTypesCounts(){
      let ids = ["all_count", "patent_count", "um_count", "tm_count", "cr_count"];
      $.ajax({
            url : "home/iptrends",
            method:"POST",
          //   data:  'search_word=' +search_word,
            success: function (data) {
                let counts = JSON.parse(data);
                console.log(data+ " - success");
                counts.forEach((element, index) => {
                    $("#"+ids[index]).text(element);
                });
            },
            error: function (data, textStatus, errorThrown) {
                console.log(JSON.stringify(data) + "error");
            }
        });
  }
  getVarFromUrlAndTriggerTrendBox(0);
  getVarFromUrlAndTriggerTrendBox({{ request()->iptype }});
  function getVarFromUrlAndTriggerTrendBox(iptype){
    // alert(iptype);
    $(".ip_trends_box_contents").eq(iptype).trigger('click', [{'search_word':""}, ]);
  } 
</script>

<script>
  // Create our number formatter.
var formatter = new Intl.NumberFormat('en-US', {
  style: 'currency',
  currency: 'PHP',

  // These options are needed to round to whole numbers if that's what you want.
  //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
  //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
});


</script>