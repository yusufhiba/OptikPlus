<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Optik Plus</title>
        <meta name="viewport" content="width:device-width, initial-scale:1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            body {background-color: lightgrey;}
            h1 {color: black;}
            p {color: black;}
            li a:hover {
                background-color: black;
        </style>
    </head> 
    <body>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Optik Plus</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="dropdown, active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Home <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a href="indexK.php">Kasir 1</a></li>
                  <li><a href="index_kasir2.php">Kasir 2</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Statistik <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="statistik1.php">Kasir 1</a></li>
                  <li><a href="#">Kasir 2</a></li>
                </ul>
              </li>
              <li><a href="data_gudang.php">Data Gudang</a></li>

                <li style="left:735px;"><a href ="register.php">Sign up</a></li>
                <li style="left:750px;"><a href ="logout.php">Log Out</a></li>
            </ul>
          </div>
        </nav>
        
        <h1 style="padding:60px;margin-top:0px;">Halaman Statistik</h1>
        <h2 style="margin-left:60px;">Statistik Penjualan</h2>
        
        <!-- MULAI ADA GRAFIK STATISTIK -->
        
        <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {

      title:{
      text: "Statistik Keutungan"
      },
      axisX: {
        valueFormatString: "MMM",
        interval:1,
        intervalType: "month"
      },
      axisY:{
        includeZero: false

      },
      data: [
      {
        type: "line",
        showInLegend: true,
        name: "Keuntungan",

        dataPoints: [
        { x: new Date(2012, 00, 1), y: 200 },
        { x: new Date(2012, 01, 1), y: 100 },
        { x: new Date(2012, 02, 1), y: 523 },
        { x: new Date(2012, 03, 1), y: 465 },
        { x: new Date(2012, 04, 1), y: 124 },
        { x: new Date(2012, 05, 1), y: 584 },
        { x: new Date(2012, 06, 1), y: 235 },
        { x: new Date(2012, 07, 1), y: 784 },
        { x: new Date(2012, 08, 1), y: 234 },
        { x: new Date(2012, 09, 1), y: 124 },
        { x: new Date(2012, 10, 1), y: 364 },
        { x: new Date(2012, 11, 1), y: 510 }
        ]
      },
          {
        type: "line",
        showInLegend: true,
        name: "Total Beli",

        dataPoints: [
        { x: new Date(2012, 00, 1), y: 490 },
        { x: new Date(2012, 01, 1), y: 414 },
        { x: new Date(2012, 02, 1), y: 520 },
        { x: new Date(2012, 03, 1), y: 460 },
        { x: new Date(2012, 04, 1), y: 450 },
        { x: new Date(2012, 05, 1), y: 500 },
        { x: new Date(2012, 06, 1), y: 480 },
        { x: new Date(2012, 07, 1), y: 480 },
        { x: new Date(2012, 08, 1), y: 410 },
        { x: new Date(2012, 09, 1), y: 500 },
        { x: new Date(2012, 10, 1), y: 480 },
        { x: new Date(2012, 11, 1), y: 510 }
        ]
      }
      ]
    });

    chart.render();
  }
  </script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>        
  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    </body>
</html>