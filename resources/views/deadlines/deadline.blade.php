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
h3 {
  width: 70%;
  margin: .7em auto;
  overflow: hidden;
  text-align: center;
  font-weight:300;
  color: #;
}
h3:before, h3:after {
  content: "";
  display: inline-block;
  width: 50%;
  margin: 0 .5em 0 -55%;
  vertical-align: middle;
  border-bottom: 1px solid;
}
h3:after {
  margin: 0 -55% 0 .5em;
}
span {
  display: inline-block;
  vertical-align: middle;
}
</style>

<body>
    <div style="width:90%; margin:auto">
        <h3>Filter By Year</h3>
        <div class="row form-group">
            <div class="col-lg-6" style="border:px solid black;">
                <div class="row">
                    <label class="offset-sm-6 col-sm-1" for="">From</label>
                    {{-- <input class="col-sm-7 form-control" type="date" id="year_from"/> --}}
                    <input class="offset-sm-1 col-sm-4 offset-sm-1  form-control" type="number" min="1900" max="2099" step="1" value="" id="yearfrom" />
                </div>
            </div>
            <div class="col-lg-6"  style="border:px solid black;">
                <div class="row">
                    <label class="col-sm-1 " for="">To</label>
                    <input class=" col-sm-4  form-control" type="number" min="1900" max="2099" step="1" value="2022" id="yearto" />
                </div>
            </div>
        </div>
      
    </div>
    <div id="ip_trends_box" style="">
        <button type="button" class="ip_trends_box_contents"  onclick="" value="0" style="background:rgb(99, 126, 143); position:relative" >
          <label style="position:absolute; z-index:100; ">
              <h2 id="all_count" style=" font-weight:bolder; font-family:Arial Black"></h2><br>
              <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">All</h6>
          </label>  
          <i class="fa fa-border-all" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
        </button>
        <button type="button" class="ip_trends_box_contents"   value="1" style="background:rgb(37, 97, 162); position:relative" >
            <label style="position:absolute; z-index:100; ">
                <h2 id="patent_count" style=" font-weight:bolder; font-family:Arial Black"></h2><br>
                <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Expiring Patent</h6>
            </label>  
            <i class="fa fa-lightbulb" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
        </button>
        <button type="button" class="ip_trends_box_contents"  value="2" style="background:rgb(89, 103, 119)">
            <label for="">
                <h2 id="um_count" style=" font-weight:bolder; font-family:Arial Black"></h2><br>
                <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Expiring Utility Model</h6>
            </label>  
            <i class="fa fa-wrench" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
        </button>
        <button type="button" class="ip_trends_box_contents"  value="3" style="background:rgb(24, 64, 108)">
            <label for="">
                <h2 id="tm_count" style=" font-weight:bolder; font-family:Arial Black"></h2><br>
                <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Expiring Trademark</h6>
            </label>
            <i class="fa fa-university" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
        </button>
  </div>
    <div style="width:100%; padding:5px; font-size:19px; background:#2a6fa1; margin-top:25px; text-align:center; font-weight:bold; color:white">List of Expiring IP </div>
    <div class="deadline_year_box" > 
    </div>
</body>

@include('footer')


