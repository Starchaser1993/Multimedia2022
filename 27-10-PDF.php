<!--Trabajo con archivos PDF
Crear un PDF que contenga gráficos y texto
Darle un estilo al PDF que contenga gráficos y texto
Darle un estilo al PDF con CSS y una estructura con HTML/Librería para que contenga un titulo
un resumen, luego incluir un gráfico y luego un pie de página con el nombre del curso y
 la fecha en la cual se generó el PDF(la fecha debe generarse automáticamente, con PHP)-->

<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./conectar con PDF.css" type="text/css">
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Tipo');
        data.addColumn('number', 'Cantidad');
        data.addRows([
          ['GTX1650s', 10],
          ['GTX1660s', 15],
          ['RTX2080Ti', 10],
          ['RTX3070Ti', 8],
          ['RTX4090', 2]
        ]);

        // Set chart options
        var options = {'title':'Gpu más popular',
                       'width':700,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>

<body>
<header>
            <h1>PDF</h1>
        </header>
        <main>
            <!--Div that will hold the pie chart-->
<div id="chart_div"></div>
</main>
        <footer>
            <h4>Multimedia2022</h4>
        </footer>
</body>
</html>