
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Data Guru</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="data-guru">Data Guru</a></li>
              <li class="breadcrumb-item active">Tambah Data Guru</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Guru</h3>
        <div class="card-tools">
          <a href="data-guru" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
          <?php if(!empty($_GET['notif'])){?>
            <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">
            Maaf data guru wajib di isi</div>
            <?php }?>
          <?php }?>
      </div>
      <form class="form-horizontal" method="POST" action="konfirmasi-tambah-data-guru">
      <div class="card-body">
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="nama" name="NAMA">
            </div>
          </div>
          <div class="form-group row">
            <label for="nip" class="col-sm-3 col-form-label">NIP</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="nip" name="NIP_BARU">
            </div>
          </div>
          <div class="form-group row">
            <label for="kode" class="col-sm-3 col-form-label">Kode Guru</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="kode" name="KODE">
            </div>
          </div>
          <div class="form-group row">
            <label for="tugas_jabatan" class="col-sm-3 col-form-label">Tugas Jabatan</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="tugas_jabatan" name="TUGAS_JABATAN">
            </div>
          </div>
          <div class="form-group row">
            <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="jenis_kelamin" name="JK">
            </div>
          </div>
          <div class="form-group row">
            <label for="NAMA_SAJA" class="col-sm-3 col-form-label">Nama Saja</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="NAMA_SAJA" name="NAMA_SAJA">
            </div>
          </div>
          <div class="form-group row">
            <label for="GELAR" class="col-sm-3 col-form-label">Gelar</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="GELAR" name="GELAR_BLK">
            </div>
          </div>
          <div class="form-group row">
            <label for="UMUR" class="col-sm-3 col-form-label">Umur</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="UMUR" name="UMUR">
            </div>
          </div>
          <div class="form-group row">
            <label for="NIP_LAMA" class="col-sm-3 col-form-label">NIP Lama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="NIP_LAMA" name="NIP">
            </div>
          </div>
          <div class="form-group row">
            <label for="NRG" class="col-sm-3 col-form-label">NRG</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="NRG" name="NRG">
            </div>
          </div>
          <div class="form-group row">
            <label for="NPWP" class="col-sm-3 col-form-label">NPWP</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="NPWP" name="NPWP">
            </div>
          </div>
          <div class="form-group row">
            <label for="NO_REK_BPD" class="col-sm-3 col-form-label">NO REK BPD</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="NO_REK_BPD" name="NO_REK_BPD">
            </div>
          </div>
          <div class="form-group row">
            <label for="TEMPAT_LAHIR" class="col-sm-3 col-form-label">Tempat Lahir</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="TEMPAT_LAHIR" name="TEMPAT_LAHIR">
            </div>
          </div>
          <div class="form-group row">
            <label for="TGLLAHIR" class="col-sm-3 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="TGLLAHIR" name="TGLLAHIR">
            </div>
          </div>
          <div class="form-group row">
            <label for="AGAMA" class="col-sm-3 col-form-label">Agama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="AGAMA" name="AGAMA">
            </div>
          </div>
          <div class="form-group row">
            <label for="NKARPEG" class="col-sm-3 col-form-label">NKARPEG</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="NKARPEG" name="NKARPEG">
            </div>
          </div>
          <div class="form-group row">
            <label for="PKT_AWAL" class="col-sm-3 col-form-label">PKT Awal</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="PKT_AWAL" name="PKT_AWAL">
            </div>
          </div>
          <div class="form-group row">
            <label for="Gol" class="col-sm-3 col-form-label">Gol</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="Gol" name="GOL">
            </div>
          </div>
          <div class="form-group row">
            <label for="TMT_AWAL" class="col-sm-3 col-form-label">TMT Awal</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="TMT Awal" name="TMT_AWAL">
            </div>
          </div>
          <div class="form-group row">
            <label for="CPNS_TMT" class="col-sm-3 col-form-label">CPNS TMT</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="CPNS_TMT" name="CPNS_TMMT">
            </div>
          </div>
          <div class="form-group row">
            <label for="PNS_TMT" class="col-sm-3 col-form-label">PNS TMT</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="PNS_TMT" name="PNS_TMT">
            </div>
          </div>
          <div class="form-group row">
            <label for="MK_SLRH" class="col-sm-3 col-form-label">MK Seluruh</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="MK_SLRH" name="MK_SLRH">
            </div>
          </div>
          <div class="form-group row">
            <label for="MK_GOL" class="col-sm-3 col-form-label">MK Gol</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="MK_GOL" name="MK_GOL">
            </div>
          </div>
          <div class="form-group row">
            <label for="PKT_AKHIR" class="col-sm-3 col-form-label">PKT Akhir</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="PKT_AKHIR" name="PKT_AKHIR">
            </div>
          </div>
          <div class="form-group row">
            <label for="TMT_AKHIR" class="col-sm-3 col-form-label">TMT Akhir</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="TMT_AKHIR" name="TMT_AKHIR">
            </div>
          </div>
          <div class="form-group row">
            <label for="Pendidikan" class="col-sm-3 col-form-label">Pendidikan</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="Pendidikan" name="PEND">
            </div>
          </div>
          <div class="form-group row">
            <label for="TH" class="col-sm-3 col-form-label">Tahun</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="TH" name="TH">
            </div>
          </div>
          <div class="form-group row">
            <label for="Jurusan" class="col-sm-3 col-form-label">Jurusan</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="Jurusan" name="JURUSAN">
            </div>
          </div>
          <div class="form-group row">
            <label for="TUGAS_TAMBAHAN" class="col-sm-3 col-form-label">Tugas Tambahan</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="TUGAS_TAMBAHAN" name="TUGAS_TAMBAHAN">
            </div>
          </div>
          <div class="form-group row">
            <label for="JJM" class="col-sm-3 col-form-label">JJM</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="JJM" name="JJM">
            </div>
          </div>
          <div class="form-group row">
            <label for="MENGAJAR" class="col-sm-3 col-form-label">Mengajar</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="MENGAJAR" name="MENGAJAR">
            </div>
          </div>
          <div class="form-group row">
            <label for="GOL_AKHIR" class="col-sm-3 col-form-label">GOL Akhir</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="GOL_AKHIR" name="GOL_AKHIR">
            </div>
          </div>
          <div class="form-group row">
            <label for="NO_SERTIFIKAT" class="col-sm-3 col-form-label">NO Sertifikat</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="NO_SERTIFIKAT" name="NO_SERTIFIKAT">
            </div>
          </div>
          <div class="form-group row">
            <label for="TH_SRTF" class="col-sm-3 col-form-label">Tahun Sertifikat</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="TH_SRTF" name="TH_SRTF">
            </div>
          </div>
          <div class="form-group row">
            <label for="EMAIL" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="EMAIL" name="EMAIL">
            </div>
          </div>
          <div class="form-group row">
            <label for="TMT_DSNI" class="col-sm-3 col-form-label">TMT Disini</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="TMT_DSNI" name="TMT_DSNI">
            </div>
          </div>
          <div class="form-group row">
            <label for="GAJI_POKOK" class="col-sm-3 col-form-label">Gaji Pokok</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="GAJI_POKOK" name="GAJI_POKOK">
            </div>
          </div>
          <div class="form-group row">
            <label for="NO_REK_SERTIFIKAT" class="col-sm-3 col-form-label">No Rek Sertifikat</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="NO_REK_SERTIFIKAT" name="NO_REK_SERTIFIKAT">
            </div>
          </div>
          <div class="form-group row">
            <label for="TMT_PNS" class="col-sm-3 col-form-label">TMT PNS</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="TMT_PNS" name="TMT_PNS">
            </div>
          </div>
          <div class="form-group row">
            <label for="NUPTK2" class="col-sm-3 col-form-label">NUPTK 2</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="NUPTK2" name="NUPTK2">
            </div>
          </div>
          <div class="form-group row">
            <label for="GOL_DRH" class="col-sm-3 col-form-label">Gol Darah</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="GOL_DRH" name="GOL_DRH">
            </div>
          </div>
          <div class="form-group row">
            <label for="PASS_DAPO" class="col-sm-3 col-form-label">Pass DAPO</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="PASS_DAPO" name="PASS_DAPO">
            </div>
          </div>
          <div class="form-group row">
            <label for="JAB_GURU_1" class="col-sm-3 col-form-label">Jabatan Guru 1</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="JAB_GURU_1" name="JAB_GURU_1">
            </div>
          </div>
          <div class="form-group row">
            <label for="JAB_GURU_2" class="col-sm-3 col-form-label">Jabatan Guru 2</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="JAB_GURU_2" name="JAB_GURU_1">
            </div>
          </div>
          <div class="form-group row">
            <label for="NO_PSRT_4" class="col-sm-3 col-form-label">NO PSRT 4</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="NO_PSRT_4" name="NO_PSRT_4">
            </div>
          </div>
          <div class="form-group row">
            <label for="NO_SKTP_4" class="col-sm-3 col-form-label">NO SKTP 4</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="NO_SKTP_4" name="NO_SKTP_4">
            </div>
          </div>
          <div class="form-group row">
            <label for="FOTO" class="col-sm-3 col-form-label">FOTO</label>
            <div class="col-sm-7 file-upload-wrapper" data-text="Select your file!">
              <input type="file" class="file-upload-field" id="FOTO" name="FOTO">
            </div>
          </div>
          </div>
          </div>
          
          
          
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
   