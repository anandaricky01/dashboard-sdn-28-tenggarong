<?php
$sql_data = "SELECT * FROM `data-diri-siswa` WHERE `nis`=$data";
$query = mysqli_query($koneksi, $sql_data);

while ($data = mysqli_fetch_assoc($query)) {
    $id = $data['id'];
    $nis = $data['nis'];
    $nik = $data['nik'];
    $tempat_lahir = $data['tempat_lahir'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $agama = $data['agama'];
    $kewarganegaraan = $data['kewarganegaraan'];
    $anak_ke = $data['anak_ke'];
    $jumlah_saudara = $data['jumlah_saudara'];
    $jalan = $data['jalan'];
    $dusun = $data['dusun'];
    $rt = $data['rt'];
    $rw = $data['rw'];
    $kodepos = $data['kodepos'];
    $kelurahan = $data['kelurahan'];
    $kecamatan = $data['kecamatan'];
    $kota_kab = $data['kota_kab'];
    $provinsi = $data['provinsi'];
    $no_kk = $data['no_kk'];
    $no_kks = $data['no_kks'];
    $jarak_ke_sekolah = $data['jarak_ke_sekolah'];
    $jenis_tinggal = $data['jenis_tinggal'];
    $transportasi = $data['transportasi'];
    $telepon = $data['telepon'];
    $no_hp = $data['no_hp'];
    $email = $data['email'];
    $no_registrasi_akta = $data['no_registrasi_akta'];
    $bank = $data['bank'];
    $no_rekening_bank = $data['no_rekening_bank'];
    $rekening_atas_nama = $data['rekening_atas_nama'];
    $kebutuhan_khusus = $data['kebutuhan_khusus'];
    $sekolah_asal = $data['sekolah_asal'];
    $lintang = $data['lintang'];
    $bujur = $data['bujur'];
    $berat_badan = $data['berat_badan'];
    $tinggi_badan = $data['tinggi_badan'];
    $lingkar_kepala = $data['lingkar_kepala'];
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
