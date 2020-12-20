<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
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

// membaca kode barang terbesar
$carikode = mysqli_query($koneksi, "SELECT id_np from nilai_perusahaan") or die (mysqli_error());
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  $jumlah_data = mysqli_num_rows($carikode);
  // jika $datakode
  if ($datakode) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($jumlah_data[0], 1);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $jumlah_data + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $kode_otomatis = "NP".str_pad($kode, 3, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "NP001";
  }
 
$id_prakerin=$_GET['id'];
$unit = $_POST['unit'];
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];
$p6 = $_POST['p6'];
$nilaiP=$_POST['nilaiP'];
$insert1 = $sql->query("INSERT INTO nilai_perusahaan (id_np,id_prakerin,unit_kerja,p1,p2,p3,p4,p5,p6,nilaiP) 
VALUES ('$kode_otomatis','$id_prakerin','$unit','$p1','$p2','$p3','$p4','$p5','$p6','$nilaiP')");
if($insert1){
	echo "<script> alert('Nilai Berhasil Disimpan')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=nilai-perusahaan.php'>";
} else{
	echo "<script> alert('Nilai Gagal Disimpan')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=nilai-perusahaan.php'>";
}
}
?>
<div class="col-md-12">
<h3 class="title">Input Nilai Perusahaan</h3>
<br>
<!-- <hr> -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
	<div class="col-md-12 form-group">
	<form method="POST">
		<label>Unit Kerja</label>
		<input class="form-control" type="text" name="unit" required />
	</div>
    <table  style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
		 
          <th style="text-align: center;">No</th>
		  <th style="text-align: center;">Komponen yang dinilai</th> 
          <th style="text-align: center;">Nilai</th>
        
        </tr>
      </thead>
      <tbody>
	  <?php $no=1; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td>Prestasi Kerja</td>
        <td>  <select name="p1" class="form-control">
            <option value="Sangat Baik" selected>Sangat Baik</option>  
            <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>  
            <option value="Kurang">Kurang</option>
         
        </select>
        </td>
        </tr>
       
      </tbody>
	   <tbody>
	  <?php $no=2; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td>Kehadiran dan Disiplin</td>
        <td>  <select name="p2" class="form-control">
              <option value="Sangat Baik" selected>Sangat Baik</option>  
            <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>  
            <option value="Kurang">Kurang</option>
         
        </select>
        </td>
        </tr>
       
      </tbody>
	    <tbody>
	  <?php $no=3; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Inisiatif dan Kreativitas<br>
		  (kemajuan Belajar)</p></td>
		 <td><select name="p3" class="form-control">
           <option value="Sangat Baik" selected>Sangat Baik</option>  
            <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>  
            <option value="Kurang">Kurang</option>
         </td>
        </select>
        </tr>
       
      </tbody>
	    <tbody>
	  <?php $no=4; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Inisiatif dan Kreativitas<br>
		  (kemajuan Belajar)</p></td>
		  <td>
         <select name="p4" class="form-control">
           <option value="Sangat Baik" selected>Sangat Baik</option>  
            <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>  
            <option value="Kurang">Kurang</option>
         </td>
        </select>
        </tr>
       
      </tbody>
	     <tbody>
	  <?php $no=5; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Tanggung Jawab</p></td>
		  <td>
         <select name="p5" class="form-control">
            <option value="Sangat Baik" selected>Sangat Baik</option>  
            <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>  
            <option value="Kurang">Kurang</option>
         </td>
        </select>
        </tr>
       
      </tbody>
	     <tbody>
	  <?php $no=6; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Sikap</p></td>
		  
        <td><select name="p6" class="form-control">
          <option value="Sangat Baik" selected>Sangat Baik</option>  
            <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>  
            <option value="Kurang">Kurang</option>
         </td>
        </select>
        </tr>
       
      </tbody>
	   <tbody>
	  <?php $no=7; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Nilai</p></td>
		  
        <td>
		<input class="form-control" type="text" name="nilaiP" required />
         </td>
        </select>
        </tr>
       
      </tbody>
    </table>
   <button type="submit" name="submit" value="kirim" class="btn btn-default">Tambah Nilai</button></a>
  </div>
</div>
</form>
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