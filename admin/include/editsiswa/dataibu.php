<?php

$sql_ibu = "SELECT * FROM `data-ibu` WHERE `nis`=$nis";
$query_ibu = mysqli_query($koneksi, $sql_ibu);

while ($data_ibu = mysqli_fetch_assoc($query_ibu)) {
    $id = $data_ibu['id'];
    $nik_ibu = $data_ibu['nik_ibu'];
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

<!-- Data Ibu -->
<div class="card-body">

    <div class="form-group">
        <h3><strong>Data Ibu Siswa</strong></h3>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-sm-3 col-form-label">
            Nama
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="nama_ibu" value="<?= !empty($nama_ibu) ? $nama_ibu : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="nik_ibu" class="col-sm-3 col-form-label">
            NIK
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="nik_ibu" value="<?= !empty($nik_ibu) ? $nik_ibu : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="tempat_lahir_ibu" class="col-sm-3 col-form-label">
            Tempat Lahir
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="tempat_lahir_ibu" value="<?= !empty($tempat_lahir_ibu) ? $tempat_lahir_ibu : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="tanggal_lahir_ibu" class="col-sm-3 col-form-label">
            Tanggal Lahir
        </label>
        <div class="col-sm-7">
            <input type="text" name="tanggal_lahir_ibu" class="form-control datepicker" value="<?= !empty($tanggal_lahir_ibu) ? $tanggal_lahir_ibu : ""; ?>" />
        </div>
    </div>

    <div class="form-group row">
        <label for="nohp_ibu" class="col-sm-3 col-form-label">
            No. Handphone
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="nohp_ibu" value="<?= !empty($nohp_ibu) ? $nohp_ibu : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="pendidikan_ibu" class="col-sm-3 col-form-label">
            Pendidikan Terakhir
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="pendidikan_ibu" value="<?= !empty($pendidikan_ibu) ? $pendidikan_ibu : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="pekerjaan_ibu" class="col-sm-3 col-form-label">
            Pekerjaan
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="pekerjaan_ibu" value="<?= !empty($pekerjaan_ibu) ? $pekerjaan_ibu : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="penghasilan_ibu" class="col-sm-3 col-form-label">
            Penghasilan
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="penghasilan_ibu" value="<?= !empty($penghasilan_ibu) ? $penghasilan_ibu : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="agama_ibu" class="col-sm-3 col-form-label">
            Agama
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="agama_ibu" value="<?= !empty($agama_ibu) ? $agama_ibu : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="status_ibu" class="col-sm-3 col-form-label">
            Status
        </label>
        <div class="col-sm-7">
            <select class="form-control" id="kategori" name="status_ibu">
                <option value="">- Pilih -</option>
                <option value="Masih Hidup ">Masih Hidup </option>
                <option value="Meninggal">Meninggal</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat_ibu" class="col-sm-3 col-form-label">
            Alamat
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="alamat_ibu" value="<?= !empty($alamat_ibu) ? $alamat_ibu : ""; ?>">
        </div>
    </div>

</div>
<!-- tutup data ibu -->