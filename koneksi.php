<?php

require 'sys-config.php';

$username="root";
$passwd="";
$db_name = "pdt";


$conn_main = mysqli_connect($mainserver,$username,$passwd,$db_name) or die("Koneksi GAGAL");
$conn_sub1=mysqli_connect($subserver1,$username,$passwd,$db_name) or die("Koneksi GAGAL"); 
$conn_sub2=mysqli_connect($subserver2,$username,$passwd,$db_name) or die("Koneksi GAGAL");
?>