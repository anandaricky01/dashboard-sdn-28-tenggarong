<?php

    // cek apakah variabel kata kunci ter-set dan set dalam session
    if(isset($_POST["katakunci"])){
        $katakunci = $_POST["katakunci"];
        $_SESSION['katakunci'] = $katakunci;
    }

    // cek apakah variabel session kata kunci sudah terset
    if(isset($_SESSION['katakunci'])){
        $katakunci = $_SESSION['katakunci'];
    }

    // batas data yang terlihat
    $batas = 2;

    // apakah tidak terdapat variabel get halaman
    if(!isset($_GET['halaman'])){
        // posisi = data pada database dimulai dari index ke-posisi
        $posisi = 0;

        // halaman = posisi halaman saat ini
        $halaman = 1;

    }else{
        /*
            jika terdapat variabel halaman, maka jalankan else
            ambil nilai dari variabel get halaman dan masukan pada variabel $halaman
        */
        $halaman = $_GET['halaman'];
        $posisi = ($halaman-1) * $batas;
    }

    $sql_data_siswa = "SELECT * FROM `data-utama-siswa`";

    if (!empty($katakunci)){
        $katakunci = $_SESSION["katakunci"];
        $sql_data_siswa .= " where `nama` LIKE '%$katakunci%'";
    } 

    $sql_data_siswa .= " ORDER BY `nama` limit $posisi, $batas";
    $query = mysqli_query($koneksi, $sql_data_siswa);

?>

<div class="card mx-5 mt-4 border-rounded">
  <div class="card-body">
      <ul class="breadcrumb"  style="margin-bottom: 5px;">
        <li class="breadcrumb-item"><a href="home" class="text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 1 16 16"><path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/><path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/></svg> Home</a></li>
        <li class="breadcrumb-item">Data Siswa</a></li>
      </ul>
  </div>
</div>

<div class="card mx-5 mt-4 border-rounded">
  <div class="card-body">
  <div class="container mt-5">
    <div class="row mb-3">
        <div class="col text-center">
            <img src="foto/search.png" alt="" width="150px">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col text-center">
            <h1>Cari Data Siswa..</h1>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-md-5 text-center">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Nama Siswa..." name="katakunci">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="mb-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIS</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">L/P</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = ++$posisi;
                while ($data = mysqli_fetch_assoc($query)) {
                    $id = $data['id'];
                    $nis = $data['nis'];
                    $nisn = $data['nisn'];
                    $tahun_masuk = $data['tahun_masuk'];
                    $nama = $data['nama'];
                    $jenis_kelamin = $data['jenis_kelamin'];
                    $kelas = $data['kelas'];
                ?>
                    <tr>
                        <th scope="row"><?php echo $i; $i++;?></th>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $nis; ?></td>
                        <td><?php echo $nisn; ?></td>
                        <td>Kelas <?php echo $kelas; ?></td>
                        <td><?php echo $jenis_kelamin; ?></td>
                        <td>
                            <a href="detail-siswa&data=<?= $id;?>&halaman=utama" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                                <span class="badge bg-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </span>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php 
    // algoritma pagination
        $sql_pag = "SELECT `id` FROM `data-utama-siswa`"; 

        if (!empty($katakunci){
        $sql_pag .= " WHERE `nama` LIKE '%$katakunci%'";
        } 

        $sql_pag .= " ORDER BY `nama`";

        $query_pag = mysqli_query($koneksi,$sql_pag);
        $pag_data = mysqli_num_rows($query_pag);
        $pag_halaman = ceil($pag_data/$batas);
    ?>

    <div class="row justify-content-center mb-5">
        <div class="col-md-5 text-center">
        <ul class="pagination pagination-sm m-0 float-right">
                  <?php 
                if($pag_halaman==0){
                   //tidak ada halaman
                }else if($pag_halaman==1){
                   echo "<li class='page-item active'><a class='page-link'>1</a></li>";
                }else{
                   $sebelum = $halaman-1;
                   $setelah = $halaman+1;
                   if($halaman!=1){
                     echo "<li class='page-item'><a class='page-link' 
                     href='data-siswa&halaman=1'>First</a></li>";
                     echo "<li class='page-item'><a class='page-link' 
                     href='data-siswa&halaman=$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$pag_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                         if($i!=$halaman){
                             echo "<li class='page-item'><a class='page-link' 
                            href='data-siswa&halaman=$i'>$i</a></li>";
                         }else{
                            echo "<li class='page-item active'><a class='page-link'>$i</a></li>";
                         }
                      }
                   }
                   if($halaman!=$pag_halaman){
                        echo "<li class='page-item'><a class='page-link' 
                        href='data-siswa&halaman=$setelah'>»</a></li>";
                        echo "<li class='page-item'><a class='page-link' 
                        href='data-siswa&halaman=$pag_halaman'>Last</a></li>";
                   }
                              
                }?>
                </ul>
        </div>
    </div>
</div>
  </div>
</div>
