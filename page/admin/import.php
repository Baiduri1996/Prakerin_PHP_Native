<?php
    include '../../koneksi.php';
    if (isset($_POST['submit'])) {//Script akan berjalan jika di tekan tombol submit..
 
//Script Upload File..
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        // echo "<h1>" . "File ". $_FILES['filename']['name'] ." Berhasil di Upload" . "</h1>";
        // echo "<h2>Menampilkan Hasil Upload:</h2>";
        // readfile($_FILES['filename']['tmp_name']);
    }
 
    //Import uploaded file to Database, Letakan dibawah sini..
    $handle = fopen($_FILES['filename']['tmp_name'], "r"); //Membuka file dan membacanya
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $sql->query("INSERT INTO verifikasi_siswa (nama,nis,jurusan,kelas,tahun_masuk) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]') ");
    }
 
    fclose($handle); //Menutup CSV file
    echo "<script> alert('data berhasil diimport!')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php?content=master-prakerin.php'>";
} ?>