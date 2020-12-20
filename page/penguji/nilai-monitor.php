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
    $data = $sql->query("SELECT * from nilai_monitoring where id_prakerin='$id'
	");
	
	$data2 = $sql->query("SELECT * from nilai_monitoring where id_prakerin='$id'
	");
    $dataDsn2 = $data2->fetch_assoc();

  
?>
<div class="col-md-12">
<h3 class="title" align="center">SINKRONISASI DAN KETERLAMBATAN AKTIVITAS</h3>
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
	
		
	
	
		 <h3> Nilai</h3>
		 
	 <table  style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
		 
           <th style="text-align: center;">No</th> 
		  <th style="text-align: center;">Hari<br>/Tanggal</th> 
          <th style="text-align: center;">Keterampilan yang<br>dilaksanakan di DU/DI</th>
		  
		  <th style="text-align: center;">Kompetisi/sub.Kompetensi<br>yang sesuai dengan GBPP</th>
		<th style="text-align: center;">Ad<br>p</th>
		<th style="text-align: center;">Ap<br>l</th>
		<th style="text-align: center;">Lm<br>p</th>
        </tr>
      </thead>
	  
      <tbody>
	
	 
	     <?php
		$no=0;
        while($dataDsn = $data->fetch_assoc())
        {$no++;
	
    ?>
        <tr style="text-align: center;">
          
		   <td><?php echo $no; ?></td>
		   <td><?php echo "$dataDsn[tgl_monitoring]"; ?></td>
		    <td><?php echo "$dataDsn[keterampilan]"; ?></td>
			   <td><?php echo "$dataDsn[kompetensi]"; ?></td>
			      <td><?php echo "$dataDsn[adp]"; ?></td>
				     <td><?php echo "$dataDsn[apl]"; ?></td>
					   <td><?php echo "$dataDsn[imp]"; ?></td>
					   <?php  } ?>
        </tr>
	
      </tbody>
	  
     </table>
	 
	
		
	

</div>
</div>
</div>
</div>
</div>


