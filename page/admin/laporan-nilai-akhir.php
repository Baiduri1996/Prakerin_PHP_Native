<div class="col-md-12">
<h3 class="title">Data Siswa</h3>
<br>
<?php
$query = "SELECT  a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan,c.no_telp,c.alamat_perusahaan,c.jurusan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where a.status='DITERIMA' GROUP BY a.id_prakerin
	 ";
$res = $sql->query($query);
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
          <th style="text-align: center;">Nis</th>
		  <th style="text-align: center;">Id Perusahaan</th> 
          <th style="text-align: center;">Nama Perusahaan</th>
		  <th style="text-align: center;">Jurusan</th>
         
		   <th style="text-align: center;">MENU</th>
        </tr>
      </thead>
      <tbody><?php while ($data = $res->fetch_assoc()) { ?>
        <tr style="text-align: center;">
		 <td><?php echo $data['nama_siswa']; ?></td>
          <td><?php echo $data['nis']; ?></td>
		   <td><?php echo $data['id_perusahaan']; ?></td>
          <td><?php echo $data['nama_perusahaan']; ?></td>
		  <td><?php echo $data['jurusan']; ?></td>
          <td>
            <a href="index.php?content=<?php echo 'print-nilai-akhir.php&type=&id='.$data['id_prakerin']; ?>">
              <img src='../../images/update.png' title='Cari siswa'></a>
           
          </td>
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

