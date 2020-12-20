<?php
	include '../../koneksi.php';

$Host = "localhost";
$username = "root";
$password = "";
$database = "prakerin";
$koneksi = new mysqli( $Host, $username, $password, $database );
if ($koneksi->connect_error){
echo 'Gagal koneksi ke database';
} else {
//koneksi berhsil
}

	$nama = $_POST['nama'];
		$no = $_POST['no_telp'];
	$alamat = $_POST['alamat'];
	$jurusan = $_POST['jurusan'];
	$limit = $_POST['limit'];

	$carikode = mysqli_query($koneksi, "SELECT id_perusahaan from perusahaan") or die (mysqli_error());
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  $jumlah_data = mysqli_num_rows($carikode);
  // jika $datakode
  if ($datakode) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($jumlah_data[0], 1);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $jumlah_data + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $kode_otomatis = "PRS".str_pad($kode, 3, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "P0001";
  }


	$sql->query("INSERT INTO perusahaan (id_perusahaan,nama_perusahaan,no_telp,alamat_perusahaan,jurusan,kuota_tersedia) VALUES ('$kode_otomatis','$nama','$no','$alamat','$jurusan','$limit')");

	
	echo "<script> alert('data berhasil disimpan')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=list-perusahaan.php'>";
?>