
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Siswa</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="data-siswa">Siswa</a></li>
              <li class="breadcrumb-item active">Tambah Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Siswa</h3>
        <div class="card-tools">
          <a href="data-siswa" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
          <?php if(!empty($_GET['notif'])){?>
            <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">
            Maaf data Siswa wajib di isi</div>
            <?php }?>
          <?php }?>
      </div>
      <form class="form-horizontal" method="post" action="konfirmasi-tambah-data-siswa">

        <div class="card-body">

          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="nama" value="" name="nama">
            </div>
          </div>

          <div class="form-group row">
            <label for="nis" class="col-sm-3 col-form-label">NIPD</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="nis" value="" name="nis">
            </div>
          </div>

          <div class="form-group row">
            <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="nisn" value="" name="nisn">
            </div>
          </div>

          <div class="form-group row">
            <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="kelas" value="" name="kelas">
            </div>
          </div>

          <div class="form-group row">
            <label for="tahun_masuk" class="col-sm-3 col-form-label">Tahun Masuk</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="tahun_masuk" value="" name="tahun_masuk">
            </div>
          </div>

          <div class="form-group row">
            <label for="jenis_kelamin" class="col-sm-3 col-form-label">
              Jenis Kelamin
            </label>
            <div class="col-sm-7">
              <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">- Pilih Jenis Kelamin -</option>
                <option value="L">Laki - laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Foto Kelas 1</label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto-1" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          

        </div>
        <!-- /.card-body -->


        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
    