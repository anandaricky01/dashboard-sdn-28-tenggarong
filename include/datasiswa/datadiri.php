<?php
$sql_data_siswa = "SELECT * FROM `data-diri-siswa` WHERE `id`=$data";
$query = mysqli_query($koneksi, $sql_data_siswa);

while ($data_siswa = mysqli_fetch_assoc($query)) {
    $id = $data_siswa['id'];
    $nis = $data_siswa['nis'];
    $nik = $data_siswa['nik'];
    $tempat_lahir = $data_siswa['tempat_lahir'];
    $tanggal_lahir = $data_siswa['tanggal_lahir'];
    $agama = $data_siswa['agama'];
    $kewarganegaraan = $data_siswa['kewarganegaraan'];
    $anak_ke = $data_siswa['anak_ke'];
    $jumlah_saudara = $data_siswa['jumlah_saudara'];
    $jalan = $data_siswa['jalan'];
    $rt = $data_siswa['rt'];
    $rw = $data_siswa['rw'];
    $kodepos = $data_siswa['kodepos'];
    $kelurahan = $data_siswa['kelurahan'];
    $kecamatan = $data_siswa['kecamatan'];
    $kota_kab = $data_siswa['kota_kab'];
    $provinsi = $data_siswa['provinsi'];
    
}
?>

<div>
    <?php  
        if (isset($id)) {
    ?>
        <table class="table mt-3">
            <tbody>
                <tr>
                    <th scope="row">NIK</th>
                    <td><?=$nik; ?></td>
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
                    <th scope="row">Anak Ke</th>
                    <td><?= $anak_ke; ?></td>
                </tr>
                <tr>
                    <th scope="row">Jumlah Saudara</th>
                    <td><?= $jumlah_saudara; ?></td>
                </tr>
                <tr>
                    <th scope="row">Kewarganegaraan</th>
                    <td><?= $kewarganegaraan; ?></td>
                </tr>
                <tr>
                    <th scope="row">Agama</th>
                    <td><?= $agama; ?></td>
                </tr>
                <tr>
                    <th scope="row">Jalan</th>
                    <td><?= $jalan; ?></td>
                </tr>
                <tr>
                    <th scope="row">RT</th>
                    <td><?= $rt; ?></td>
                </tr>
                <tr>
                    <th scope="row">RW</th>
                    <td><?= $rw; ?></td>
                </tr>
                <tr>
                    <th scope="row">Kodepos</th>
                    <td><?= $kodepos; ?></td>
                </tr>
                <tr>
                    <th scope="row">kelurahan</th>
                    <td><?= $kelurahan; ?></td>
                </tr>
                <tr>
                    <th scope="row">Kecamatan</th>
                    <td><?= $kecamatan; ?></td>
                </tr>
                <tr>
                    <th scope="row">Kota / Kabupaten</th>
                    <td><?= $kota_kab; ?></td>
                </tr>
                <tr>
                    <th scope="row">Provinsi</th>
                    <td><?= $provinsi; ?></td>
                </tr>
            </tbody>
        </table>
    <?php } else { ?>
        <table class="table mt-3">
            <tbody>
                <tr>
                    <th scope="row">NIK</th>
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
                    <th scope="row">Anak Ke</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Jumlah Saudara</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Kewarganegaraan</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Agama</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Jalan</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">RT</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">RW</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Kodepos</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">kelurahan</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Kecamatan</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Kota / Kabupaten</th>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Provinsi</th>
                    <td>--</td>
                </tr>
            </tbody>
        </table>
    <?php } ?>
</div>