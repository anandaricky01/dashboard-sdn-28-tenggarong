<?php 
    $data = $_GET['data'];
	$sql_data_siswa = "SELECT * FROM `data-sekolah-siswa` WHERE `nis`=$data";
	$query_utama = mysqli_query($koneksi, $sql_data_siswa);
    while($data_siswa = mysqli_fetch_assoc($query_utama)){
        $id_sekolah = $data_siswa['id'];
        $skhun = $data_siswa['skhun'];
        $penerima_kps = $data_siswa['penerima_kps'];
        $no_kps = $data_siswa['no_kps'];
        $no_ujian_nasional = $data_siswa['no_ujian_nasional'];
        $no_ijazah = $data_siswa['no_ijazah'];
        $penerima_kip = $data_siswa['penerima_kip'];
        $no_kip = $data_siswa['no_kip'];
        $nama_kip = $data_siswa['nama_kip'];
        $layak_pip = $data_siswa['layak_pip'];
        $alasan_pip = $data_siswa['alasan_pip'];
    }
 ?>

<table class="table table-striped table-bordered mb-3">
    <thead>
        <tr>
            <td colspan="2"><i class="fas fa-user-circle"></i>  
            <strong>Data Sekolah Siswa<strong></td>
        </tr> 
    </thead>
    <tbody>               
        <tr>
            <th width="45%" scope="row">SKHUN</th>
            <td><?= !empty($skhun) ? $skhun : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Penerima KPS</th>
            <td><?= !empty($penerima_kps) ? $penerima_kps : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">No. KPS</th>
            <td><?= !empty($no_kps) ? $no_kps : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">No. Ujian Nasional</th>
            <td><?= !empty($no_ujian_nasional) ? $no_ujian_nasional : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">No. Ijazah</th>
            <td><?= !empty($no_ijazah) ? $no_ijazah : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Penerima KIP</th>
            <td><?= !empty($penerima_kip) ? $penerima_kip : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">No. KIP</th>
            <td><?= !empty($no_kip) ? $no_kip : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Layak PIP</th>
            <td><?= !empty($layak_pip) ? $layak_pip : "--"; ?></td>
        </tr>
        <tr>
            <th scope="row">Alasan PIP</th>
            <td><?= !empty($alasan_pip) ? $alasan_pip : "--"; ?></td>
        </tr>
    </tbody>
</table>