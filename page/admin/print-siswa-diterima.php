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
                  table th { font-weight:normal; color:#ffffff; padding:7px 10px; background-color: #333;    }
                  table tr { background: white; }
                  table td { padding:7px 10px; }
                  tr {
                        font-size:8pt;
                        color:#000000;
                  }
                  tr td { border-bottom-left-radius:3px; border-bottom-right-radius:3px; padding:10px!important; }
</style>
                <?php
include_once "../../koneksi.php";
$query = "SELECT a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan,b.tahun_ajaran, c.id_perusahaan, c.nama_perusahaan, c.alamat_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where a.status='DITERIMA'";
$res = $sql->query($query);
$res2 = $sql->query($query);
$data1 = $res2->fetch_assoc();
?>

	<div class="col-md-12">
<center><h4 class="title" align="center">Data Siswa Prakerin Untuk Periode Tahun Masuk <?php echo "$data1[tahun_ajaran]"; ?></h4><center>

<!-- <hr> -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">

	<br>
	
	<br>
    <table id="example" style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      
	  <thead>
        <tr>
         <th style="text-align: center;">ID Prakerin</th>
                                    	<th style="text-align: center;">Nama</th>
                                        <th style="text-align: center;">NIS</th>
                                        <th style="text-align: center;">Jurusan</th>
                                        <th style="text-align: center;">ID Perusahaan</th>
                                        <th style="text-align: center;">Nama Perusahaan</th>
                                          <th style="text-align: center;">Alamat Perusahaan</th>
                                        <th style="text-align: center;">Status</th>
		  
		   
        </tr>
      </thead>
      <tbody><?php while ($data = $res->fetch_assoc()) { ?>
        <tr style="text-align: center;">
		
        <td><?php echo "$data[id_prakerin]"; ?></td>
        <td><?php echo "$data[nama_siswa]"; ?></td>
        <td><?php echo "$data[nis]"; ?></td>
        <td><?php echo "$data[jurusan]"; ?></td>
        <td><?php echo "$data[id_perusahaan]"; ?></td>
        <td><?php echo "$data[nama_perusahaan]"; ?></td>
		  <td><?php echo "$data[alamat_perusahaan]"; ?></td>
        <td><?php echo "$data[status]"; ?></td>
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

<?php

	$dokumen="List_Siswa" ;
//batas kodingan 
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($dokumen.".pdf" ,'I');
exit;

?>