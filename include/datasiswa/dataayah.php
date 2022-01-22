<?php
$sql_data_siswa = "SELECT * FROM `data-ayah` WHERE `nis`=$data";
$query = mysqli_query($koneksi, $sql_data_siswa);

while ($data_siswa = mysqli_fetch_assoc($query)) {
    $id = $data_siswa['id'];
    $nis = $data_siswa['nis'];
    $nama = $data_siswa['nama_ayah'];
    $tempat_lahir = $data_siswa['tempat_lahir_ayah'];
    $tanggal_lahir = $data_siswa['tanggal_lahir_ayah'];
    $nohp = $data_siswa['nohp_ayah'];
    $pendidikan = $data_siswa['pendidikan_ayah'];
    $pekerjaan = $data_siswa['pekerjaan_ayah'];
    $penghasilan = $data_siswa['penghasilan_ayah'];
    $agama = $data_siswa['agama_ayah'];
    $status = $data_siswa['status_ayah'];
    $alamat = $data_siswa['alamat_ayah'];
}
?>

<div>
        <table class="table mt-3">
            <tbody>
                <tr>
                    <th scope="row">Nama</th>
                    <td><?= !empty($nama) ? $nama : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">NIS</th>
                    <td><?= !empty($nis) ? $nis : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Tempat Lahir</th>
                    <td><?= !empty($tempat_lahir) ? $tempat_lahir : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Lahir</th>
                    <td><?= !empty($tanggal_lahir) ? $tanggal_lahir : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">No Hp</th>
                    <td><?= !empty($nohp) ? $nohp : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Pendidikan</th>
                    <td><?= !empty($pendidikan) ? $pendidikan : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Pekerjaan</th>
                    <td><?= !empty($pekerjaan) ? $pekerjaan : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Penghasilan</th>
                    <td><?= !empty($penghasilan) ? $penghasilan : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Agama</th>
                    <td><?= !empty($agama) ? $agama : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td><?= !empty($status) ? $status : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Alamat</th>
                    <td><?= !empty($alamat) ? $alamat : "--"; ?></td>
                </tr>
            </tbody>
        </table>
</div>