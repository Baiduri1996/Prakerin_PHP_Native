<h3 class="title">Simpan Nilai Akhir</h3><hr>

<?php 
    $data = $sql->query("SELECT a.id_prakerin, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where a.status='DITERIMA'
	");
    $countDsn = mysqli_num_rows($data);
?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Simpan Nilai Akhir
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
        <td>
            <a href="index.php?content=<?php echo 'nilai_akhir_detail.php&id='.$dataDsn['id_prakerin']; ?>" class="btn btn-success" style="width: 100px">
              Detail</a>
            

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
			

