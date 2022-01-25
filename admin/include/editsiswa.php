<?php 
  if(isset($_GET['data'])){
    $nis = $_GET['data'];
    $_SESSION['nis']=$nis;
    
    //get data kategori Kegiatan
    $sql_data_siswa = "SELECT * from `data-utama-siswa` where `nis` = '$nis'";
    $query_data_siswa = mysqli_query($koneksi,$sql_data_siswa);

    $sql_data_sekolah = "SELECT * from `data-sekolah-siswa` where `nis` = '$nis'";
    $query_data_sekolah = mysqli_query($koneksi,$sql_data_sekolah);

    $sql_data_diri = "SELECT * from `data-diri-siswa` where `nis` = '$nis'";
    $query_data_diri = mysqli_query($koneksi,$sql_data_diri);

    while($data_siswa = mysqli_fetch_assoc($query_data_siswa)){
      $id = $data_siswa['id'];
      $nis = $data_siswa['nis'];
      $nisn = $data_siswa['nisn'];
      $tahun_masuk = $data_siswa['tahun_masuk'];
      $nama = $data_siswa['nama'];
      $jenis_kelamin = $data_siswa['jenis_kelamin'];
      $kelas = $data_siswa['kelas'];
    }

    while ($data_sekolah = mysqli_fetch_assoc($query_data_sekolah)) {
      $skhun = $data_sekolah['skhun'];
      $no_kps = $data_sekolah['no_kps'];
      $no_ujian_nasional = $data_sekolah['no_ujian_nasional'];
      $no_ijazah = $data_sekolah['no_ijazah'];
      $no_kip = $data_sekolah['no_kip'];
      $alasan_pip = $data_sekolah['alasan_pip'];
    }

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
  }
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Siswa</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="data-siswa">Data Siswa</a></li>
              <li class="breadcrumb-item active">Edit Data Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Siswa</h3>
        <div class="card-tools">
          <a href="data-siswa" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
          <?php if(!empty($_GET['notif'])){?>
             <?php if($_GET['notif']=="editkosong"){?>
                <div class="alert alert-danger" role="alert">
                Maaf data siswa wajib di isi</div>
             <?php }?>
          <?php }?>
      </div>
      <form class="form-horizontal" action="konfirmasi-edit-data-siswa"  method="post">

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
                    <input type="text" class="form-control" id="nama" Name="nama" value="<?php echo $nama;?>" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="nis" class="col-sm-3 col-form-label">
                  NIPD
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nis" Name="nis" value="<?php echo $nis;?>" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="nisn" class="col-sm-3 col-form-label">
                  NISN
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nisn" Name="nisn" value="<?php echo $nisn;?>" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="kelas" class="col-sm-3 col-form-label">
                  Kelas
                </label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="kelas" Name="kelas" value="<?php echo $kelas;?>" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="tahun_masuk" class="col-sm-3 col-form-label">
                  Tahun Masuk
                </label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="tahun_masuk" Name="tahun_masuk" value="<?php echo $tahun_masuk;?>" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="jenis_kelamin" class="col-sm-3 col-form-label">
                  Jenis Kelamin
                </label>
                <div class="col-sm-7">
                  <select class="form-control" id="kategori" name="jenis_kelamin" required>
                    <option value="">- Pilih Jenis Kelamin -</option>
                    <option value="L">Laki - laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
              </div>

            </div>
          <!-- tutup data utama -->

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
                    <input type="text" class="form-control" id="skhun" Name="skhun" value="<?= !empty($skhun) ? $skhun : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="penerima_kps" class="col-sm-3 col-form-label">
                  Penerima Kartu Perlindungan Sosial
                </label>
                <div class="col-sm-7">
                  <select class="form-control" id="penerima_kps" name="penerima_kps" >
                    <option value="">- Pilih -</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="no_kps" class="col-sm-3 col-form-label">
                  No. Kartu Perlindungan Sosial
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_kps" Name="no_kps" value="<?= !empty($no_kps) ? $no_kps : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="no_ujian_nasional" class="col-sm-3 col-form-label">
                  No. Ujian Nasional
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_ujian_nasional" Name="no_ujian_nasional" value="<?= !empty($no_ujian_nasional) ? $no_ujian_nasional : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="no_ijazah" class="col-sm-3 col-form-label">
                  No. Ijazah
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_ijazah" Name="no_ijazah" value="<?= !empty($no_ijazah) ? $no_ijazah : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="penerima_kip" class="col-sm-3 col-form-label">
                  Penerima Kartu Indonesia Pintar
                </label>
                <div class="col-sm-7">
                  <select class="form-control" id="penerima_kip" name="penerima_kip" >
                    <option value="">- Pilih -</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="no_kip" class="col-sm-3 col-form-label">
                  No. Kartu Indonesia Pintar
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_kip" Name="no_kip" value="<?= !empty($no_kip) ? $no_kip : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="layak_pip" class="col-sm-3 col-form-label">
                  Layak Program Indonesia Pintar
                </label>
                <div class="col-sm-7">
                  <select class="form-control" id="layak_pip" name="layak_pip" >
                    <option value="">- Pilih -</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="alasan_pip" class="col-sm-3 col-form-label">
                  Alasan Program Indonesia Pintar
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="alasan_pip" Name="alasan_pip" value="<?= !empty($alasan_pip) ? $alasan_pip : "";?>" >
                </div>
              </div>

            </div>
          <!-- tutup data sekolah siswa -->

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
                    <input type="text" class="form-control" id="nik" Name="nik" value="<?= !empty($nik) ? $nik : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="no_kk" class="col-sm-3 col-form-label">
                  No. Kartu Keluarga 
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_kk" Name="no_kk" value="<?= !empty($no_kk) ? $no_kk : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="no_registrasi_akta" class="col-sm-3 col-form-label">
                  No. Registrasi Akta
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_registrasi_akta" Name="no_registrasi_akta" value="<?= !empty($no_registrasi_akta) ? $no_registrasi_akta : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="no_kks" class="col-sm-3 col-form-label">
                  No. Kartu Keluarga Sejahtera
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_kks" Name="no_kks" value="<?= !empty($no_kks) ? $no_kks : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="jenis_tinggal" class="col-sm-3 col-form-label">
                  Tinggal Bersama
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="jenis_tinggal" Name="jenis_tinggal" value="<?= !empty($jenis_tinggal) ? $jenis_tinggal : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="tempat_lahir" class="col-sm-3 col-form-label">
                  Tempat Lahir
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="tempat_lahir" Name="tempat_lahir" value="<?= !empty($tempat_lahir) ? $tempat_lahir : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="tanggal_lahir" class="col-sm-3 col-form-label">
                  Tanggal Lahir
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="tanggal_lahir" Name="tanggal_lahir" value="<?= !empty($tanggal_lahir) ? $tanggal_lahir : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="agama" class="col-sm-3 col-form-label">
                  Agama
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="agama" Name="agama" value="<?= !empty($agama) ? $agama : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="kewarganegaraan" class="col-sm-3 col-form-label">
                  Kewarganegaraan
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="kewarganegaraan" Name="kewarganegaraan" value="<?= !empty($kewarganegaraan) ? $kewarganegaraan : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="anak_ke" class="col-sm-3 col-form-label">
                  Anak ke
                </label>
                <div class="col-1">
                    <input type="text" class="form-control" id="anak_ke" Name="anak_ke" value="<?= !empty($anak_ke) ? $anak_ke : "";?>" >
                </div>
                <label for="jumlah_saudara" class="col-1 text-center">
                  dari
                </label>
                <div class="col-1">
                    <input type="text" class="form-control" id="jumlah_saudara" Name="jumlah_saudara" value="<?= !empty($jumlah_saudara) ? $jumlah_saudara : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">
                  Alamat
                </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="jalan" Name="jalan" value="<?= !empty($jalan) ? $jalan : "";?>" placeholder="Jalan Pegangsaan No.3">
                </div>
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="rt" Name="rt" value="<?= !empty($rt) ? $rt : "";?>" placeholder="RT">
                </div>
                <strong>/</strong>
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="rw" Name="rw" value="<?= !empty($rw) ? $rw : "";?>" placeholder="RW">
                </div>
              </div>

              <div class="form-group row">
                <label for="kodepos" class="col-sm-3 col-form-label">
                  Kode Pos
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="kodepos" Name="kodepos" value="<?= !empty($kodepos) ? $kodepos : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="kelurahan" class="col-sm-3 col-form-label">
                  Kelurahan
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="kelurahan" Name="kelurahan" value="<?= !empty($kelurahan) ? $kelurahan : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="dusun" class="col-sm-3 col-form-label">
                  Dusun
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="dusun" Name="dusun" value="<?= !empty($dusun) ? $dusun : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="kecamatan" class="col-sm-3 col-form-label">
                  Kecamatan
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="kecamatan" Name="kecamatan" value="<?= !empty($kecamatan) ? $kecamatan : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="kota_kab" class="col-sm-3 col-form-label">
                  Kota / Kabupaten
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="kota_kab" Name="kota_kab" value="<?= !empty($kota_kab) ? $kota_kab : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="provinsi" class="col-sm-3 col-form-label">
                  Provinsi
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="provinsi" Name="provinsi" value="<?= !empty($provinsi) ? $provinsi : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="lintang" class="col-sm-3 col-form-label">
                  Lintang
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="lintang" Name="lintang" value="<?= !empty($lintang) ? $lintang : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="bujur" class="col-sm-3 col-form-label">
                  bujur
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="bujur" Name="bujur" value="<?= !empty($bujur) ? $bujur : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="jarak_ke_sekolah" class="col-sm-3 col-form-label">
                  Jarak ke Sekolah
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="jarak_ke_sekolah" Name="jarak_ke_sekolah" value="<?= !empty($jarak_ke_sekolah) ? $jarak_ke_sekolah : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="transportasi" class="col-sm-3 col-form-label">
                  Transportasi
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="transportasi" Name="transportasi" value="<?= !empty($transportasi) ? $transportasi : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="telepon" class="col-sm-3 col-form-label">
                  Telepon
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="telepon" Name="telepon" value="<?= !empty($telepon) ? $telepon : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="no_hp" class="col-sm-3 col-form-label">
                  No. Handphone
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_hp" Name="no_hp" value="<?= !empty($no_hp) ? $no_hp : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">
                  E-Mail
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="email" Name="email" value="<?= !empty($email) ? $email : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="bank" class="col-sm-3 col-form-label">
                  Bank
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="bank" Name="bank" value="<?= !empty($bank) ? $bank : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="no_rekening_bank" class="col-sm-3 col-form-label">
                  No. Rekening Bank
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_rekening_bank" Name="no_rekening_bank" value="<?= !empty($no_rekening_bank) ? $no_rekening_bank : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="rekening_atas_nama" class="col-sm-3 col-form-label">
                  Rekening Atas Nama
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="rekening_atas_nama" Name="rekening_atas_nama" value="<?= !empty($rekening_atas_nama) ? $rekening_atas_nama : "";?>" >
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
                    <input type="text" class="form-control" id="sekolah_asal" Name="sekolah_asal" value="<?= !empty($sekolah_asal) ? $sekolah_asal : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="rekening_atas_nama" class="col-sm-3 col-form-label">
                  Rekening Atas Nama
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="rekening_atas_nama" Name="rekening_atas_nama" value="<?= !empty($rekening_atas_nama) ? $rekening_atas_nama : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="berat_badan" class="col-sm-3 col-form-label">
                  Berat Badan
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="berat_badan" Name="berat_badan" value="<?= !empty($berat_badan) ? $berat_badan : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="tinggi_badan" class="col-sm-3 col-form-label">
                  Tinggi Badan
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="tinggi_badan" Name="tinggi_badan" value="<?= !empty($tinggi_badan) ? $tinggi_badan : "";?>" >
                </div>
              </div>

              <div class="form-group row">
                <label for="lingkar_kepala" class="col-sm-3 col-form-label">
                  Lingkar Kepala
                </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="lingkar_kepala" Name="lingkar_kepala" value="<?= !empty($lingkar_kepala) ? $lingkar_kepala : "";?>" >
                </div>
              </div>

            </div>
          <!-- tutup data diri -->

          <!-- /.card-body -->
          <!-- submit -->
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
    