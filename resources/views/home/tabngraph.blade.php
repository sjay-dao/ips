
<style>
    body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  }
  
  #chartdiv1, #chartdiv2, #chartdiv3, #chartdiv4, #chartdiv5,#c_chartdiv1, #c_chartdiv2{
    width: 100%;
    height: 320px;
  }
  
  </style>
  
  <section style="width:90%; margin:auto">
    <label class="col-lg-12 text-center mt-5" style="background:rgb(187, 217, 252)">
      <h4 class="p-1"><b>Total Filed and Approved Ips per Year (Tabular Form)</b></h4>
    </label>
    <div style="width:90%; box-shadow:1px 1px 5px #999; overflow-x:auto; margin:auto">
      
      <table id="tbl_f-n-a" class="table table-striped" style="width:100%; ">
        <thead id="fna_head">
          <tr id= "row_head">
            <th style="position:sticky; left:0; background:#FFF">
              <div class='w-100 m-0' style='text-align:center; border-bottom:1px solid black'>
                <div  style='border:px solid black; padding:20px'>Types</div>
                  
              </div>
            </th>
          </tr>
        </thead>
        <tbody id="fna_body">
            <tr id="row_patent">
              <td class='m-0 p-0' style="position:sticky; left:0;background:#FFF">
                <div class="w-100" style=' border-right:1px solid #999; position:sticky; left:0'>
                    Patent
                </div>
              </td>
            </tr>
            <tr id="row_um">
              <td class='m-0 p-0' style="position:sticky; left:0;background:#FFF">
                <div class="w-100" style=' border-right:1px solid #999'>
                    Utility Model
                </div>
              </td>
            </tr>
            <tr id="row_tm">
              <td class='m-0 p-0' style="position:sticky; left:0;background:#FFF">
                <div class="w-100" style='border-right:1px solid #999'>
                    Trademark
                </div>
              </td>
            </tr>
            <tr id="row_cr">
              <td class='m-0 p-0' style="position:sticky; left:0;background:#FFF">
                <div class="w-100" style='border-right:1px solid #999'>
                    Copyright
                </div>
              </td>
            </tr>
            <tr id="row_all">
              <td class='m-0 p-0' style="position:sticky; left:0;background:#FFF">
                <div class="w-100" style='display:flex; text-align:center; border-right:1px solid #999'>
                    All
                </div>
              </td>
            </tr>
        </tbody>
    </table>
    </div>
    
    <div class="row m-0 ">
      <label class="col-lg-12 text-center mt-5" style="background:rgb(187, 217, 252)"><h4 class="p-1"><b>Total Filed and Approved Ips per Year (Graphical Form)</b></h4></label>
      <div class="col-lg-6">
          <div id="chartdiv1"></div>
      </div>
      <div class="col-lg-6">
        <div id="chartdiv2"></div>
      </div>
      <div class="col-lg-6">
        <div id="chartdiv3"></div>
      </div>
      <div class="col-lg-6">
        <div id="chartdiv4"></div>
      </div>
    
      <div class="col-lg-12">
        <div id="chartdiv5"></div>
      </div>
      <label class="col-lg-12 text-center mt-5 p-1" style="background:rgb(187, 217, 252)"><h4><b>Filed Vs. Granted</b></h4></label>
      <div class="col-lg-12">
        <div id="c_chartdiv1"></div>
      </div>
      <div class="col-lg-12">
        <div id="c_chartdiv2"></div>
      </div>
    </div>
  </section>
  <script>
    ip_obj = [];
    ip_obj_clustered = []
    setTBodyRowsForFiledVsApproved();
    function setTBodyRowsForFiledVsApproved(){
    // let min_n_max = JSON.parse(getMinMaxDate());
    // console.log(JSON.parse(getMinMaxDate()));
    $.ajax({
          url : "home/filedvsapproved",
          method:"POST",
          // data:  ,
          success: function (data) {
            console.log(data);
              let fvsa_data = JSON.parse(data);
              fvsa_data.f[0] = fvsa_data.f[0].reverse();
              fvsa_data.a[0] = fvsa_data.a[0].reverse();
              fvsa_data.f[1] = fvsa_data.f[1].reverse();
              fvsa_data.a[1] = fvsa_data.a[1].reverse();
              fvsa_data.f[2] = fvsa_data.f[2].reverse();
              fvsa_data.a[2] = fvsa_data.a[2].reverse();
              fvsa_data.f[3] = fvsa_data.f[3].reverse();
              fvsa_data.a[3] = fvsa_data.a[3].reverse();
              fvsa_data.f[4] = fvsa_data.f[4].reverse();
              fvsa_data.a[4] = fvsa_data.a[4].reverse();
              
              //initialize an object to be created for graphs
              for(y=0; y<5; y++){
                ip_obj[y] = [];
              }
              for(y=0; y<2; y++){
                ip_obj_clustered[y] = [];
              }
              //table header
              let x=0;
              fvsa_data.dates.reverse().forEach(element => {
                let th_color = "background:#b3efff;";
                if(x%2==0)
                   th_color = 'background:#99d8ef;';
                style=
                console.log(element);
                //filling the table data from head to body
                $("#row_head").append(
                  "<th class='p-0 m-0'>"+
                    "<div class='w-100 m-0' style='text-align:center'>"+
                      "<div style='border:1px solid black; padding:20px; "+th_color+"'>"+element+"</div>"+
                        "<div style='border:1px solid black; height:15%; width:120px; display:flex; font-size:10px; font-weight:lighter'>"+
                          "<div style='width:50%'>"+
                            "Filed"+
                          "</div>"+
                          "<div style='width:50%'>"+
                            "Approved"+
                          "</div>"+
                        "</div>"+
                    "</div>"+
                  "</th>"
                );
                $("#row_patent").append(
                  "<td class='m-0 p-0'>"+
                    "<div style='display:flex; text-align:center'>"+
                      "<div style='width:50%; border-right:1px solid #999'>"+fvsa_data.f[0][x]+"</div>"+
                      "<div style='width:50%; border-right:1px solid black'>"+fvsa_data.a[0][x]+"</div>"+
                    "</div>"+
                  "</td>"
                );
                $("#row_um").append(
                  "<td class='m-0 p-0'>"+
                    "<div style='display:flex; text-align:center'>"+
                      "<div style='width:50%; border-right:1px solid #999'>"+fvsa_data.f[1][x]+"</div>"+
                      "<div style='width:50%; border-right:1px solid black'>"+fvsa_data.a[1][x]+"</div>"+
                    "</div>"+
                  "</td>"
                );
                $("#row_tm").append(
                  "<td class='m-0 p-0'>"+
                    "<div style='display:flex; text-align:center'>"+
                      "<div style='width:50%; border-right:1px solid #999'>"+fvsa_data.f[2][x]+"</div>"+
                      "<div style='width:50%; border-right:1px solid black'>"+fvsa_data.a[2][x]+"</div>"+
                    "</div>"+
                  "</td>"
                );
                $("#row_cr").append(
                  "<td class='m-0 p-0'>"+
                    "<div style='display:flex; text-align:center'>"+
                      "<div style='width:50%; border-right:1px solid #999'>"+fvsa_data.f[3][x]+"</div>"+
                      "<div style='width:50%; border-right:1px solid black'>"+fvsa_data.a[3][x]+"</div>"+
                    "</div>"+
                  "</td>"
                )
                $("#row_all").append(
                  "<td class='m-0 p-0'>"+
                    "<div style='display:flex; text-align:center'>"+
                      "<div style='width:50%; border-right:1px solid #999'>"+fvsa_data.f[4][x]+"</div>"+
                      "<div style='width:50%; border-right:1px solid black'>"+fvsa_data.a[4][x]+"</div>"+
                    "</div>"+
                  "</td>"
                )
  
  
                //creating an object and filling data for graphs (Filed Vs Granted in Individual IP)
                ip_obj[0][x] = {"year":element.toString(), "Filed":fvsa_data.f[0][x], "Approved":fvsa_data.a[0][x]};
                ip_obj[1][x] = {"year":element.toString(), "Filed":fvsa_data.f[1][x], "Approved":fvsa_data.a[1][x]};
                ip_obj[2][x] = {"year":element.toString(), "Filed":fvsa_data.f[2][x], "Approved":fvsa_data.a[2][x]};
                ip_obj[3][x] = {"year":element.toString(), "Filed":fvsa_data.f[3][x], "Approved":fvsa_data.a[3][x]};
                ip_obj[4][x] = {"year":element.toString(), "Filed":fvsa_data.f[4][x], "Approved":fvsa_data.a[4][x]};
                
                //creating an object and filling data for graphs (Filed Vs Granted in cluster)
                ip_obj_clustered[0][x] = {"year":element.toString(), "Patent":fvsa_data.f[0][x], "UM":fvsa_data.f[1][x],"Trademark":fvsa_data.f[2][x], "Copyright":fvsa_data.f[3][x]};
                ip_obj_clustered[1][x] = {"year":element.toString(), "Patent":fvsa_data.a[0][x], "UM":fvsa_data.a[1][x], "Trademark":fvsa_data.a[2][x], "Copyright":fvsa_data.a[3][x]};
  
                x++;
              });
              console.log(ip_obj[0] + " - obj in");
              //setting the Filed vs Grant Graphs
              setFiledVsGrantGraphs();
              setFiledVsGrantGraphsClustered();
          },
          error: function (data, textStatus, errorThrown) {
              console.log(JSON.stringify(data) + "error");
          }
      });
  }
  
  </script>
  
  
    <script src="{{asset('assets/js/amchart-3d-stacked-col/core.js')}}"></script>
    <script src="{{asset('assets/js/amchart-3d-stacked-col/chart.js')}}"></script>
    <script src="{{asset('assets/js/amchart-3d-stacked-col/animated.js')}}"></script>
  
  
    <script>
        /**
   * ---------------------------------------
   * This demo was created using amCharts 4.
   * 
   * For more information visit:
   * https://www.amcharts.com/
   * 
   * Documentation is available at:
   * https://www.amcharts.com/docs/v4/
   * ---------------------------------------
   */
   console.log(JSON.stringify(ip_obj[0])+ " - success");
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end
  let chart = [];
  let ip_title = ["Patent", "Utility Model",  "Trademark", "Copyright", "All Intellectual Property"];
  let data = [];
  
  
  function setFiledVsGrantGraphs(){
  
      for(x=0; x<ip_title.length; x++){
      // for(x=0; x<1; x++){
        // Create chart instance
        chart[x] = am4core.create("chartdiv"+(x+1), am4charts.XYChart3D);
        // Add data
        chart[x].data = ip_obj[x];
        
      // Create axes
      var categoryAxis = chart[x].xAxes.push(new am4charts.CategoryAxis());
      categoryAxis.dataFields.category = "year";
      categoryAxis.renderer.grid.template.location = 0;
      categoryAxis.renderer.minGridDistance = 50;
  
      var valueAxis = chart[x].yAxes.push(new am4charts.ValueAxis());
      valueAxis.title.text = "Numbers of IP";
      valueAxis.max = "1%";
      valueAxis.strictMinMax = true; 
      valueAxis.renderer.labels.template.adapter.add("text", function(text) {
        return text + "%";
      });
  
      // Create series
      var series = chart[x].series.push(new am4charts.ColumnSeries3D());
      series.dataFields.valueY = "Filed";
      series.dataFields.categoryX = "year";
      series.name = "Filed";
      series.clustered = true;
      series.columns.template.tooltipText = "Total IP Filed {category} {year}: [bold]{valueY}[/]";
      series.columns.template.fillOpacity = 0.9;
  
      // var series1 = chart[x].series.push(new am4charts.ColumnSeries3D());
      // series1.dataFields.valueY = "Keme";
      // series1.dataFields.categoryX = "year";
      // series1.name = "Keme";
      // series1.clustered = true;
      // series1.columns.template.tooltipText = "Total IP Keme {category} {year}: [bold]{valueY}[/]";
  
      var series2 = chart[x].series.push(new am4charts.ColumnSeries3D());
      series2.dataFields.valueY = "Approved";
      series2.dataFields.categoryX = "year";
      series2.name = "Approved";
      series2.clustered = true;
      series2.columns.template.tooltipText = "Total IP Approved {category} {year}: [bold]{valueY}[/]";
  
      // Add scrollbar
      var scrollbar = new am4charts.XYChartScrollbar();
      scrollbar.series.push(series)
  
      chart[x].scrollbarX = scrollbar;
  
      var title = chart[x].titles.create();
      title.text = ip_title[x];
      title.fontSize = 15;
      title.fontWeight = "bold";
      title.marginBottom = 10;
      }
  }
  
  // for clustered type/////////////////////////////////////////////////////////////////////
  let clustered_title = ["Filed", "Granted"];
  let c_data = []; let c_chart = [];
  c_data[0]  = [{
        "year": "2022",
        "Patent": 3,
        "UM": 4,
        "Trademark": 4,
        "Copyright": 4
    },{
        "year": "2021",
        "Patent": 3,
        "UM": 4,
        "Trademark": 4,
        "Copyright": 4
    },{
        "year": "2020",
        "Patent": 3,
        "UM": 4,
        "Trademark": 4,
        "Copyright": 4
    },{
        "year": "1999",
        "Patent": 3,
        "UM": 4,
        "Trademark": 4,
        "Copyright": 4
    }];
  
    c_data[1]  = [{
        "year": "2022",
        "Patent": 3,
        "UM": 4,
        "Trademark": 4,
        "Copyright": 4
    },{
        "year": "2021",
        "Patent": 3,
        "UM": 4,
        "Trademark": 4,
        "Copyright": 4
    },{
        "year": "2020",
        "Patent": 3,
        "UM": 4,
        "Trademark": 4,
        "Copyright": 4
    },{
        "year": "1999",
        "Patent": 3,
        "UM": 4,
        "Trademark": 4,
        "Copyright": 4
    }];
  
  function setFiledVsGrantGraphsClustered(){
  
      for(x=0; x<clustered_title.length; x++){
      c_chart[x] = am4core.create("c_chartdiv"+(x+1), am4charts.XYChart3D);
        // Add data
        c_chart[x].data = ip_obj_clustered[x];
  
        
      // Create axes
      var categoryAxis = c_chart[x].xAxes.push(new am4charts.CategoryAxis());
      categoryAxis.dataFields.category = "year";
      categoryAxis.renderer.grid.template.location = 0;
      categoryAxis.renderer.minGridDistance = 50;
  
      var valueAxis = c_chart[x].yAxes.push(new am4charts.ValueAxis());
      valueAxis.title.text = "Numbers of IP";
      valueAxis.max = "1%";
      valueAxis.strictMinMax = true; 
      valueAxis.renderer.labels.template.adapter.add("text", function(text) {
        return text + "%";
      });
  
      // Create series
      var series = c_chart[x].series.push(new am4charts.ColumnSeries3D());
      series.dataFields.valueY = "Patent";
      series.dataFields.categoryX = "year";
      series.name = "Patents";
      series.clustered = true;
      series.columns.template.tooltipText = "Total {name} Filed {category} {year}: [bold]{valueY}[/]";
      series.columns.template.fillOpacity = 0.9;
  
      var series1 = c_chart[x].series.push(new am4charts.ColumnSeries3D());
      series1.dataFields.valueY = "UM";
      series1.dataFields.categoryX = "year";
      series1.name = "Utility Models";
      series1.clustered = true;
      series1.columns.template.tooltipText = "Total {name} Filed {category} {year}: [bold]{valueY}[/]";
  
      var series2 = c_chart[x].series.push(new am4charts.ColumnSeries3D());
      series2.dataFields.valueY = "Trademark";
      series2.dataFields.categoryX = "year";
      series2.name = "Trademarks";
      series2.clustered = true;
      series2.columns.template.tooltipText = "Total {name} Filed {category} {year}: [bold]{valueY}[/]";
  
      var series3 = c_chart[x].series.push(new am4charts.ColumnSeries3D());
      series3.dataFields.valueY = "Copyright";
      series3.dataFields.categoryX = "year";
      series3.name = "Copyrights";
      series3.clustered = true;
      series3.columns.template.tooltipText = "Total {name} Filed {category} {year}: [bold]{valueY}[/]";
  
      // Add scrollbar
      var scrollbar = new am4charts.XYChartScrollbar();
      scrollbar.series.push(series)
  
      c_chart[x].scrollbarX = scrollbar;
  
      var title = c_chart[x].titles.create();
      title.text = clustered_title[x];
      title.fontSize = 15;
      title.fontWeight = "bold";
      title.marginBottom = 10;
      }
  }
  </script>
  