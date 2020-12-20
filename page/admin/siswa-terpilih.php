<div class="col-md-12">
<h3 class="title">Cetak Surat Pengajuan Prakerin</h3>
<br>
<div class="col-lg-12 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                <br>
                <?php
				 $id=$_GET['id'];
                    $query1 = $sql->query("SELECT a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where c.id_perusahaan='$id' && a.status='PENDING' ");  
	$dataDsn = $query1->fetch_assoc();
                ?>
                    <form name='form' method='post' action='print-pengajuan.php' enctype='multipart/form-data'>
                                <table border="0" align="right" style="margin-top: -20px;">
                                    <tr>
                                    <td style="width: 800px; text-align: left;"></td> 
                                    
										<td style="padding: 5px; width: 200px;" > 
                                        <input type="hidden" name="id_perusahaan" value="<?php echo "$dataDsn[id_perusahaan]"; ?>"></td>
										<td style="width: 250px; text-align: right;">Nama Perusahaan : </td>
                                    
										<td style="padding: 5px; width: 200px;">
                                        <?php echo "$dataDsn[nama_perusahaan]"; ?></td>
										
                                        <td style="padding: 2px;"><input id="submit" name="id" type="submit" class="btn btn-info" value="Cetak Surat"></td>
                                    </tr>
                                </table>
                    </form>
                </div>
            </div>
     </div>
</div>
<?php
 $id=$_GET['id'];
 $data = $sql->query("SELECT a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where c.id_perusahaan='$id' && a.status='PENDING'
	");
    $countDsn = mysqli_num_rows($data);
	
	?>
	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
					
                        <div class="panel-heading">
						
                            Cetak Surat Pengajuan Prakerin
                        </div>
						
						<br>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover"  cellspacing="0"  >
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
	<td name="id_prakerin"><?php echo "$dataDsn[id_prakerin]"; ?></td>
        <td><?php echo "$dataDsn[nama_siswa]"; ?></td>
        <td><?php echo "$dataDsn[nis]"; ?></td>
        <td><?php echo "$dataDsn[jurusan]"; ?></td>
        <td><?php echo "$dataDsn[id_perusahaan]"; ?></td>
        <td><?php echo "$dataDsn[nama_perusahaan]"; ?></td>
        <td><?php echo "$dataDsn[status]"; ?></td>
		
    </tr>
  
	
                                  
			
			
	  </tbody>
	 
	      <?php
         }
    }else{
        echo "<tr>
        <td colspan='12' align='center' height='20'>
        <div> Belum Ada Data Surat Pengajuan</div></td>
        </tr>";
    }
    ?>
	 
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