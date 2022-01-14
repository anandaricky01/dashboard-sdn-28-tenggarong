<?php

$sql_data_siswa = "SELECT * FROM `data-utama-siswa`";
$query = mysqli_query($koneksi, $sql_data_siswa);

?>

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
            <form action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Nama Siswa...">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
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
                <?php $i = 1;
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
    <div class="row justify-content-center mb-5">
        <div class="col-md-5 text-center">
            <ul class="pagination pagination-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php for ($i = 0; $i < 10; $i++) { ?>
                    <li class="page-item"><a class="page-link" href="#"><?php echo $i + 1; ?></a></li>
                <?php } ?>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>