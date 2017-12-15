<?php
$link=mysqli_connect("localhost", "id3391378_optikplus", "optikplus123", "id3391378_login");
if(!$link){
    die("Koneksi error : ".mysqli_connect_errno()." - ".mysqli_connect_error());
}