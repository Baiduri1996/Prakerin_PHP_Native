
<div class="col-md-12">
<h3 class="title">Status Pemilihan Tempat Perusahaan</h3>
<br>
<?php
$nis = $_SESSION['siswa_daftar']['nis'];
$query = "SELECT a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan,b.kelas, c.id_perusahaan, c.nama_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan where b.nis = '$nis'";
$query2= "select * from keterangan_prakerin";
$res = $sql->query($query);
$res2 = $sql->query($query2);
?>
<!-- <hr> -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
    <table id="example" style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
										
                                    	<th style="text-align: center;">Nama Siswa</th>
                                        <th style="text-align: center;">NIS</th>
                                        <th style="text-align: center;">Jurusan</th>
                   <th style="text-align: center;">Kelas</th>
                 
                                        <th style="text-align: center;">Nama Perusahaan</th>
										 <th style="text-align: center;">Mulai Prakerin</th>
										  <th style="text-align: center;">Akhir Prakerin</th>
                                        <th style="text-align: center;">Status</th>
										
        </tr>
      </thead>
      <tbody><?php while ($data = $res->fetch_assoc()) {
while ($data2 = $res2->fetch_assoc()) {		  ?>
        <tr style="text-align: center;">
		 
        <td><?php echo "$data[nama_siswa]"; ?></td>
        <td><?php echo "$data[nis]"; ?></td>
        <td><?php echo "$data[jurusan]"; ?></td>
        <td><?php echo "$data[kelas]"; ?></td>
        <td><?php echo "$data[nama_perusahaan]"; ?></td>
		<td><?php echo "$data2[mulai_prakerin]"; ?></td>
		<td><?php echo "$data2[akhir_prakerin]"; ?></td>
		<td><?php echo "$data[status]"; ?></td>
		
        
        </tr>
	  <?php } }?>
      </tbody>
    </table>
   
  </div>
</div>

</div>

</div>
</div>
</div>
