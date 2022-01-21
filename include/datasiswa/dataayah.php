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
    <?php  
        if (isset($id)) {
    ?>
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
                    <th scope="row">Tempat Lahir</th>
                    <td><?= $tempat_lahir; ?></td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Lahir</th>
                    <td><?= $tanggal_lahir; ?></td>
                </tr>
                <tr>
                    <th scope="row">No Hp</th>
                    <td><?= $nohp; ?></td>
                </tr>
                <tr>
                    <th scope="row">Pendidikan</th>
                    <td><?= $pendidikan; ?></td>
                </tr>
                <tr>
                    <th scope="row">Pekerjaan</th>
                    <td><?= $pekerjaan; ?></td>
                </tr>
                <tr>
                    <th scope="row">Penghasilan</th>
                    <td><?= $penghasilan; ?></td>
                </tr>
                <tr>
                    <th scope="row">Agama</th>
                    <td><?= $agama; ?></td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td><?= $status; ?></td>
                </tr>
                <tr>
                    <th scope="row">Alamat</th>
                    <td><?= $alamat; ?></td>
                </tr>
            </tbody>
        </table>
    <?php } else { ?>
        <table class="table mt-3">
            <tbody>
                <tr>
                    <th scope="row">Nama</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">NIS</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Tempat Lahir</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Lahir</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">No Hp</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Pendidikan</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Pekerjaan</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Penghasilan</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Agama</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Alamat</th>
                    <td>--</td>
                </tr>
            </tbody>
        </table>
    <?php } ?>
</div>