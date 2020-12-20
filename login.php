<?php
session_start();
include "koneksi.php";

$role = $_POST['role'];
$username = $_POST['username'];
$password = $_POST['password'];

if($role == 'siswa_daftar'){
	$check = $sql->query("SELECT * FROM siswa_daftar WHERE nis= '$username' AND password='$password' ");
	$rows = mysqli_num_rows($check);
		if($rows == NULL){	
			echo "<script> alert('Gagal Login, user tidak terdaftar')</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}else{
			$arr = $check->fetch_assoc();
			$_SESSION['siswa_daftar']['nis'] = $arr['nis'];
			echo "<meta http-equiv='refresh' content='0;url=page/siswa/'>";	
		}
}else if($role == 'admin'){
	$check = $sql->query("SELECT * FROM admin WHERE nip = '$username' AND password='$password' ");
	$rows = mysqli_num_rows($check);
		if($rows == NULL){	
			echo "<script> alert('Gagal Login, user tidak terdaftar')</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}else{
			$arr = $check->fetch_assoc();
			$_SESSION['admin']['nip'] = $arr['nip'];
			echo "<meta http-equiv='refresh' content='0;url=page/admin/'>";	
		}
		
}else if($role == 'penguji'){
	$check = $sql->query("SELECT * FROM penguji WHERE nip = '$username' AND password='$password' ");
	$rows = mysqli_num_rows($check);
		if($rows == NULL){	
			echo "<script> alert('Gagal Login, user tidak terdaftar')</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}else{
			$arr = $check->fetch_assoc();
			$_SESSION['penguji']['nip'] = $arr['nip'];
			echo "<meta http-equiv='refresh' content='0;url=page/penguji/'>";	
		}
}else{
	$check = $sql->query("SELECT * FROM walikelas WHERE nip = '$username' AND password='$password' ");
	$rows = mysqli_num_rows($check);
		if($rows == NULL){	
			echo "<script> alert('Gagal Login, user tidak terdaftar')</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}else{
			$arr = $check->fetch_assoc();
			$_SESSION['walikelas']['nip'] = $arr['nip'];
			echo "<meta http-equiv='refresh' content='0;url=page/walikelas/'>";	
		}
}
?>