<?php

$sql_wali = "SELECT * FROM `data-wali` WHERE `nis`=$nis";
$query_wali = mysqli_query($koneksi, $sql_wali);

while ($data_wali = mysqli_fetch_assoc($query_wali)) {
    $id = $data_wali['id'];
    $nik_wali = $data_wali['nik_wali'];
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

<!-- Data Wali -->
<div class="card-body">

    <div class="form-group">
        <h3><strong>Data Wali Siswa</strong></h3>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-sm-3 col-form-label">
            Nama
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="nama_wali" value="<?= !empty($nama_wali) ? $nama_wali : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="nik_wali" class="col-sm-3 col-form-label">
            NIK
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="nik_wali" value="<?= !empty($nik_wali) ? $nik_wali : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="tempat_lahir_wali" class="col-sm-3 col-form-label">
            Tempat Lahir
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="tempat_lahir_wali" value="<?= !empty($tempat_lahir_wali) ? $tempat_lahir_wali : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="tanggal_lahir_wali" class="col-sm-3 col-form-label">
            Tanggal Lahir
        </label>
        <div class="col-sm-7">
            <input type="text" name="tanggal_lahir_wali" class="form-control datepicker" value="<?= !empty($tanggal_lahir_wali) ? $tanggal_lahir_wali : ""; ?>" />
        </div>
    </div>

    <div class="form-group row">
        <label for="nohp_wali" class="col-sm-3 col-form-label">
            No. Handphone
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="nohp_wali" value="<?= !empty($nohp_wali) ? $nohp_wali : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="pendidikan_wali" class="col-sm-3 col-form-label">
            Pendidikan Terakhir
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="pendidikan_wali" value="<?= !empty($pendidikan_wali) ? $pendidikan_wali : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="pekerjaan_wali" class="col-sm-3 col-form-label">
            Pekerjaan
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="pekerjaan_wali" value="<?= !empty($pekerjaan_wali) ? $pekerjaan_wali : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="penghasilan_wali" class="col-sm-3 col-form-label">
            Penghasilan
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="penghasilan_wali" value="<?= !empty($penghasilan_wali) ? $penghasilan_wali : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="agama_wali" class="col-sm-3 col-form-label">
            Agama
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="agama_wali" value="<?= !empty($agama_wali) ? $agama_wali : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="status_wali" class="col-sm-3 col-form-label">
            Status
        </label>
        <div class="col-sm-7">
            <select class="form-control" id="kategori" name="status_wali">
                <option value="">- Pilih -</option>
                <option value="Masih Hidup ">Masih Hidup </option>
                <option value="Meninggal">Meninggal</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat_wali" class="col-sm-3 col-form-label">
            Alamat
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="alamat_wali" value="<?= !empty($alamat_wali) ? $alamat_wali : ""; ?>">
        </div>
    </div>

</div>
<!-- tutup data wali -->