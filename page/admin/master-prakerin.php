<div class="col-md-12">
<h3 class="title">Data Master Siswa Prakerin</h3>
<br>
<?php
include "../../koneksi.php";
$query = "SELECT * FROM verifikasi_siswa";
$res = $sql->query($query);
?>

<div class="row">
        <div class="col-lg-12 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
               <i style="text-align: left;">
                <p> * Import file master siswa </p></i>
   <form enctype='multipart/form-data' action='import.php' method='post'>
    <table>
        <tr>
            <td>Pilih File (.CSV) : </td>
            <td style="padding: 10px;"><input type='file' name='filename' size='100'></td></tr>
        <tr><td></td><td style="padding: 10px;"><input type='submit' name='submit' value='Import'></td>
        <tr></table></form>
                </div>
            </div>
     </div>
</div>
<!-- <hr> -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
    <table id="example" style="font-size:13px;" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th style="text-align: center;">Nama</th>
          <th style="text-align: center;">NIS</th>
          <th style="text-align: center;">Jurusan</th>
		  <th style="text-align: center;">Kelas</th>
          <th style="text-align: center;">Tahun Masuk</th>
        </tr>
      </thead>
      <tbody><?php while ($data = $res->fetch_assoc()) { ?>
        <tr style="text-align: center;">
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['nis']; ?></td>
          <td><?php echo $data['jurusan']; ?></td>
		  <td><?php echo $data['kelas']; ?></td>
          <td><?php echo $data['tahun_masuk']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>


</div>

</div>
</div>
</div>