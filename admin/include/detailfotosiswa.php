<?php 

  // ambil data dari variabel get
  $nis = $_GET['data'];
  $sql_siswa = "SELECT `nama` FROM `data-utama-siswa` WHERE `nis`='$nis'";
  $query_siswa = mysqli_query($koneksi, $sql_siswa);

  while ($data_siswa = mysqli_fetch_assoc($query_siswa)) {
    $nama = $data_siswa['nama'];
  }


  // kelas 1
  $sql_foto_siswa_1 = "SELECT `foto` FROM `foto-siswa` WHERE `nis`='$nis' AND `kelas` = '1' ";
  $query_foto_siswa_1 = mysqli_query($koneksi, $sql_foto_siswa_1);

  while ($data_1 = mysqli_fetch_assoc($query_foto_siswa_1)) {
    $foto_1 = $data_1['foto'];
  }

  // kelas 4
  $sql_foto_siswa_4 = "SELECT `foto` FROM `foto-siswa` WHERE `nis`='$nis' AND `kelas` = '4' ";
  $query_foto_siswa_4 = mysqli_query($koneksi, $sql_foto_siswa_4);

  while ($data_4 = mysqli_fetch_assoc($query_foto_siswa_4)) {
    $foto_4 = $data_4['foto'];
  }

  // kelas 6
  $sql_foto_siswa_6 = "SELECT `foto` FROM `foto-siswa` WHERE `nis`='$nis' AND `kelas` = '6' ";
  $query_foto_siswa_6 = mysqli_query($koneksi, $sql_foto_siswa_6);

  while ($data_6 = mysqli_fetch_assoc($query_foto_siswa_6)) {
    $foto_6 = $data_6['foto'];
  }

 ?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Foto Siswa</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Foto Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <a href="edit-foto-siswa&data=<?php echo $nis; ?>" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit Foto Siswa</a>
            <a href="foto-siswa" class="btn btn-sm btn-warning float-right">
            <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="col-sm-12">
              <?php if(!empty($_GET['notif'])){ 
                if($_GET['notif']=="editberhasil"){?>
                  <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
                <?php }?>
              <?php }?>
          </div>

          <table class="table table-bordered">
            <tbody>  
                <tr>
                   <td colspan="2"><i class="fas fa-user-circle"></i>  
                    <strong>Foto Siswa<strong></td>
                </tr>              
                <tr>
                    <th scope="row">Nama</th>
                    <td><?=$nama; ?></td>
                </tr>
                <tr>
                    <th scope="row">Foto Kelas 1</th>
                    <td><img id="foto" class="img-thumbnail" src="../foto/<?= !empty($foto_1) ? $foto_1 : 'kosong.png'; ?>" alt="Foto Siswa" style="width: 270px; height: 360px;"></td>
                </tr>
                <tr>
                    <th scope="row">Foto Kelas 4</th>
                    <td><img id="foto" class="img-thumbnail" src="../foto/<?= !empty($foto_4) ? $foto_4 : 'kosong.png'; ?>" alt="Foto Siswa" style="width: 270px; height: 360px;"></td>
                </tr>
                <tr>
                    <th scope="row">Foto Kelas 6</th>
                    <td><img id="foto" class="img-thumbnail" src="../foto/<?= !empty($foto_6) ? $foto_6 : 'kosong.png'; ?>" alt="Foto Siswa" style="width: 270px; height: 360px;"></td>
                </tr>
            </tbody>
          </table>  

        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">&nbsp;</div>
      </div>
      <!-- /.card -->

    </section>
   
  
