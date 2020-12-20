<h3 class="title">Verifikasi Siswa Prakerin</h3><hr>

<?php 
		$nip = $_SESSION['walikelas']['nip'];
						$query = $sql->query("SELECT kelas FROM walikelas WHERE walikelas.nip = '$nip' ");
						$data = $query->fetch_assoc();
						$kelas=$data['kelas'];
    $b = $sql->query("SELECT * from siswa_daftar where kelas='$kelas'
	");
    $countDsn = mysqli_num_rows($b);
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
										<th style="text-align: center;">Nama</th>
                                    	<th style="text-align: center;">Nis</th>
                                        <th style="text-align: center;">jurusan</th>
                                        <th style="text-align: center;">kelas</th>
                                        
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
    if($countDsn > 0){
        while($dataDsn = $b->fetch_assoc())
        {
    ?>
    <tr class="gradeA" style="text-align: center;">
	<td><?php echo "$dataDsn[nama_siswa]"; ?></td>
        <td><?php echo "$dataDsn[nis]"; ?></td>
        <td><?php echo "$dataDsn[jurusan]"; ?></td>
        <td><?php echo "$dataDsn[kelas]"; ?></td>
       
        <td>
            <a href="index.php?content=<?php echo 'nilai_sidang_input.php&id='.$dataDsn['nis']; ?>" class="btn btn-success" style="width: 100px">
              Verifikasi</a>
        </td>
    </tr>
    <?php
        }
    }else{
        echo "<tr>
        <td colspan='12' align='center' height='20'>
        <div> Belum Ada Data </div></td>
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
			

