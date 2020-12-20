<div class="col-md-12">
<h3 class="title">Agenda Harian Siswa</h3>
<br>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
$tgl2 = $_POST['tgl'];
}else{
$tgl2=date('y-m-d');
}
$data = $sql->query ("SELECT a.id_agenda,a.nis, b.nama_siswa 
FROM agenda a 
join siswa_daftar b 
on a.nis=b.nis 
where a.tgl_agenda='$tgl2'");
$countDsn = mysqli_num_rows($data);

?>
<!-- <hr> -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
	
    <table  style="font-size:13px;" class="table table-striped table-bordered" cellspacing="0" width="100% ">
     
	  <thead>
		<div class="col-md-3
		form-group">
		<form method="POST">
	    <label>Pilih tanggal</label>
	    <input class="form-control" type="date" name="tgl" required  /><input type="submit" class="btn btn-default" name="submit" value="Kirim" />
		
		</form>
  	</div>
        <tr>
		  <th style="text-align: center;">ID Agenda</th>
          <th style="text-align: center;">Nis</th>
		  <th style="text-align: center;">nama</th> 
		   <th style="text-align: center;">MENU</th>
        </tr>
      </thead>
      <tbody><?php
if($countDsn>0){
			while ($datab = $data->fetch_assoc()) {
			?>
        <tr style="text-align: center;">
		 <td><?php echo $datab['id_agenda']; ?></td>
          <td><?php echo $datab['nis']; ?></td>
		   <td><?php echo $datab['nama_siswa']; ?></td>
         
          <td>
            <a href="index.php?content=<?php echo 'detail-agenda.php&id='.$datab['id_agenda']; ?>">
              <img src='../../images/update.png' title='View Detail'></a>
            </td>
        </tr>
<?php }} ?>
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


