<?php

session_start();
if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
    }

$link=mysqli_connect("localhost", "id3391378_optikplus", "optikplus123", "id3391378_login");
if(!$link){
    die("Koneksi gagal : ".mysqli_connect_errno()." - ".mysqli_connect_error());
}

$result=mysqli_query($link, "SELECT * FROM inp_kasir1 JOIN keterangan ON inp_kasir1.keterangan=keterangan.id_ket");
if(!$result){
    die("Query gagal : ".mysqli_errno($link)." - ".mysqli_error($link));
}

?>
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
            table, th, td {
                border: 2px solid maroon;
                border-collapse: collapse;
            }
            td {
                padding: 5px;
                text-align: left;
            }
            th{
                padding: 5px;
                text-align: center;
            }
           
            li a:hover {
                background-color: black;
            }

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
          <li class="active"><a href="index.php">Kasir 1</a></li>
          <li><a href="index_kasir2.php">Kasir 2</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Statistik <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Kasir 1</a></li>
          <li><a href="#">Kasir 2</a></li>
        </ul>
      </li>
      <li><a href="data_gudang.php">Data Gudang</a></li>
        
        <li style="left:735px;"><a href ="register.php">Sign up</a></li>
        <li style="left:750px;"><a href ="logout.php">Log Out</a></li>
    </ul>
  </div>
</nav>
  
<!--
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#statistik">Statistik</a></li>
            <li><a href="#database">Database</a></li>
            <li style="float: right"><a href="#loggout">Log Out</a></li>
        </ul>
-->
    <div style="padding:60px;margin-top:0px;">
    <h1>Halaman Admin</h1>
    
        
    <table style="width:60%; border:4px solid maroon; ">
        
        <caption style="text-align: left; font-size: 40px; color: black;">Kasir GRESIK</caption>
        <tr>
            <th>Nomer</th>
            <th>Tanggal</th>
            <th>Nama Pelanggan</th> 
            <th>Harga</th>
            <th>Jumlah Terjual</th>
            <th>Jumlah Uang masuk</th>
            <th>Keterangan</th>
            <th>Nama Kasir</th>
        </tr>
    <?php

    while($row=mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['no']."</td>";
        echo "<td>".$row['tgl_beli1']."</td>";
        echo "<td>".$row['nm_pelanggan1']."</td>";
        echo "<td>Rp. ".number_format($row['tlp_pelanggan1'],2,",",".")."</td>";
        echo "<td>".$row['dp1']."</td>";
        echo "<td>Rp. ".number_format($row['total_byr1'],2,",",".")."</td>";
        echo "<td>".$row['jenis_ket']."</td>";	
        echo "<td>".$row['kasir']."</td>";  
        echo "</tr>";
    }

    ?>
    </table>
        
        

    </div>
    </body>
</html>