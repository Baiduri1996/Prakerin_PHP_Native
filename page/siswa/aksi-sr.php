<?php
include "../../koneksi.php";





 if (isset($_POST['save'])){
	 $nis = $_SESSION['siswa_daftar']['nis'];
	
 $fileName = $_FILES['sr']['name'];
  // Simpan ke Database
  $uploaddir='../../sr/';
		$alamatfile=$uploaddir.$fileName;
  move_uploaded_file($_FILES['sr']['tmp_name'],$alamatfile);
  
 $query = $sql->query("UPDATE siswa_daftar set sr='$fileName', url='$alamatfile' WHERE nis='$nis' ");
 

 } 
   if($query){
		echo "<script> alert('Terima kasih telah upload file ')</script>";
		echo "<meta http-equiv='refresh' content='0;url=index.php?content=home.php'>";
	}else{
		echo "<script> alert('Data anda tidak ada di daftar siswa atau inputan salah.')</script>";
		echo "<meta http-equiv='refresh' content='0;url=index.php?content=home.php'>";
	}	
	


?>