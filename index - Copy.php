<!DOCTYPE html>
<html>
  <head>
      <title>JavaScript Pie Chart</title>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
      <style type="text/css">
        html, body, #container {
          width: 100%;
          height: 100%;
          margin: 0;
          padding: 0;
        }
      </style>
  </head>
  <body>
    <div id="container" style="width: 100%; height: 100%"></div>
    <script>
        <!-- chart code will be here -->
    </script>
  </body>
  <script type="text/javascript">
    anychart.onDocumentReady(function() {

      // set the data
      var data = [
          {x: "White", value: "<?php echo '200'; ?>", exploded: true},
          {x: "Black or African American", value: 300},
          {x: "American Indian and Alaska Native", value: 400},
          {x: "Asian", value: 500},
          {x: "Native Hawaiian and Other Pacific Islander", value: 600},
          {x: "Some Other Race", value: 700},
          {x: "Two or More Races", value: 800}
      ];

      // create the chart
      var chart = anychart.pie();

      // set the chart title
      chart.title("Population by Race for the United States: 2010 Census");

      // add the data
      chart.data(data);

      // display the chart in the container
      chart.container('container');
      chart.draw();

    });
  </script>
</html>