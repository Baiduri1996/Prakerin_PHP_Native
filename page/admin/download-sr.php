<?php

include "../../koneksi.php";
$id = $_GET['id'];
 $data = mysql_query ("select url from siswa_daftar where nis='$id'");
$cek=mysql_num_rows($data);
if($cek){
	while($row=mysql_fetch_array($data)){
		echo "<a href="<?=$row['url'];?>"></a>"
	}
}
?>