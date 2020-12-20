<?php
include "koneksi.php";
session_start();
$nama = $_POST['NAMA'];
$nis = $_POST['NIS'];
$jenis_kelamin = $_POST['JENIS_KELAMIN'];
$tempat_lahir = $_POST['TEMPAT_LAHIR'];
$tanggal_lahir = $_POST['TANGGAL_LAHIR'];
$agama = $_POST['agama'];



$alamat = $_POST['ALAMAT'];
$no_telp = $_POST['NO_TELP'];
$kodepos = $_POST['kodepos'];
$password = $_POST['PASSWORD'];
$foto = $_FILES['foto']['name'];

$query = "SELECT * FROM verifikasi_siswa";
$res = $sql->query($query);

while ($data = $res->fetch_assoc()) {
	$kelas=$data['kelas'];
	$th=$data['tahun_masuk'];
	$jurusan=$data['jurusan'];
	if($data['nama']==$nama && $data['nis']==$nis){
		move_uploaded_file($_FILES['foto']['tmp_name'],"page/siswa/images/".$_FILES['foto']['name']);
		$insert = $sql->query("INSERT INTO siswa_daftar (nis,nama_siswa,jk,tempat_lahir,tgl_lahir,agama,kelas,jurusan,no_hp,alamat,tahun_ajaran,sr,url,password,foto,kodepos) 
		VALUES ('$nis', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$agama', '$kelas', '$jurusan', '$no_telp', '$alamat','$th','Belum Upload','Belum Upload', '$password', '$foto', '$kodepos')");
		
	}
}
	if($insert){
		echo "<script> alert('Terima kasih telah mendaftar ')</script>";
		echo "<meta http-equiv='refresh' content='0;url=index.php?content=home.php'>";
	}else{
		echo "<script> alert('Data anda tidak ada di daftar siswa atau inputan salah.')</script>";
		echo "<meta http-equiv='refresh' content='0;url=index.php?content=home.php'>";
	}	
?>