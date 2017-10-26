<?php
$link=mysqli_connect("localhost", "root", "", "gudang");
if(!$link) {
	die("Koneksi error : ".mysqli_connect_errno()." - ".mysqli_connect_error());
}

if(isset($_POST['submit'])) {
	$nmr=$_POST['nomer'];
	$nama=$_POST['nama_barang'];
	$jumlah=$_POST['jumlah_stok'];
	$harga=$_POST['harga_beli'];
} else {
	header("Location:form.php");
}

$query="INSERT INTO tb_stock VALUES ('$nmr','$nama', '$jumlah', '$harga')";
$result=mysqli_query($link, $query);
if(!$result) {
	die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
} else {
	header("Location:data_gudang.php");
}
?>