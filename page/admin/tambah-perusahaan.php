<script src="../../tinymce/tinymce.min.js"></script>
<script>
	tinymce.init({ selector:'textarea', height : "200" });
</script>

<div class="col-md-12">
<h3 class="title">Tambah Perusahaan</h3>

<form method="post" role="form" action="<?php echo "add-perusahaan.php" ?>"  data-toggle="validator" enctype="multipart/form-data">

	<div class="form-group">
		<label>Nama perusahaan</label>
		<input class="form-control " type="text" name="nama">
	</div>
	<div class="form-group">
		<label>No Telp</label>
		<input class="form-control" type="text" name="no_telp">
	</div>
	<div class="form-group" >
		<label>Alamat Perusahaan</label>
		<input class="form-control" type="text" name="alamat">
	</div>
	<div class=" form-group">
		<label>Jurusan</label>
		<select name="jurusan" class="form-control">
            <option value="Akuntansi" selected>Akuntansi</option>  
            <option value="Animasi">Animasi</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>  
            <option value="Pemasaran">Pemasaran</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>    
        </select>
	</div>
  	<div class="form-group col-md-3" style="padding-left: 0">
	    <label>Limit Siswa Daftar</label>
	    <input type="text" class="form-control" name="limit">
  	</div>

	<div class="form-group col-md-12" style="padding-left: 0">
		<button type="submit" class="btn btn-primary">Simpan</button>
		<button type="reset" class="btn btn-warning">Clear</button>
</form>
<br>
</div>