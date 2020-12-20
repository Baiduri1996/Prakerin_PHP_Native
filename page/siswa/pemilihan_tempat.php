<div class="col-md-12">
<h3 class="title">Data Perusahaan</h3>
<br>
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
		$a='Ya';
		$user=mysqli_num_rows(mysqli_query($koneksi,"select * from siswa_daftar where terverifikasi='$a' and nis='$nis' "));
		if($user > 0){
			$nis = $_SESSION['siswa_daftar']['nis'];
$query = $sql->query("SELECT * FROM siswa_daftar WHERE siswa_daftar.nis = '$nis' ");
	$data = $query->fetch_assoc();
	$jurus=$data['jurusan'];
$query = "SELECT * FROM perusahaan where kuota_tersedia>0 && jurusan='$jurus'";
$res = $sql->query($query);
?>
<!-- <hr> -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
    <table id="example" style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
		 <th style="text-align: center;">Kode perusahaan</th>
          <th style="text-align: center;">Nama</th>
          <th style="text-align: center;">Alamat</th>
		   <th style="text-align: center;">Jurusan</th>
          <th style="text-align: center;" >Kuota tersedia</th>
		   <th style="text-align: center;">MENU</th>
        </tr>
      </thead>
	  <?php 
       while ($data = $res->fetch_assoc()) { ?>
	   <tbody>
        <tr style="text-align: center;">
		 <td><?php echo $data['id_perusahaan']; ?></td>
          <td><?php echo $data['nama_perusahaan']; ?></td>
		  <td><?php echo $data['alamat_perusahaan']; ?></td>
		  <td><?php echo $data['jurusan']; ?></td>
		  
          
          <td><?php echo $data['kuota_tersedia']; ?></td>
          <td>
            <a href="index.php?content=<?php echo 'perusahaan_detail.php&id_perusahaan='.$data['id_perusahaan']; ?>">
              <img src='../../images/update.png' title='View Detail'></a>
            <a href="index.php?content=<?php echo 'pemilihan-tempat-aksi.php&type=perusahaan&id='.$data['id_perusahaan']; ?>">
              <img src='../../images/save.png' title='pilih tempat'></a>
          </td>
        </tr>
		<?php } ?>
      </tbody>
    </table>
  </div>
</div>

</div>

</div>
</div>
</div>

<script type="text/javascript">
$(document).on("click", ".open-detailPerusahaan", function () {
     var email = $(this).data('id');
     $(".modal-body #email").val( email );
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({
        "info": false
    });
} );

</script>
<?php
		}else{
			echo "<script> alert('Belum di verifikasi wali kelas')</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php?content=home.php'>";
		}?>