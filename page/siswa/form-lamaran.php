<h3 class="title">Form Lamar Pekerjaan</h3>

	<?php
		$nis = $_SESSION['alumni']['NIS'];
		$id = $_GET['id'];
		$query = $sql->query("SELECT * FROM alumni WHERE alumni.NIS = '$nis'");
		while($getResultQuery=$query->fetch_assoc()){
	?>
	<div class="col-md-12">
		<h6 class="header-job header-success">Personal information</h6>
	</div>
<form method="post" action="index.php?content=<?php echo 'add-lamaran.php&id='.$id;?>" data-toggle="validator" role="form" enctype="multipart/form-data">
	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>Nama Lengkap</label>
		<input class="form-control" type="text" name="NAMA" value="<?php echo $getResultQuery['NAMA'] ?>" required/>
	</div>
	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
	    <label>Tanggal Lahir</label>
	    <input class="form-control" type="date" name="TANGGAL_LAHIR" value="<?php echo $getResultQuery['TANGGAL_LAHIR'] ?>" required/>
  	</div>
	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>Tempat Lahir</label>
		<input class="form-control" type="text" name="TEMPAT_LAHIR" value="<?php echo $getResultQuery['TEMPAT_LAHIR'] ?>" required/>
	</div>
	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>Jenis Kelamin</label>
		<div></div>
			<label class="radio-inline" style="padding-left: 30">
            <input type="radio" name="JENIS_KELAMIN" value="Laki - Laki" <?PHP if($getResultQuery['JENIS_KELAMIN']=="Laki - Laki") echo"checked"; ?>>Laki - Laki
            </label>
            <label class="radio-inline">
            <input type="radio" name="JENIS_KELAMIN" value="Perempuan" <?php if($getResultQuery['JENIS_KELAMIN']=="Perempuan") echo"checked"; ?>>Perempuan
            </label>         
	</div>
	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>Tinggi Badan</label>
		<input class="form-control" type="text" name="TINGGI_BADAN" required/>
	</div>
	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>Status Pernikahan</label>
		<div></div>
			<label class="radio-inline" style="padding-left: 30">
            <input type="radio" name="STATUS_PERNIKAHAN" value="Belum Menikah" checked>Belum Menikah</label>
            <label class="radio-inline">
            <input type="radio" name="STATUS_PERNIKAHAN" value="Menikah">Menikah</label>         
	</div>
	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>Agama</label>
		<select name="AGAMA" class="form-control">
            <option value="Islam" selected>Islam</option>  
            <option value="Protestan">Protestan</option>
            <option value="Katolik">Katolik</option>  
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option> 
        </select>
	</div>

	<div class="col-md-12">
		<h6 class="header-job header-success">Contact</h6>
	</div>

	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>No. Telp.</label>
		<input class="form-control" type="text" name="NO_TELP" value="<?php echo $getResultQuery['NO_TELP'] ?>" />
	</div>
	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>Email</label>
		<input class="form-control" type="email" name="EMAIL" value="<?php echo $getResultQuery['EMAIL'] ?>" />
	</div>
	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>Alamat Lengkap</label>
		<textarea class="form-control" name="ALAMAT"><?php echo $getResultQuery['ALAMAT'] ?></textarea>
	</div>

	<div class="col-md-12">
		<h6 class="header-job header-success">Extra questions</h6>
	</div>

	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>Pengalaman Berorganisasi</label>
		<textarea class="form-control" name="PENGALAMAN"></textarea>
	</div>
	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>Pas Foto</label>
		<input type="file" name="PAS_FOTO"/>
	</div>
	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>Foto KTP</label>
		<input type="file" name="FOTO_KTP"/>
	</div>
	<div class="col-md-12 form-group" style="padding-left: 30px; padding-right: 30px;">
		<label>Foto Ijazah</label>
		<input type="file" name="FOTO_IJAZAH"/>
	</div>

	

	<?php
		}
	?>

	<div class="col-md-12 form-group">
		<button type="submit" class="btn btn-primary">Kirim Lamaran</button>
		<a href="index.php?content=<?php echo 'info-loker.php'; ?>" class="btn btn-warning">Cancel</a>
	</div>

</form>