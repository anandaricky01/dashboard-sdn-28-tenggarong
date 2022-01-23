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


<table class="table table-striped table-bordered mb-3">
    <div class="col">
        <thead>
            <tr>
                <td colspan="2"><i class="fas fa-user-circle"></i>  
                <strong>Data Diri Siswa<strong></td>
            </tr>
        </thead>
        <tbody class="col">  
            <tr>
                <th width="45%" scope="row">NIK</th>
                <td><?= !empty($nik) ? $nik : "--"; ?></td>
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
            <tr>
                <th scope="row">Jalan</th>
                <td><?= !empty($jalan) ? $jalan : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">RT</th>
                <td><?= !empty($rt) ? $rt : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">RW</th>
                <td><?= !empty($rw) ? $rw : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Dusun</th>
                <td><?= !empty($dusun) ? $dusun : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Kode Pos</th>
                <td><?= !empty($kodepos) ? $kodepos : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Kelurahan</th>
                <td><?= !empty($kelurahan) ? $kelurahan : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Kecamatan</th>
                <td><?= !empty($kecamatan) ? $kecamatan : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Kota/Kabupaten</th>
                <td><?= !empty($kota_kab) ? $kota_kab : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Provinsi</th>
                <td><?= !empty($provinsi) ? $provinsi : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Lintang</th>
                <td><?= !empty($lintang) ? $lintang : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Bujur</th>
                <td><?= !empty($bujur) ? $bujur : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Jarak Ke Sekolah (KM)</th>
                <td><?= !empty($jarak_ke_sekolah) ? $jarak_ke_sekolah : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Jenis Tinggal</th>
                <td><?= !empty($jenis_tinggal) ? $jenis_tinggal : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Transportasi</th>
                <td><?= !empty($transportasi) ? $transportasi : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">No. Kartu Keluarga</th>
                <td><?= !empty($no_kk) ? $no_kk : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">No. Kartu Keluarga Sejahtera</th>
                <td><?= !empty($no_kks) ? $no_kks : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Telepon</th>
                <td><?= !empty($telepon) ? $telepon : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">No. Handphone</th>
                <td><?= !empty($no_hp) ? $no_hp : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">E-Mail</th>
                <td><?= !empty($email) ? $email : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">No. Registrasi Akta</th>
                <td><?= !empty($no_registrasi_akta) ? $no_registrasi_akta : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Bank</th>
                <td><?= !empty($bank) ? $bank : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">No. Rekening Bank</th>
                <td><?= !empty($no_rekening_bank) ? $no_rekening_bank : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Rekening Atas Nama</th>
                <td><?= !empty($rekening_atas_nama) ? $rekening_atas_nama : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Kebutuhan Khusus</th>
                <td><?= !empty($kebutuhan_khusus) ? $kebutuhan_khusus : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Sekolah Asal</th>
                <td><?= !empty($sekolah_asal) ? $sekolah_asal : "--"; ?></td>
            </tr>
            
            <tr>
                <th scope="row">Berat Badan (KG)</th>
                <td><?= !empty($berat_badan) ? $berat_badan : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Tinggi Badan(CM)</th>
                <td><?= !empty($tinggi_badan) ? $tinggi_badan : "--"; ?></td>
            </tr>
            <tr>
                <th scope="row">Lingkar Kepala(CM)</th>
                <td><?= !empty($lingkar_kepala) ? $lingkar_kepala : "--"; ?></td>
            </tr>
        </tbody>
    </div>
</table>


    