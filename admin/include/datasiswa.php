<?php 

  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
      $nis = $_GET['data'];
      //hapus Kategori Kegiatan
      $sql_dh = "DELETE FROM `data-utama-siswa` WHERE `nis` = '$nis'";
      mysqli_query($koneksi,$sql_dh);

      $sql_dh = "DELETE FROM `data-sekolah-siswa` WHERE `nis` = '$nis'";
      mysqli_query($koneksi,$sql_dh);
    }
  }

  if(isset($_POST["katakunci"])){
    $katakunci = $_POST["katakunci"];
    $_SESSION['katakunci'] = $katakunci;
  }

  // cek apakah variabel session kata kunci sudah terset
  if(isset($_SESSION['katakunci'])){
      $katakunci = $_SESSION['katakunci'];
  }

?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-address-book"></i> Data Siswa</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Data Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Data Siswa</h3>
                <div class="card-tools">
                  <a href="tambah-data-siswa" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah Siswa</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <div class="col-md-12">
                <form action="data-siswa" method="post" >
                   <div class="row">
                       <div class="col-md-4 bottom-10">
                           <input type="text" class="form-control" id="kata_kunci" 
                           name="katakunci">
                       </div>
                       <div class="col-md-5 bottom-10">
                           <button type="submit" class="btn btn-primary">
                           <i class="fas fa-search"></i> Search</button>
                       </div>
                   </div><!-- .row -->
                </form>
              </div><br>

              <div class="col-sm-12">
                   <?php if(!empty($_GET['notif'])){?>
                       <?php if($_GET['notif']=="tambahberhasil"){?>
                             <div class="alert alert-success" role="alert">
                             Data Berhasil Ditambahkan</div>
                       <?php } else if($_GET['notif']=="editberhasil"){?>
                             <div class="alert alert-success" role="alert">
                             Data Berhasil Diubah</div>
                       <?php } else if($_GET['notif']=="hapusberhasil"){?>
                             <div class="alert alert-success" role="alert">
                             Data Berhasil Dihapus</div>
                       <?php }?>
                    <?php }?>
                </div>

                <table class="table table-bordered text-center">
                  <thead>                  
                    <tr>
                      <th scope="col" width="5%">No.</th>
                      <th scope="col">Nama</th>
                      <th scope="col">NIPD</th>
                      <th scope="col">NISN</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">L/P</th>
                      <th><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $batas = 5;
                      if(!isset($_GET['halaman'])){
                           $posisi = 0;
                           $halaman = 1;
                      }else{
                           $halaman = $_GET['halaman'];
                           $posisi = ($halaman-1) * $batas;
                      }

                      $sql_k = "SELECT * FROM `data-utama-siswa`";
                            if (!empty($katakunci)){
                                 $sql_k .= " WHERE `nama` LIKE '%$katakunci%' ";
                            } 
                            $sql_k .=" ORDER BY `nama` limit $posisi, $batas";
                      $query_k = mysqli_query($koneksi,$sql_k);                      
                      $no = $posisi + 1;
                      while ($data_k = mysqli_fetch_assoc($query_k)) {
                        $id = $data_k['id'];
                        $nis = $data_k['nis'];
                        $nisn = $data_k['nisn'];
                        $tahun_masuk = $data_k['tahun_masuk'];
                        $nama = $data_k['nama'];
                        $jenis_kelamin = $data_k['jenis_kelamin'];
                        $kelas = $data_k['kelas'];
                    ?>
                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $nama; ?></td>
                      <td><?php echo $nis; ?></td>
                      <td><?php echo $nisn; ?></td>
                      <td>Kelas <?php echo $kelas; ?></td>
                      <td><?php echo $jenis_kelamin; ?></td>
                      <td align="center">
                            <a href="detail-data-siswa&data=<?php echo $nis; ?>" class="btn btn-xs btn-info"><i class="fas fa-eye"></i></a>
                            <a href="edit-data-siswa&data=<?php echo $nis;?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                            <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $nama; ?>?')) window.location.href='data-siswa&aksi=hapus&data=<?php echo $nis;?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                   </tr>
                   <?php $no++;}?>
                   </tbody>
                </table>

              <?php 
              //hitung jumlah semua data 
                  $sql_jum = "SELECT `id` FROM `data-utama-siswa`"; 
                    if (!empty($katakunci)){
                        $sql_jum .= " WHERE `nama` LIKE '%$katakunci%'";
                    } 
                    $sql_jum .= " order by `nama`";
 
                  $query_jum = mysqli_query($koneksi,$sql_jum);
                  $jum_data = mysqli_num_rows($query_jum);
                  $jum_halaman = ceil($jum_data/$batas);
              ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                <?php 
                if($jum_halaman==0){
                   //tidak ada halaman
                }else if($jum_halaman==1){
                   echo "<li class='page-item'><a class='page-link'>1</a></li>";
                }else{
                   $sebelum = $halaman-1;
                   $setelah = $halaman+1;
                   if($halaman!=1){
                     echo "<li class='page-item'><a class='page-link' 
                     href='data-siswa&halaman=1'>First</a></li>";
                     echo "<li class='page-item'><a class='page-link' 
                     href='data-siswa&halaman=$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                         if($i!=$halaman){
                             echo "<li class='page-item'><a class='page-link' 
                            href='data-siswa&halaman=$i'>$i</a></li>";
                         }else{
                            echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                         }
                      }
                   }
                   if($halaman!=$jum_halaman){
                        echo "<li class='page-item'><a class='page-link' 
                        href='data-siswa&halaman=$setelah'>»</a></li>";
                        echo "<li class='page-item'><a class='page-link' 
                        href='data-siswa&halaman=$jum_halaman'>Last</a></li>";
                   }
                              
                }?>
                </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
  
