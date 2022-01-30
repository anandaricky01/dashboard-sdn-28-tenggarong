<?php

$data = $_GET['data'];
$halaman = $_GET['halaman'];

$sql_foto_1 = "SELECT `foto` FROM `foto-siswa` WHERE `nis`=$data AND `kelas`=1";
$sql_foto_4 = "SELECT `foto` FROM `foto-siswa` WHERE `nis`=$data AND `kelas`=4";
$sql_foto_6 = "SELECT `foto` FROM `foto-siswa` WHERE `nis`=$data AND `kelas`=6";
$sql_nama = "SELECT `nama` FROM `data-utama-siswa` WHERE `nis`=$data";

$query_foto_1 = mysqli_query($koneksi, $sql_foto_1);
$query_foto_4 = mysqli_query($koneksi, $sql_foto_4);
$query_foto_6 = mysqli_query($koneksi, $sql_foto_6);
$query_nama = mysqli_query($koneksi, $sql_nama);
$nama = mysqli_fetch_assoc($query_nama);

while ($data_foto_1 = mysqli_fetch_assoc($query_foto_1)) {
    $foto_1 = $data_foto_1['foto'];
}

while ($data_foto_4 = mysqli_fetch_assoc($query_foto_4)) {
    $foto_4 = $data_foto_4['foto'];
}

while ($data_foto_6 = mysqli_fetch_assoc($query_foto_6)) {
    $foto_6 = $data_foto_6['foto'];
}

?>

<script>
    function first() {
        document.getElementById('foto')
            .src = "foto/<?= !empty($foto_1) ? $foto_1 : 'kosong.png'; ?>";
    }

    function second() {
        document.getElementById('foto')
            .src = "foto/<?= !empty($foto_4) ? $foto_4 : 'kosong.png'; ?>";
    }

    function third() {
        document.getElementById('foto')
            .src = "foto/<?= !empty($foto_6) ? $foto_6 : 'kosong.png'; ?>";
    }
</script>

<div class="card mx-5 mt-4 border-rounded">
    <div class="card-body">
        <ul class="breadcrumb" style="margin-bottom: 5px;">
            <li class="breadcrumb-item"><a href="home" class="text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg> Home</a></li>
            <li class="breadcrumb-item"><a href="home" class="text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 1 16 16">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg> Home</a></li>
            <li class="breadcrumb-item"><a href="data-siswa" class="text-decoration-none">Data Siswa</a></li>
            <li class="breadcrumb-item">Detail Siswa</a></li>
        </ul>
    </div>
</div>

<div class="card mx-5 mt-4 border-rounded">
    <div class="card-body">
        <div class="container my-5">
            <a href="data-siswa" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg> Kembali</a>
            <h1 class="text-center mb-5">Detail Siswa</h1>

            <div class="row">
                <div class="col-5 text-center">
                    <img id="foto" class="img-thumbnail" src="foto/<?= !empty($foto_1) ? $foto_1 : 'kosong.png'; ?>" alt="" style="height: 360px; widht: 270px;">
                    <h4 class="text-center mt-2"><?php echo $nama['nama']; ?></h4>
                    <div class="mt-3">
                        <button type="button" class="btn btn-primary" onclick=first();>Kelas 1</button>
                        <button type="button" class="btn btn-primary" onclick=second();>Kelas 4</button>
                        <button type="button" class="btn btn-primary" onclick=third();>Kelas 6</button>
                    </div>
                </div>
                <div class="col-7 border rounded bg-white p-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="detail-siswa&data=<?php echo $data ?>&halaman=utama" class="nav-link <?php if ($halaman == 'utama') {
                                                                                                                echo "active";
                                                                                                            } ?>" id="datautama">Data Utama</a>
                        </li>
                        <li class="nav-item">
                            <a href="detail-siswa&data=<?php echo $data ?>&halaman=sekolah" class="nav-link <?php if ($halaman == 'sekolah') {
                                                                                                                echo "active";
                                                                                                            } ?>" id="datasekolah">Data Sekolah</a>
                        </li>
                        <li class="nav-item">
                            <a href="detail-siswa&data=<?php echo $data ?>&halaman=diri" class="nav-link <?php if ($halaman == 'diri') {
                                                                                                                echo "active";
                                                                                                            } ?>" id="datadiri">Data Diri</a>
                        </li>
                        <li class="nav-item">
                            <a href="detail-siswa&data=<?php echo $data ?>&halaman=ayah" class="nav-link <?php if ($halaman == 'ayah') {
                                                                                                                echo "active";
                                                                                                            } ?>" id="dataayah">Data Ayah</a>
                        </li>
                        <li class="nav-item">
                            <a href="detail-siswa&data=<?php echo $data ?>&halaman=ibu" class="nav-link <?php if ($halaman == 'ibu') {
                                                                                                            echo "active";
                                                                                                        } ?>" id="dataibu">Data Ibu</a>
                        </li>
                        <li class="nav-item">
                            <a href="detail-siswa&data=<?php echo $data ?>&halaman=wali" class="nav-link <?php if ($halaman == 'wali') {
                                                                                                                echo "active";
                                                                                                            } ?>" id="datawali">Data Wali</a>
                        </li>
                    </ul>
                    <?php
                    if ($halaman == 'ayah') {
                        include('include/datasiswa/dataayah.php');
                    } else if ($halaman == 'ibu') {
                        include('include/datasiswa/dataibu.php');
                    } else if ($halaman == 'wali') {
                        include('include/datasiswa/datawali.php');
                    } else if ($halaman == 'diri') {
                        include('include/datasiswa/datadiri.php');
                    } else if ($halaman == 'sekolah') {
                        include('include/datasiswa/datasekolah.php');
                    } else {
                        include('include/datasiswa/datasiswa.php');
                    }
                    ?>
                </div>
            </div>
            <?php  if ($halaman == 'diri') { ?>
            <div class="row mt-4 border rounded bg-white p-2">
                <?php 
                    include('include/datasiswa/datadiri2.php');
                 ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>