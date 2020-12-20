<div class="col-md-12">
<h3 class="title">Data Siswa Telah Terverifikasi walikelas</h3>
<br>
<?php
$query = "SELECT nama_siswa,nis,jk,kelas,sr,url FROM siswa_daftar where terverifikasi='Ya' ";
$res = $sql->query($query);
?>
<!-- <hr> -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
    <table id="example" style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th style="text-align: center;">Nama</th>
		  <th style="text-align: center;">NIS</th>
		  <th style="text-align: center;">Jenis Kelamin</th>
		  <th style="text-align: center;">Kelas</th>
		 
		
        </tr>
      </thead>
      <tbody><?php while ($data = $res->fetch_assoc()) { ?>
        <tr style="text-align: center;">
		
          <td><?php echo $data['nama_siswa']; ?></td>
		   <td><?php echo $data['nis']; ?></td>
		   <td><?php echo $data['jk']; ?></td>
          <td><?php echo $data['kelas']; ?></td>
		 
         
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