<?php
include_once "../../koneksi.php";
if($_GET['type'] == 'DITERIMA'){
	$a='DITERIMA';
	$query = $sql->query("UPDATE p_prakerin SET status='$a' WHERE nis = $_GET[id]");
	echo "<script> alert('Pemilihan Diterima')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=acc-tempat.php'>";

}
else if($_GET['type'] == 'DITOLAK'){

	$query = $sql->query("UPDATE p_prakerin SET status='DITOLAK' WHERE nis = $_GET[id]");
	$query2 = $sql->query("select * from p_prakerin WHERE nis = $_GET[id]");
	while($data = $query2->fetch_assoc()){
	$id_perusahaan = $data['id_perusahaan'];
	
	$query3 = $sql->query("select * from perusahaan WHERE id_perusahaan = '$id_perusahaan'");
	while($data2 = $query3->fetch_assoc()){
	$kuota_tersedia=$data2['kuota_tersedia'];
	$a=$kuota_tersedia+1;
	$insert1 = $sql->query("update  perusahaan set kuota_tersedia='$a' where id_perusahaan='$id_perusahaan'");
	
	echo "<script> alert('Pemilihan Ditolak')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=acc-tempat.php'>";
}
}}
?>