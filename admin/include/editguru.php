<?php
if (isset($_GET['data'])) {
  $id = $_GET['data'];
  $_SESSION['NO'] = $id;

  $sql_d = "SELECT * FROM `data-guru` WHERE `NO` = '$id'";
  $query_d = mysqli_query($koneksi, $sql_d);
  while ($data_guru = mysqli_fetch_assoc($query_d)) {
    $id = $data_guru['NO'];
    $nip = $data_guru['NIP_BARU'];
    $kode = $data_guru['KODE'];
    $nama = $data_guru['NAMA'];
    $jenis_kelamin = $data_guru['JK'];
    $tugas_jabatan = $data_guru['TUGAS_JABATAN'];
    $NIP_LAMA = $data_guru['NIP'];
    $NRG = $data_guru['NRG'];
    $NPWP = $data_guru['NPWP'];
    $NO_REK_BPD = $data_guru['NO_REK_BPD'];
    $TEMPAT_LAHIR = $data_guru['TEMPAT_LAHIR'];
    $TGLLAHIR = $data_guru['TGLLAHIR'];
    $AGAMA = $data_guru['AGAMA'];
    $NKARPEG = $data_guru['NKARPEG'];
    $PKT_AWAL = $data_guru['PKT_AWAL'];
    $GOL = $data_guru['GOL'];
    $TMT_AWAL = $data_guru['TMT_AWAL'];
    $CPNS_TMT = $data_guru['CPNS_TMT'];
    $PNS_TMT = $data_guru['PNS_TMT'];
    $MK_SLRH = $data_guru['MK_SLRH'];
    $MK_GOL = $data_guru['MK_GOL'];
    $PKT_AKHIR = $data_guru['PKT_AKHIR'];
    $TMT_AKHIR = $data_guru['TMT_AKHIR'];
    $PEND = $data_guru['PEND'];
    $TH = $data_guru['TH'];
    $JURUSAN = $data_guru['JURUSAN'];
    $TUGAS_TAMBAHAN = $data_guru['TUGAS_TAMBAHAN'];
    $JJM = $data_guru['JJM'];
    $MENGAJAR = $data_guru['MENGAJAR'];
    $UMUR = $data_guru['UMUR'];
    $GOL_AKHIR = $data_guru['GOL_AKHIR'];
    $NO_SERTIFIKAT = $data_guru['NO_SERTIFIKAT'];
    $TH_SRTF = $data_guru['TH_SRTF'];
    $EMAIL = $data_guru['EMAIL'];
    $TMT_DSNI = $data_guru['TMT_DSNI'];
    $GAJI_POKOK = $data_guru['GAJI_POKOK'];
    $NO_REK_SERTIFIKAT = $data_guru['NO_REK_SERTIFIKAT'];
    $TMT_PNS = $data_guru['TMT_PNS'];
    $NUPTK2 = $data_guru['NUPTK2'];
    $GOL_DRH = $data_guru['GOL_DRH'];
    $STATUS = $data_guru['STATUS'];
    $NAMA_SAJA = $data_guru['NAMA_SAJA'];
    $GELAR_BLK = $data_guru['GELAR_BLK'];
    $HP = $data_guru['HP'];
    $PASS_DAPO = $data_guru['PASS_DAPO'];
    $JAB_GURU_1 = $data_guru['JAB_GURU_1'];
    $JAB_GURU_2 = $data_guru['JAB_GURU_2'];
    $NO_PSRT_4 = $data_guru['NO_PSRT_4'];
    $NO_SKTP_4 = $data_guru['NO_SKTP_4'];
    $FOTO = $data_guru['FOTO'];
  }
}
?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-edit"></i> Edit Data Guru</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="data-guru">Data Guru</a></li>
          <li class="breadcrumb-item active">Edit Data Guru</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Guru</h3>
      <div class="card-tools">
        <a href="data-guru" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
      </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    </br>
    <div class="col-sm-10">
      <?php if (!empty($_GET['notif'])) { ?>
        <?php if ($_GET['notif'] == "editkosong") { ?>
          <div class="alert alert-danger" role="alert">
            Maaf data guru wajib di isi</div>
        <?php } ?>
      <?php } ?>
    </div>
    <form class="form-horizontal" method="POST" action="konfirmasi-edit-data-guru" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group row">
          <label for="nama" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" name="NAMA" value="<?php echo $nama ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="nip" class="col-sm-3 col-form-label">Nip</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="nip" name="NIP_BARU" value="<?php echo $nip ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="kode" class="col-sm-3 col-form-label">Kode Guru</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="kode" name="KODE" value="<?php echo $kode ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="tugas_jabatan" class="col-sm-3 col-form-label">Tugas Jabatan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="tugas_jabatan" name="TUGAS_JABATAN" value="<?php echo $tugas_jabatan ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="jenis_kelamin" name="JK" value="<?php echo $jenis_kelamin ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NAMA_SAJA" class="col-sm-3 col-form-label">Nama Saja</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="NAMA_SAJA" name="NAMA_SAJA" value="<?php echo $NAMA_SAJA ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="GELAR" class="col-sm-3 col-form-label">Gelar</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="GELAR" name="GELAR_BLK" value="<?php echo $GELAR_BLK ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="UMUR" class="col-sm-3 col-form-label">Umur</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="UMUR" name="UMUR" value="<?php echo $UMUR ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NIP_LAMA" class="col-sm-3 col-form-label">NIP Lama</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="NIP_LAMA" name="NIP" value="<?php echo $NIP_LAMA ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NRG" class="col-sm-3 col-form-label">NRG</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="NRG" name="NRG" value="<?php echo $NRG ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NPWP" class="col-sm-3 col-form-label">NPWP</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="NPWP" name="NPWP" value="<?php echo $NPWP ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NO_REK_BPD" class="col-sm-3 col-form-label">NO REK BPD</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="NO_REK_BPD" name="NO_REK_BPD" value="<?php echo $NO_REK_BPD ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="TEMPAT_LAHIR" class="col-sm-3 col-form-label">Tempat Lahir</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="TEMPAT_LAHIR" name="TEMPAT_LAHIR" value="<?php echo $TEMPAT_LAHIR ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="TGLLAHIR" class="col-sm-3 col-form-label">Tanggal Lahir</label>
          <div class="col-sm-7">
            <input type="text" class="form-control datepicker" id="TGLLAHIR" name="TGLLAHIR" value="<?php echo $TGLLAHIR ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="AGAMA" class="col-sm-3 col-form-label">Agama</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="AGAMA" name="AGAMA" value="<?php echo $AGAMA ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NKARPEG" class="col-sm-3 col-form-label">NKARPEG</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="NKARPEG" name="NKARPEG" value="<?php echo $NKARPEG ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="PKT_AWAL" class="col-sm-3 col-form-label">PKT Awal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="PKT_AWAL" name="PKT_AWAL" value="<?php echo $PKT_AWAL ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="Gol" class="col-sm-3 col-form-label">Gol</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="Gol" name="GOL" value="<?php echo $GOL ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="TMT_AWAL" class="col-sm-3 col-form-label">TMT Awal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control datepicker" id="TMT Awal" name="TMT_AWAL" value="<?php echo $TMT_AWAL ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="CPNS_TMT" class="col-sm-3 col-form-label">CPNS TMT</label>
          <div class="col-sm-7">
            <input type="text" class="form-control datepicker" id="CPNS_TMT" name="CPNS_TMT" value="<?php echo $CPNS_TMT ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="PNS_TMT" class="col-sm-3 col-form-label">PNS TMT</label>
          <div class="col-sm-7">
            <input type="text" class="form-control datepicker" id="PNS_TMT" name="PNS_TMT" value="<?php echo $PNS_TMT ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="MK_SLRH" class="col-sm-3 col-form-label">MK Seluruh</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="MK_SLRH" name="MK_SLRH" value="<?php echo $MK_SLRH ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="MK_GOL" class="col-sm-3 col-form-label">MK Gol</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="MK_GOL" name="MK_GOL" value="<?php echo $MK_GOL ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="PKT_AKHIR" class="col-sm-3 col-form-label">PKT Akhir</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="PKT_AKHIR" name="PKT_AKHIR" value="<?php echo $PKT_AKHIR ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="TMT_AKHIR" class="col-sm-3 col-form-label">TMT Akhir</label>
          <div class="col-sm-7">
            <input type="text" class="form-control datepicker" id="TMT_AKHIR" name="TMT_AKHIR" value="<?php echo $TMT_AKHIR ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="Pendidikan" class="col-sm-3 col-form-label">Pendidikan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="Pendidikan" name="PEND" value="<?php echo $PEND ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="TH" class="col-sm-3 col-form-label">Tahun</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="TH" name="TH" value="<?php echo $TH ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="Jurusan" class="col-sm-3 col-form-label">Jurusan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="Jurusan" name="JURUSAN" value="<?php echo $JURUSAN ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="TUGAS_TAMBAHAN" class="col-sm-3 col-form-label">Tugas Tambahan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="TUGAS_TAMBAHAN" name="TUGAS_TAMBAHAN" value="<?php echo $TUGAS_TAMBAHAN ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="JJM" class="col-sm-3 col-form-label">JJM</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="JJM" name="JJM" value="<?php echo $JJM ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="MENGAJAR" class="col-sm-3 col-form-label">Mengajar</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="MENGAJAR" name="MENGAJAR" value="<?php echo $MENGAJAR ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="GOL_AKHIR" class="col-sm-3 col-form-label">GOL Akhir</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="GOL_AKHIR" name="GOL_AKHIR" value="<?php echo $GOL_AKHIR ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NO_SERTIFIKAT" class="col-sm-3 col-form-label">NO Sertifikat</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="NO_SERTIFIKAT" name="NO_SERTIFIKAT" value="<?php echo $NO_SERTIFIKAT ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="TH_SRTF" class="col-sm-3 col-form-label">Tahun Sertifikat</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="TH_SRTF" name="TH_SRTF" value="<?php echo $TH_SRTF ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="EMAIL" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="EMAIL" name="EMAIL" value="<?php echo $EMAIL ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="TMT_DSNI" class="col-sm-3 col-form-label">TMT Disini</label>
          <div class="col-sm-7">
            <input type="text" class="form-control datepicker" id="TMT_DSNI" name="TMT_DSNI" value="<?php echo $TMT_DSNI ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="GAJI_POKOK" class="col-sm-3 col-form-label">Gaji Pokok</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="GAJI_POKOK" name="GAJI_POKOK" value="<?php echo $GAJI_POKOK ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NO_REK_SERTIFIKAT" class="col-sm-3 col-form-label">No Rek Sertifikat</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="NO_REK_SERTIFIKAT" name="NO_REK_SERTIFIKAT" value="<?php echo $NO_REK_SERTIFIKAT ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="TMT_PNS" class="col-sm-3 col-form-label">TMT PNS</label>
          <div class="col-sm-7">
            <input type="text" class="form-control datepicker" id="TMT_PNS" name="TMT_PNS" value="<?php echo $TMT_PNS ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NUPTK2" class="col-sm-3 col-form-label">NUPTK 2</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="NUPTK2" name="NUPTK2" value="<?php echo $NUPTK2 ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="GOL_DRH" class="col-sm-3 col-form-label">Gol Darah</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="GOL_DRH" name="GOL_DRH" value="<?php echo $GOL_DRH ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="STATUS" class="col-sm-3 col-form-label">Status</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="STATUS" name="STATUS" value="<?php echo $STATUS ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="HP" class="col-sm-3 col-form-label">NO HP</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="HP" name="HP" value="<?php echo $HP ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="PASS_DAPO" class="col-sm-3 col-form-label">Pass DAPO</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="PASS_DAPO" name="PASS_DAPO" value="<?php echo $PASS_DAPO ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="JAB_GURU_1" class="col-sm-3 col-form-label">Jabatan Guru 1</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="JAB_GURU_1" name="JAB_GURU_1" value="<?php echo $JAB_GURU_1 ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="JAB_GURU_2" class="col-sm-3 col-form-label">Jabatan Guru 2</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="JAB_GURU_2" name="JAB_GURU_2" value="<?php echo $JAB_GURU_2 ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NO_PSRT_4" class="col-sm-3 col-form-label">NO PSRT 4</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="NO_PSRT_4" name="NO_PSRT_4" value="<?php echo $NO_PSRT_4 ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NO_SKTP_4" class="col-sm-3 col-form-label">NO SKTP 4</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="NO_SKTP_4" name="NO_SKTP_4" value="<?php echo $NO_SKTP_4 ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="FOTO" class="col-sm-3 col-form-label">FOTO</label>
          <div class="col-sm-7 file-upload-wrapper" data-text="Select your file!">
            <input type="file" class="file-upload-field" id="FOTO" name="FOTO" value="<?php echo $FOTO ?>">
          </div>
        </div>
      </div>
  </div>



  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
    </div>
  </div>
  <!-- /.card-footer -->
  </form>
  </div>
  <!-- /.card -->

</section>