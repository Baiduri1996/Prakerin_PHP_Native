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

session_start();
	$nis = $_SESSION['siswa_daftar']['nis'];
	$query = $sql->query("SELECT nis FROM siswa_daftar WHERE siswa_daftar.nis = '$nis' ");
	$data = $query->fetch_assoc();
	$nis2 = $data['nis'];
	$agenda = $_POST['agenda'];
	$tgl = date('Y-m-d');
	
// membaca kode barang terbesar
$carikode = mysqli_query($koneksi, "SELECT id_agenda from agenda") or die (mysqli_error());
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
   $kode_otomatis = "AGN".str_pad($kode, 3, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "AGN001";
  }
  
  $pecah = explode("\r\n\r\n", $agenda);

 

// string kosong inisialisasi

$text = "";

 
// untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
// lalu menggabungnya menjadi satu string utuh $text
for ($i=0; $i<=count($pecah)-1; $i++)
{

$part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);

$text .= $part;

}
echo $text;
	$sql->query("INSERT INTO agenda (id_agenda,nis,tgl_agenda,agenda) VALUES ('$kode_otomatis','$nis2','$tgl','$text')");

	echo "<script>alert('Data Agenda Berhasil Disimpan')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=home.php'>";
	
?>