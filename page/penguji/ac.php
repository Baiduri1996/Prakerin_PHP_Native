<?php if(isset($_POST['hitung1'])){
		 $n1 = $_POST['n_adaftasi'];
		 $n2=$_POST['n_aplikasi'];
		 $n3=$_POST['n_implementasi'];
		 $r=$n1+$n2+$n3;
		 $h=$r/3;
	 }	echo "<meta  content='0;url=index.php?content=nilai_sidang_input.php'>";
		 ?>