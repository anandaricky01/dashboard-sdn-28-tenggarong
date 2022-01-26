<?php
    $sql_wali = "SELECT * FROM `data-wali` WHERE `nis`=$data";
    $query_wali = mysqli_query($koneksi, $sql_wali);

while ($data_wali = mysqli_fetch_assoc($query_wali)) {
    $id = $data_wali['id'];
    $nama_wali = $data_wali['nama_wali'];
    $tempat_lahir_wali = $data_wali['tempat_lahir_wali'];
    $tanggal_lahir_wali = $data_wali['tanggal_lahir_wali'];
    $nohp_wali = $data_wali['nohp_wali'];
    $pendidikan_wali = $data_wali['pendidikan_wali'];
    $pekerjaan_wali = $data_wali['pekerjaan_wali'];
    $penghasilan_wali = $data_wali['penghasilan_wali'];
    $agama_wali = $data_wali['agama_wali'];
    $status_wali = $data_wali['status_wali'];
    $alamat_wali = $data_wali['alamat_wali'];
}
?>

<table class="table table-striped table-bordered mb-3">
    <thead>
        <tr>
            <td colspan="2"><i class="fas fa-user-circle"></i>  
            <strong>Data wali Siswa<strong></td>
        </tr> 
    </thead>
    <tbody>          
        <tr>
            <th width="45%" scope="row">Nama</th>
            <td><?= !empty($nama_wali) ? $nama_wali : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Tempat Lahir</th>
            <td><?= !empty($tempat_lahir_wali) ? $tempat_lahir_wali : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Tanggal Lahir</th>
            <td><?= !empty($tanggal_lahir_wali) ? $tanggal_lahir_wali : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">No Hp</th>
            <td><?= !empty($nohp_wali) ? $nohp_wali : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Pendidikan</th>
            <td><?= !empty($pendidikan_wali) ? $pendidikan_wali : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Pekerjaan</th>
            <td><?= !empty($pekerjaan_wali) ? $pekerjaan_wali : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Penghasilan</th>
            <td><?= !empty($penghasilan_wali) ? convert_to_rupiah($penghasilan_wali) : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Agama</th>
            <td><?= !empty($agama_wali) ? $agama_wali : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Status</th>
            <td><?= !empty($status_wali) ? $status_wali : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Alamat</th>
            <td><?= !empty($alamat_wali) ? $alamat_wali : "--"; ?></td>
        </tr>
    </tbody>
</table>