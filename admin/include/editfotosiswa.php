<?php
if (isset($_GET['data'])) {
  $nis = $_GET['data'];
  $_SESSION['nis'] = $nis;

  $sql_1 = "SELECT `foto` FROM `foto-siswa` WHERE `nis` = '$nis' AND `kelas`=1";
  $query_1 = mysqli_query($koneksi, $sql_1);

  $sql_4 = "SELECT `foto` FROM `foto-siswa` WHERE `nis` = '$nis' AND `kelas`=4";
  $query_4 = mysqli_query($koneksi, $sql_4);

  $sql_6 = "SELECT `foto` FROM `foto-siswa` WHERE `nis` = '$nis' AND `kelas`=6";
  $query_6 = mysqli_query($koneksi, $sql_6);

  while ($data_1 = mysqli_fetch_assoc($query_1)) {
    $foto_1 = $data_1['foto'];
  }

  while ($data_4 = mysqli_fetch_assoc($query_4)) {
    $foto_4 = $data_4['foto'];
  }

  while ($data_6 = mysqli_fetch_assoc($query_6)) {
    $foto_6 = $data_6['foto'];
  }
}
?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-edit"></i> Edit Data Guru</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="data-guru">Data Guru</a></li>
          <li class="breadcrumb-item active">Edit Data Guru</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Guru</h3>
      <div class="card-tools">
        <a href="foto-siswa" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
      </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    </br>
    <div class="col-sm-10">
      <?php if (!empty($_GET['notif'])) { ?>
        <?php if ($_GET['notif'] == "editkosong") { ?>
          <div class="alert alert-danger" role="alert">
            Maaf Foto Wajib diisi!</div>
        <?php } else if ($_GET['notif'] == "jenisfile") { ?>
          <div class="alert alert-danger" role="alert">
            Maaf Format yang diperbolehkan hanya .jpg, .jpeg, .png!</div>
        <?php } else if ($_GET['notif'] == "size") { ?>
          <div class="alert alert-danger" role="alert">
            Maaf File yang diunggah lebih dari 5MB!</div>
        <?php } ?>
      <?php } ?>
    </div>
    <form class="form-horizontal" method="POST" action="konfirmasi-edit-foto-siswa" enctype="multipart/form-data">

      <div class="card-body">

        <div class="form-group row">
          <label for="foto" class="col-sm-2 col-form-label">Foto Kelas 1</label>
          <div class="col-sm-9">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="foto_1" id="customFile">
              <label class="custom-file-label" for="customFile">Pilih Foto</label>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label for="foto" class="col-sm-2 col-form-label">Foto Kelas 4</label>
          <div class="col-sm-9">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="foto_4" id="customFile">
              <label class="custom-file-label" for="customFile">Pilih Foto</label>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label for="foto" class="col-sm-2 col-form-label">Foto Kelas 6</label>
          <div class="col-sm-9">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="foto_6" id="customFile">
              <label class="custom-file-label" for="customFile">Pilih Foto</label>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label for="foto" class="col-sm-2 col-form-label">Foto Saat ini</label>

          <div class="col-sm-3 text-center">
            <img id="foto" class="img-thumbnail" src="../foto/<?= !empty($foto_1) ? $foto_1 : 'kosong.png'; ?>" alt="Foto Kelas 1" style="width: 270px; height: 360px;">
            <strong class="text-center">Kelas 1</strong>
          </div>

          <div class="col-sm-3 text-center">
            <img id="foto" class="img-thumbnail" src="../foto/<?= !empty($foto_4) ? $foto_4 : 'kosong.png'; ?>" alt="Foto Kelas 4" style="width: 270px; height: 360px;">
            <strong class="text-center">Kelas 4</strong>
          </div>

          <div class="col-sm-3 text-center">
            <img id="foto" class="img-thumbnail" src="../foto/<?= !empty($foto_6) ? $foto_6 : 'kosong.png'; ?>" alt="Foto Kelas 6" style="width: 270px; height: 360px;">
            <strong class="text-center">Kelas 6</strong>
          </div>

        </div>

      </div>
      <!-- /.card-body -->
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