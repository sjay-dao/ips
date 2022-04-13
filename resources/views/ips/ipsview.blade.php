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
  @media only screen and (max-width: 500px) {
        .ip_trends_box_contents{ 
            height:128px; margin:5px; width:150px; 
        }
    }
</style>


<div id="ip_trends_box" style="">
      <button type="button" class="ip_trends_box_contents"   value="0" style="background:rgb(99, 126, 143); position:relative" >
        <label style="position:absolute; z-index:100; ">
            <h2 id="all_count" style=" font-weight:bolder; font-family:Arial Black">1</h2><br>
            <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">All</h6>
        </label>  
        <i class="fa fa-border-all" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
      </button>
      <button type="button" class="ip_trends_box_contents"   value="1" style="background:rgb(37, 97, 162); position:relative" >
          <label style="position:absolute; z-index:100; ">
              <h2 id="patent_count" style=" font-weight:bolder; font-family:Arial Black">1</h2><br>
              <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Patent</h6>
          </label>  
          <i class="fa fa-lightbulb" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
      </button>
      <button type="button" class="ip_trends_box_contents"  value="2" style="background:rgb(24, 64, 108)">
          <label for="">
              <h2 id="um_count" style=" font-weight:bolder; font-family:Arial Black">3</h2><br>
              <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Utility Model</h6>
          </label>  
          <i class="fa fa-wrench" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
      </button>
      <button type="button" class="ip_trends_box_contents"  value="3" style="background:rgb(89, 103, 119)">
          <label for="">
              <h2 id="tm_count" style=" font-weight:bolder; font-family:Arial Black">2</h2><br>
              <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Trademark</h6>
          </label>
          <i class="fa fa-university" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
      </button>
      <button type="button" class="ip_trends_box_contents"  value="4" style="background:rgb(39, 58, 74)">
          <label for="">
              <h2 id="cr_count" style=" font-weight:bolder; font-family:Arial Black">4</h2><br>
              <h6 style="opacity:0.4; font-weight:bolder; font-family:Arial Black">Copyright</h6>
          </label>  
          <i class="fa fa-copyright" style="position:absolute;;   font-size:80px; z-index:3; opacity:0.1"></i>
      </button>
</div>

    <div  class="row mt-1" style="width:98%; background:#98d3ff; margin:auto; display:flex; flex-wrap: wrap; align-items: center;">
        <div class="col-lg-6 ">
            <div class="row">
              <div class="col-sm-3">
                <span> Search </span> 
                <i class="fas fa-search"></i>   
              </div>
             
              <input class="col-lg-9 border-0" type="text" id="search_chars_bar" style="border-radius:.5rem;"/>
            </div>
         
        </div>
        <div class="col-lg-6">
          {{-- <button class="ip-type"  value="0">ALL</button>
          <button class="ip-type"  value="1">PATENT</button>
          <button class="ip-type"  value = "3">TRADEMARK</button> --}}
          <button class="ip_trends_box_contents"  value = "-1">TM Declaration of Use</button>
          {{-- <button class="ip-type"  value = "2">UTILIY MODEL</button>
          <button class="ip-type"  value = "4">COPYRIGHT</button> --}}
          <button type="button" class="btn-sm btn-success btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg" >Add IP +</button>
        </div>
    </div>

    <section class="overflow-auto" id="table_box" style="width:98%; background:#Ffeadf; margin:auto; padding:0; box-shadow:1px 1px 5px #0005">
      <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" style="background:rgb(214, 244, 255)">
        <thead id="ip_tbl_head">
          {{-- <th>Document Code</th> <th>Name of Technology</th> <th>Date Filed</th> <th>Registration No.</th>  <th>Authors/ Inventors</th> <th>Status</th> 
          <th>Date Approved</th> <th>Project Title</th> <th>Duration</th> <th>Project Cost</th> <th>Funding Source</th> <th>Income Gross</th> <th>Praise Award</th> <th>NAST Award</th> --}}
        </thead>
        <tbody id="ip_tbl_body">
          @foreach ($vars as $var)
          <tr>

              {{-- <td>{{$var->type_id}}</td> --}}
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
              {{-- <td>{{$var->nast_award}}</td> --}}
          </tr>
                  
          @endforeach

        </tbody >
        {{-- <tfoot>
          <tr>
            <th>Name
            </th>
            <th>Position
            </th>
            <th>Office
            </th>
            <th>Age
            </th>
            <th>Start date
            </th>
            <th>Salary
            </th>
          </tr>
        </tfoot> --}}
      </table>
    </section>

    
<script>
  
  var table_heads = [
    ["Document Code", "Name of Technology", "Date Filed", "Registration No.",  "Authors/ Inventors", "Status", 
    "Date Approved", "Project Title", "Duration", "Project Cost", "Funding Source", "Income Gross", "Praise Award", "NAST Award"],
    ["Options","Name of Technology", "Registration No.","Status", "3rd Year", "5th Year", "Renewal", 
    "Used for the ff. classes of goods/services", "First Used On", "Name of Outlet", "Address", "5 Labels or Pictures"]
  ];


