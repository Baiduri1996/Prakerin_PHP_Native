<h3 class="title">Edit Profile</h3>

	<?php
		$nis = $_SESSION['siswa_daftar']['nis'];
		$query = $sql->query("SELECT * FROM siswa_daftar WHERE siswa_daftar.nis = '$nis'");
		while($getResultQuery=$query->fetch_assoc()){
	?>
	<br>
<form method="post" action="index.php?content=<?php echo 'aksi-edit.php'?>" data-toggle="validator" role="form" enctype="multipart/form-data">
	<div class="col-md-12 form-group">
		<label for="NAMA">Nama Lengkap</label>
		<input class="form-control" type="text" name="NAMA" value="<?php echo $getResultQuery['nama_siswa'] ?>" required/>
	</div>
	<div class="col-md-12 form-group">
		<label for="NIS">NIS</label>
		<input class="form-control" type="text" name="nis" value="<?php echo $getResultQuery['nis'] ?>" disabled />
	</div>
	<div class="col-md-12 form-group">
		<label for="JENIS_KELAMIN">Jenis Kelamin</label>
		<div></div>
			<label class="radio-inline" style="padding-left: 30">
            <input type="radio" name="JENIS_KELAMIN" value="Laki - Laki" <?PHP if($getResultQuery['jk']=="Laki - Laki") echo"checked"; ?>>Laki - Laki
            </label>
            <label class="radio-inline">
            <input type="radio" name="JENIS_KELAMIN" value="Perempuan" <?php if($getResultQuery['jk']=="Perempuan") echo"checked"; ?>>Perempuan
            </label>         
	</div>
	<div class="col-md-12 form-group">
		<label for="TEMPAT_LAHIR">Tempat Lahir</label>
		<input class="form-control" type="text" name="TEMPAT_LAHIR" value="<?php echo $getResultQuery['tempat_lahir'] ?>" />
	</div>
	<div class="col-md-12 form-group">
	    <label for="TANGGAL_LAHIR">Tanggal Lahir</label>
	    <input class="form-control" type="date" name="TANGGAL_LAHIR" value="<?php echo $getResultQuery['tanggal_lahir'] ?>" required />
  	</div>
	<div class="col-md-6 form-group">
		<label for="agama">Agama</label>
		<input class="form-control" type="text" name="agama" value="<?php echo $getResultQuery['agama'] ?>" />
	</div>
	
	<div class="col-md-12 form-group">
		<label for="JURUSAN">Jurusan</label>
		<select name="JURUSAN" class="form-control">
            <option value="Akuntansi" <?PHP if($getResultQuery['jurusan']=='Akuntansi')echo"selected";?>>Akuntansi</option>  
            <option value="Animasi" <?PHP if($getResultQuery['jurusan']=='Animasi')echo"selected";?>>Animasi</option>
            <option value="Desain Komunikasi Visual" <?PHP if($getResultQuery['jurusan']=='Desain Komunikasi Visual')echo"selected";?>>Desain Komunikasi Visual</option>  
            <option value="Pemasaran" <?PHP if($getResultQuery['jurusan']=='Pemasaran')echo"selected";?>>Pemasaran</option>
            <option value="Rekayasa Perangkat Lunak" <?PHP if($getResultQuery['jurusan']=='Rekayasa Perangkat Lunak')echo"selected";?>>Rekayasa Perangkat Lunak</option>    
        </select>
	</div>
	<div class="col-md-6 form-group">
		<label for="kelas">Kelas</label>
		<input class="form-control" type="text" name="kelas" value="<?php echo $getResultQuery['kelas'] ?>"  />
	</div>
	<div class="col-md-12 form-group">
		<label for="ALAMAT">Alamat</label>
		<textarea class="form-control" name="ALAMAT"><?php echo $getResultQuery['alamat'] ?></textarea>
	</div>
	<div class="col-md-6 form-group">
		<label for="NO_TELP">No. Telp.</label>
		<input class="form-control" type="text" name="NO_TELP" value="<?php echo $getResultQuery['no_hp'] ?>" />
	</div>
	<div class="col-md-12 form-group">
		<label for="PASSWORD">Password</label>
		<input class="form-control" type="text" name="PASSWORD" value="<?php echo $getResultQuery['password'] ?>" required/>
	</div>

	<?php
        }
    ?>
	<div class="col-md-12 form-group">
		<button type="submit" class="btn btn-primary">Update</button>
		<a href="index.php?content=<?php echo 'home.php'; ?>" class="btn btn-warning">Cancel</a>
	</div>

</form>
