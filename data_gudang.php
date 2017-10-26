<?php
$link=mysqli_connect("localhost", "root", "", "gudang");
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
	
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Optik Plus</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="statistik.html">Statistik</a></li>
                    <li class="active"><a href="#">Database</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </nav>
       

	   <h1 style="padding:60px;margin-top:0px;">Halaman Data Gudang</h1>
	   
	   <a href="form.php">TambahStok</a>
		 <table style="width:50%">
        
        <caption style="text-align: left; font-size: 40px; color: black;">Kasir 1</caption>
        <tr>
			<th>Nomer</th>
            <th>Nama Barang</th>
			<th>Jumlah Barang</th>
            <th>Harga Beli</th>
            
        </tr>
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