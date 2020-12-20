<?php 
session_start();
if(isset($_SESSION['admin'])){
	include_once "../../koneksi.php";
	if(!isset($_GET['content'])){
		$vcontent='home.php';
	}
	else{
		$vcontent=$_GET['content'];
	} ?>
<html>
<head>
	<title>Prakerin SMK BN 666</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="../../styles/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles/datatables.css">	
	<link rel="stylesheet" type="text/css" href="styles/admin-page-style.css">
	<link rel="shortcut icon" href="../../images/logo.png">
	
<script src="../../tinymce/tinymce.min.js"></script>
	
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
						$nip = $_SESSION['admin']['nip'];
						$query = $sql->query("SELECT foto FROM admin WHERE admin.nip = '$nip' ");
						$data = $query->fetch_assoc();
					?>
					<img src="images/<?php echo $data['foto'] ?>" class="img-circle" width="90" height="90">
					<h5 class="name">
						<?php
						$nip = $_SESSION['admin']['nip'];
						$query = $sql->query("SELECT nama FROM admin WHERE admin.nip = '$nip' ");
						$data = $query->fetch_assoc();
						echo $data['nama'];
						?>
					</h5>
					 <ul class="nav nav-pills " style="margin-top: 20px;" align="center">
					 	
					 	<li>
				        	<a href="index.php?content=<?php echo 'list-siswa.php'; ?>" class="font-menu" >
				        		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>List Siswa Terdaftar</a>
				        </li>
				        <li>
				        	<a href="index.php?content=<?php echo 'sr.php'; ?>" class="font-menu">
				        		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>Siswa terverifikasi walikelas</a>
				        </li>
				        <li>
				        	<a href="index.php?content=<?php echo 'list-perusahaan.php'; ?>" class="font-menu" >
				        		<span class="glyphicon glyphicon-education" aria-hidden="true"></span>list perusahaan</a>
				        </li>
				        <li>
				        	<a href="index.php?content=<?php echo 'acc-tempat.php'; ?>" class="font-menu">
				        		<span class=" glyphicon glyphicon-check" aria-hidden="true"></span>siswa tempat</a>
					 	</li>
					 	<li>
				        	<a href="index.php?content=<?php echo 'agenda-siswa.php'; ?>" class="font-menu">
				        		<span class=" glyphicon glyphicon-check" aria-hidden="true"></span>Agenda Siswa</a>
					 	</li>
						<li>
				        	<a href="index.php?content=<?php echo 'list-monitoring.php'; ?>" class="font-menu">
				        		<span class=" glyphicon glyphicon-check" aria-hidden="true"></span>Monitoring</a>
					 	</li>
					 	<li>
				        	<a href="index.php?content=<?php echo 'nilai-perusahaan.php'; ?>" class="font-menu" >
				        		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>Nilai Perusahaan</a>
				        </li>
						<li>
				        	<a href="index.php?content=<?php echo 'nilai_akhir.php'; ?>" class="font-menu" >
				        		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>Nilai Akhir</a>
				        </li>
						<li>
				        	<a href="index.php?content=<?php echo 'laporan-pengajuan.php'; ?>" class="font-menu" >
				        		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>Cetak Surat Pengajuan</a>
				        </li>
						<li>
				        	<a href="index.php?content=<?php echo 'laporan-nilai-akhir.php'; ?>" class="font-menu" >
				        		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>Cetak Nilai Akhir Siswa</a>
				        </li>
						<li>
				        	<a href="index.php?content=<?php echo 'master-prakerin.php'; ?>" class="font-menu" >
				        		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>Data Master Siswa</a>
				        </li>
				        <li>
				        	<a href="index.php?content=<?php echo 'logout.php'; ?>" class="font-menu">
				        		<span class="glyphicon glyphicon-off" aria-hidden="true"></span>Logout</a>
				        </li>
				    </ul>
				</div>
				<div class="col-md-10 col-md-offset-2">
				<?php  include $vcontent; ?>
				</div>
			</div>
		</div>
	</div>
 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/datatables.min.js"></script>
	<script>
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
	</script>
	<script>
    $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
</script>
<!--<script>
	tinymce.init({selector:'textarea'});
</script>
-->
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/jquery.dataTables.min.js"></script>
<script src="../../js/dataTables.bootstrap.min.js"></script>
</body>
</html>
<?php
}else{
	//echo "<meta http-equiv='refresh' content='0;url=../../'>";
	echo "Gagal login<br>";
	echo "You don't have access to this page";
		echo "<a href='../../'>Kembali</a>";
}