<script>
    var tbl_header ;
    var ip_type;
    setInitials();
    function setInitials(){
        $("#yearfrom").val(new Date().getFullYear());
        $("#yearto").val(new Date().getFullYear()+20);
        tbl_header = [
                        ["No.", "Ip Type", "Title as Granted", "Application No.", "Inventors/Authors", "Status", "Date Granted", "Date of Expriration", "Details"],
                        ["No.", "Title as Granted", "Application No.", "Inventors/Authors", "Status", "Date Granted", "Date of Expriration"],
                        ["No.", "Title as Granted", "Application No.", "Inventors/Authors", "Status", "Date Granted", "Date of Expriration"],
                        ["No.", "Title", "Application No.", "Date Filed", "Date Registered", "Deadline", "Details"],
                     ];
        ip_type = ["Patent", "Utility Model", "Trademark", "Copyright"];
        $("#deadline_year_box").html("");
    }


    function getListofDeadline(ip_type_id){
        // let expiration_year_limit = {"all":20, "patent":20, "utility_model":7, "trademark":10, "0":20, "1":20, "2":7, "3":10};
        
        $(".deadline_year_box").html("");
        // let c_year =  new Date().getFullYear();
        let c_year = parseInt($("#yearfrom").val());
        let e_year = parseInt($("#yearto").val());
        let expiration_year_limit = parseInt(e_year) - parseInt(c_year);
        console.log(expiration_year_limit + "duisah dowqh ");
        // let 
        $.ajax({
              url : "deadline/getlist",
              data : {"type_id":ip_type_id,
                //    "yearfrom":c_year, 
                //    "yearto":e_year
                     },
              method:"POST",
            //   data:  '',
              success: function (data) {
                   let rows = JSON.parse(data);
                    console.log(JSON.stringify(rows) +" - success");
                    let this_year_has_content = true;
                    for(x=0; x<=expiration_year_limit; x++){ // year divider
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
                        let ip_per_year_exp_cnt = 0;
                        jQuery.each( rows, function( i, val ) { 
                            console.log(JSON.stringify(val.year) + " - " + i);
                            console.log("if " + c_year + " == " +  parseInt(val.year) + " = " + (c_year == parseInt(val.year)));
                            
                            if((c_year+x) == parseInt(val.year)){
                                //creation of table header is done only once
                                if(no_content){
                                    ip_per_year_exp_cnt = 1;
                                    for(y=0; y<tbl_header[ip_type_id].length; y++){
                                        $("#ip_tbl_head_"+x).append("<th>"+ tbl_header[ip_type_id][y]+"</th>");
                                    }
                                    no_content = false;
                                }
                                if(ip_type_id == 0){
                                    $("#ip_tbl_body"+x).append("<tr id='ip_tbl_row_"+x+i+"'></tr>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ip_per_year_exp_cnt +"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ ip_type[val.type_id-1]+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.name+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.reg_no+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.author_r_inventor+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.status.replace('&', '<br>')+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.date_approved+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+val.exp_date+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+val.exp_detail+"</td>");
                                    // $("#ip_tbl_row_"+x+i).append("<td>"+ val.date_filed+"</td>");
                                }else if(ip_type_id != 0 && ip_type_id != 3){
                                    $("#ip_tbl_body"+x).append("<tr id='ip_tbl_row_"+x+i+"'></tr>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ip_per_year_exp_cnt +"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.name+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.reg_no+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.author_r_inventor+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.status.replace('&', '<br>')+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.date_approved+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+val.exp_date+"</td>");
                                }else{
                                    $("#ip_tbl_body"+x).append("<tr id='ip_tbl_row_"+x+i+"'></tr>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ip_per_year_exp_cnt +"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.name+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.reg_no+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.date_filed+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+ val.date_approved+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+val.exp_date+"</td>");
                                    $("#ip_tbl_row_"+x+i).append("<td>"+val.exp_detail+"</td>");
                                }
                            }
                            ip_per_year_exp_cnt ++;
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



<script>

$(".ip_trends_box_contents").click(function(){
    console.log("Came from IP-type click - " + this.value);
      let ip_type = ["Patent", "Utility Model", "Trademark", "Copyright"];
      ip_type_no = parseInt(this.value);
     
    //change ui design once clicked
    $( ".ip_trends_box_contents" ).each(function( index ) {
            // console.log( index + ": " + this.value);
            $(this).prop('class', 'ip_trends_box_contents');
            if(this.value == ip_type_no){
                $(this).addClass("ip_trends_box_selected");
            }
    });

    //connects with the db and specify the type of ip list to fetch
      // alert(ip_type[parseInt(this.value)-1]);
    //   $.ajax({
    //           url : "ips/search_iptype",
    //           method:"POST",
    //           data:  'ip_type=' +parseInt(this.value),
    //           success: function (data) {
    //               let rows = JSON.parse(data);
    //               // for table header of IP
                  
    //                 if(ip_type_no != 0){ // if all IP is selected
    //                     //for table body of Ip
    //                     $("#ip_tbl_body").html("");
    //                     for(x=0; x<rows.length; x++){
    //                         $("tbody").append("<tr id='tr_"+x+"'>");
    //                             $("#ip_tbl_body"+x).append("<tr id='ip_tbl_row_"+x+i+"'></tr>");
    //                             $("#ip_tbl_row_"+x+i).append("<td>"+ ip_type[ip_type_no][val.type_id-1]+"</td>");
    //                             $("#ip_tbl_row_"+x+i).append("<td>"+ val.name+"</td>");
    //                             $("#ip_tbl_row_"+x+i).append("<td>"+ val.date_filed+"</td>");
    //                             $("#ip_tbl_row_"+x+i).append("<td>"+ val.date_approved+"</td>");
    //                             $("#ip_tbl_row_"+x+i).append("<td>"+val.exp_date+"</td>");
    //                             $("#ip_tbl_row_"+x+i).append("<td>"+"No comment as of now"+"</td>");
    //                             $("#ip_tbl_row_"+x+i).append("<td>"+val.exp_detail+"</td>");
    //                         $("#tbody").append("</tr>");
    //                     }
    //                 }
    //               // console.log($("#ip_tbl_body").html());
                  
    //           },
    //           error: function (data, textStatus, errorThrown) {
    //               console.log(JSON.stringify(data) + "error");
    //           }
    //   });
    getListofDeadline(ip_type_no);
  });


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
  getVarFromUrlAndTriggerTrendBox({{ request()->iptype }});
  function getVarFromUrlAndTriggerTrendBox(iptype){
    // alert(iptype);
    $(".ip_trends_box_contents").eq(iptype).trigger('click');
  } 
</script>