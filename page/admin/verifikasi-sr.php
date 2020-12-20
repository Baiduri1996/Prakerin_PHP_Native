<?php
include_once "../../koneksi.php";
if($_GET['type'] == 'Ya'){
	$a='Ya';
	$query = $sql->query("UPDATE siswa_daftar SET terverifikasi='$a' WHERE nis = $_GET[id]");
	echo "<script> alert('Surat rekomendasi Diterima')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=sr.php'>";

}
else if($_GET['type'] == 'Tidak'){

	$query = $sql->query("UPDATE siswa_daftar SET terverifikasi='Tidak' WHERE nis = $_GET[id]");
	echo "<script> alert('Surat Rekomendasi Ditolak')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=acc-tempat.php'>";
}

?>