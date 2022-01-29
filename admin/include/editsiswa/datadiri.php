<?php

$sql_data_diri = "SELECT * from `data-diri-siswa` where `nis` = '$nis'";
$query_data_diri = mysqli_query($koneksi, $sql_data_diri);

while ($data_diri = mysqli_fetch_assoc($query_data_diri)) {
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

<!-- Data Diri -->
<div class="card-body">
    <div class="form-group">
        <h3><strong>Data Diri Siswa</strong></h3>
    </div>

    <div class="form-group row">
        <label for="nik" class="col-sm-3 col-form-label">
            NIK
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nik" Name="nik" value="<?= !empty($nik) ? $nik : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="no_kk" class="col-sm-3 col-form-label">
            No. Kartu Keluarga
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="no_kk" Name="no_kk" value="<?= !empty($no_kk) ? $no_kk : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="no_registrasi_akta" class="col-sm-3 col-form-label">
            No. Registrasi Akta
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="no_registrasi_akta" Name="no_registrasi_akta" value="<?= !empty($no_registrasi_akta) ? $no_registrasi_akta : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="no_kks" class="col-sm-3 col-form-label">
            No. Kartu Keluarga Sejahtera
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="no_kks" Name="no_kks" value="<?= !empty($no_kks) ? $no_kks : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="jenis_tinggal" class="col-sm-3 col-form-label">
            Tinggal Bersama
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="jenis_tinggal" Name="jenis_tinggal" value="<?= !empty($jenis_tinggal) ? $jenis_tinggal : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="tempat_lahir" class="col-sm-3 col-form-label">
            Tempat Lahir
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="tempat_lahir" Name="tempat_lahir" value="<?= !empty($tempat_lahir) ? $tempat_lahir : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="tanggal_lahir" class="col-sm-3 col-form-label">
            Tanggal Lahir
        </label>
        <div class="col-sm-7">
            <input type="text" name="tanggal_lahir" class="form-control datepicker" />
        </div>
    </div>

    <div class="form-group row">
        <label for="agama" class="col-sm-3 col-form-label">
            Agama
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="agama" Name="agama" value="<?= !empty($agama) ? $agama : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="kewarganegaraan" class="col-sm-3 col-form-label">
            Kewarganegaraan
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="kewarganegaraan" Name="kewarganegaraan" value="<?= !empty($kewarganegaraan) ? $kewarganegaraan : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="anak_ke" class="col-sm-3 col-form-label">
            Anak ke
        </label>
        <div class="col-1">
            <input type="text" class="form-control" id="anak_ke" Name="anak_ke" value="<?= !empty($anak_ke) ? $anak_ke : ""; ?>">
        </div>
        <label for="jumlah_saudara" class="col-1 text-center">
            dari
        </label>
        <div class="col-1">
            <input type="text" class="form-control" id="jumlah_saudara" Name="jumlah_saudara" value="<?= !empty($jumlah_saudara) ? $jumlah_saudara : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat" class="col-sm-3 col-form-label">
            Alamat
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="jalan" Name="jalan" value="<?= !empty($jalan) ? $jalan : ""; ?>" placeholder="Jalan Pegangsaan No.3">
        </div>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="rt" Name="rt" value="<?= !empty($rt) ? $rt : ""; ?>" placeholder="RT">
        </div>
        <strong>/</strong>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="rw" Name="rw" value="<?= !empty($rw) ? $rw : ""; ?>" placeholder="RW">
        </div>
    </div>

    <div class="form-group row">
        <label for="kodepos" class="col-sm-3 col-form-label">
            Kode Pos
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="kodepos" Name="kodepos" value="<?= !empty($kodepos) ? $kodepos : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="kelurahan" class="col-sm-3 col-form-label">
            Kelurahan
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="kelurahan" Name="kelurahan" value="<?= !empty($kelurahan) ? $kelurahan : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="dusun" class="col-sm-3 col-form-label">
            Dusun
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="dusun" Name="dusun" value="<?= !empty($dusun) ? $dusun : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="kecamatan" class="col-sm-3 col-form-label">
            Kecamatan
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="kecamatan" Name="kecamatan" value="<?= !empty($kecamatan) ? $kecamatan : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="kota_kab" class="col-sm-3 col-form-label">
            Kota / Kabupaten
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="kota_kab" Name="kota_kab" value="<?= !empty($kota_kab) ? $kota_kab : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="provinsi" class="col-sm-3 col-form-label">
            Provinsi
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="provinsi" Name="provinsi" value="<?= !empty($provinsi) ? $provinsi : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="lintang" class="col-sm-3 col-form-label">
            Lintang
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="lintang" Name="lintang" value="<?= !empty($lintang) ? $lintang : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="bujur" class="col-sm-3 col-form-label">
            bujur
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="bujur" Name="bujur" value="<?= !empty($bujur) ? $bujur : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="jarak_ke_sekolah" class="col-sm-3 col-form-label">
            Jarak ke Sekolah
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="jarak_ke_sekolah" Name="jarak_ke_sekolah" value="<?= !empty($jarak_ke_sekolah) ? $jarak_ke_sekolah : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="transportasi" class="col-sm-3 col-form-label">
            Transportasi
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="transportasi" Name="transportasi" value="<?= !empty($transportasi) ? $transportasi : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="telepon" class="col-sm-3 col-form-label">
            Telepon
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="telepon" Name="telepon" value="<?= !empty($telepon) ? $telepon : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="no_hp" class="col-sm-3 col-form-label">
            No. Handphone
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="no_hp" Name="no_hp" value="<?= !empty($no_hp) ? $no_hp : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label">
            E-Mail
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="email" Name="email" value="<?= !empty($email) ? $email : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="bank" class="col-sm-3 col-form-label">
            Bank
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="bank" Name="bank" value="<?= !empty($bank) ? $bank : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="no_rekening_bank" class="col-sm-3 col-form-label">
            No. Rekening Bank
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="no_rekening_bank" Name="no_rekening_bank" value="<?= !empty($no_rekening_bank) ? $no_rekening_bank : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="rekening_atas_nama" class="col-sm-3 col-form-label">
            Rekening Atas Nama
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="rekening_atas_nama" Name="rekening_atas_nama" value="<?= !empty($rekening_atas_nama) ? $rekening_atas_nama : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="kebutuhan_khusus" class="col-sm-3 col-form-label">
            Kebutuhan Khusus
        </label>
        <div class="col-sm-7">
            <select class="form-control" id="kategori" name="kebutuhan_khusus">
                <option value="">- Pilih -</option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="sekolah_asal" class="col-sm-3 col-form-label">
            Sekolah Asal
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="sekolah_asal" Name="sekolah_asal" value="<?= !empty($sekolah_asal) ? $sekolah_asal : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="rekening_atas_nama" class="col-sm-3 col-form-label">
            Rekening Atas Nama
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="rekening_atas_nama" Name="rekening_atas_nama" value="<?= !empty($rekening_atas_nama) ? $rekening_atas_nama : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="berat_badan" class="col-sm-3 col-form-label">
            Berat Badan
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="berat_badan" Name="berat_badan" value="<?= !empty($berat_badan) ? $berat_badan : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="tinggi_badan" class="col-sm-3 col-form-label">
            Tinggi Badan
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="tinggi_badan" Name="tinggi_badan" value="<?= !empty($tinggi_badan) ? $tinggi_badan : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="lingkar_kepala" class="col-sm-3 col-form-label">
            Lingkar Kepala
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="lingkar_kepala" Name="lingkar_kepala" value="<?= !empty($lingkar_kepala) ? $lingkar_kepala : ""; ?>">
        </div>
    </div>

</div>
<!-- tutup data diri -->