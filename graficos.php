<?php include 'cabecalho.php'?>
<?php include 'conexao.php'?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([

          ['Opções', 'Votos'],
          ['Ótimo',     11],
          ['Regular',      2],
          ['Ruim',  2],

          <?php
            $nome = "pedro";
          ?>

        ]);

        var options = {
          title: 'Resultados',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>
<?php include 'rodape.php'?>