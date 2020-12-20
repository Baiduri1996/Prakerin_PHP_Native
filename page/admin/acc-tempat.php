<h3 class="title">List pemilihan tempat siswa</h3><hr>
						<form method="POST">
	    <label>Pilih Status</label>
	    
                                        <select name='cari_status' class="form-control" style="padding: 5px; width: 190px;">
                                            <option value="PENDING">PENDING</option>
                                            <option value="DITERIMA">DITERIMA</option>
                                            <option value="DITOLAK">DITOLAK</option>
                                            
                                        </select><input type="submit" class="btn btn-default" name="submit" value="Cari" />
		
		</form>
		
<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
$status = $_POST['cari_status'];
if($status == "DITOLAK"){
 $data = $sql->query("SELECT a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where a.status='$status'
	");
    $countDsn = mysqli_num_rows($data);
	?>
	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
					
                        <div class="panel-heading">
						
                            Data Pemilihan Tempat Prakerin
                        </div>
						<br>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="example">
                                <thead>
							
                                    <tr>
										<th style="text-align: center;">ID Prakerin</th>
                                    	<th style="text-align: center;">Nama</th>
                                        <th style="text-align: center;">NIS</th>
                                        <th style="text-align: center;">Jurusan</th>
                                        <th style="text-align: center;">ID Perusahaan</th>
                                        <th style="text-align: center;">Nama Perusahaan</th>
                                       
                                        <th style="text-align: center;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
    if($countDsn > 0){
        while($dataDsn = $data->fetch_assoc())
        {
    ?>
    <tr class="gradeA" style="text-align: center;">
	<td><?php echo "$dataDsn[id_prakerin]"; ?></td>
        <td><?php echo "$dataDsn[nama_siswa]"; ?></td>
        <td><?php echo "$dataDsn[nis]"; ?></td>
        <td><?php echo "$dataDsn[jurusan]"; ?></td>
        <td><?php echo "$dataDsn[id_perusahaan]"; ?></td>
        <td><?php echo "$dataDsn[nama_perusahaan]"; ?></td>
        <td><?php echo "$dataDsn[status]"; ?></td>
    </tr>
    <?php
        }
    }else{
        echo "<tr>
        <td colspan='12' align='center' height='20'>
        <div> Belum Ada Data Pemilihan Perusahaan</div></td>
        </tr>";
    }
    ?>
                                    </tbody>
                                </table>
                             </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			</div>
			<?php
}else if($status == "DITERIMA"){
 $data = $sql->query("SELECT a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where a.status='$status'
	");
    $countDsn = mysqli_num_rows($data);
	?>
	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
					
                        <div class="panel-heading">
						
                            Data Pemilihan Tempat Prakerin
                        </div>
						<br>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="example">
                                <thead>
							
                                    <tr>
										<th style="text-align: center;">ID Prakerin</th>
                                    	<th style="text-align: center;">Nama</th>
                                        <th style="text-align: center;">NIS</th>
                                        <th style="text-align: center;">Jurusan</th>
                                        <th style="text-align: center;">ID Perusahaan</th>
                                        <th style="text-align: center;">Nama Perusahaan</th>
                                       
                                        <th style="text-align: center;">Status</th>
										
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
    if($countDsn > 0){
        while($dataDsn = $data->fetch_assoc())
        {
    ?>
    <tr class="gradeA" style="text-align: center;">
	<td><?php echo "$dataDsn[id_prakerin]"; ?></td>
        <td><?php echo "$dataDsn[nama_siswa]"; ?></td>
        <td><?php echo "$dataDsn[nis]"; ?></td>
        <td><?php echo "$dataDsn[jurusan]"; ?></td>
        <td><?php echo "$dataDsn[id_perusahaan]"; ?></td>
        <td><?php echo "$dataDsn[nama_perusahaan]"; ?></td>
        <td><?php echo "$dataDsn[status]"; ?></td>
		
    </tr>
    <?php
        }
    }else{
        echo "<tr>
        <td colspan='12' align='center' height='20'>
        <div> Belum Ada Data Pemilihan Perusahaan</div></td>
        </tr>";
    }
    ?>
                                    </tbody>
                                </table>
                             </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			</div>
			<?php
}else{
 $data = $sql->query("SELECT a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where a.status='$status'
	");
    $countDsn = mysqli_num_rows($data);
	?>
	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
					
                        <div class="panel-heading">
						
                            Data Pemilihan Tempat Prakerin
                        </div>
						<br>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="example">
                                <thead>
							
                                    <tr>
										<th style="text-align: center;">ID Prakerin</th>
                                    	<th style="text-align: center;">Nama</th>
                                        <th style="text-align: center;">NIS</th>
                                        <th style="text-align: center;">Jurusan</th>
                                        <th style="text-align: center;">ID Perusahaan</th>
                                        <th style="text-align: center;">Nama Perusahaan</th>
                                       
                                        <th style="text-align: center;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
    if($countDsn > 0){
        while($dataDsn = $data->fetch_assoc())
        {
    ?>
    <tr class="gradeA" style="text-align: center;">
	<td><?php echo "$dataDsn[id_prakerin]"; ?></td>
        <td><?php echo "$dataDsn[nama_siswa]"; ?></td>
        <td><?php echo "$dataDsn[nis]"; ?></td>
        <td><?php echo "$dataDsn[jurusan]"; ?></td>
        <td><?php echo "$dataDsn[id_perusahaan]"; ?></td>
        <td><?php echo "$dataDsn[nama_perusahaan]"; ?></td>
     <td>
            <a href="index.php?content=<?php echo 'aksi-acc-tempat.php&type=DITERIMA&id='.$dataDsn['nis']; ?>" class="btn btn-success" style="width: 75px">
              Diterima</a>
            <a href="index.php?content=<?php echo 'aksi-acc-tempat.php&type=DITOLAK&id='.$dataDsn['nis']; ?>" class="btn btn-danger" style="width: 75px">
              Ditolak</a>
        </td>
    </tr>
    <?php
        }
    }else{
        echo "<tr>
        <td colspan='12' align='center' height='20'>
        <div> Belum Ada Data Pemilihan Perusahaan</div></td>
        </tr>";
    }
    ?>
                                    </tbody>
                                </table>
                             </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			</div>
			<?php
}


}
?>
           
