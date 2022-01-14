<?php
$data = $_GET['data'];
$halaman = $_GET['halaman'];
?>

<div class="container my-5">
    <a href="data-siswa" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg> Kembali</a>
    <h1 class="text-center mb-5">Detail Siswa</h1>

    <div class="row">
        <div class="col text-center">
            <img class="img-thumbnail" src="foto/img013.jpg" alt="" width="300px">
        </div>
        <div class="col border rounded bg-white p-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="detail-siswa&data=<?php echo $data ?>&halaman=utama" class="nav-link <?php if ($halaman == 'utama') {
                                                                                                        echo "active";
                                                                                                    } ?>" id="datautama">Data Utama</a>
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
            } else {
                include('include/datasiswa/datasiswa.php');
            }
            ?>
        </div>
    </div>
</div>