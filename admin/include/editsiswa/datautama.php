<?php

$sql_data_siswa = "SELECT * from `data-utama-siswa` where `nis` = '$nis'";
$query_data_siswa = mysqli_query($koneksi, $sql_data_siswa);

while ($data_siswa = mysqli_fetch_assoc($query_data_siswa)) {
    $id = $data_siswa['id'];
    $nis = $data_siswa['nis'];
    $nisn = $data_siswa['nisn'];
    $tahun_masuk = $data_siswa['tahun_masuk'];
    $nama = $data_siswa['nama'];
    $jenis_kelamin = $data_siswa['jenis_kelamin'];
    $kelas = $data_siswa['kelas'];
}

?>

<!-- data utama -->
<div class="card-body">

    <div class="form-group">
        <h3><strong>Data Utama Siswa</strong></h3>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-sm-3 col-form-label">
            Nama
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" Name="nama" value="<?php echo $nama; ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="nis" class="col-sm-3 col-form-label">
            NIPD
        </label>
        <div class="col-sm-7">
            <?php echo $nis; ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="nisn" class="col-sm-3 col-form-label">
            NISN
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nisn" Name="nisn" value="<?php echo $nisn; ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="kelas" class="col-sm-3 col-form-label">
            Kelas
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="kelas" Name="kelas" value="<?php echo $kelas; ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="tahun_masuk" class="col-sm-3 col-form-label">
            Tahun Masuk
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="tahun_masuk" Name="tahun_masuk" value="<?php echo $tahun_masuk; ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="jenis_kelamin" class="col-sm-3 col-form-label">
            Jenis Kelamin
        </label>
        <div class="col-sm-7">
            <select class="form-control" id="kategori" name="jenis_kelamin" required>
                <option value="">- Pilih Jenis Kelamin -</option>
                <option value="L" <?php if ($jenis_kelamin == "L") {
                                        echo "selected";
                                    } ?>>Laki - laki</option>
                <option value="P" <?php if ($jenis_kelamin == "P") {
                                        echo "selected";
                                    } ?>>Perempuan</option>
            </select>
        </div>
    </div>

</div>
<!-- tutup data utama -->