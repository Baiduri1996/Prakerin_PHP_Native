<div class="col-md-12">
<h3 class="title">Data Surat Rekomendasi</h3>
<br>
<?php
$query = "SELECT a.id_prakerin,a.status, b.nis, b.nama_siswa, 
	b.jurusan, c.id_perusahaan, c.nama_perusahaan, c.alamat_perusahaan
	FROM p_prakerin a 
	join siswa_daftar b 
	on a.nis=b.nis
	join perusahaan c 
	on a.id_perusahaan=c.id_perusahaan
	where a.status='DITERIMA'";
$res = $sql->query($query);
?>
<!-- <hr> -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
	<br>
	<form name='form' method='post' action='print-siswa-diterima.php' enctype='multipart/form-data'>
                                <table border="0" align="right" style="margin-top: -20px;">
                                    <tr>
                                    
										
                                        <td style="padding: 2px;"><input id="submit" name="id" type="submit" class="btn btn-info" value="Cetak List"></td>
                                    </tr>
                                </table>
                    </form>
    <table id="example" style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      
	  <thead>
        <tr>
         <th style="text-align: center;">ID Prakerin</th>
                                    	<th style="text-align: center;">Nama</th>
                                        <th style="text-align: center;">NIS</th>
                                        <th style="text-align: center;">Jurusan</th>
                                        <th style="text-align: center;">ID Perusahaan</th>
                                        <th style="text-align: center;">Nama Perusahaan</th>
                                        <th style="text-align: center;">Alamat Perusahaan</th>
                                        <th style="text-align: center;">Status</th>
		  
		   
        </tr>
      </thead>
      <tbody><?php while ($data = $res->fetch_assoc()) { ?>
        <tr style="text-align: center;">
		
        <td><?php echo "$data[id_prakerin]"; ?></td>
        <td><?php echo "$data[nama_siswa]"; ?></td>
        <td><?php echo "$data[nis]"; ?></td>
        <td><?php echo "$data[jurusan]"; ?></td>
        <td><?php echo "$data[id_perusahaan]"; ?></td>
        <td><?php echo "$data[nama_perusahaan]"; ?></td>
		<td><?php echo "$data[alamat_perusahaan]"; ?></td>
        <td><?php echo "$data[status]"; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
   
  </div>
</div>

</div>

</div>
</div>
</div>

<script type="text/javascript">
$(document).on("click", ".open-detailPerusahaan", function () {
     var email = $(this).data('id');
     $(".modal-body #email").val( email );
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({
        "info": false
    });
} );

</script>