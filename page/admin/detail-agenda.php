<?php

$id=$_GET['id'];
$query = $sql->query("SELECT a.id_agenda,a.agenda, b.nis,b.nama_siswa 
from agenda a
join siswa_daftar b 
on b.nis=a.nis 
where a.id_agenda='$id'");
$data = $query->fetch_assoc();
$nama = $data['nama_siswa'];
?>

<div class="col-md-12" align="center">
<h3 class="title">Detail Agenda Harian</h3>
<br>
<br>
<h4><?php echo $data['nama_siswa']?> (<?php echo $data['nis']?>)</h4>
<br>
<div class="col-md-7 col-md-offset-2" style="text-align:left"><?php echo $data['agenda'];  ?></div>
<div class="col-md-8 col-md-offset-2" align="center" style="margin-top:20px;margin-bottom:15px;">
	<a class="btn btn-primary" href="index.php?content=<?php echo 'agenda-siswa.php'; ?>">Kembali ke agenda</a>
	
</div>
</div>
