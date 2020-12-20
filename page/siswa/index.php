<?php 
session_start();
	if(isset($_SESSION['siswa_daftar'])){
	include_once "../../koneksi.php";
	if(!isset($_GET['content'])){
		$vcontent='home.php';
	}
	else{
		$vcontent=$_GET['content'];
	} 
?>
<html>
<head>
	<title>Prakerin SMK BN 666</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="../../styles/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles/datatables.css">
	<link rel="shortcut icon" href="../../images/logo.png">

    <!-- <link href="css/full-slider.css" rel="stylesheet"> -->

	<script src="../../js/jquery.js"></script>
	  <!-- <script src="js/validator.js"></script>
	 <script src="tinymce/tinymce.min.js"></script> -->
</head>

<body>
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 sidebar" align="center">
					<?php
						$nis = $_SESSION['siswa_daftar']['nis'];
						$query = $sql->query("SELECT foto FROM siswa_daftar WHERE siswa_daftar.nis = '$nis' ");
						$data = $query->fetch_assoc();
					?>
					<img src="images/<?php echo $data['foto'] ?>" class="img-circle" width="90" height="90">
					<h5 class="name">
						<?php
						$nis = $_SESSION['siswa_daftar']['nis'];
						$query = $sql->query("SELECT nama_siswa FROM siswa_daftar WHERE siswa_daftar.nis = '$nis' ");
						$data = $query->fetch_assoc();
						echo $data['nama_siswa'];
						?>
					</h5>
					 <ul class="nav nav-pills nav-stacked" style="margin-top: 20px;" align="left">
					 	<li>
				        	<a href="index.php?content=<?php echo 'home.php'; ?>" class="font-menu" >
				        		<span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
				        </li>
				      
					 	<li>
				        	<a href="index.php?content=<?php echo 'pemilihan_tempat.php'; ?>" class="font-menu" >
				        		<span class="glyphicon glyphicon-education" aria-hidden="true"></span>Pemilihan Tempat</a>
				        </li>
						<li>
				        	<a href="index.php?content=<?php echo 'status_pemilihan_tempat.php'; ?>" class="font-menu" >
				        		<span class="glyphicon glyphicon-education" aria-hidden="true"></span>Status Pemilihan Tempat</a>
				        </li>
					 	<li>
				        	<a href="index.php?content=<?php echo 'agenda.php'; ?>" class="font-menu">
				        		<span class="glyphicon glyphicon-education" aria-hidden="true"></span>Agenda Harian</a>
				        </li>
						<li>
				        	<a href="index.php?content=<?php echo 'nilai-monitor.php'; ?>" class="font-menu">
				        		<span class="glyphicon glyphicon-education" aria-hidden="true"></span>Nilai Monitoring</a>
				        </li>
						<li>
				        	<a href="index.php?content=<?php echo 'nilai_akhir_siswa.php'; ?>" class="font-menu">
				        		<span class="glyphicon glyphicon-education" aria-hidden="true"></span>Nilai Akhir</a>
				        </li>
				       	<li>
				        	<a href="index.php?content=<?php echo 'edit-profile.php'; ?>" class="font-menu">
				        		<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Edit Profile</a>
				        </li>
				        
				        <li>
				        	<a href="index.php?content=<?php echo 'logout.php'; ?>" class="font-menu">
				        		<span class="glyphicon glyphicon-off" aria-hidden="true"></span>Logout</a>
				        </li>
				    </ul>
				</div>
				<div class="col-md-10 col-md-offset-2">
					<?php include $vcontent; ?>
				</div>
			</div>
		</div>
	</div>

<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/jquery.dataTables.min.js"></script>
<script src="../../js/dataTables.bootstrap.min.js"></script>
<!--<script>
	tinymce.init({selector:'textarea'});
</script>
-->
</body>
</html>
<?php
}else{
	//echo "<meta http-equiv='refresh' content='0;url=../../'>";
	echo "Gagal login<br>";
	echo "You don't have access to this page";
		echo "<a href='../../'>Kembali</a>";
}
?>