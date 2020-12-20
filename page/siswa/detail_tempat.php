<?php

$nis = $_SESSION['alumni']['NIS'];
$query = $sql->query("SELECT NAMA FROM alumni WHERE alumni.NIS = '$nis' ");
$data = $query->fetch_assoc();
$nama = $data['NAMA'];

if($_GET['type'] == 'beasiswa'){

	$query = $sql->query("SELECT * FROM beasiswa WHERE ID_BEASISWA = $_GET[id]");
	$data = $query->fetch_assoc();

}
else if($_GET['type'] == 'loker'){

	$query = $sql->query("SELECT * FROM loker WHERE ID_LOKER = $_GET[id]");
	$data = $query->fetch_assoc();
}
	$query = $sql->query("SELECT FOTO FROM perusahaan WHERE NAMA = '$data[AUTHOR]'");
	$dt = $query->fetch_assoc();
	$foto = $dt['FOTO'];
?>

<div class="col-md-12" align="center">
<h3 class="title">Detail Informasi <?php if($_GET['type'] == 'beasiswa') echo "Beasiswa"; else echo "Lowongan Kerja"; ?></h3>
<br>
<h4><?php echo $data['JUDUL']?></h4>
<span style='margin-top:15px;margin-bottom:15px;display:block'>Deadline : <?php $date=date_create($data['DEADLINE']); echo date_format($date,"d F Y"); ?></span><br>
<?php if($_GET['type'] == 'loker') echo "<div style='margin-top:10px;margin-bottom:10px;' class='col-md-4 col-md-offset-4'><img src='../perusahaan/images/$foto' height='150'></div>"; ?>
<div class="col-md-9 col-md-offset-2" align="left"><?php echo $data['DESKRIPSI']; ?></div>

<div class="col-md-8 col-md-offset-2" align="center" style="margin-top:15px;margin-bottom:15px;">
	<a class="btn btn-primary" href="index.php?content=<?php echo 'home.php'; ?>">Kembali ke Home</a>
	<?php if($_GET['type'] == 'loker') { 
			if($data['ROLE']=="Perusahaan"){	
	?>
		<a class='btn btn-success' href='index.php?content=<?php echo 'form-lamaran.php&id='.$data['ID_LOKER'];?>' >Lamar Pekerjaan</a>
	<?php 
		  	}else if($data['AUTHOR']==$nama){
	?>
		<a class='btn btn-danger' href='index.php?content=<?php echo 'delete.php&type=loker&id='.$data['ID_LOKER'];?>' >Hapus</a>
	<?php
		  }
		}
		  if($_GET['type'] == 'beasiswa' && $data['AUTHOR']==$nama){
	?>
		<a class='btn btn-danger' href='index.php?content=<?php echo 'delete.php&type=beasiswa&id='.$data['ID_BEASISWA'];?>' >Hapus</a>
	<?php
		  }
	?>
	</div>
</div>