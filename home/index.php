<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/learn/function.php";
include_once($path);
session_start();
if(check_session()=='user'){
	
}
else if(check_session()=='admin'){
	header("location:/learn/admins/");
}
else{
	echo "<script type='text/javascript'> alert('Silahkan login terlebih dahulu untuk mengakses halaman ini');window.location.href='/learn/index.php';</script>";
}
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/learn/sys-config.php")?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/learn/koneksi.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Testing</title>
	<link rel="stylesheet" type="text/css" href="http://<?=$mainserver."/".$folder."/"?>style.css">
</head>
<body>
	<div class="container">
		<!-- HEADER -->
		<div class="header">
			<img src="http://<?=$mainserver."/".$folder."/"?>img/logo.png">
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
							<td align="center"><img src="http://<?=$mainserver."/".$folder."/"?>img/call.png"></td>
							<td>0812-3456-7890</td>
						</tr>
						<tr>
							<td align="center"><img src="http://<?=$mainserver."/".$folder."/"?>img/mail.png"></td>
							<td>kelompok5@unila.ac.id</td>
						</tr>
						<tr>
							<td align="center"><img src="http://<?=$mainserver."/".$folder."/"?>img/place.png"></td>
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
					<form action="cari.php" method="POST">
						<table>
							<tr>
								<td><input type="text" name="judul-jurnal" placeholder="Tittle"></td>
								<td>
									<select name="kategori-jurnal">
										<option hidden="yes" value="">Category</option>
										<option value="science">Science</option>
									</select>
								</td>
								<td>
									<select name="tahun-jurnal">
										<option hidden="yes" value="">Year</option>
										<option value="2019">2019</option>
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
										<td rowspan='3'><a href='http://$subserver1/$folder/file/".$row['file_location'].".pdf'><img src='http://".$mainserver."/".$folder."/img/pdf-logo.png'></a></td>
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
				<div class="user-panel">
					<h3>Welcome <?php echo $_SESSION['name']; ?></h3>
					<table>
						<tr>
							<td><a href="#">View My Journal</a></td>
						</tr>
						<tr>
							<td><a href="#">Upload Journal</a></td>
						</tr>
						<tr>
							<td><a href="#">Change Profile</a></td>
						</tr>
						<tr>
							<td><a href="#">Change Password</a></td>
						</tr>
						<tr>
							<td><a href="logout.php">Logout</a></td>
						</tr>
					</table>
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