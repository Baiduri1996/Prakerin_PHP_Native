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

	$nis = $_SESSION['siswa_daftar']['nis'];
	$query = $sql->query("SELECT * FROM p_prakerin WHERE nis = '$nis' ");
	$a = $query->fetch_assoc();
	$id = $a['id_prakerin'];
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


