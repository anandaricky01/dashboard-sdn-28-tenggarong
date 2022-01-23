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
?>

<table class="table table-bordered mb-3">
    <tbody>  
        <tr>
            <td colspan="2"><i class="fas fa-user-circle"></i>  
            <strong>Data Siswa<strong></td>
        </tr>              
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