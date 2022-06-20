<!-- Styles -->
<style>
  #chartdiv {
    width: 100%;
    height: 500px;
    max-width: 100%;
  }
  </style>
  
  <!-- Resources -->
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  
  <!-- Chart code -->
  <script>
  am5.ready(function() {
  
  // Create root element
  // https://www.amcharts.com/docs/v5/getting-started/#Root_element 
  var root = am5.Root.new("chartdiv");
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
  var ip_obj = [];
  ip_obj[0] = [];
  
  ip_obj[0] = [{'year':2012,'Approved':1,'Filed':2},{'year':2013,'Approved':3,'Filed':5}];
  var series_name = ["Filed", "Approved"];
  // alert(ip_obj[0][1].year);
  function generateData(ind, field) {
    value = Math.round((Math.random() * 10));
    am5.time.add(dates, "year", 1);
    console.log(field + " = " + parseInt(ip_obj[0][ind][field]));
    return {
      date: dates.getTime(),
      value:parseInt(ip_obj[0][ind][field])
    };
  }
  
  function generateDatas(count, field) {
    var data = [];
    for (var i = 0; i < count; ++i) {
      data.push(generateData(i,field ));
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
  
    var data = generateDatas(ip_obj[0].length, series_name[i]);
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
          strokeOpacity: 2.15,
          stroke: am5.color(0x000000)
        });
      } else {
        chartSeries.strokes.template.setAll({
          strokeWidth: 3
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
        strokeWidth: 3,
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
  </script>
  
  <!-- HTML -->
  <div id="chartdiv"></div>