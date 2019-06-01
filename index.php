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
				<!-- SEARCH BOX -->
				<div class="search-box">
					<h2>Find Journal</h2>
					<form action="index.php" method="POST">
						<table>
							<tr>
								<td><input type="text" name="judul-jurnal"></td>
								<td>
									<select name="kategori-jurnal">
										<option>Science</option>
									</select>
								</td>
								<td>
									<select name="kategori-jurnal">
										<option>2019</option>
									</select>
								</td>
								<td><input type="submit" name="cari-jurnal" value="Search" class="search-button"></td>
							</tr>
						</table>
					</form>
				</div>
				<!-- END OF SEACRH BOX -->

				<!-- FAVORIT JURNAL -->
				<div class="favorit-jurnal">
					<h2>Favorit Jurnal</h2>
					<a href="index.php?jurnal=local">Local</a> | <a href="index.php?jurnal=international">International</a>
					<?php
					if(isset($_GET['jurnal'])){
						$tipe_jurnal = $_GET['jurnal'];
						if($tipe_jurnal == 'international'){
							#CODE INTERNATIONAL
							$query = "SELECT * FROM international ORDER BY clicked DESC LIMIT 5";
							$result = mysqli_query($conn_sub2,$query);
							while($row = mysqli_fetch_array($result)){
								echo "
								<table class='jurnal-table'>
									<tr>
										<td><b>Title :</b>".$row['title']."</td>
										<td rowspan='3'><a href='http://$subserver1/$folder/file/".$row['file_location'].".pdf' download><img src='http://".$mainserver."/".$folder."/img/pdf-logo.png'></a></td>
									</tr>
									<tr>
										<td><b>Tahun : </b>".$row['tahun']."</td>
									</tr>
									<tr>
										<td><b>Owner : </b>".$row['owner']."</td>
									</tr>
								</table>
								";
							}
						}
						else{
							#CODE LOCAL
							$query = "SELECT * FROM local ORDER BY clicked DESC LIMIT 5";
							$result = mysqli_query($conn_sub1,$query);
							while($row = mysqli_fetch_array($result)){
								echo "
								<table class='jurnal-table'>
									<tr>
										<td><b>Title :</b>".$row['title']."</td>
										<td rowspan='3'><a href='http://$subserver1/$folder/file/".$row['file_location'].".pdf' download><img src='http://".$mainserver."/".$folder."/img/pdf-logo.png'></a></td>
									</tr>
									<tr>
										<td><b>Tahun : </b>".$row['tahun']."</td>
									</tr>
									<tr>
										<td><b>Owner : </b>".$row['owner']."</td>
									</tr>
								</table>
								";
							}
						}
					}
					else{
						$query = "SELECT * FROM local ORDER BY clicked DESC LIMIT 5";
						$result = mysqli_query($conn_sub1,$query);
						while($row = mysqli_fetch_array($result)){
							echo "
							<table class='jurnal-table'>
								<tr>
									<td><b>Title :</b>".$row['title']."</td>
									<td rowspan='3'><a href='http://$subserver1/$folder/file/".$row['file_location'].".pdf' download><img src='http://".$mainserver."/".$folder."/img/pdf-logo.png'></a></td>
								</tr>
								<tr>
									<td><b>Tahun : </b>".$row['tahun']."</td>
								</tr>
								<tr>
									<td><b>Owner : </b>".$row['owner']."</td>
								</tr>
							</table>
							";
						}
					}	

					?>
					Showing 5 Favorite Journal
				</div>
				<!-- END OF FAVORIT JURNAL -->

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