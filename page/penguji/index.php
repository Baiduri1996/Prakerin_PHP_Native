<?php 
session_start();
if(isset($_SESSION['penguji'])){
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
					<br>
					<br>
					<br>
					<br>
					<h5 class="name">
						<?php
						$nip = $_SESSION['penguji']['nip'];
						$query = $sql->query("SELECT nama FROM penguji WHERE penguji.nip = '$nip' ");
						$data = $query->fetch_assoc();
						echo $data['nama'];
						?>
					</h5>
					 <ul class="nav nav-pills nav-stacked" style="margin-top: 20px;" align="left">
					 	<li>
				        	<a href="index.php?content=<?php echo 'home.php'; ?>" class="font-menu" >
				        		<span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
				        </li>
					 	<li>
				        	<a href="index.php?content=<?php echo 'nilai_sidang.php'; ?>" class="font-menu" >
				        		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>List Siswa</a>
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