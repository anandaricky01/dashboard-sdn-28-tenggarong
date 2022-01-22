<?php 

	$sql_data_sekolah_siswa = "SELECT * FROM `data-sekolah-siswa` WHERE `nis`=$data";
	$query_sekolah_siswa = mysqli_query($koneksi, $sql_data_sekolah_siswa);


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
                <th scope="row">SKHUN</th>
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
</div>