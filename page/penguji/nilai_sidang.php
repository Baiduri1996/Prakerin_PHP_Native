<h3 class="title">input nilai Sidang</h3><hr>

<?php 
	
						$query2 = $sql->query("SELECT akhir_prakerin FROM keterangan_prakerin ");
						$data2 = $query2->fetch_assoc();
						$akhir=$data2['akhir_prakerin'];
						$tgl = date('Y-m-d');
	if ($akhir == $tgl){
		$nip = $_SESSION['penguji']['nip'];
						$query3 = $sql->query("SELECT kelas FROM penguji WHERE penguji.nip = '$nip' ");
						$data3 = $query3->fetch_assoc();
						$kelas=$data3['kelas'];
		 $data = $sql->query("SELECT a.id_prakerin, b.nis, b.nama_siswa, 
	b.jurusan,b.kelas, c.id_perusahaan, c.nama_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where a.status='DITERIMA' and b.kelas='$kelas'
	");
    $countDsn = mysqli_num_rows($data);
?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Nilai Sidang
                        </div>
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
                                       <th style="text-align: center;">Kelas</th>
                                        <th style="text-align: center;">Aksi</th>
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
		 <td><?php echo "$dataDsn[kelas]"; ?></td>
        <td>
            <a href="index.php?content=<?php echo 'nilai_sidang_input.php&id='.$dataDsn['id_prakerin']; ?>" class="btn btn-success" style="width: 100px">
              Input</a>
            <a href="index.php?content=<?php echo 'nilai-monitor.php&id='.$dataDsn['id_prakerin']; ?>" class="btn btn-success" style="width: 100px">
              monitoring</a>

        </td>
    </tr>
    <?php
	} 
    
			
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
			

<?php
			}else {
				echo "<script> alert('Belum Waktunya input nilai sidang')</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php?content=home.php'>";
			}
?>   