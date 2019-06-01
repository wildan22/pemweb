<?php
require 'koneksi.php';
if(isset($_POST['login'])){
	$mail = $_POST['mail'];
	$password = $_POST['password'];

	$query = "SELECT * FROM users WHERE email='$mail' AND password='$password';";
	$cekuser = mysqli_query($conn_main,$query);
	if(mysqli_num_rows($cekuser) == 1){
		session_start();
		$row = mysqli_fetch_array($cekuser);
		$_SESSION['mail'] = $row['email'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['phone'] = $row['phone'];
		if($row['level']=='admin'){
			$_SESSION['logedin'] = 'admin';
		}
		else if($row['level']=='user'){
			$_SESSION['logedin'] = 'user';
		}
		header("location:home/");
	}
	else{
		echo "<script type='text/javascript'> alert('Email/Password anda salah,silahkan coba lagi');window.location.href='index.php';</script>";
	}
}
else{
	echo "string";
}
?>