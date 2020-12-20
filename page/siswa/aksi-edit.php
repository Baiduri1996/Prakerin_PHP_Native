<?php
include "../../koneksi.php";

$nis = $_SESSION['siswa_daftar']['nis'];
$nama = $_POST['NAMA'];
$jenis_kelamin = $_POST['JENIS_KELAMIN'];
$tempat_lahir = $_POST['TEMPAT_LAHIR'];
$tgl = $_POST['TANGGAL_LAHIR'];
$agama = $_POST['agama'];
$jurusan = $_POST['JURUSAN'];
$kelas = $_POST['kelas'];
$alamat = $_POST['ALAMAT'];
$no_tlp = $_POST['NO_TELP'];
$pass = $_POST['PASSWORD'];

$update = $sql->query("UPDATE siswa_daftar set nama_siswa='$nama',
 jk='$jenis_kelamin',  tempat_lahir='$tempat_lahir',
 tgl_lahir='$tgl',
 agama='$agama', kelas='$kelas', jurusan='$jurusan', no_hp='$no_tlp',
 alamat='$alamat',
 password='$pass' WHERE nis='$nis' ");
if($update){
	echo "<script> alert('data berhasil diubah')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=home.php'>";
} else{
	echo "<script> alert('data gagal diubah')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=#'>";
}

?>