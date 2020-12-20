<?php include "koneksi.php"; ?>

<div class="fluid-margin content-margin content container-fluid col-md-12 center">
		<div class="fluid-margin container-fluid">
			<div class="caption-overlay" >
				<form method="post" enctype="multipart/form-data" action="login.php" data-toggle="validator" role="form">
					<div class="form-group">
					<label for="role">Akses : </label>
                    <select name='role' class="form-control">
                            <option value="siswa_daftar" selected>Siswa</option>   
                            <option value="admin">Admin</option>   
                            <option value="penguji">Penguji</option>
							 <option value="walikelas">Wali Kelas</option>
                        </select>
                    </div>
					<div class="form-group">
						<label for="nama">Username : </label>
						<input type="text" name="username" placeholder="Isi dengan nomor induk" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password : </label>
						<input type="password" name="password" placeholder="Isi dengan Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn btn-primary">
						<input type="reset" value="Clear" class="btn btn-default">
					</div>
					<br>
				</form>
			</div>
			<div id="myCarousel" class="carousel slide">
	        <!-- Wrapper for Slides -->
		        <div class="carousel-inner">
		            <div class="item active">
		                <!-- Set the first background image using inline CSS below. -->
		                <div class="fill" style="background-image:url('images/slider7.jpg'); -webkit-filter: grayscale(100%);"></div>
		                
		            </div>
		            <div class="item">
		                <!-- Set the second background image using inline CSS below. -->
		                <div class="fill" style="background-image:url('images/slider5.jpg'); -webkit-filter: grayscale(100%);"></div>
		                
		            </div>
		            <div class="item">
		                <!-- Set the third background image using inline CSS below. -->
		                <div class="fill" style="background-image:url('images/slider4.jpg'); -webkit-filter: grayscale(100%);"></div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
