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

$link=mysqli_connect("localhost", "root", "", "login");
if(!$link){
    die("Koneksi gagal : ".mysqli_connect_errno()." - ".mysqli_connect_error());
}

$result=mysqli_query($link, "SELECT * FROM tb_kasir1");
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
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
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="statistik.php">Statistik</a></li>
                    <li><a href="data_gudang.php">Database</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
    
        
    <table style="width:60%">
        
        <caption style="text-align: left; font-size: 40px; color: black;">Kasir 1</caption>
        <tr>
            <th>Nomer</th>
            <th>Tanggal</th>
            <th>Nama Barang</th> 
            <th>Harga</th>
            <th>Jumlah Terjual</th>
            <th>Jumlah Uang masuk</th>
        </tr>
    <?php
    while($row=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['tgl']."</td>";
        echo "<td>".$row['nm_brg']."</td>";
        echo "<td>Rp. ".number_format($row['harga'],2,",",".")."</td>";
        echo "<td>".$row['jml_jual']."</td>";
        echo "<td>Rp. ".number_format($row['uang_masuk'],2,",",".")."</td>";
        echo "</tr>";
    }


    ?>
    </table>
        
    <br />
    <br />
        
    <table style="width:50%">
    <caption style="text-align: left; font-size: 40px; color: black;">Kasir 2</caption>
    <tr>
        <th>Tanggal</th>
        <th>Nama Barang</th> 
        <th>Harga</th>
        <th>Jumlah Terjual</th>
        <th>Jumlah Uang masuk</th>
    </tr>
    <tr>
        <td>19-08-2017</td>
        <td>Frame Oakley</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>09-08-2017</td>
        <td>Lensa 0,5</td>
        <td>Rp100.000</td>
        <td>94</td>
        <td></td>
    </tr>
    <tr>
        <td>10-08-2017</td>
        <td>Frame Strong</td>
        <td>Rp200.000</td>
        <td>80</td>
        <td></td>
    </tr>
    
    </table>
        
    <br />
    <br />
        
    <table style="width:50%">
        <caption style="text-align: left; font-size: 40px; color: black;">Kasir 3</caption>
        <tr>
            <th>Tanggal</th>
            <th>Nama Barang</th> 
            <th>Harga</th>
            <th>Jumlah Terjual</th>
            <th>Jumlah Uang masuk</th>
        </tr>
        <tr>
            <td>19-08-2017</td>
            <td>Frame Oakley</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>09-08-2017</td>
            <td>Lensa 0,5</td>
            <td>Rp100.000</td>
            <td>94</td>
            <td></td>
        </tr>
        <tr>
            <td>10-08-2017</td>
            <td>Frame Strong</td>
            <td>Rp200.000</td>
            <td>80</td>
            <td></td>
        </tr>
        
    </table>
    </div>
    </body>
</html>