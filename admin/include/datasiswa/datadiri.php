<?php
$sql_data_diri = "SELECT * FROM `data-diri-siswa` WHERE `nis`=$data";
$query_diri = mysqli_query($koneksi, $sql_data_diri);

while ($data_diri = mysqli_fetch_assoc($query_diri)) {
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


<table class="table table-striped table-bordered mb-3">
    <div class="col">
        <thead>
            <tr>
                <td colspan="2"><i class="fas fa-user-circle"></i>
                    <strong>Data Diri Siswa<strong>
                            <a href="edit-data-siswa&data=<?php echo $nis; ?>&halaman=diri" class="ms-5 btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                </td>
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