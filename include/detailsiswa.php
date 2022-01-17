<?php
$data = $_GET['data'];
$halaman = $_GET['halaman'];
?>

<script>
    function first(){
        document.getElementById('foto')
        .src="foto/img013.jpg";
    }
     
    function second(){
        document.getElementById('foto')
        .src="foto/zidane.jpg";
    }

    function third(){
        document.getElementById('foto')
        .src="foto/31.jpg";
    }
</script>

<div class="card mx-5 mt-4 border-rounded">
  <div class="card-body">
      <ul class="breadcrumb"  style="margin-bottom: 5px;">
        <li class="breadcrumb-item"><a href="home" class="text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/><path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/></svg> Home</a></li>
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
        <div class="col text-center">
            <img id="foto" class="img-thumbnail" src="foto/img013.jpg" alt="" width="300px">
            <div class="mt-3">
                <button type="button" class="btn btn-primary" onclick=first();>Kelas 1</button>
                <button type="button" class="btn btn-primary" onclick=second();>Kelas 4</button>
                <button type="button" class="btn btn-primary" onclick=third();>Kelas 6</button>
            </div>
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
            } else if ($halaman == 'diri') {
                include('include/datasiswa/datadiri.php');
            } else {
                include('include/datasiswa/datasiswa.php');
            }
            ?>
        </div>
    </div>
</div>
  </div>
</div>


