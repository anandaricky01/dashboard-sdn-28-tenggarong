<?php
    $sql_ibu = "SELECT * FROM `data-ibu` WHERE `nis`=$data";
    $query_ibu = mysqli_query($koneksi, $sql_ibu);

while ($data_ibu = mysqli_fetch_assoc($query_ibu)) {
    $id = $data_ibu['id'];
    $nama_ibu = $data_ibu['nama_ibu'];
    $tempat_lahir_ibu = $data_ibu['tempat_lahir_ibu'];
    $tanggal_lahir_ibu = $data_ibu['tanggal_lahir_ibu'];
    $nohp_ibu = $data_ibu['nohp_ibu'];
    $pendidikan_ibu = $data_ibu['pendidikan_ibu'];
    $pekerjaan_ibu = $data_ibu['pekerjaan_ibu'];
    $penghasilan_ibu = $data_ibu['penghasilan_ibu'];
    $agama_ibu = $data_ibu['agama_ibu'];
    $status_ibu = $data_ibu['status_ibu'];
    $alamat_ibu = $data_ibu['alamat_ibu'];
}
?>

<table class="table table-striped table-bordered mb-3">
    <thead>
        <tr>
            <td colspan="2"><i class="fas fa-user-circle"></i>  
            <strong>Data ibu Siswa<strong></td>
        </tr> 
    </thead>
    <tbody>             
        <tr>
            <th width="45%" scope="row">Nama</th>
            <td><?= !empty($nama_ibu) ? $nama_ibu : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Tempat Lahir</th>
            <td><?= !empty($tempat_lahir_ibu) ? $tempat_lahir_ibu : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Tanggal Lahir</th>
            <td><?= !empty($tanggal_lahir_ibu) ? $tanggal_lahir_ibu : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">No Hp</th>
            <td><?= !empty($nohp_ibu) ? $nohp_ibu : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Pendidikan</th>
            <td><?= !empty($pendidikan_ibu) ? $pendidikan_ibu : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Pekerjaan</th>
            <td><?= !empty($pekerjaan_ibu) ? $pekerjaan_ibu : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Penghasilan</th>
            <td><?= !empty($penghasilan_ibu) ? convert_to_rupiah($penghasilan_ibu) : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Agama</th>
            <td><?= !empty($agama_ibu) ? $agama_ibu : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Status</th>
            <td><?= !empty($status_ibu) ? $status_ibu : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Alamat</th>
            <td><?= !empty($alamat_ibu) ? $alamat_ibu : "--"; ?></td>
        </tr>
    </tbody>
</table>