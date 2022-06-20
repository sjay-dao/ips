
<!--
Clustered Graph

<style>
    body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

#chartdiv {
  width: 100%;
  height: 500px;
}
</style>


<script src="{{asset('assets/js/clustered-column-chart/index.js')}}"></script>
<script src="{{asset('assets/js/clustered-column-chart/xy.js')}}"></script>
<script src="{{asset('assets/js/clustered-column-chart/Animated.js')}}"></script>
<div id="chartdiv"></div>

<script>/**
    * ---------------------------------------
    * This demo was created using amCharts 5.
    * 
    * For more information visit:
    * https://www.amcharts.com/
    * 
    * Documentation is available at:
    * https://www.amcharts.com/docs/v5/
    * ---------------------------------------
    */
   
   // Create root element
   // https://www.amcharts.com/docs/v5/getting-started/#Root_element
   var root = am5.Root.new("chartdiv");
   
   
   // Set themes
   // https://www.amcharts.com/docs/v5/concepts/themes/
   root.setThemes([
     am5themes_Animated.new(root)
   ]);
   
   
   // Create chart
   // https://www.amcharts.com/docs/v5/charts/xy-chart/
   var chart = root.container.children.push(am5xy.XYChart.new(root, {
     panX: false,
     panY: false,
     wheelX: "panX",
     wheelY: "zoomX",
     layout: root.verticalLayout
   }));
   
   
   // Add legend
   // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
   var legend = chart.children.push(
     am5.Legend.new(root, {
       centerX: am5.p50,
       x: am5.p50
     })
   );
   
   var data = [{
     "year": "2021",
     "europe": 2.5,
     "namerica": 2.5,
     "asia": 2.1,
     "lamerica": 1,
     "meast": 0.8,
     "africa": 0.4
   }, {
     "year": "2022",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2023",
     "europe": 2.8,
     "namerica": 2.9,
     "asia": 2.4,
     "lamerica": 0.3,
     "meast": 0.9,
     "africa": 0.5
   }, {
     "year": "2024",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2025",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2026",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2027",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2028",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2029",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2030",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2031",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2032",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2033",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2034",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2035",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2036",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2037",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2038",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2039",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2040",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2041",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2042",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2043",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2044",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2045",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2046",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2047",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2048",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2049",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2050",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2051",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2052",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2053",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2054",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2055",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2056",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2057",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2058",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2059",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2060",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2061",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }, {
     "year": "2062",
     "europe": 2.6,
     "namerica": 2.7,
     "asia": 2.2,
     "lamerica": 0.5,
     "meast": 0.4,
     "africa": 0.3
   }]
   
   
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
   
   xAxis.data.setAll(data);
   
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
   
     series.data.setAll(data);
   
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
   
   makeSeries("Patent", "europe");
   makeSeries("Utility Model", "namerica");
   makeSeries("Trademark", "asia");
   makeSeries("Copyright", "lamerica");
   
   
   // Make stuff animate on load
   // https://www.amcharts.com/docs/v5/concepts/animations/
   chart.appear(1000, 100);</script>
  -->



  {{-- Data table in object  Form --}}
  
<div>
    <table id="example" class="display" width="100%"></table>
  </div>
  
  <script>
   var dataSet = [
      [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
      [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
      [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
      [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060" ],
      [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700" ],
      [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000" ],
      [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500" ],
      [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900" ],
      [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500" ],
      [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
      [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
      [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
      [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
      [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500" ],
      [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17", "$385,750" ],
      [ "Michael Silva", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500" ],
      [ "Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000" ],
      [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
      [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
      [ "Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500" ],
      [ "Jenette Caldwell", "Development Lead", "New York", "1937", "2011/09/03", "$345,000" ],
      [ "Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000" ],
      [ "Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450" ],
      [ "Doris Wilder", "Sales Assistant", "Sydney", "3023", "2010/09/20", "$85,600" ],
      [ "Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000" ],
      [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
      [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],
      [ "Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850" ],
      [ "Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000" ],
      [ "Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000" ],
      [ "Michelle House", "Integration Specialist", "Sydney", "2769", "2011/06/02", "$95,400" ],
      [ "Suki Burks", "Developer", "London", "6832", "2009/10/22", "$114,500" ],
      [ "Prescott Bartlett", "Technical Author", "London", "3606", "2011/05/07", "$145,000" ],
      [ "Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500" ],
      [ "Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050" ],
      [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
  ];
   
  $(document).ready(function() {
      $('#example').DataTable( {
          data: dataSet,
          columns: [
              { "title": "Name" },
              { "title": "Position" },
              { "title": "Office" },
              { "title": "Extn." },
              { title: "Start date" },
              { title: "Salary" }
          ]
      } );
  } );
  </script>