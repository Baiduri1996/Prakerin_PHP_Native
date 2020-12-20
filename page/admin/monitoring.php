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

		
		
		
		
  $carikode = mysqli_query($koneksi, "SELECT no from nilai_monitoring") or die (mysqli_error());
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
   $kode_otomatis = "".str_pad($kode, 0, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "1";
  }
  error_reporting(0);
  if($_SERVER['REQUEST_METHOD'] == "POST"){
	  
		$id=$_GET['id'];
		$tgl=$_POST['tgl'];
		$keterampilan= $_POST['keterampilan'];
		$kompetensi= $_POST['kompetensi'];
	  $adp=$_POST['adp'];
	  $apl=$_POST['apl'];
	  $imp=$_POST['imp'];
	  
		$insert=$sql->query("INSERT INTO nilai_monitoring (id_prakerin,no,tgl_monitoring,keterampilan,kompetensi,adp,apl,imp) 
  VALUES ('$id','$kode_otomatis','$tgl','$keterampilan','$kompetensi','$adp','$apl','$imp')");
    
	if($insert){
		echo "<script> alert('Berhasil Disimpan')</script>";
		echo "<meta http-equiv='refresh' content='0;url=index.php?content=list-monitoring.php'>";
	}else{
		echo "<script> alert('Inputan Salah')</script>";
		echo "<meta http-equiv='refresh' content='0;url=index.php?content=list-monitoring.php'>";
	}	
  }
  
?>
<div class="col-md-12">
<h3 class="title" align="center">SINKRONISASI DAN KETERLAKSANAAN AKTIVITAS</h3>
<br>
<!-- <hr> -->
			
			<div class="col-lg-12 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                <br>
                <?php
				 $id=$_GET['id'];
                    $query1 = $sql->query("SELECT a.id_prakerin, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan,c.alamat_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where a.status='DITERIMA' && a.id_prakerin='$id' ");  
	$dataDsn = $query1->fetch_assoc();
                ?>
                    
                                <table border="0" align="left" style="margin-top: -20px;">
                                    <tr>
                                   
                                    
										<td style="padding: 10px; width: 800px; text-align: left;">Nama Siswa      : <?php echo "$dataDsn[nama_siswa]"; ?></td>
                                       
										
									</tr>

									<tr>
										<td style="padding: 10px; width: 800px; text-align: left;">Nama Perusahaan :  <?php echo "$dataDsn[nama_perusahaan]"; ?> </td>
										
									</tr>
									<tr>
										<td style="padding: 10px; width: 800px; text-align: left;">Alamat          :  <?php echo "$dataDsn[alamat_perusahaan]"; ?></td>
										
                                       
                                    </tr>
									
                                </table>
                    </form>
                </div>
            </div>
     </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
	<div class="col-md-12 form-group">
	
		
	
	<form method="POST">
		 <h3> Nilai </h3>
		 
	 <table  style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
		 
         
		  <th style="text-align: center;">Hari<br>/Tanggal</th> 
          <th style="text-align: center;">Keterampilan yang<br>dilaksanakan di DU/DI</th>
		  
		  <th style="text-align: center;">Kompetisi/sub.Kompetensi<br>yang sesuai dengan GBPP</th>
		<th style="text-align: center;">Ad<br>p</th>
		<th style="text-align: center;">Ap<br>l</th>
		<th style="text-align: center;">Lm<br>p</th>
        </tr>
      </thead>
	  
      <tbody>
	
	 
	  
        <tr style="text-align: center;">
          
		   <td><input class="form-control" type="date"  style= "width:100px" "align="center" name="tgl" required /></td>
		   <td><input class="form-control" type="text"  align="center" name="keterampilan" required /></td>
		    <td><input class="form-control" type="text" s align="center" name="kompetensi" required /></td>
			   <td><input class="form-control" type="checkbox"  align="center" name="adp" value="ya"  /></td>
			      <td><input class="form-control" type="checkbox"  align="center" name="apl" value="ya"  /></td>
				     <td><input class="form-control" type="checkbox"  align="center" name="imp" value="ya"  /></td>
        </tr>
	
      </tbody>
	  
     </table>
	
	
		  <input type="submit" name="submit" value="Simpan Nilai" class="btn btn-default" /><br />
	

</div>
</div>
</div>
</div>
</div>


