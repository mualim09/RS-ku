<?php
include_once('../header.php');

?>

<div class="box">
  <h1>Dokter</h1>
  <h4><small>Tambah Data Dokter</small>
    <div class="pull-right">
      <a href="data_dokter.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
    </div>
  </h4>
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <form action="prosess_dokter.php" method="post">
        <div class="form-group">
          <label for="nama">Nama Dokter</label>
          <input type="text" name="nama" class="form-control" required autofocus>
        </div>
        <div class="form-group">
          <label for="spesialis">Spesialis</label>
          <input type="text" name="spesialis" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label for="telp">No. Hp</label>
          <input type="number" name="telp" class="form-control" required>
        </div>
        <div class="form-group pull-right">
          <button type="submit" name="add" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include_once('../footer.php'); ?>