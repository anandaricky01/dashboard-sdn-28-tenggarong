<?php
$sql_ayah = "SELECT * FROM `data-ayah` WHERE `nis`=$data";
$query_ayah = mysqli_query($koneksi, $sql_ayah);

while ($data_ayah = mysqli_fetch_assoc($query_ayah)) {
    $id = $data_ayah['id'];
    $nik_ayah = $data_ayah['nik_ayah'];
    $nama_ayah = $data_ayah['nama_ayah'];
    $tempat_lahir_ayah = $data_ayah['tempat_lahir_ayah'];
    $tanggal_lahir_ayah = $data_ayah['tanggal_lahir_ayah'];
    $nohp_ayah = $data_ayah['nohp_ayah'];
    $pendidikan_ayah = $data_ayah['pendidikan_ayah'];
    $pekerjaan_ayah = $data_ayah['pekerjaan_ayah'];
    $penghasilan_ayah = $data_ayah['penghasilan_ayah'];
    $agama_ayah = $data_ayah['agama_ayah'];
    $status_ayah = $data_ayah['status_ayah'];
    $alamat_ayah = $data_ayah['alamat_ayah'];
}
?>

<table class="table table-striped table-bordered mb-3">
    <thead>
        <tr>
            <td colspan="2"><i class="fas fa-user-circle"></i>
                <strong>Data Ayah Siswa<strong>
                        <a href="edit-data-siswa&data=<?php echo $nis; ?>&halaman=ayah" class="ms-5 btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th width="45%" scope="row">Nama</th>
            <td><?= !empty($nama_ayah) ? $nama_ayah : "--"; ?></td>
        </tr>
        <tr>
            <th width="45%" scope="row">NIK</th>
            <td><?= !empty($nik_ayah) ? $nik_ayah : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Tempat Lahir</th>
            <td><?= !empty($tempat_lahir_ayah) ? $tempat_lahir_ayah : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Tanggal Lahir</th>
            <td><?= !empty($tanggal_lahir_ayah) ? $tanggal_lahir_ayah : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">No Hp</th>
            <td><?= !empty($nohp_ayah) ? $nohp_ayah : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Pendidikan</th>
            <td><?= !empty($pendidikan_ayah) ? $pendidikan_ayah : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Pekerjaan</th>
            <td><?= !empty($pekerjaan_ayah) ? $pekerjaan_ayah : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Penghasilan</th>
            <td><?= !empty($penghasilan_ayah) ? convert_to_rupiah($penghasilan_ayah) : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Agama</th>
            <td><?= !empty($agama_ayah) ? $agama_ayah : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Status</th>
            <td><?= !empty($status_ayah) ? $status_ayah : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Alamat</th>
            <td><?= !empty($alamat_ayah) ? $alamat_ayah : "--"; ?></td>
        </tr>
    </tbody>
</table>