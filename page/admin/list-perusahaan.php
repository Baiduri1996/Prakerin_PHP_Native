<div class="col-md-12">
<h3 class="title">Data Perusahaan</h3>
<br>
<?php
$query = "SELECT * FROM perusahaan  ";
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
		  <th style="text-align: center;">No Telp</th> 
          <th style="text-align: center;">Alamat</th>
		  <th style="text-align: center;">Jurusan</th>
          <th style="text-align: center;">Kuota tersedia</th>
		   <th style="text-align: center;">MENU</th>
        </tr>
      </thead>
      <tbody><?php while ($data = $res->fetch_assoc()) { ?>
        <tr style="text-align: center;">
		
          <td><?php echo $data['nama_perusahaan']; ?></td>
		   <td><?php echo $data['no_telp']; ?></td>
          <td><?php echo $data['alamat_perusahaan']; ?></td>
		  <td><?php echo $data['jurusan']; ?></td>
          <td><?php echo $data['kuota_tersedia']; ?></td>
          <td>
          
            <a href="index.php?content=<?php echo 'delete-perusahaan.php&id='.$data['id_perusahaan']; ?>">
              <img src='../../images/delete.png' title='Delete'></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="index.php?content=<?php echo 'tambah-perusahaan.php'; ?>"><button type="submit" class="btn btn-default">Tambah Perusahaan</button></a>
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