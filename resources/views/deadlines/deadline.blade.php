@section('title', 'IP - List of deadline')
<style>
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
  background:#a2d7ff;
  font-size:11px;
  /* text-align: center */
}
table thead{
  position:sticky;
  top:0px;
  text-align:center;
}

table td{
  font-size:10px;
}


.deadline_year_box{
    min-height:100px; 
    width:100%; 
    background:#e8f3ff;
    margin-top:25px;
    margin-bottom:25px;
    font-size:16px; 
    text-align:center; font-weight:bold
}

#dtBasicExample tbody tr:hover {
  background-color: rgb(252, 233, 112);
  cursor: pointer;
}
 
.year_label{
    width:100%; background:rgb(118, 183, 215);
}

</style>

<body>
    <div style="width:100%; padding:5px; font-size:19px; background:#2a6fa1; margin-top:25px; text-align:center; font-weight:bold; color:white">List of Expiring IP </div>
    <div class="deadline_year_box" > 
    </div>

</body>

@include('footer')


<script>
    let tbl_header = ["IP Type", "Technology Name", "Date Filed", "Date Approved", "Expiration Date", "Expiration Status", "Expiration Details"];
    let ip_type = ["Patent", "Utility Model", "Trademark", "Copyright"];
    $("#deadline_year_box").html("");

    

    getListofDeadline();
    function getListofDeadline(){
        let c_year =  new Date().getFullYear();
        $.ajax({
              url : "deadline/getlist",
              method:"POST",
            //   data:  '',
              success: function (data) {
                   let rows = JSON.parse(data);
                    console.log(JSON.stringify(rows) +" - success");
                    let this_year_has_content = true;
                    for(x=0; x<20; x++){
                         // for year label background color
                        let ybc = "";
                        if(x%2==0)
                            ybc = "style='background:#fedf80'";
                        $(".deadline_year_box").append(
                                "<div class='year_label' "+ybc+">"+(c_year+x)+"</div>"+
                            "<section class='overflow-auto' id='table_box' style='width:98%; background:#ffffff; margin:auto; padding:0; box-shadow:1px 1px 5px #0005'>"+
                                "<table id='dtBasicExample_"+x+"' class='table table-striped table-bordered table-sm' cellspacing='0' style='background:rgb(243, 250, 255)'>"+
                                "<thead id='ip_tbl_head_"+x+"'>"+
                                    
                                "</thead>"+
                                "<tbody id='ip_tbl_body"+x+"'>"+
                                
                                "</tbody >"+
                                    
                                "</table>"+
                            "</section>"
                            );
                        let no_content = true;
                        jQuery.each( rows, function( i, val ) { 
                            console.log(JSON.stringify(val.year) + " - " + i);
                            console.log("if " + c_year + " == " +  parseInt(val.year) + " = " + (c_year == parseInt(val.year)));
                            if((c_year+x) == parseInt(val.year)){
                                //creation of table header is done only once
                                if(no_content){
                                    for(y=0; y<tbl_header.length; y++){
                                        $("#ip_tbl_head_"+x).append("<th>"+ tbl_header[y]+"</th>");
                                    }
                                    no_content = false;
                                }

                                $("#ip_tbl_body"+x).append("<tr id='ip_tbl_row_"+x+i+"'></tr>");
                                $("#ip_tbl_row_"+x+i).append("<td>"+ ip_type[val.type_id-1]+"</td>");
                                $("#ip_tbl_row_"+x+i).append("<td>"+ val.name+"</td>");
                                $("#ip_tbl_row_"+x+i).append("<td>"+ val.date_filed+"</td>");
                                $("#ip_tbl_row_"+x+i).append("<td>"+ val.date_approved+"</td>");
                                $("#ip_tbl_row_"+x+i).append("<td>"+val.exp_date+"</td>");
                                $("#ip_tbl_row_"+x+i).append("<td>"+"No comment as of now"+"</td>");
                                $("#ip_tbl_row_"+x+i).append("<td>"+val.exp_detail+"</td>");
                            }
                                
                        });
                        console.log("___________---------------___________");
                        if(no_content)
                            $("#dtBasicExample_"+x).html("No Expiring IP");
                            
                       
                    }
              },
              error: function (data, textStatus, errorThrown) {
                  console.log(JSON.stringify(data.responseText) + "error" + textStatus + " - " + errorThrown);
              }
        });
    }
</script>