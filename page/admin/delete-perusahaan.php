<?php
$id=$_GET['id'];
	$query = $sql->query("DELETE FROM perusahaan WHERE id_perusahaan = '$id'");
	echo "<script> alert('data berhasil dihapus')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=list-perusahaan.php'>";


?>
