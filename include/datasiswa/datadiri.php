<?php

$sql_data = "SELECT * FROM `data-diri-siswa` WHERE `nis`=$data";
$query = mysqli_query($koneksi, $sql_data);

while ($data_diri = mysqli_fetch_assoc($query)) {
    $id = $data_diri['id'];
    $nis = $data_diri['nis'];
    $nik = $data_diri['nik'];
    $tempat_lahir = $data_diri['tempat_lahir'];
    $tanggal_lahir = $data_diri['tanggal_lahir'];
    $agama = $data_diri['agama'];
    $kewarganegaraan = $data_diri['kewarganegaraan'];
    $anak_ke = $data_diri['anak_ke'];
    $jumlah_saudara = $data_diri['jumlah_saudara'];
    $jalan = $data_diri['jalan'];
    $dusun = $data_diri['dusun'];
    $rt = $data_diri['rt'];
    $rw = $data_diri['rw'];
    $kodepos = $data_diri['kodepos'];
    $kelurahan = $data_diri['kelurahan'];
    $kecamatan = $data_diri['kecamatan'];
    $kota_kab = $data_diri['kota_kab'];
    $provinsi = $data_diri['provinsi'];
    $no_kk = $data_diri['no_kk'];
    $no_kks = $data_diri['no_kks'];
    $jarak_ke_sekolah = $data_diri['jarak_ke_sekolah'];
    $jenis_tinggal = $data_diri['jenis_tinggal'];
    $transportasi = $data_diri['transportasi'];
    $telepon = $data_diri['telepon'];
    $no_hp = $data_diri['no_hp'];
    $email = $data_diri['email'];
    $no_registrasi_akta = $data_diri['no_registrasi_akta'];
    $bank = $data_diri['bank'];
    $no_rekening_bank = $data_diri['no_rekening_bank'];
    $rekening_atas_nama = $data_diri['rekening_atas_nama'];
    $kebutuhan_khusus = $data_diri['kebutuhan_khusus'];
    $sekolah_asal = $data_diri['sekolah_asal'];
    $lintang = $data_diri['lintang'];
    $bujur = $data_diri['bujur'];
    $berat_badan = $data_diri['berat_badan'];
    $tinggi_badan = $data_diri['tinggi_badan'];
    $lingkar_kepala = $data_diri['lingkar_kepala'];
}
?>

<div>
        <table class="table mt-3">
            <tbody>
                <tr>
                    <th scope="row">NIK</th>
                    <td><?= !empty($nik) ? $nik : "--"; ?></td>
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
                    <th scope="row">Anak Ke</th>
                    <td><?= !empty($anak_ke) ? $anak_ke : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Jumlah Saudara</th>
                    <td><?= !empty($jumlah_saudara) ? $jumlah_saudara : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Kewarganegaraan</th>
                    <td><?= !empty($kewarganegaraan) ? $kewarganegaraan : "--"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Agama</th>
                    <td><?= !empty($agama) ? $agama : "--"; ?></td>
                </tr>
                
            </tbody>
        </table>
        
</div>
