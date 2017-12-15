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

	<form action = "hapusbarang.php" method="post">
        <table>

		<tr>
		
			<th>Nama Barang</th>
			<td>:</td>
            <td>
            <?php  

            $link=mysqli_connect("localhost", "id3391378_optikplus", "optikplus123", "id3391378_login");
                if(!$link) {
            die("Koneksi error : ".mysqli_connect_errno()." - ".mysqli_connect_error());
            }

            $query = "SELECT * FROM tb_stock ";
            $list=mysqli_query($link, $query);
                if(!$list){
                    die("Query gagal : ".mysqli_errno($link)." - ".mysqli_error($link));
            }

            $select= '<select name="barang">';
            while($rs=mysqli_fetch_array($list)){
                $select.='<option value="'.$rs['nama_barang'].'">'.$rs['nama_barang'].'</option>';
                }
            $select.='</select>';
            echo $select;
            ?>
        </td>
		</tr>
		<tr>
		<th colspan="3"><input type= "submit" name="submit" value="Hapus"/><a href="data_gudang.php"></a></th>
		</tr>
		</table>
		</form>
		<a href="data_gudang.php"><b>BATAL</b></a>
    </body>
</html>