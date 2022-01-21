<?php
$sql_data_siswa = "SELECT * FROM `data-ibu` WHERE `nis`=$data";
$query = mysqli_query($koneksi, $sql_data_siswa);

while ($data_siswa = mysqli_fetch_assoc($query)) {
    $id = $data_siswa['id'];
    $nis = $data_siswa['nis'];
    $nama = $data_siswa['nama_ibu'];
    $tempat_lahir = $data_siswa['tempat_lahir_ibu'];
    $tanggal_lahir = $data_siswa['tanggal_lahir_ibu'];
    $nohp = $data_siswa['nohp_ibu'];
    $pendidikan = $data_siswa['pendidikan_ibu'];
    $pekerjaan = $data_siswa['pekerjaan_ibu'];
    $penghasilan = $data_siswa['penghasilan_ibu'];
    $agama = $data_siswa['agama_ibu'];
    $status = $data_siswa['status_ibu'];
    $alamat = $data_siswa['alamat_ibu'];
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