<?php
	include "../../koneksi.php";
		$Host = "localhost";
$username = "root";
$password = "";
$database = "prakerin";
$koneksi = new mysqli( $Host, $username, $password, $database );
if ($koneksi->connect_error){
echo 'Gagal koneksi ke database';
} else {
//koneksi berhsil
}
 $id_prakerin = $_GET['id'];
$user=mysqli_num_rows(mysqli_query($koneksi,"select * from nilai_sidang,nilai_laporan where nilai_sidang.id_prakerin='$id_prakerin' && nilai_laporan.id_prakerin='$id_prakerin'"));
		if($user > 0){
			echo "<script> alert('Telah input nilai')</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php?content=nilai_sidang.php'>";
		}else{ 
if($_SERVER['REQUEST_METHOD'] == "POST"){




 $id_penguji = $_SESSION['penguji']['id_penguji'];
 
	$nilai=$_POST['nilai'];
	$n_adaftasi=$_POST['n_adaftasi'];
	$n_aplikasi=$_POST['n_aplikasi'];
	$n_implementasi=$_POST['n_implementasi'];
	$c=$n_adaftasi+$n_aplikasi+$n_implementasi;
	$d=$c/3;
	$rataB=round($d);
	
	
	$n_penampilan=$_POST['n_penampilan'];
	$n_penyampaian=$_POST['n_penyampaian'];
	$e=$n_penampilan+$n_penyampaian;
	$f=$e/2;
	$rataC=round($f);
	$n_penguasaan=$_POST['n_penguasaan'];
	$n_menjawab=$_POST['n_menjawab'];
	$g=$n_penguasaan+$n_menjawab;
	$h=$g/2;
	$rataD=round($h);
	
	$carikode = mysqli_query($koneksi, "SELECT id_nl from nilai_laporan") or die (mysqli_error());
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
   $kode_otomatis = "NL".str_pad($kode, 3, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "NL001";
  }
  $carikode2 = mysqli_query($koneksi, "SELECT id_ns from nilai_sidang") or die (mysqli_error());
  // menjadikannya array
  $datakode2 = mysqli_fetch_array($carikode2);
  $jumlah_data2 = mysqli_num_rows($carikode2);
  // jika $datakode
  if ($datakode2) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode2 = substr($jumlah_data2[0], 1);
   // menjadikan $nilaikode ( int )
   $kode2 = (int) $nilaikode2;
   // setiap $kode di tambah 1
   $kode2 = $jumlah_data2 + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $kode_otomatis2 = "NS".str_pad($kode2, 3, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis2 = "NS001";
  }
  $sql->query("INSERT INTO nilai_laporan (id_nl,id_prakerin,id_penguji,nilaiA,n_adaftasi,n_aplikasi,n_implementasi,rata_rataB) 
  VALUES ('$kode_otomatis','$id_prakerin','$id_penguji','$nilai','$n_adaftasi','$n_aplikasi','$n_implementasi','$rataB')");
  
   $sql->query("INSERT INTO nilai_sidang (id_ns,id_prakerin,id_penguji,n_penampilan,n_penyampaian,n_penguasaan,n_menjawab,rata_rataC,rata_rataD) 
  VALUES ('$kode_otomatis2','$id_prakerin','$id_penguji','$n_penampilan','$n_penyampaian','$n_penguasaan','$n_menjawab','$rataC','$rataD')");
  echo "<script>alert('Data Nilai Berhasil Disimpan')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=nilai_sidang.php'>";
}
 ?>
<div class="col-md-12">
<h3 class="title" align="center">Input Nilai Laporan & Sidang</h3>
<br>
<!-- <hr> -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
	<div class="col-md-12 form-group">
	
		
	</div>
	<form method="POST">
		 <h3> Nilai Laporan</h3>
	 <table  style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
		 
          <th style="text-align: center;">No</th>
		  <th style="text-align: center;">Waktu yang<br>Dilaksanakan</th> 
          <th style="text-align: center;">Skor</th>
		  
		  <th style="text-align: center;">Nilai</th>
		
        </tr>
      </thead>
	  
      <tbody>
	
	  <?php $no=1; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td>0 - 50 Jam<br><hr>51 - 100 Jam<br><hr>101-200 Jam<br><hr>201 - 300 Jam<br><hr>301 - 400 Jam</td>
		   <td><5,00<br><hr>50 - 59<br><hr>60 - 69<br><hr>70 - 79<br><hr>80 - 90</td>
		   
		    <td><input class="form-control" type="text" style="height:250px" align="center" name="nilai" required /></td>
			
        </tr>
      
      </tbody>
	  
     </table>
	
	 <table  style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
		 
          <th style="text-align: center;">No</th>
		  <th style="text-align: center;">Tingkat Pelaksanaan</th> 
          <th style="text-align: center;">Skor</th>
		  <th style="text-align: center;">Hasil yang dicapai</th>
		  <th style="text-align: center;">Nilai Rata-rata<br> (B)</th>
		
        </tr>
      </thead>
	  
      <tbody>
	
	
	
		   <?php $no=2; ?>
	 
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td>Adaftasi<br><hr>Aplikasi<br><hr>Implementasi</td>
		   <td>70 - 80<br><hr>70 - 85<br><hr>70 - 90</td>
		   <td><input class="form-control" style="height:33px"  type="number" name="n_adaftasi" />
		   <br><input class="form-control" style="height:33px" type="number" name="n_aplikasi" />
		   <br><input class="form-control" style="height:33px" type="number" name="n_implementasi" />
		 </td>
		
		
		<th>Nilai Rata - Rata akan terhitung setelah simpan</th>
			
			
        </tr>

      </tbody>
     </table>
	 
	  </div>

</div>
</div>
</div>
	 <br>
	 <hr>
	 <br>
	 <div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
	<div class="col-md-12 form-group">
	
	
	<h3> Nilai Sidang</h3>
    <table  style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
		 
          <th style="text-align: center;">No</th>
		  <th style="text-align: center;">Performance</th> 
          <th style="text-align: center;">Skor</th>
		  <th style="text-align: center;">Hasil yang dicapai</th>
		  <th style="text-align: center;">Nilai Rata-rata<br>(C)</th>
		 
        </tr>
		
      </thead>
      <tbody>
	  <?php $no=1; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td>Penampilan<br><hr> Teknik Penyampaian</td>
		   <td>70 - 90<br><hr>70 - 90</td>
		   <td><input class="form-control" type="number" name="n_penampilan" id="n_penampilan" onchange="hasil2()" required />
		   <br><input class="form-control" type="number" name="n_penyampaian" id="n_penyampaian" onchange="hasil2()" required /></td>
			<th>Nilai Rata - Rata akan terhitung setelah simpan</th>
        </tr>
	 
      </tbody>
	  </table>
	  
	  <table  style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
	  
        <tr>
		 
          <th style="text-align: center;">No</th>
		  <th style="text-align: center;">Presentasi</th> 
          <th style="text-align: center;">Skor</th>
		  <th style="text-align: center;">Hasil yang dicapai</th>
		  <th style="text-align: center;">Nilai Rata-rata<br>(D)</th>
		
        </tr>
      </thead>
	  
      <tbody>
	
	  <?php $no=2; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td>Penguasaan Materi<br><hr> Menjawab Pertanyaan</td>
		   <td>70 - 90<br><hr>70 - 90</td>
		   <td><input class="form-control" type="text" name="n_penguasaan" required />
		  <br> <input class="form-control" type="text" name="n_menjawab" required /></td>
		
			
			</td>
			<th>Nilai Rata - Rata akan terhitung setelah simpan</th>
			
        </tr>
    
    </script> 
      </tbody>
	  
     </table>
<input type="submit" name="submit" value="Simpan Nilai" class="btn btn-default" /><br />
  </div>
</div>
		
</div>
		</form>
<?php } ?>
</div>
</div>
</div>


