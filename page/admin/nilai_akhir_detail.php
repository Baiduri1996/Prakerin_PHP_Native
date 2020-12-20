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

		$id=$_GET['id'];
		$data = $sql->query(" SELECT * FROM nilai_laporan,nilai_sidang,nilai_perusahaan WHERE nilai_laporan.id_prakerin = '$id' && nilai_sidang.id_prakerin = '$id' && nilai_perusahaan.id_prakerin = '$id' ");
		$countDsn = mysqli_num_rows($data);
		
		
  $carikode = mysqli_query($koneksi, "SELECT id_na from nilai_akhir") or die (mysqli_error());
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
   $kode_otomatis = "NA".str_pad($kode, 3, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "NA001";
  }
  
  if($_SERVER['REQUEST_METHOD'] == "POST"){
	  
	  $sip = $data->fetch_assoc();
		$id_nl= $sip['id_nl'];
		$id_np= $sip['id_np'];
		$id_ns= $sip['id_ns'];
	  $na=$_POST['nilai_akhir'];
	  $user=mysqli_num_rows(mysqli_query($koneksi,"select * from nilai_akhir where nilai_akhir.id_nl='$id_nl' && nilai_akhir.id_np='$id_np' && nilai_akhir.id_ns='$id_ns'"));
		if($user > 0){
			echo "<script> alert('Telah input nilai')</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php?content=nilai_akhir.php'>";
		}else{ 
		$sql->query("INSERT INTO nilai_akhir (id_na,id_prakerin,id_np,id_nl,id_ns,nilai_akhir) 
  VALUES ('$kode_otomatis','$id','$id_np','$id_nl','$id_ns','$na')");
    echo "<script>alert('Data Nilai Akhir Berhasil Disimpan')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=nilai_akhir.php'>";
  }
  }
?>
<div class="col-md-12">
<h3 class="title" align="center">NILAI SISWA</h3>
<br>
<!-- <hr> -->
<?php if($countDsn > 0){
        while($dataDsn = $data->fetch_assoc()){
		$nilaiA = $dataDsn['nilaiA'];
		$nilaiB = $dataDsn['rata_rataB'];
		$nilaiC = $dataDsn['rata_rataC'];
		$nilaiD = $dataDsn['rata_rataD'];
		$nilai_perusahaan = $dataDsn['nilaiP'];
		$nilai_laporana=($nilaiA+$nilaiB)/2;
		$nilai_sidangb=($nilaiC+$nilaiD)/2;
		$nilai_laporan=round($nilai_laporana);
		$nilai_sidang= round($nilai_sidangb);
		$hitung= ($nilai_laporan * 0.2) + ($nilai_sidang * 0.2) + ($nilai_perusahaan * 0.6) ;
		$nilai_akhir= round($hitung);
			?>
			<form method="POST">
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
	<div class="col-md-12 form-group">
	
		
	
	
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
		   
		    <td><?php echo $dataDsn['nilaiA'] ?></td>
			
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
		   <td><?php echo $dataDsn['n_adaftasi'] ?> <hr> 
		   <?php echo $dataDsn['n_aplikasi'] ?><hr>
		   <?php echo $dataDsn['n_implementasi'] ?><hr>
		 </td>
		<td ><?php echo $dataDsn['rata_rataB']?></td>
		
			
        </tr>

      </tbody>
     </table>
	 	
	  </div>

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
		   <td><?php echo $dataDsn['n_penampilan'] ?>
		   <hr><?php echo $dataDsn['n_penyampaian'] ?></td>
			<td><?php echo $dataDsn['rata_rataC'] ?></td>
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
		   <td><?php echo $dataDsn['n_penguasaan'] ?>
		  <hr> <?php echo $dataDsn['n_menjawab'] ?></td>
		
			
			</td>
			<td><?php echo $dataDsn['rata_rataD'] ?></td>
			
        </tr>
    
    </script> 
      </tbody>
	  
     </table>

  </div>
</div>
		
</div>
		
</div>
</div>

	 <div class="row">
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
	<div class="col-md-12 form-group">
	<h3> Nilai Perusahaan</h3><br>
	
		<label>Unit Kerja : </label>
		<?php echo $dataDsn['unit_kerja'] ?>
	
	
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
        <td> <?php echo $dataDsn['p1'] ?>
        </td>
        </tr>
       
      </tbody>
	   <tbody>
	  <?php $no=2; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td>Kehadiran dan Disiplin</td>
        <td>  <?php echo $dataDsn['p2'] ?>
        </td>
        </tr>
       
      </tbody>
	    <tbody>
	  <?php $no=3; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Inisiatif dan Kreativitas<br>
		  (kemajuan Belajar)</p></td>
		 <td><?php echo $dataDsn['p3'] ?>
         </td>
        
        </tr>
       
      </tbody>
	    <tbody>
	  <?php $no=4; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Inisiatif dan Kreativitas<br>
		  (kemajuan Belajar)</p></td>
		  <td>
        <?php echo $dataDsn['p4'] ?>
         </td>
        
        </tr>
       
      </tbody>
	     <tbody>
	  <?php $no=5; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Tanggung Jawab</p></td>
		  <td>
           <?php echo $dataDsn['p5'] ?>
         </td>
  
        </tr>
       
      </tbody>
	     <tbody>
	  <?php $no=6; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Sikap</p></td>
		  
        <td>  <?php echo $dataDsn['p6'] ?>
         </td>
        
        </tr>
       
      </tbody>
	   <tbody>
	  <?php $no=7; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Nilai</p></td>
		  
        <td>
		  <?php echo $dataDsn['nilaiP'] ?>
         </td>
		 
		
		  
        
        </select>
        </tr>

      </tbody>
    </table>
	</div>
</div>
</div>
</div>
</div>
	
		 <div class="row">	 
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
	<div class="col-md-12 form-group">
	<h3> Nilai Akhir Siswa Prakerin</h3><br>

	
    <table  style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
		 
          <th style="text-align: center;">No</th>
		  <th style="text-align: center;">Komponen yang dinilai</th> 
          <th style="text-align: center;">Nilai</th>
        
        </tr>
      </thead>
      <tbody>
	  
        <tr style="text-align: center;">
          <td>I</td>
		   <td>Nilai Laporan</td>
        <td> <?php echo $nilai_laporan ?>
        </td>
        </tr>
       
      </tbody>
	   <tbody>
	
	  
        <tr style="text-align: center;">
          <td>II</td>
		   <td>nilai Sidang</td>
        <td>  <?php echo $nilai_sidang ?>
        </td>
        </tr>
       
      </tbody>
	    <tbody>
	 
	  
        <tr style="text-align: center;">
          <td>III</td>
		   <td>Nilai Perusahaan</td>
		 <td><?php echo $nilai_perusahaan ?>
         </td>
        
        </tr>
       
      </tbody>
	    <tbody>
	  
	  
        <tr style="text-align: center;">
          <td></td>
		   <td><b>NILAI AKHIR PRAKERIN</B> <br> <br>(0,2 x I)+(0,2 x II)+(0,6 + III)</td>
		  <td align="center">
       <input class="form-control" type="text" align="center" name="nilai_akhir" value="<?php echo $nilai_akhir ?>" readonly /> 
         </td>
        
        </tr>
       
      </tbody>
	    
        </tr> <br>
		
</form>
      </tbody>

    </table>
		  <input type="submit" name="submit" value="Simpan Nilai" class="btn btn-default" /><br />
	<?php } }else{
        echo "<tr>
        <td colspan='12' align='center' height='20'>
        <div> Belum Ada Data </div></td>
        </tr>";
    }?>

</div>
</div>
</div>
</div>
</div>


