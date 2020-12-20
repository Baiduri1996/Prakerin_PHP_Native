<script src="../../tinymce/tinymce.min.js"></script>
<script>
	tinymce.init({ selector:'textarea', height : "200" });
</script>
<?php

	$Host = "localhost";
$username = "root";
$password = "";
$database = "prakerin";
$koneksi = new mysqli( $Host, $username, $password, $database );
if ($koneksi->connect_error){
echo 'Gagal koneksi ke database';
} else{
//koneksi berhsil
}
		$nis = $_SESSION['siswa_daftar']['nis'];
		$tgl = date('Y-m-d');
		$user=mysqli_num_rows(mysqli_query($koneksi,"select * from agenda where tgl_agenda='$tgl' and nis='$nis'"));
		if($user > 0){
			echo "<script> alert('Hari ini anda telah mengisi agenda')</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php?content=home.php'>";
		}else{ ?>
			
			
<div class="col-md-12">
<h3 class="title">Input Agenda harian</h3>


<!-- Form Input Lowongan Kerja -->
<form method="post" action="<?php echo "agenda-aksi.php"; ?>"  data-toggle="validator" enctype="multipart/form-data">
	<div class="form-group">
		<label for="">Isi Agenda</label>
		<textarea class="form-control" name="agenda"></textarea>
	</div>
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Post</button>
		<button type="reset" class="btn btn-warning">Clear</button>
</form>
<br>
</div>
<?php
		}
		
		?>