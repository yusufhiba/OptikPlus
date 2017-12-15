<?php
$link=mysqli_connect("localhost", "id3391378_optikplus", "optikplus123", "id3391378_login");
if(!$link) {
	die("Koneksi error : ".mysqli_connect_errno()." - ".mysqli_connect_error());
}

if(isset($_POST['submit'])) {
	$nama=$_POST['barang'];
} else {
	header("Location:formh.php");
}

$query="DELETE FROM tb_stock WHERE nama_barang = '$nama'";
$result=mysqli_query($link, $query);
if(!$result) {
	die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
} else {
	header("Location:data_gudang.php");
}

?>