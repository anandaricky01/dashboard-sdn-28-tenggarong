<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-plus"></i> Tambah User</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="user">Data User</a></li>
          <li class="breadcrumb-item active">Tambah User</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data User</h3>
      <div class="card-tools">
        <a href="user" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
      </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    </br>

    <div class="col-sm-10">
      <?php if ((!empty($_GET['notif'])) && (!empty($_GET['jenis']))) { ?>
        <?php if ($_GET['notif'] == "tambahkosong") { ?>
          <div class="alert alert-danger" role="alert">Maaf data
            <?php echo $_GET['jenis']; ?> wajib di isi</div>
        <?php } ?>
      <?php } ?>
    </div>

    <form class="form-horizontal" method="POST" action="konfirmasi-tambah-user" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group row">
          <label for="foto" class="col-sm-12 col-form-label"><span class="text-info"><i class="fas fa-user-circle"></i> <u>Data User</u></span></label>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nama" id="nama" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="email" id="email" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="username" class="col-sm-3 col-form-label">Username</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="username" id="username" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-7">
            <input type="password" class="form-control" name="password" id="password" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="level" class="col-sm-3 col-form-label">Level</label>
          <div class="col-sm-7">
            <select class="form-control" id="jurusan" name="level">
              <option value="1">Superadmin</option>
              <option value="2">Admin</option>
            </select>
          </div>
        </div>

      </div>
  </div>

  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
    </div>
  </div>
  <!-- /.card-footer -->
  </form>
  </div>
  <!-- /.card -->

</section>