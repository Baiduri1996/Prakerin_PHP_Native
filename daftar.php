<?php
	include_once "koneksi.php";
	session_start();
?>
<title>Alumni SMK BN 666</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles/datatables.css">
    <link href="styles/full-slider.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/logo.png">

	<script src="js/jquery.js"></script>
	<script src="js/validator.js"></script>
	</title>
<div class="container">
<div class="row">
<div class="col-md-12" >
	<!-- <div class="container"> -->
	<h3 class="title-big" align="center">Pendaftaran Prakerin</h3>
	<?php 
	if(isset($_SESSION['message'])){ ?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<?php echo $_SESSION['message']; ?></div>
	<?php
		unset($_SESSION['message']);
	}
	?>
<form method="post" align="left" enctype="multipart/form-data" role="form" action="index.php?content=<?php echo 'aksi-daftar.php'; ?>">
	<div class="col-md-12 form-group">
		<label>Nama Lengkap</label>
		<input class="form-control" type="text" name="NAMA" onkeyup="this.value = this.value.toUpperCase()" required />
	</div>
	<div class="col-md-12 form-group">
		<label>NIS</label>
		<input class="form-control" type="number" name="NIS" required />
	</div>
	<div class="col-md-12 form-group">
		<label>Jenis Kelamin</label>
		<div></div>
		<label class="radio-inline" style="padding-left: 30">
        <input type="radio" name="JENIS_KELAMIN" value="Laki - Laki" checked>Laki - Laki</label>
        <label class="radio-inline">
        <input type="radio" name="JENIS_KELAMIN" value="Perempuan">Perempuan</label>         
	</div>
	<div class="col-md-12 form-group">
		<label>Tempat Lahir</label>
		<input class="form-control" type="text" name="TEMPAT_LAHIR" required />
	</div>
	<div class="col-md-6 form-group">
	    <label>Tanggal Lahir</label>
	    <input class="form-control" type="date" name="TANGGAL_LAHIR" required />
  	</div>
	<div class="col-md-12 form-group">
		<label for="Agama">Agama</label>
		<select name="agama" class="form-control">
            <option value="Islam"> Islam </option>  
            <option value="Kristen" >Kristen</option>
            <option value="Katolik" >Katolik</option>  
            <option value="Hindu" >Hindu</option>
            <option value="Buddha" >Buddha</option>    
        </select>
	</div>
	<div class="col-md-12 form-group">
		<label>Alamat</label>
		<textarea class="form-control" name="ALAMAT" required ></textarea>
	</div>
	<div class="col-md-6 form-group">
		<label>No. Telp.</label>
		<input class="form-control" type="number" name="NO_TELP" required />
	</div>
	<div class="col-md-12 form-group">
		<label>Password</label>
		<input class="form-control" type="password" name="PASSWORD" required />
	</div>
	<div class="col-md-6 form-group">
		<label>Kode Pos</label>
		<input class="form-control" type="number" name="kodepos" required />
	</div>
	<div class="col-md-6 form-group">
		<label>Foto</label>
		<input type="file" name="foto"/>
	</div>
	<div class="col-md-12 form-group">
		<button type="submit" class="btn btn-primary">Kirim</button>
		<input class="btn btn-warning" type="reset" value="Clear">
	</div>
</form>

</div>
</div>
</div>