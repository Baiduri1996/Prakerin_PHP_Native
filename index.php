<?php 
	if(!isset($_GET['content'])){
		$vcontent='home.php';
	}
	else{
		$vcontent=$_GET['content'];
	}
?>
<html>
<head>
	<title>Prakerin SMK BN 666</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles/datatables.css">
    <link href="styles/full-slider.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/logo.png">

	
	<script src="js/validator.js"></script>
</head>

<body>
<!-- <article class="content"> -->
<div class="wrapper">
	<div class="fluid-margin container-fluid">
		<img src="images/logobn.png" class="logo-image" style="padding-left:10">
		<nav class="navbar-custom navbar navbar-default navbar-collapse" style="padding-left:1100">
		<ul class="nav navbar-nav social-navbar">
			<li><a href="index.php?content=<?php echo 'home.php'; ?>" class="font-menu">Beranda</a></li>
			<li><a href="index.php?content=<?php echo 'daftar.php'; ?>" class="font-menu">Daftar</a></li>
		</ul>
		</nav>
	</div>
	<?php include $vcontent; ?>
<div class="fluid-margin container-fluid">
	<footer class="footer col-md-12">
		<div class="row">
			<div class="col-md-3 col-md-offset-2">
				<h4>Akreditasi Program Keahlian</h4></br>
				<table class="widget-akreditasi">
				<tr>
				<td colspan="2" class="prodi">Rekayasa Perangkat Lunak</td>
				</tr>
				<tr>
				<td class="nilai">A</td>
				<td class="keterangan">terakreditasi tahun 2013</td>
				</tr>
				</table>
				</p>
				<p>
				<table class="widget-akreditasi">
				<tr>
				<td colspan="2" class="prodi">Desain Grafis</td>
				</tr>
				<tr>
				<td class="nilai">A</td>
				<td class="keterangan">terakreditasi tahun 2013</td>
				</tr>
				</table>
				</p>
				<p>
				<table class="widget-akreditasi">
				<tr>
				<td colspan="2" class="prodi">Animasi</td>
				</tr>
				<tr>
				<td class="nilai">A</td>
				<td class="keterangan">terakreditasi tahun 2013</td>
				</tr>
				</table>
				</p>
				<p>
				<table class="widget-akreditasi">
				<tr>
				<td colspan="2" class="prodi">Akuntansi</td>
				</tr>
				<tr>
				<td class="nilai"></td>
				<td class="keterangan"></td>
				</tr>
				</table>
				</p>
				<p>
				<table class="widget-akreditasi">
				<tr>
				<td colspan="2" class="prodi">Pemasaran</td>
				</tr>
				<tr>
				<td class="nilai"></td>
				<td class="keterangan"></td>
				</tr>
				</table>
				</p>
				<p>
					(lihat di <a href="http://ban-pt.kemdiknas.go.id/" onclick="__gaTracker('send', 'event', 'outbound-widget', 'http://ban-pt.kemdiknas.go.id/', 'website BAN-PT');">
					website BAN-PT</a>)
				</p>
			</div>
			<div class="col-md-3 kontak">
				<h4>Kontak</h4><br>
				<div class="textwidget"><p><b>SMK Bakti Nusantara 666</b></p>
					<p>Jl. Raya Percobaan Km. 17,1 No. 65 Ds. Cimekar<br />
					Kecamatan Cileunyi Kabupaten Bandung 40622<br />
					Jawa Barat</p>
					<p>Telp. 081 220 355 277</p>
				</div>
			</div>
			<div class="col-md-3 link-eksternal">
				<h4>Link Eksternal</h4><br>
				<ul>
					<li><a href="http://repo.smkbn666.com/">SMK Bakti Nusantara 666</a></li>
					<li><a href="http://bkk.smkbn666.com/">BKK SMK Bakti Nusantara 666</a></li>
					<li><a href="http://elearning.smkbn666.com/">E-Learning SMK Bakti Nusantara 666</a></li>
					<li><a href="http://elib.smkbn666.com/">E-Library SMK Bakti Nusantara 666</a></li>
					<li><a href="http://dtcenter.smkbn666.com/">Data Center SMK Bakti Nusantara 666</a></li>
					<li><a href="http://metube.smkbn666.com/">Digital Learning SMK Bakti Nusantara 666</a></li>
					<li><a href="http://balarea.smkbn666.com/">Balarea SMK Bakti Nusantara 666</a></li>
					<li><a href="http://modul.smkbn666.com/">E-Modul SMK Bakti Nusantara 666</a></li>
					<li><a href="http://ws.smkbn666.com/">Repository SMK Bakti Nusantara 666</a></li>
					<li><a href="http://erapor.smkbn666.com/">E-Rapor SMK Bakti Nusantara 666</a></li>
				</ul>
			</div>
		</div>
		<div class="row footer-copy">
	            <div class="col-lg-12">
	                <p>Copyright &copy; Mochamad Baiduri 2018. All rights reserved.</p>
	            </div>
	        </div>
	</footer>
</div>

<!-- </article> -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>


<script>

	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	})

	$('.carousel').carousel({
	    interval: 100000 //changes the speed
	})
</script>

</body>
</html>