<?php
include ("konek.php");
date_default_timezone_set("Asia/Jakarta");

if(isset($_POST['simpan'])) {
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $alamatPembeli=$_POST['alamatPembeli'];
    $telepon=$_POST['telepon'];
    $spkanan=$_POST['spkanan'];
    $spkiri=$_POST['spkiri'];
    $cylkanan=$_POST['cylkanan'];
    $cylkiri=$_POST['cylkiri'];
    $axiskanan=$_POST['axiskanan'];
    $axiskiri=$_POST['axiskiri'];
    $addkanan=$_POST['addkanan'];
    $addkiri=$_POST['addkiri'];
    $∆kanan=$_POST['∆kanan'];
    $∆kiri=$_POST['∆kiri'];
    $basekanan=$_POST['basekanan'];
    $basekiri=$_POST['basekiri'];
    $фkanan=$_POST['фkanan'];
    $фkiri=$_POST['фkiri'];
    $Rpdp=$_POST['Rpdp'];
    $Rpsisa=$_POST['Rpsisa'];
    $Rptotal=$_POST['Rptotal'];
    $kriteria=$_POST['kriteria'];
    $date = date("Y-m-d G:i:s",time()); 
    $kasir= $_POST['namakasir'];
}
    $query="INSERT INTO inp_kasir1 VALUES (' ','$nama', '$alamat', '$alamatPembeli', '$telepon', '$spkanan', '$spkiri', '$cylkanan', '$cylkiri', '$axiskanan', '$axiskiri', '$addkanan', '$addkiri', '$∆kanan', '$∆kiri', '$basekanan', '$basekiri', '$фkanan', '$фkiri', '$Rpdp', '$Rpsisa', '$Rptotal', '$date', '$kriteria', '$kasir')";
    $result=mysqli_query($link, $query);
    if(!$result){
        die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
    }

    header("location: cashier.php");
?>