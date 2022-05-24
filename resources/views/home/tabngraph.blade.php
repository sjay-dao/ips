<style>
  /* for toggle switch */
  .switch{
    position: relative;
    display: inline-block;
    width: 120px;
    height: 34px;
  }
  
  .switch input{
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  .slider{
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgb(0, 204, 255);
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  .slider:before{
    position: absolute;
    content: "";
    height: 26px;
    width: 40px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  input:checked + .slider{
    background-color: #2196F3;
  }
  
  input:focus + .slider{
    box-shadow: 0 0 1px #2196F3;
  }
  
  input:checked + .slider:before{
    -webkit-transform: translateX(71px);
    -ms-transform: translateX(71px);
    transform: translateX(71px);
  }
  
  /* Rounded sliders */
  .slider.round{
    border-radius: 34px;
  }
  
  .slider.round:before{
    border-radius: 50%;
  }
  </style>
  
<style>
    body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  }
  
  #chartdiv1, #chartdiv2, #chartdiv3, #chartdiv4, #chartdiv5,#c_chartdiv1, #c_chartdiv2{
    width: 100%;
    height: 520px;
  }
  
</style>
  
  <section style="width:90%; margin:auto">
    <label class="col-lg-12 text-center mt-5" style="background:#0892fd; color:white;  ">
      <h4 class="p-1"><b>Total Filed and Approved Ips per Year (Tabular Form)</b></h4>
    </label>
    <div style="width:90%; box-shadow:1px 1px 5px #999; overflow-x:auto; margin:auto">
      
      <table id="tbl_f-n-a" class="table table-striped" style="width:100%; ">
        <thead id="fna_head">
          <tr id= "row_head">
            <th style="position:sticky; left:0; ">
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
      <label class="col-lg-12 text-center mt-5" style="background:#0892fd; color:white;  "><h4 class="p-1"><b>Total Filed and Approved Ips per Year (Graphical Form)</b></h4></label>
     
      <div  class="col-lg-12" style="display:flex; flex-wrap: nowrap; justify-content: center; gap: 15px;  align-items: center;">
        <h6>Bar</h6>
        <label class="switch">
          <input type="checkbox" onclick="setGraphView()" checked>
          <span class="slider round"></span>
        </label>
        <h6>Line</h6>
      </div>

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
      <label class="col-lg-12 text-center mt-5 p-1" style="background:#0892fd; color:white;  "><h4><b>Filed Vs. Granted</b></h4></label>
      <div class="col-lg-12">
        <div id="c_chartdiv1"></div>
      </div>
      <div class="col-lg-12">
        <div id="c_chartdiv2"></div>
      </div>
    </div>
  </section>

  
  <script>
    var graph_view = 1; //0 for bar graph, 1 for line
    function setGraphView(){
      graph_view = graph_view==0?1:0;
      setFiledVsGrantGraphs();
      // alert(graph_view);
    }
  </script>

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
                let th_color = "background:#90bccc;";
                if(x%2==0)
                   th_color = 'background:#66abcf;';
                style=
                console.log(element);
                //filling the table data from head to body
                $("#row_head").append(
                  "<th class='p-0 m-0'>"+
                    "<div class='w-100 m-0 p-0' style='text-align:center'>"+
                      "<div class='m-0' style='border:1px solid #038; padding:20px; min-width:100px; margin:0px;   "+th_color+"'>"+element+"</div>"+
                        "<div style='border:1px solid #038; height:15%;  display:flex; font-size:10px; font-weight:lighter'>"+
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
                      "<div style='width:50%; border-right:1px solid #038'>"+fvsa_data.a[0][x]+"</div>"+
                    "</div>"+
                  "</td>"
                );
                $("#row_um").append(
                  "<td class='m-0 p-0'>"+
                    "<div style='display:flex; text-align:center'>"+
                      "<div style='width:50%; border-right:1px solid #999'>"+fvsa_data.f[1][x]+"</div>"+
                      "<div style='width:50%; border-right:1px solid #038'>"+fvsa_data.a[1][x]+"</div>"+
                    "</div>"+
                  "</td>"
                );
                $("#row_tm").append(
                  "<td class='m-0 p-0'>"+
                    "<div style='display:flex; text-align:center'>"+
                      "<div style='width:50%; border-right:1px solid #999'>"+fvsa_data.f[2][x]+"</div>"+
                      "<div style='width:50%; border-right:1px solid #038'>"+fvsa_data.a[2][x]+"</div>"+
                    "</div>"+
                  "</td>"
                );
                $("#row_cr").append(
                  "<td class='m-0 p-0'>"+
                    "<div style='display:flex; text-align:center'>"+
                      "<div style='width:50%; border-right:1px solid #999'>"+fvsa_data.f[3][x]+"</div>"+
                      "<div style='width:50%; border-right:1px solid #038'>"+fvsa_data.a[3][x]+"</div>"+
                    "</div>"+
                  "</td>"
                )
                $("#row_all").append(
                  "<td class='m-0 p-0'>"+
                    "<div style='display:flex; text-align:center'>"+
                      "<div style='width:50%; border-right:1px solid #999'>"+fvsa_data.f[4][x]+"</div>"+
                      "<div style='width:50%; border-right:1px solid #038'>"+fvsa_data.a[4][x]+"</div>"+
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
              console.log(JSON.stringify(ip_obj_clustered) + " - obj in");
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
    {{-- //for 2d --}}
    <script src="{{asset('assets/js/clustered-column-chart/Animated.js')}}"></script>
    <script src="{{asset('assets/js/clustered-column-chart/xy.js')}}"></script>
    <script src="{{asset('assets/js/clustered-column-chart/index.js')}}"></script>
   {{-- for linear graph --}}
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

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
      for(ex=0; ex<ip_title.length; ex++){
        $("#chartdiv"+(ex+1)).html('');
        if(graph_view == 0)// if bar graph
        {
          
          am5.ready(function() {
            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv"+(ex+1));
            
            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
            am5themes_Animated.new(root)
            ]);
            
            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            chart = root.container.children.push(am5xy.XYChart.new(root, {
            panX: false,
            panY: false,
            wheelX: "panX",
            wheelY: "zoomX",
            layout: root.verticalLayout
            }));
            
            chart.set("scrollbarX", am5.Scrollbar.new(root, { orientation: "horizontal" }));

            // Add legend
            // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
            var legend = chart.children.push(
            am5.Legend.new(root, {
                centerX: am5.p50,
                x: am5.p50
            })
            );
            
            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
            categoryField: "year",
            renderer: am5xy.AxisRendererX.new(root, {
                cellStartLocation: 0.1,
                cellEndLocation: 0.9
            }),
            tooltip: am5.Tooltip.new(root, {})
            }));
            
            xAxis.data.setAll(ip_obj[ex]);
            
            var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            renderer: am5xy.AxisRendererY.new(root, {})
            }));
            
            // Add series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            function makeSeries(name, fieldName) {
            var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                name: name,
                xAxis: xAxis,
                yAxis: yAxis,
                valueYField: fieldName,
                categoryXField: "year"
            }));
            
            series.columns.template.setAll({
                tooltipText: "{name}, {categoryX}:{valueY}",
                width: am5.percent(90),
                tooltipY: 0
            });
            
            series.data.setAll(ip_obj[ex]);
            
            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear();
            
            series.bullets.push(function () {
                return am5.Bullet.new(root, {
                locationY: 0,
                sprite: am5.Label.new(root, {
                    text: "{valueY}",
                    fill: root.interfaceColors.get("alternativeText"),
                    centerY: 0,
                    centerX: am5.p50,
                    populateText: true
                })
                });
            });
            
            legend.data.push(series);
            }
            
            makeSeries("Filed", "filed");
            makeSeries("Approved", "approved");
            
            
            
            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            chart.appear(1000, 100);
          }); // end am5.ready()
          
        }else{
        // for linear graph
        am5.ready(function() {
  
          // Create root element
          // https://www.amcharts.com/docs/v5/getting-started/#Root_element 
          var root = am5.Root.new("chartdiv"+(ex+1));
          root.dateFormatter.set("dateFormat", "yyyy");
          
          // Set themes
          // https://www.amcharts.com/docs/v5/concepts/themes/ 
          root.setThemes([
            am5themes_Animated.new(root)
          ]);
          
          
          // Create chart
          // https://www.amcharts.com/docs/v5/charts/xy-chart/
          var chart = root.container.children.push(am5xy.XYChart.new(root, {
            panX: true,
            panY: true,
            wheelX: "panX",
            wheelY: "zoomX",
            maxTooltipDistance: 0,
            pinchZoomX:true
          }));
          
          var dates = new Date();
          var value = 100;
          
          // var ip_obj = [{'year':2012,'Approved':1,'Filed':2},{'Year':2013,'Approved':3,'Filed':5}];
          var series_name = ["Filed", "Approved"];

          function generateData(ind, field, c_ind) {
            value = Math.round((Math.random() * 10));
            am5.time.add(dates, "year", 1);
            console.log(field + " = " + parseInt(ip_obj[c_ind][ind][field]));
            return {
              date: new Date("January 1, " + ip_obj[c_ind][ind].year).getTime(),
              value:parseInt(ip_obj[c_ind][ind][field])
            };
          }
          
          function generateDatas(count, field, c_ind) {
            var data = [];
            for (var i = 0; i < count; ++i) {
              data.push(generateData(i,field, c_ind ));
            }
            return data;
          }
          
          // Create axes
          // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
          var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
            maxDeviation: 0.2,
            baseInterval: {
              timeUnit: "year",
              count: 1
            },
            renderer: am5xy.AxisRendererX.new(root, {}),
            tooltip: am5.Tooltip.new(root, {})
          }));
          
          var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            renderer: am5xy.AxisRendererY.new(root, {})
          }));
          
          // Add series
          // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
          for (var i = 0; i < 2; i++) {
            dates.setFullYear(ip_obj[0][0].year - 1);

            var series = chart.series.push(am5xy.LineSeries.new(root, {
              name: series_name[i],
              xAxis: xAxis,
              yAxis: yAxis,
              valueYField: "value",
              valueXField: "date",
              legendValueText: "{valueY}",
              tooltip: am5.Tooltip.new(root, {
                pointerOrientation: "horizontal",
                labelText:  series_name[i] +":{valueY}"
              })
            }));
          
            date = new Date();
            // date.setHours(0, 0, 0, 0);
            value = 0;
          
            var data = generateDatas(ip_obj[0].length, series_name[i], ex);
            series.data.setAll(data);
          
            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear();
          }
          
          // Add cursor
          // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
          var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
            behavior: "none"
          }));
          cursor.lineY.set("visible", false);

          // Add scrollbar
          // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
          chart.set("scrollbarX", am5.Scrollbar.new(root, {
            orientation: "horizontal"
          }));
          
          chart.set("scrollbarY", am5.Scrollbar.new(root, {
            orientation: "vertical"
          }));
          
          
          // Add legend
          // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
          var legend = chart.rightAxesContainer.children.push(am5.Legend.new(root, {
            width: 200,
            paddingLeft: 15,
            height: am5.percent(100)
          }));
          
          // When legend item container is hovered, dim all the series except the hovered one
          legend.itemContainers.template.events.on("pointerover", function(e) {
            var itemContainer = e.target;
          
            // As series list is data of a legend, dataContext is series
            var series = itemContainer.dataItem.dataContext;
          
            chart.series.each(function(chartSeries) {
              if (chartSeries != series) {
                chartSeries.strokes.template.setAll({
                  strokeOpacity: .15,
                  stroke: am5.color(0x000000)
                });
              } else {
                chartSeries.strokes.template.setAll({
                  strokeWidth: 5
                });
              }
            })
          })
          
          // When legend item container is unhovered, make all series as they are
          legend.itemContainers.template.events.on("pointerout", function(e) {
            var itemContainer = e.target;
            var series = itemContainer.dataItem.dataContext;
          
            chart.series.each(function(chartSeries) {
              chartSeries.strokes.template.setAll({
                strokeOpacity: 1,
                strokeWidth: 2,
                stroke: chartSeries.get("fill")
              });
            });
          })
          
          legend.itemContainers.template.set("width", am5.p100);
          legend.valueLabels.template.setAll({
            width: am5.p100,
            textAlign: "right"
          });
          
          // It's is important to set legend data after all the events are set on template, otherwise events won't be copied
          legend.data.setAll(chart.series.values);
          
          // Make stuff animate on load
          // https://www.amcharts.com/docs/v5/concepts/animations/
          chart.appear(1000, 100);
         
        }); // end am5.ready()
      }
        /*
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
        return text;
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
    */  
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
  
    for(ex=0; ex<clustered_title.length; ex++){
      am5.ready(function() {
        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element 
        var root = am5.Root.new("c_chartdiv"+(ex+1));
        root.dateFormatter.set("dateFormat", "yyyy");
        
        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/ 
        root.setThemes([
          am5themes_Animated.new(root)
        ]);
        
        
        // Create chart
        // https://www.amcharts.com/docs/v5/charts/xy-chart/
        var chart = root.container.children.push(am5xy.XYChart.new(root, {
          panX: true,
          panY: true,
          wheelX: "panX",
          wheelY: "zoomX",
          maxTooltipDistance: 0,
          pinchZoomX:true
        }));
        
        var dates = new Date();
        
        // var ip_obj = [{'year':2012,'Approved':1,'Filed':2},{'Year':2013,'Approved':3,'Filed':5}];
        var c_series_name = ["Patent", "UM", "Trademark", "Copyright"];

        function generateData(ind, field, c_ind){
          value = Math.round((Math.random() * 10));
          am5.time.add(dates, "year", 1);
          console.log(field + " = " + c_ind +"," +ind +","+ field);
          return {
            date: new Date("January 1, " + ip_obj_clustered[c_ind][ind].year).getTime(),
            value: parseInt(ip_obj_clustered[c_ind][ind][field])
          };
        }
        
        function generateDatas(count, field, c_ind) {
          var data = [];
          for (var i = 0; i < count; ++i) {
            data.push(generateData(i,field, c_ind ));
          }
          return data;
        }
        
        // Create axes
        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
        var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
          maxDeviation: 0.2,
          baseInterval: {
            timeUnit: "year",
            count: 1
          },
          renderer: am5xy.AxisRendererX.new(root, {}),
          tooltip: am5.Tooltip.new(root, {})
        }));
        
        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
          renderer: am5xy.AxisRendererY.new(root, {})
        }));
        
        // Add series
        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
        for (var i = 0; i < c_series_name.length; i++) {
            dates.setFullYear(ip_obj_clustered[0][0].year - 1);
            // console.log("Year - " + ip_obj_clustered[0][0].year );
            var series = chart.series.push(am5xy.LineSeries.new(root, {
              name: c_series_name[i],
              xAxis: xAxis,
              yAxis: yAxis,
              valueYField: "value",
              valueXField: "date",
              legendValueText: "{valueY}",
              tooltip: am5.Tooltip.new(root, {
                pointerOrientation: "horizontal",
                labelText:  c_series_name[i] +":{valueY}"
              })
            }));
          
            date = new Date();
            // date.setHours(0, 0, 0, 0);
            value = 0;
          
            var data = generateDatas(ip_obj_clustered[0].length, c_series_name[i], ex);
            series.data.setAll(data);
          
            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear();
        }
          
          // Add cursor
          // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
          var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
            behavior: "none"
          }));
          cursor.lineY.set("visible", false);

          // Add scrollbar
          // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
          chart.set("scrollbarX", am5.Scrollbar.new(root, {
            orientation: "horizontal"
          }));
          
          chart.set("scrollbarY", am5.Scrollbar.new(root, {
            orientation: "vertical"
          }));
          
          
          // Add legend
          // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
          var legend = chart.rightAxesContainer.children.push(am5.Legend.new(root, {
            width: 200,
            paddingLeft: 15,
            height: am5.percent(100)
          }));
          
          // When legend item container is hovered, dim all the series except the hovered one
          legend.itemContainers.template.events.on("pointerover", function(e) {
            var itemContainer = e.target;
          
            // As series list is data of a legend, dataContext is series
            var series = itemContainer.dataItem.dataContext;
          
            chart.series.each(function(chartSeries) {
              if (chartSeries != series) {
                chartSeries.strokes.template.setAll({
                  strokeOpacity: .15,
                  stroke: am5.color(0x000000)
                });
              } else {
                chartSeries.strokes.template.setAll({
                  strokeWidth: 5
                });
              }
            })
          })
          
          // When legend item container is unhovered, make all series as they are
          legend.itemContainers.template.events.on("pointerout", function(e) {
            var itemContainer = e.target;
            var series = itemContainer.dataItem.dataContext;
          
            chart.series.each(function(chartSeries) {
              chartSeries.strokes.template.setAll({
                strokeOpacity: 1,
                strokeWidth: 2,
                stroke: chartSeries.get("fill")
              });
            });
          })
          
          legend.itemContainers.template.set("width", am5.p100);
          legend.valueLabels.template.setAll({
            width: am5.p100,
            textAlign: "right"
          });
          
          // It's is important to set legend data after all the events are set on template, otherwise events won't be copied
          legend.data.setAll(chart.series.values);
          
          // Make stuff animate on load
          // https://www.amcharts.com/docs/v5/concepts/animations/
          chart.appear(1000, 100);
        
      }); // end am5.ready()
      /*
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
        return text;
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
      */
    }
  }
  </script>
  