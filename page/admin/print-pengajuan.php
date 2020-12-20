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
                  table th { font-weight:normal; color:#000000; padding:7px 10px; background-color: #333;    }
                  table tr { background: white; }
                  table td { padding:7px 10px; }
                  tr {
                        font-size:8pt;
                        color:#000000;
                  }
                  tr td { border-bottom-left-radius:3px; border-bottom-right-radius:3px; padding:10px!important; }
</style>
                

	<?php 
include ('../../koneksi.php');
$no=0;
$id=$_POST['id_perusahaan'];
 $data = $sql->query("SELECT  a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where a.id_perusahaan='$id' && a.status='PENDING'
	");
	$data2 = $sql->query("SELECT  a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where a.id_perusahaan='$id' && a.status='PENDING'
	");
    
	
?>  
			<div style='font: Times New Roman;'>
			<div align="center" style='font: 22pt lucida sans unicode;'><img src="images/laporan.png" style="width: 100%; height=50%;"></div><br>
<div style='font: 12px lucida sans unicode;'>
			<p style="font-size:12px; text-align: justify">
			
Nomor&emsp;&ensp;&nbsp;:&nbsp; <br>
Lampiran :&nbsp; -<br>
Hal&emsp;&emsp;&emsp;&nbsp;:&nbsp; Permohonan Praktek Kerja Industri(PRAKERIN) <br>
<br>
Kepada Yth,
<br><b>
<?php     
//$null="-";


     $dataDsn2=$data2->fetch_assoc();
	  echo "$dataDsn2[nama_perusahaan]";  ?>
<br>
</b>
di<br>
Tempat<br>
<br>
Dengan hormat,
Sehubungan dengan diadakannya, program kegiatan Praktek Kerja Industri (PRAKERIN)
dan sekaligus pengembangan potensi keilmuan siswa/I SMK Bakti Nusantara 666, maka
kami selaku pimpinan sekolah mengajukan kerjasama dengan perusahaan instansi yang 
bapak/ibu pimpin di dalam kegiatan Prakerin tersebuat diatas.<br>
Adapun siswa/I yang kami ajukan adalah sebagai beriku:<br>
</p>
                </div>  
			
                  <table align="center"  border="1" style="font-size:12px"  >
                  <thead>
                  <tr>
			             <b><th style="text-align: center; ">No</th>
                      <th style="text-align: center;">Nama</th>
                      <th style="text-align: center;">Nis</th>
                      <th style="text-align: center;">Jurusan</th>
                  
                  </tr>
                  </thead>
                  <tbody>
		
				  
<?php     
//$null="-";

while ($dataDsn=$data->fetch_assoc()) { $no++;
      ?>
                  <tr>
                  <td><?php echo $no; ?></td>
		            	<td><?php echo "$dataDsn[nama_siswa]"; ?></td>
                  <td><?php echo "$dataDsn[nis]"; ?></td>
                  <td><?php echo "$dataDsn[jurusan]"; ?></td>
                  
                  </tr>
<?php } ?>
                  </tbody>
				  
                </table>
				
<p style="font-size:12px; text-align: justify">
Permohonan pengajuan pelaksanaan kegiatan Prakerin dimulai dari bulan januari 2019 sampai<br> 
April 2019 selama 3 bulan.<br>
Demikian surat pengajuan ini kami sampaikan, segala perhatian dan kerjasamanya <br>
kami ucapkan terima kasih.
                <br>
				<div align="center" style='font: 22pt lucida sans unicode;'><img src="images/ttd.png" style="width: 100%; height=50%;"></div><br>
   </div>
<?php
$id=$_POST['id_perusahaan'];
 $a = $sql->query("SELECT a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where c.id_perusahaan='$id'
	");
$d = $a->fetch_assoc();
	$dokumen=$d['nama_perusahaan'];
//batas kodingan 
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($dokumen.".pdf" ,'I');
exit;

?>