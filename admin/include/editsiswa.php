<?php
if (isset($_GET['data'])) {
  $nis = $_GET['data'];
  $halaman = $_GET['halaman'];
  $_SESSION['nis'] = $nis;
}
?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-edit"></i> Edit Data Siswa</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="data-siswa">Data Siswa</a></li>
          <li class="breadcrumb-item active">Edit Data Siswa</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Siswa</h3>
      <div class="card-tools">
        <a href="detail-data-siswa&data=<?php echo $nis; ?>" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
      </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    </br>
    <div class="col-sm-10">
      <?php if (!empty($_GET['notif'])) { ?>
        <?php if ($_GET['notif'] == "editkosong") { ?>
          <div class="alert alert-danger" role="alert">
            Maaf data siswa wajib di isi</div>
        <?php } ?>
      <?php } ?>
    </div>
    <form class="form-horizontal" action="konfirmasi-edit-data-siswa" method="post">

      <div class="card-body">
        <div class="form-group row">
          <div class="col-sm-10">
            <div class="alert alert-primary text-center" role="alert">
              Mengedit Foto Siswa dilakukan pada menu galeri!
            </div>
          </div>
        </div>
      </div>
      <input type="hidden" name="halaman" id="halaman" value="<?= $halaman; ?>">
      <?php

      if ($halaman == "ayah") {
        include('include/editsiswa/dataayah.php');
      } else if ($halaman == "ibu") {
        include('include/editsiswa/dataibu.php');
      } else if ($halaman == "wali") {
        include('include/editsiswa/datawali.php');
      } else if ($halaman == "sekolah") {
        include('include/editsiswa/datasekolah.php');
      } else if ($halaman == "diri") {
        include('include/editsiswa/datadiri.php');
      } else {
        include('include/editsiswa/datautama.php');
      }

      ?>

      <!-- submit -->
      <div class="card-footer">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
        </div>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->

</section>