// $(document).ready(function () {
  setIpTableHeader(0);

  $('#dtBasicExample').DataTable({searching: false, paging: false, info: false});//remove the data table additional functions
  // $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');

  
  // })

  function setIpTableHeader(ind){
    console.log("Table header set - "+ind);
    
    $("#ip_tbl_head").html("<tr>");
    $.each(table_heads[ind], function( x, value ) {
    // console.log( x + ": " + value );
      $("#ip_tbl_head").append("<th>"+table_heads[ind][x]+"</th>");
    });
      $("#ip_tbl_head").append("</tr>");
  }

  
</script>



<script>

  let window_height = $(window). height();
  let window_width = $(window). width();
  $("#table_box").css("height", window_height - (window_height*.15));
  $("#header").css("width", window_width);
  // console.log("hieghit - " + );

  $("#search_chars_bar").on('keyup', function (e) {
    console.log("Came from search bar");
      let search_word = this.value;
      $.ajax({
              url : "ips/search_word",
              method:"POST",
              data:  'search_word=' +search_word,
              success: function (data) {
                  let rows = JSON.parse(data);
                  console.log(JSON.parse(data).length+ " - success");
                  $("#ip_tbl_body").html("");
                  for(x=0; x<rows.length; x++){
                      $("#ip_tbl_body").append("<tr>");
                          let y=0;
                          jQuery.each( rows[x], function( i, val ) {
                            let text = val.toString();
                            let rx = new RegExp(search_word, "i");
                            let result = text.match(rx);
                            console.log(result + " - " +text);
                                
                          if(y>1){
                                if(result != null && search_word != '')
                                  $("#ip_tbl_body").append("<td><mark>"+val+"</mark></td>");
                                else
                                  $("#ip_tbl_body").append("<td>"+val+"</td>");
                          }
                          y++; 
                      });
                      $("#ip_tbl_body").append("</tr>");
                  }
                  console.log($("#ip_tbl_body").html());
              },
              error: function (data, textStatus, errorThrown) {
                  console.log(data.message + "error");
              }
          });
  });
  
  $(".ip_trends_box_contents").click(function(){
    console.log("Came from IP-type click - " + this.value);
      let ip_type = ["Patent", "Utility Model", "Trademark", "Copyright"];
      ip_type_no = this.value;
      
    //change ui design once clicked
    
    $( ".ip_trends_box_contents" ).each(function( index ) {
            console.log( index + ": " + this.value);
            $(this).prop('class', 'ip_trends_box_contents');
            if(this.value == ip_type_no){
                $(this).addClass("ip_trends_box_selected");
            }
    });

    //connects with the db and specify the type of ip list to fetch
      // alert(ip_type[parseInt(this.value)-1]);
      $.ajax({
              url : "ips/search_iptype",
              method:"POST",
              data:  'ip_type=' +parseInt(this.value),
              success: function (data) {
                  let rows = JSON.parse(data);
                  console.log(rows + " - success");
                  // for table header of IP
                  let ind = (ip_type_no == -1)?1:0;
                  console.log(ip_type_no + "==" + "DAU");
                  setIpTableHeader(ind);
                  
                  //for table body of Ip
                  $("#ip_tbl_body").html("");
                  for(x=0; x<rows.length; x++){
                      $("tbody").append("<tr id='tr_"+x+"'>");
                        if(ip_type_no != -1){//if not TM_DOU
                                  $("#tr_"+x).append("<td>"+rows[x].doc_code+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].name+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].date_filed+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].reg_no+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].author_r_inventor+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].status+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].date_approved+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].project_title+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].duration+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].project_cost+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].funding_source+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].income_gross+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].praise_award+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].nast_award+"</td>");
                            
                        }else{
                                  console.log('tm_dau_turn');
                                  $("#tr_"+x).append("<td><i class='fas fa-eye m-2' onclick='viewIP("+JSON.stringify(rows[x])+")'></i><i class='fas fa-edit m-2' onclick='editIP("+JSON.stringify(rows[x])+")'></i></td>");
                                  $("#tr_"+x).append("<td>"+rows[x].name+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].reg_no+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].status+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].regno_3rd_dou + "<br>" + rows[x].status_3rd_dou+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].regno_5th_dou + "<br>" + rows[x].status_5th_dou+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].status_renewal + "</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].goods_n_services+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].first_use+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].outlet+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].outlet_address+"</td>");
                                  $("#tr_"+x).append("<td>"+rows[x].pic_n_lbl+"</td>");
                        }
                      $("#tbody").append("</tr>");
                  }
                  console.log($("#ip_tbl_body").html());
                  
              },
              error: function (data, textStatus, errorThrown) {
                  console.log(JSON.stringify(data) + "error");
              }
      });

  });

  function viewIP(ip_data){
    console.log(ip_data);
    $("#btn_open_viewip").trigger('click');
    fillIpData(ip_data);
  }

  function editIP(ip_data){
    console.log(ip_data);
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
  getVarFromUrlAndTriggerTrendBox({{ request()->iptype }});
  function getVarFromUrlAndTriggerTrendBox(iptype){
    // alert(iptype);
    $(".ip_trends_box_contents").eq(iptype).trigger('click');
  } 
</script>