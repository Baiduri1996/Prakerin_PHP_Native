 <?php
	include "../../koneksi.php";
	
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

		$carikode = mysqli_query($koneksi, "SELECT no from nilai_monitoring") or die (mysqli_error());
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
   $kode_otomatis = "".str_pad($kode, 0, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "1";
  }
  
  if($_SERVER['REQUEST_METHOD'] == "POST"){
	  
		$id=$_GET['id'];
		$tgl=$_POST['tgl'];
		$keterampilan= $_POST['keterampilan'];
		$kompetensi= $_POST['kompetensi'];
	  $adp=$_POST['adp'];
	  $apl=$_POST['apl'];
	  $lmp=$_POST['imp'];
	  
		$sql->query("INSERT INTO nilai_akhir (id_prakerin,no,tgl_monitoring,keterampilan,kompetensi,adp,apl,imp) 
  VALUES ('$id','$kode_otomatis','$keterampilan','$kompetensi','$adp','$apl','$imp')");
    echo "<script>alert('Data Nilai Akhir Berhasil Disimpan')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?content=list-monitoring.php'>";
  }
  
?>