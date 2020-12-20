
<?php
include "../../koneksi.php";
$Host = "localhost";
$username = "root";
$password = "";
$database = "prakerin";
$koneksi = new mysqli( $Host, $username, $password, $database );
if ($koneksi->connect_error){
echo 'Gagal koneksi ke database';
} else{
//koneksi berhsil
}
$nis = $_SESSION['siswa_daftar']['nis'];
		$user=mysqli_num_rows(mysqli_query($koneksi,"select * from p_prakerin where nis='$nis'"));
		if($user > 0){
			echo "<script> alert('Anda telah memilih sebelumnya')</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php?content=pemilihan_tempat.php'>";
		}else{
$id_perusahaan = $_GET['id'];
$query = $sql->query("SELECT * FROM perusahaan WHERE perusahaan.id_perusahaan = '$id_perusahaan'");
$query2 = $sql->query("SELECT * FROM siswa_daftar WHERE siswa_daftar.nis = '$nis'");
while($getResultQuery1=$query->fetch_assoc()){
			while($getResultQuery2=$query2->fetch_assoc()){
$kuota = $getResultQuery1['kuota_tersedia'];
$niss = $getResultQuery2['nis'];
			}
			}
// membaca kode barang terbesar
$carikode = mysqli_query($koneksi, "SELECT id_prakerin from p_prakerin") or die (mysqli_error());
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
   $kode_otomatis = "PRA".str_pad($kode, 3, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "PRA001";
  }

$insert1 = $sql->query("INSERT INTO p_prakerin (id_prakerin,nis,id_perusahaan,status) 
VALUES ('$kode_otomatis','$niss', '$id_perusahaan','PENDING')");



if($insert1){
	
	echo "<script> alert('data berhasil dikirim')</script>";
	$a=1;
$kuota1=$kuota-$a;
$update = $sql->query("UPDATE perusahaan set kuota_tersedia='$kuota1' WHERE id_perusahaan='$id_perusahaan' ");
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=pemilihan_tempat.php'>";
} else{
	echo "<script> alert('data gagal dikirim')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=pemilihan_tempat.php'>";
}
		
		}

?>