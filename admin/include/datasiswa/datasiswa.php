<?php 
$sql_data_siswa = "SELECT * FROM `data-utama-siswa`  WHERE `nis`=$data";
$query_utama = mysqli_query($koneksi, $sql_data_siswa);
while ($data_siswa = mysqli_fetch_assoc($query_utama)) {
    $id = $data_siswa['id'];
    $nis = $data_siswa['nis'];
    $nisn = $data_siswa['nisn'];
    $tahun_masuk = $data_siswa['tahun_masuk'];
    $nama = $data_siswa['nama'];
    $jenis_kelamin = $data_siswa['jenis_kelamin'];
    $kelas = $data_siswa['kelas'];
}

$sql_foto_1 = "SELECT `foto` FROM `foto-siswa` WHERE `nis`=$data AND `kelas`=1";
$sql_foto_4 = "SELECT `foto` FROM `foto-siswa` WHERE `nis`=$data AND `kelas`=4";
$sql_foto_6 = "SELECT `foto` FROM `foto-siswa` WHERE `nis`=$data AND `kelas`=6";

$query_foto_1 = mysqli_query($koneksi, $sql_foto_1);
$query_foto_4 = mysqli_query($koneksi, $sql_foto_4);
$query_foto_6 = mysqli_query($koneksi, $sql_foto_6);

while($data_foto_1 = mysqli_fetch_assoc($query_foto_1)){
    $foto_1 = $data_foto_1['foto'];
}

while($data_foto_4 = mysqli_fetch_assoc($query_foto_4)){
    $foto_4 = $data_foto_4['foto'];
}

while($data_foto_6 = mysqli_fetch_assoc($query_foto_6)){
    $foto_6 = $data_foto_6['foto'];
}

?>

<script>
    function first(){
        document.getElementById('foto')
        .src="../foto/<?= !empty($foto_1) ? $foto_1 : 'kosong.png'; ?>";
    }
     
    function second(){
        document.getElementById('foto')
        .src="../foto/<?= !empty($foto_4) ? $foto_4 : 'kosong.png'; ?>";
    }

    function third(){
        document.getElementById('foto')
        .src="../foto/<?= !empty($foto_6) ? $foto_6 : 'kosong.png'; ?>";
    }
</script>

<div class="row">
    <div class="col-5">
        <div class="text-center">
            <img id="foto" class="img-thumbnail" src="../foto/<?= !empty($foto_1) ? $foto_1 : 'kosong.png'; ?>" alt="Foto Siswa" style="width: 300px; height: 400px;">
            <div class="mt-3">
                <button type="button" class="btn btn-primary" onclick=first();>Kelas 1</button>
                <button type="button" class="btn btn-primary" onclick=second();>Kelas 4</button>
                <button type="button" class="btn btn-primary" onclick=third();>Kelas 6</button>
            </div>
        </div>
    </div>
    <div class="col-7">
        <table class="table table-striped table-bordered mb-3">
            <thead>
                <tr>
                    <td colspan="2"><i class="fas fa-user-circle"></i>  
                    <strong> Data Siswa<strong></td>
                </tr>
            </thead>
            <tbody>   
                <tr>
                    <th width="45%" scope="row">Nama</th>
                    <td><?= $nama; ?></td>
                </tr>
                <tr>
                    <th scope="row">NIPD</th>
                    <td><?= $nis; ?></td>
                </tr>
                <tr>
                    <th scope="row">NISN</th>
                    <td><?= $nisn; ?></td>
                </tr>
                <tr>
                    <th scope="row">Kelas</th>
                    <td><?= $kelas; ?></td>
                </tr>
                <tr>
                    <th scope="row">Tahun Masuk</th>
                    <td><?= $tahun_masuk; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

