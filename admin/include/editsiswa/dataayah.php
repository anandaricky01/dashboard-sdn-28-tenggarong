<?php

$sql_ayah = "SELECT * FROM `data-ayah` WHERE `nis`=$nis";
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

<!-- Data Ayah -->
<div class="card-body">

    <div class="form-group">
        <h3><strong>Data Ayah Siswa</strong></h3>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-sm-3 col-form-label">
            Nama
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="nama_ayah" value="<?= !empty($nama_ayah) ? $nama_ayah : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="nik_ayah" class="col-sm-3 col-form-label">
            NIK
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="nik_ayah" value="<?= !empty($nik_ayah) ? $nik_ayah : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="tempat_lahir_ayah" class="col-sm-3 col-form-label">
            Tempat Lahir
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="tempat_lahir_ayah" value="<?= !empty($tempat_lahir_ayah) ? $tempat_lahir_ayah : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="tanggal_lahir_ayah" class="col-sm-3 col-form-label">
            Tanggal Lahir
        </label>
        <div class="col-sm-7">
            <input type="text" name="tanggal_lahir_ayah" class="form-control datepicker" value="<?= !empty($tanggal_lahir_ayah) ? $tanggal_lahir_ayah : ""; ?>" />
        </div>
    </div>

    <div class="form-group row">
        <label for="nohp_ayah" class="col-sm-3 col-form-label">
            No. Handphone
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="nohp_ayah" value="<?= !empty($nohp_ayah) ? $nohp_ayah : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="pendidikan_ayah" class="col-sm-3 col-form-label">
            Pendidikan Terakhir
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="pendidikan_ayah" value="<?= !empty($pendidikan_ayah) ? $pendidikan_ayah : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="pekerjaan_ayah" class="col-sm-3 col-form-label">
            Pekerjaan
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="pekerjaan_ayah" value="<?= !empty($pekerjaan_ayah) ? $pekerjaan_ayah : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="penghasilan_ayah" class="col-sm-3 col-form-label">
            Penghasilan
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="penghasilan_ayah" value="<?= !empty($penghasilan_ayah) ? $penghasilan_ayah : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="agama_ayah" class="col-sm-3 col-form-label">
            Agama
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="agama_ayah" value="<?= !empty($agama_ayah) ? $agama_ayah : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="status_ayah" class="col-sm-3 col-form-label">
            Status
        </label>
        <div class="col-sm-7">
            <select class="form-control" id="kategori" name="status_ayah">
                <option value="">- Pilih -</option>
                <option value="Masih Hidup ">Masih Hidup </option>
                <option value="Meninggal">Meninggal</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat_ayah" class="col-sm-3 col-form-label">
            Alamat
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="alamat_ayah" value="<?= !empty($alamat_ayah) ? $alamat_ayah : ""; ?>">
        </div>
    </div>
</div>
<!-- tutup data ayah -->