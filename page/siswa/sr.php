<?php
	include_once "../../koneksi.php";
	if (!isset($_SESSION)) {
    session_start();
}
?>
<title>Alumni SMK BN 666</title>

	</title>
<div class="container">
<div class="row">
<div class="col-md-12" >
	<!-- <div class="container"> -->
	<h3 class="title-big" align="center">Upload Surat Rekomendasi walikelas</h3>
	
<form method="post" align="left" enctype="multipart/form-data" role="form" action="index.php?content=<?php echo 'aksi-sr.php'; ?>">
	
	<div class="col-md-6 form-group">
	<hr>
	<br>
		<label>Surat rekomendasi walikelas,</label>
		<label>file dalam bentuk pdf</label>
		<input type="file" name="sr"/>
	</div>
	<div class="col-md-12 form-group">
		<button type="submit" name="save" class="btn btn-primary">Kirim</button>
		<input class="btn btn-warning" type="reset" value="Clear">
	</div>
</form>

</div>
</div>
</div>