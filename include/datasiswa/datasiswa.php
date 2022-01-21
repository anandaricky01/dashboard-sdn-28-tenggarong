<?php
$sql_data_siswa = "SELECT * FROM `data-utama-siswa` WHERE `nis`=$data";
$sql_data_sekolah_siswa = "SELECT * FROM `data-sekolah-siswa` WHERE `nis`=$data";

$query_utama = mysqli_query($koneksi, $sql_data_siswa);
$query_sekolah_siswa = mysqli_query($koneksi, $sql_data_sekolah_siswa);

while ($data_siswa = mysqli_fetch_assoc($query_utama)) {
    $id = $data_siswa['id'];
    $nis = $data_siswa['nis'];
    $nisn = $data_siswa['nisn'];
    $tahun_masuk = $data_siswa['tahun_masuk'];
    $nama = $data_siswa['nama'];
    $jenis_kelamin = $data_siswa['jenis_kelamin'];
    $kelas = $data_siswa['kelas'];
}

while($data_sekolah = mysqli_fetch_assoc($query_sekolah_siswa)){
    $id_sekolah = $data_sekolah['id'];
    $skhun = $data_sekolah['skhun'];
    $penerima_kps = $data_sekolah['penerima_kps'];
    $no_kps = $data_sekolah['no_kps'];
    $no_ujian_nasional = $data_sekolah['no_ujian_nasional'];
    $no_ijazah = $data_sekolah['no_ijazah'];
    $penerima_kip = $data_sekolah['penerima_kip'];
    $no_kip = $data_sekolah['no_kip'];
    $nama_kip = $data_sekolah['nama_kip'];
    $layak_pip = $data_sekolah['layak_pip'];
    $alasan_pip = $data_sekolah['alasan_pip'];
}
?>

<div>
    <table class="table mt-3">
        <tbody>
            <tr>
                <th scope="row">Nama</th>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <th scope="row">NIS</th>
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

<div class="mt-4 ms-3">
    <h5>Data Sekolah Siswa</h5>
</div>

<div>
    <table class="table mt-3">
        <tbody>
            <tr>
                <th scope="row">SKHUN</th>
                <td><?= isset($skhun) ? $skhun : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Penerima KPS</th>
                <td><?= isset($penerima_kps) ? $penerima_kps : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">No. KPS</th>
                <td><?= isset($no_kps) ? $no_kps : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">No. Ujian Nasional</th>
                <td><?= isset($no_ujian_nasional) ? $no_ujian_nasional : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">No. Ijazah</th>
                <td><?= isset($no_ijazah) ? $no_ijazah : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Penerima KIP</th>
                <td><?= isset($penerima_kip) ? $penerima_kip : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">No. KIP</th>
                <td><?= isset($no_kip) ? $no_kip : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Layak PIP</th>
                <td><?= isset($layak_pip) ? $layak_pip : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Alasan PIP</th>
                <td><?= isset($alasan_pip) ? $alasan_pip : "--"; ?></td>
            </tr>
        </tbody>
    </table>
</div>