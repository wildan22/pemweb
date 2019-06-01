<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/learn/function.php";
include_once($path);
session_start();
if(check_session()=='user'){
	header("location:/learn/home/");
}
else if(check_session()=='admin'){
	
}
else{
	echo "<script type='text/javascript'> alert('Silahkan login terlebih dahulu untuk mengakses halaman ini');window.location.href='/learn/index.php';</script>";
}
?>