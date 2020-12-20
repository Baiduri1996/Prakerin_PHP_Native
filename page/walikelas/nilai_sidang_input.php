<?php
include_once "../../koneksi.php";

	$a='Ya';
	$query = $sql->query("UPDATE siswa_daftar SET terverifikasi='$a' WHERE nis = $_GET[id]");
	echo "<script> alert('Surat telah di verifikasi')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=nilai_sidang.php'>";


?>