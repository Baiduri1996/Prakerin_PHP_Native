<?php
 // Define relative path from this script to mPDF

define('_MPDF_PATH','mpdf/'); //letak folder mpdf
include(_MPDF_PATH . "mpdf.php"); //panggil mpdf.php
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start();
?>
<style type="text/css">				
			body {
				padding-top: 20px;
				padding-bottom: 40px;
				font-size: 16pt;
				color:#333;
			}
                  table {
                        width:100%;
                        font:14pt lucida sans unicode;
                        color:#000000;
                        border-collapse:collapse;
                        margin-bottom:20px;
                        margin-right:20px;
                  }
                  table th { font-weight:normal; color:#000000; padding:7px 10px; background-color: #00f9ff;    }
                  table tr { color:#00f9ff; }
                  table td { padding:7px 10px; }
                  tr {
                        font-size:8pt;
                        color:#000000;
                  }
                  tr td { border-bottom-left-radius:3px; border-bottom-right-radius:3px; padding:10px!important; }
</style>
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
		$data = $sql->query(" SELECT * FROM nilai_akhir,nilai_laporan,nilai_sidang,nilai_perusahaan WHERE nilai_akhir.id_prakerin='$id' &&  nilai_laporan.id_prakerin = '$id' && nilai_sidang.id_prakerin = '$id' && nilai_perusahaan.id_prakerin = '$id' ");
		$countDsn = mysqli_num_rows($data);
		
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
		
		$nilai_akhir= $dataDsn['nilai_akhir'];
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
		   
		    <td align="center"><?php echo $dataDsn['nilaiA'] ?></td>
			
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
		   <td align="center"><?php echo $dataDsn['n_adaftasi'] ?> <hr> 
		   <?php echo $dataDsn['n_aplikasi'] ?><hr>
		   <?php echo $dataDsn['n_implementasi'] ?><hr>
		 </td>
		<td align="center"><?php echo $dataDsn['rata_rataB']?></td>
		
			
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
		   <td align="center"><?php echo $dataDsn['n_penampilan'] ?>
		   <hr ><?php echo $dataDsn['n_penyampaian'] ?></td>
			<td align="center"><?php echo $dataDsn['rata_rataC'] ?></td>
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
		   <td align="center"><?php echo $dataDsn['n_penguasaan'] ?>
		  <hr> <?php echo $dataDsn['n_menjawab'] ?></td>
		
			
			</td>
			<td align="center"><?php echo $dataDsn['rata_rataD'] ?></td>
			
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
        <td align="center"> <?php echo $dataDsn['p1'] ?>
        </td>
        </tr>
       
      </tbody>
	   <tbody>
	  <?php $no=2; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td>Kehadiran dan Disiplin</td>
        <td align="center">  <?php echo $dataDsn['p2'] ?>
        </td>
        </tr>
       
      </tbody>
	    <tbody>
	  <?php $no=3; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Inisiatif dan Kreativitas<br>
		  (kemajuan Belajar)</p></td>
		 <td align="center"><?php echo $dataDsn['p3'] ?>
         </td>
        
        </tr>
       
      </tbody>
	    <tbody>
	  <?php $no=4; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td align="center"><p>Kerjasama</td>
		  <td align="center">
        <?php echo $dataDsn['p4'] ?>
         </td>
        
        </tr>
       
      </tbody>
	     <tbody>
	  <?php $no=5; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Tanggung Jawab</p></td>
		  <td align="center">
           <?php echo $dataDsn['p5'] ?>
         </td>
  
        </tr>
       
      </tbody>
	     <tbody>
	  <?php $no=6; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Sikap</p></td>
		  
        <td align="center">  <?php echo $dataDsn['p6'] ?>
         </td>
        
        </tr>
       
      </tbody>
	   <tbody>
	  <?php $no=7; ?>
	  
        <tr style="text-align: center;">
          <td><?php echo $no?></td>
		   <td><p>Nilai</p></td>
		  
        <td align="center">
		  <?php echo $nilai_perusahaan ?>
         </td>
		 
		
		  
        
        
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
		   <?php $l=($nilaiA+$nilaiB)/2; ?>
        <td align="center"> <?php echo $l ?>
        </td>
        </tr>
       
      </tbody>
	   <tbody>
	
	  
        <tr style="text-align: center;">
          <td>II</td>
		   <td>nilai Sidang</td>
		   <?php $s=($nilaiC+$nilaiD)/2; ?>
        <td align="center">  <?php echo $s ?>
        </td>
        </tr>
       
      </tbody>
	    <tbody>
	 
	  
        <tr style="text-align: center;">
          <td>III</td>
		   <td>Nilai Perusahaan</td>
		 <td align="center"><?php echo $nilai_perusahaan ?>
         </td>
        
        </tr>
       
      </tbody>
	    <tbody>
	  
	  
        <tr style="text-align: center;">
          <td></td>
		   <td><b>NILAI AKHIR PRAKERIN</B> <br> <br>(0,2 x I)+(0,2 x II)+(0,6 + III)</td>
		  <td align="center">
		  <?php echo $nilai_akhir ?>
       
         </td>
        
        </tr>
       
      </tbody>
	    
        </tr> <br>
		
</form>
      </tbody>

    </table>
		  
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
<?php
$id=$_GET['id'];
 $a = $sql->query("SELECT a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where a.id_prakerin='$id'
	");
$d = $a->fetch_assoc();
	$dokumen=$d['nama_siswa'];
//batas kodingan 
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($dokumen.".pdf" ,'I');
exit;

?>

