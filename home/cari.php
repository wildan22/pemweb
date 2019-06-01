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


<?php
if(isset($_POST['cari-jurnal'])){
	$judul = $_POST['judul-jurnal'];
	$kategori = $_POST['kategori-jurnal'];
	$year = $_POST['tahun-jurnal'];
}
else{
	$judul = "";
	$kategori = "";
	$year = "";
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
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

				<!-- FILTER BOX -->
				<div class="filter">
					<form action="cari.php" method="POST">
						<h2>Filter</h2>
						<table class="search-box">
							<tr><h3>Search</h3></tr>
							<tr><input type="text" name="tittle"></tr>
						</table>
						<table class="terbitan">
							<tr><h3>Terbitan</h3></tr>
							<tr>
								<input type="radio" name="jenis-jurnal" value="national">
								National<br>
							</tr>
							<tr>
								<input type="radio" name="jenis-jurnal" value="international">
								International
							</tr>
						</table>
						<table class="category">
							<tr><h3>Category</h3></tr>
							<tr><input type="radio" name="category-jurnal" value="computer-science">Computer Science</tr><br>
							<tr><input type="radio" name="category-jurnal" value="biology">Biology</tr><br>
							<tr><input type="radio" name="category-jurnal" value="physics">Physics</tr><br>
							<tr><input type="radio" name="category-jurnal" value="chemistry">Chemistry</tr><br>
							<tr><input type="radio" name="category-jurnal" value="sociology">Sociology</tr><br>
						</table>
						<table class="year">
							<tr><h3>Publication Year</h3></tr>
							<tr><input type="radio" name="publication-year" value="2019">2019</tr><br>
							<tr><input type="radio" name="publication-year" value="2018">2018</tr><br>
							<tr><input type="radio" name="publication-year" value="2017">2017</tr><br>
							<tr><input type="radio" name="publication-year" value="2016">2016</tr><br>
							<tr><input type="radio" name="publication-year" value="2015">2015</tr><br>
						</table>
						<table class="submit">
							<input type="submit" name="cari" value="Search">
						</table>
					</form>
				</div>
			</div>
			<!-- END OF LEFT -->


			<!-- MIDDLE -->
			<div class="middle">
				<div class="favorit-jurnal">
					<a>Showing Result :</a><?php echo $judul?>
					<?php
						$query = "SELECT * FROM local WHERE title LIKE '%$judul%' AND tahun LIKE '%$year%' LIMIT 10";
						$result = mysqli_query($conn_sub1,$query);
						$total_row = mysqli_num_rows($result);
						if($total_row >0){
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
							echo "Sorry, no result found";
						}
						
					?>
				</div>
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