<?php  
  $data = $_GET['data'];
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Data Siswa</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data Siswa</li>
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
                  <a href="index.php?include=edit-data-guru&data=<?php echo $data; ?>" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit Data Siswa</a>
                  <a href="data-siswa" class="btn btn-sm btn-warning float-right">
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
                <?php 
                  include('datasiswa/datasiswa.php');
                  include('datasiswa/datadiri.php');
                  include('datasiswa/datasekolah.php');
                  include('datasiswa/dataayah.php');
                  include('datasiswa/dataibu.php');
                  include('datasiswa/datawali.php');
                ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
   
  
