<?php

$sql_data_sekolah = "SELECT * from `data-sekolah-siswa` where `nis` = '$nis'";
$query_data_sekolah = mysqli_query($koneksi, $sql_data_sekolah);

while ($data_sekolah = mysqli_fetch_assoc($query_data_sekolah)) {
    $skhun = $data_sekolah['skhun'];
    $penerima_kps = $data_sekolah['penerima_kps'];
    $no_kps = $data_sekolah['no_kps'];
    $no_ujian_nasional = $data_sekolah['no_ujian_nasional'];
    $no_ijazah = $data_sekolah['no_ijazah'];
    $penerima_kip = $data_sekolah['penerima_kip'];
    $no_kip = $data_sekolah['no_kip'];
    $layak_pip = $data_sekolah['layak_pip'];
    $alasan_pip = $data_sekolah['alasan_pip'];
}

?>

<!-- data sekolah siswa -->
<div class="card-body">

    <div class="form-group">
        <h3><strong>Data Sekolah Siswa</strong></h3>
    </div>

    <div class="form-group row">
        <label for="skhun" class="col-sm-3 col-form-label">
            SKHUN
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="skhun" Name="skhun" value="<?= !empty($skhun) ? $skhun : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="penerima_kps" class="col-sm-3 col-form-label">
            Penerima Kartu Perlindungan Sosial
        </label>
        <div class="col-sm-7">
            <select class="form-control" id="penerima_kps" name="penerima_kps">
                <option value="">- Pilih -</option>
                <option value="Ya" <?php if (!empty($penerima_kps)) {
                                        if ($penerima_kps == "Ya") {
                                            echo "selected";
                                        }
                                    } ?>>Ya</option>
                <option value="Tidak" <?php if (!empty($penerima_kps)) {
                                            if ($penerima_kps == "Tidak") {
                                                echo "selected";
                                            }
                                        } ?>>Tidak</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="no_kps" class="col-sm-3 col-form-label">
            No. Kartu Perlindungan Sosial
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="no_kps" Name="no_kps" value="<?= !empty($no_kps) ? $no_kps : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="no_ujian_nasional" class="col-sm-3 col-form-label">
            No. Ujian Nasional
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="no_ujian_nasional" Name="no_ujian_nasional" value="<?= !empty($no_ujian_nasional) ? $no_ujian_nasional : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="no_ijazah" class="col-sm-3 col-form-label">
            No. Ijazah
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="no_ijazah" Name="no_ijazah" value="<?= !empty($no_ijazah) ? $no_ijazah : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="penerima_kip" class="col-sm-3 col-form-label">
            Penerima Kartu Indonesia Pintar
        </label>
        <div class="col-sm-7">
            <select class="form-control" id="penerima_kip" name="penerima_kip">
                <option value="">- Pilih -</option>
                <option value="Ya" <?php if (!empty($penerima_kip)) {
                                        if ($penerima_kip == "Ya") {
                                            echo "selected";
                                        }
                                    } ?>>Ya</option>
                <option value="Tidak" <?php if (!empty($penerima_kip)) {
                                            if ($penerima_kip == "Tidak") {
                                                echo "selected";
                                            }
                                        } ?>>Tidak</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="no_kip" class="col-sm-3 col-form-label">
            No. Kartu Indonesia Pintar
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="no_kip" Name="no_kip" value="<?= !empty($no_kip) ? $no_kip : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="nama_kip" class="col-sm-3 col-form-label">
            Nama Kartu Indonesia Pintar
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nama_kip" Name="nama_kip" value="<?= !empty($nama_kip) ? $nama_kip : ""; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="layak_pip" class="col-sm-3 col-form-label">
            Layak Program Indonesia Pintar
        </label>
        <div class="col-sm-7">
            <select class="form-control" id="layak_pip" name="layak_pip">
                <option value="">- Pilih -</option>
                <option value="Ya" <?php if (!empty($layak_pip)) {
                                        if ($layak_pip == "Ya") {
                                            echo "selected";
                                        }
                                    } ?>>Ya</option>
                <option value="Tidak" <?php if (!empty($layak_pip)) {
                                            if ($layak_pip == "Tidak") {
                                                echo "selected";
                                            }
                                        } ?>>Tidak</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="alasan_pip" class="col-sm-3 col-form-label">
            Alasan Program Indonesia Pintar
        </label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="alasan_pip" Name="alasan_pip" value="<?= !empty($alasan_pip) ? $alasan_pip : ""; ?>">
        </div>
    </div>

</div>
<!-- tutup data sekolah siswa -->