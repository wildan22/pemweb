<?php require "sys-config.php"?>
<?php require "koneksi.php"?>

<?php
include 'function.php';
session_start();
if(check_session()=='user'){
	header("location:home/");
}
else if(check_session()=='admin'){
	header("location:admins/");
}
else{

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Testing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<!-- HEADER -->
		<div class="header">
			<img src="img/logo.png">
		</div>
		<!-- NAVIGATION BAR -->
		<div class="nav-bar">
			<table>
				<tr>
					<td><a href="<?="http://".$mainserver."/".$folder."/"?>">Home</a></td>
					<td><a href="<?="http://".$subserver1."/".$folder."/local"?>">Local Journal</a></td>
					<td><a href="<?="http://".$subserver2."/".$folder."/international"?>">International Journal</a></td>
					<td><a href="#">FAQ</a></td>
					<td><a href="#">About US</a></td>
				</tr>
			</table>
		</div>
		<!-- END OF NAVIGATION BAR -->

		<!-- MAIN -->
		<div class="main">

			<!-- LEFT -->
			<div class="left">

				<!-- CONTACT BOX -->
				<div class="contact">
					<h1>Contact</h1>
					<table>
						<tr>
							<td align="center"><img src="img/call.png"></td>
							<td>0812-3456-7890</td>
						</tr>
						<tr>
							<td align="center"><img src="img/mail.png"></td>
							<td>kelompok5@unila.ac.id</td>
						</tr>
						<tr>
							<td align="center"><img src="img/place.png"></td>
							<td>Universitas Lampung</td>
						</tr>
					</table>
				</div>
				<!-- END OF CONTACT BOX -->

			</div>
			<!-- END OF LEFT -->


			<!-- MIDDLE -->
			<div class="middle">
				<div class="register-panel">
					<form action="proses-register.php" method="POST">
						<table>
							<tr>
								<td><a>First Name <b>*</b></a></td>
								<td><a>Last Name <b>*</b></a></td>
							</tr>
							<tr>
								<td><input type="text" name="fname" class="type1" required="yes" min="3" max="25"></td>
								<td><input type="text" name="lname" class="type1" required="yes" min="3" max="25"></td>
							</tr>
							<tr>
								<td><a>Username <b>*</b></a></td>
							</tr>
							<tr>
								<td colspan="2"><input type="text" name="username" class="type2" required="yes" min="4" max="50"></td>
							</tr>
							<tr>
								<td><a>Email <b>*</b></a></td>
							</tr>
							<tr>
								<td colspan="2"><input type="email" name="email" class="type2" required="yes" min="3" max="50"></td>
							</tr>
							<tr>
								<td><a>Password <b>*</b></a></td>
							</tr>
							<tr>
								<td colspan="2"><input type="password" name="password" class="type2" required="yes" min="6" max="30"></td>
							</tr>
							<tr>
								<td colspan="2"><a>Confirm Password <b>*</b></a></td>
							</tr>
							<tr>
								<td colspan="2"><input type="password" name="confirm-password" class="type2" required="yes" min="6" max="30"></td>
							</tr>
							<tr>
								<td colspan="2"><a>Phone Number </a></td>
							</tr>
							<tr>
								<td colspan="2"><input type="text" name="phone" class="type2" min="10" min="15"></td>
							</tr>
							<tr>
								<td><input type="submit" name="register" value="Register" class="submit-button"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<!-- END OF MIDDLE -->

			<!-- RIGHT -->
			<div class="right">
				<div class="login">
					<form method="POST" action="proses-login.php">
						<table>
							<h2>Login</h2>
							<tr>
								<td><input class="input-1" type="email" name="mail" placeholder="Email" class="type1" required="yes"></td>
							</tr>
							<tr>
								<td><input class="input-1" type="password" name="password" placeholder="Password" class="type1" required="yes"></td>
							</tr>
							<tr>
								<td><input type="submit" name="login" value="Login" class="submit-login"></td>
							</tr>
						</table>
						<a href="register.php" class="not-registered">Don't have account? Register Now</a>
					</form>
			</div>
			<!-- END OF RIGHT -->

		</div>
		<!-- END OF MAIN -->


		<!-- FOOTER -->
		<div class="footer">
			<h4>Footer</h4>
			<p>Copyright &copy; 2019 <a href="http://www.tutorial-webdesign.com">Kelompok 5</a></p>
		</div>
	</div>
</body>
</html>