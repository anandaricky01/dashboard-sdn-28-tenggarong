<?php
$sql_ayah = "SELECT * FROM `data-ayah` WHERE `nis`=$data";
var_dump($data);
$query_ayah = mysqli_query($koneksi, $sql_ayah);

while ($data_ayah = mysqli_fetch_assoc($query_ayah)) {
    $id = $data_ayah['id'];
    $nis = $data_ayah['nis'];
    $nama = $data_ayah['nama_ayah'];
    $tempat_lahir = $data_ayah['tempat_lahir_ayah'];
    $tanggal_lahir = $data_ayah['tanggal_lahir_ayah'];
    $nohp = $data_ayah['nohp_ayah'];
    $pendidikan = $data_ayah['pendidikan_ayah'];
    $pekerjaan = $data_ayah['pekerjaan_ayah'];
    $penghasilan = $data_ayah['penghasilan_ayah'];
    $agama = $data_ayah['agama_ayah'];
    $status = $data_ayah['status_ayah'];
    $alamat = $data_ayah['alamat_ayah'];
}
?>

<table class="table table-bordered mb-3">
    <tbody>  
        <tr>
            <td colspan="2"><i class="fas fa-user-circle"></i>  
            <strong>Data Ayah Siswa<strong></td>
        </tr>              
        <tr>
            <th width="45%" scope="row">Nama</th>
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