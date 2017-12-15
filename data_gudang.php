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

$result=mysqli_query($link, "SELECT * FROM tb_stock");
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
          <li class="active"><a href="indexK.php">Kasir 1</a></li>
          <li><a href="index_kasir2.php">Kasir 2</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Statistik <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Kasir 1</a></li>
          <li><a href="#">Kasir 2</a></li>
        </ul>
      </li>
      <li><a href="#">Data Gudang</a></li>
        
        <li style="left:735px;"><a href ="register.php">Sign up</a></li>
        <li style="left:750px;"><a href ="logout.php">Log Out</a></li>
    </ul>
  </div>
</nav>
       

    <div style="padding:60px;margin-top:0px;">
    <h1>Halaman Data Gudang</h1>
	   
	   <a href="form.php">TambahStok  </a>
		 <table style="width:50%">
        
        <caption style="text-align: left; font-size: 40px; color: black;">Kasir 1</caption>
        <tr>
			<th>Nomer</th>
            <th>Nama Barang</th>
			<th>Jumlah Barang</th>
            <th>Harga Beli</th>
            
        </tr>
		
		 
	   <!--<a href="editbarang.php">EditStok  </a>
	   <a href="hapusbarang.php">HapusStok  </a>-->
		 
    <?php
    while($row=mysqli_fetch_array($result)){
        echo "<tr>";
		 echo "<td>".$row['nomer']."</td>";
        echo "<td>".$row['nama_barang']."</td>";
        echo "<td>".$row['jumlah_stok']."</td>";
        echo "<td>".$row['harga_beli']."</td>";
        echo "</tr>";
    }


    ?>
    </table>
    </body>
</html>