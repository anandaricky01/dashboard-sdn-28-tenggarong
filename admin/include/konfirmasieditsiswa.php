<?php
if (isset($_SESSION['nis'])) {
    $halaman = $_POST['halaman'];
    $nis = $_SESSION['nis'];

    if ($halaman == 'ayah') {
        // data ayah
        $nik_ayah = !empty($_POST['nik_ayah']) ? $_POST['nik_ayah'] : "--";
        $nama_ayah = !empty($_POST['nama_ayah']) ? $_POST['nama_ayah'] : "--";
        $tempat_lahir_ayah = !empty($_POST['tempat_lahir_ayah']) ? $_POST['tempat_lahir_ayah'] : "--";
        $tanggal_lahir_ayah = !empty($_POST['tanggal_lahir_ayah']) ? date('Y-m-d', strtotime($_POST['tanggal_lahir_ayah'])) : date('Y-m-d', strtotime('0000-00-00'));
        $nohp_ayah = !empty($_POST['nohp_ayah']) ? $_POST['nohp_ayah'] : "--";
        $pendidikan_ayah = !empty($_POST['pendidikan_ayah']) ? $_POST['pendidikan_ayah'] : "--";
        $pekerjaan_ayah = !empty($_POST['pekerjaan_ayah']) ? $_POST['pekerjaan_ayah'] : "--";
        $penghasilan_ayah = !empty($_POST['penghasilan_ayah']) ? $_POST['penghasilan_ayah'] : "--";
        $agama_ayah = !empty($_POST['agama_ayah']) ? $_POST['agama_ayah'] : "--";
        $status_ayah = !empty($_POST['status_ayah']) ? $_POST['status_ayah'] : "--";
        $alamat_ayah = !empty($_POST['alamat_ayah']) ? $_POST['alamat_ayah'] : "--";

        $sql_jum_ayah = "SELECT * FROM `data-ayah` WHERE `nis`='$nis'";
        $jum_ayah = mysqli_num_rows(mysqli_query($koneksi, $sql_jum_ayah));

        // data ayah
        if ($jum_ayah < 1) {
            $sql_ayah = "INSERT INTO `data-ayah`(`id`, `nis`, `nama_ayah`, `nik_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `nohp_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `agama_ayah`, `status_ayah`, `alamat_ayah`) VALUES ('NULL','$nis','$nama_ayah','$nik_ayah','$tempat_lahir_ayah','$tanggal_lahir_ayah','$nohp_ayah','$pendidikan_ayah','$pekerjaan_ayah','$penghasilan_ayah','$agama_ayah','$status_ayah','$alamat_ayah')";
        } else {
            $sql_ayah = "UPDATE `data-ayah` SET `nama_ayah`='$nama_ayah',`nik_ayah`='$nik_ayah',`tempat_lahir_ayah`='$tempat_lahir_ayah',`tanggal_lahir_ayah`='$tanggal_lahir_ayah',`nohp_ayah`='$nohp_ayah',`pendidikan_ayah`='$pendidikan_ayah',`pekerjaan_ayah`='$pekerjaan_ayah',`penghasilan_ayah`='$penghasilan_ayah',`agama_ayah`='$agama_ayah',`status_ayah`='$status_ayah',`alamat_ayah`='$alamat_ayah' WHERE `nis`='$nis'";
        }
        mysqli_query($koneksi, $sql_ayah);
    } else if ($halaman == 'ibu') {
        // data ibu
        $nik_ibu = !empty($_POST['nik_ibu']) ? $_POST['nik_ibu'] : "--";
        $nama_ibu = !empty($_POST['nama_ibu']) ? $_POST['nama_ibu'] : "--";
        $tempat_lahir_ibu = !empty($_POST['tempat_lahir_ibu']) ? $_POST['tempat_lahir_ibu'] : "--";
        $tanggal_lahir_ibu = !empty($_POST['tanggal_lahir_ibu']) ? date('Y-m-d', strtotime($_POST['tanggal_lahir_ibu'])) : date('Y-m-d', strtotime('0000-00-00'));
        $nohp_ibu = !empty($_POST['nohp_ibu']) ? $_POST['nohp_ibu'] : "--";
        $pendidikan_ibu = !empty($_POST['pendidikan_ibu']) ? $_POST['pendidikan_ibu'] : "--";
        $pekerjaan_ibu = !empty($_POST['pekerjaan_ibu']) ? $_POST['pekerjaan_ibu'] : "--";
        $penghasilan_ibu = !empty($_POST['penghasilan_ibu']) ? $_POST['penghasilan_ibu'] : "--";
        $agama_ibu = !empty($_POST['agama_ibu']) ? $_POST['agama_ibu'] : "--";
        $status_ibu = !empty($_POST['status_ibu']) ? $_POST['status_ibu'] : "--";
        $alamat_ibu = !empty($_POST['alamat_ibu']) ? $_POST['alamat_ibu'] : "--";

        $sql_jum_ibu = "SELECT * FROM `data-ibu` WHERE `nis`='$nis'";
        $jum_ibu = mysqli_num_rows(mysqli_query($koneksi, $sql_jum_ibu));

        // data ibu
        if ($jum_ibu < 1) {
            $sql_ibu = "INSERT INTO `data-ibu`(`id`, `nis`, `nama_ibu`, `nik_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `nohp_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `agama_ibu`, `status_ibu`, `alamat_ibu`) VALUES ('NULL','$nis','$nama_ibu','$nik_ibu','$tempat_lahir_ibu','$tanggal_lahir_ibu','$nohp_ibu','$pendidikan_ibu','$pekerjaan_ibu','$penghasilan_ibu','$agama_ibu','$status_ibu','$alamat_ibu')";
        } else {
            $sql_ibu = "UPDATE `data-ibu` SET `nama_ibu`='$nama_ibu',`nik_ibu`='$nik_ibu',`tempat_lahir_ibu`='$tempat_lahir_ibu',`tanggal_lahir_ibu`='$tanggal_lahir_ibu',`nohp_ibu`='$nohp_ibu',`pendidikan_ibu`='$pendidikan_ibu',`pekerjaan_ibu`='$pekerjaan_ibu',`penghasilan_ibu`='$penghasilan_ibu',`agama_ibu`='$agama_ibu',`status_ibu`='$status_ibu',`alamat_ibu`='$alamat_ibu' WHERE `nis`='$nis'";
        }
        mysqli_query($koneksi, $sql_ibu);
    } else if ($halaman == 'wali') {
        // data wali
        $nik_wali = !empty($_POST['nik_wali']) ? $_POST['nik_wali'] : "--";
        $nama_wali = !empty($_POST['nama_wali']) ? $_POST['nama_wali'] : "--";
        $tempat_lahir_wali = !empty($_POST['tempat_lahir_wali']) ? $_POST['tempat_lahir_wali'] : "--";
        $tanggal_lahir_wali = !empty($_POST['tanggal_lahir']) ? date('Y-m-d', strtotime($_POST['tanggal_lahir_wali'])) : date('Y-m-d', strtotime('0000-00-00'));
        $nohp_wali = !empty($_POST['nohp_wali']) ? $_POST['nohp_wali'] : "--";
        $pendidikan_wali = !empty($_POST['pendidikan_wali']) ? $_POST['pendidikan_wali'] : "--";
        $pekerjaan_wali = !empty($_POST['pekerjaan_wali']) ? $_POST['pekerjaan_wali'] : "--";
        $penghasilan_wali = !empty($_POST['penghasilan_wali']) ? $_POST['penghasilan_wali'] : "--";
        $agama_wali = !empty($_POST['agama_wali']) ? $_POST['agama_wali'] : "--";
        $status_wali = !empty($_POST['status_wali']) ? $_POST['status_wali'] : "--";
        $alamat_wali = !empty($_POST['alamat_wali']) ? $_POST['alamat_wali'] : "--";

        $sql_jum_wali = "SELECT * FROM `data-wali` WHERE `nis`='$nis'";
        $jum_wali = mysqli_num_rows(mysqli_query($koneksi, $sql_jum_wali));

        // data wali
        if ($jum_wali < 1) {
            $sql_wali = "INSERT INTO `data-wali`(`id`, `nis`, `nama_wali`, `nik_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `nohp_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `agama_wali`, `status_wali`, `alamat_wali`) VALUES ('NULL','$nis','$nama_wali','$nik_wali','$tempat_lahir_wali','$tanggal_lahir_wali','$nohp_wali','$pendidikan_wali','$pekerjaan_wali','$penghasilan_wali','$agama_wali','$status_wali','$alamat_wali')";
        } else {
            $sql_wali = "UPDATE `data-wali` SET `nama_wali`='$nama_wali',`nik_wali`='$nik_wali',`tempat_lahir_wali`='$tempat_lahir_wali',`tanggal_lahir_wali`='$tanggal_lahir_wali',`nohp_wali`='$nohp_wali',`pendidikan_wali`='$pendidikan_wali',`pekerjaan_wali`='$pekerjaan_wali',`penghasilan_wali`='$penghasilan_wali',`agama_wali`='$agama_wali',`status_wali`='$status_wali',`alamat_wali`='$alamat_wali' WHERE `nis`='$nis'";
        }
        mysqli_query($koneksi, $sql_wali);
    } else if ($halaman == 'diri') {
        // data diri
        $nik = !empty($_POST['nik']) ? $_POST['nik'] : "--";
        $tempat_lahir = !empty($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : "--";
        $tanggal_lahir = !empty($_POST['tanggal_lahir']) ? date('Y-m-d', strtotime($_POST['tanggal_lahir'])) : date('Y-m-d', strtotime('0000-00-00'));
        $agama = !empty($_POST['agama']) ? $_POST['agama'] : "--";
        $kewarganegaraan = !empty($_POST['kewarganegaraan']) ? $_POST['kewarganegaraan'] : "--";
        $anak_ke = !empty($_POST['anak_ke']) ? $_POST['anak_ke'] : "--";
        $jumlah_saudara = !empty($_POST['jumlah_saudara']) ? $_POST['jumlah_saudara'] : "--";
        $jalan = !empty($_POST['jalan']) ? $_POST['jalan'] : "--";
        $dusun = !empty($_POST['dusun']) ? $_POST['dusun'] : "--";
        $rt = !empty($_POST['rt']) ? $_POST['rt'] : "--";
        $rw = !empty($_POST['rw']) ? $_POST['re'] : "--";
        $kodepos = !empty($_POST['kodepos']) ? $_POST['kodepos'] : "--";
        $kelurahan = !empty($_POST['kelurahan']) ? $_POST['kelurahan'] : "--";
        $kecamatan = !empty($_POST['kecamatan']) ? $_POST['kecamatan'] : "--";
        $kota_kab = !empty($_POST['kota_kab']) ? $_POST['kota_kab'] : "--";
        $provinsi = !empty($_POST['provinsi']) ? $_POST['provinsi'] : "--";
        $no_kk = !empty($_POST['no_kk']) ? $_POST['no_kk'] : "--";
        $no_kks = !empty($_POST['no_kks']) ? $_POST['no_kks'] : "--";
        $layak_pip = !empty($_POST['layak_pip']) ? $_POST['layak_pip'] : "--";
        $jarak_ke_sekolah = !empty($_POST['jarak_ke_sekolah']) ? $_POST['jarak_ke_sekolah'] : "0";
        $jenis_tinggal = !empty($_POST['jenis_tinggal']) ? $_POST['jenis_tinggal'] : "--";
        $transportasi = !empty($_POST['transportasi']) ? $_POST['transportasi'] : "--";
        $telepon = !empty($_POST['telepon']) ? $_POST['telepon'] : "--";
        $no_hp = !empty($_POST['no_hp']) ? $_POST['no_hp'] : "--";
        $email = !empty($_POST['email']) ? $_POST['email'] : "--";
        $no_registrasi_akta = !empty($_POST['no_registrasi_akta']) ? $_POST['no_registrasi_akta'] : "--";
        $bank = !empty($_POST['bank']) ? $_POST['bank'] : "--";
        $no_rekening_bank = !empty($_POST['no_rekening_bank']) ? $_POST['no_rekening_bank'] : "--";
        $rekening_atas_nama = !empty($_POST['rekening_atas_nama']) ? $_POST['rekening_atas_nama'] : "--";
        $kebutuhan_khusus = !empty($_POST['kebutuhan_khusus']) ? $_POST['kebutuhan_khusus'] : "--";
        $sekolah_asal = !empty($_POST['sekolah_asal']) ? $_POST['sekolah_asal'] : "--";
        $lintang = !empty($_POST['lintang']) ? $_POST['lintang'] : "--";
        $bujur = !empty($_POST['bujur']) ? $_POST['bujur'] : "--";
        $berat_badan = !empty($_POST['berat_badan']) ? $_POST['berat_badan'] : "0";
        $tinggi_badan = !empty($_POST['tinggi_badan']) ? $_POST['tinggi_badan'] : "0";
        $lingkar_kepala = !empty($_POST['lingkar_kepala']) ? $_POST[''] : "0";

        $sql_jum_diri = "SELECT * FROM `data-diri-siswa` WHERE `nis`=$nis";
        $jum_diri = mysqli_num_rows(mysqli_query($koneksi, $sql_jum_diri));

        if ($jum_diri < 1) {
            $sql_diri = "INSERT INTO `data-diri-siswa`(`id`, `nik`, `nis`, `tempat_lahir`, `tanggal_lahir`, `agama`, `kewarganegaraan`, `anak_ke`, `jumlah_saudara`, `jalan`, `rt`, `rw`, `kodepos`, `dusun`, `kelurahan`, `kecamatan`, `kota_kab`, `provinsi`, `no_kk`, `no_kks`, `jarak_ke_sekolah`, `berat_badan`, `tinggi_badan`, `lingkar_kepala`, `jenis_tinggal`, `transportasi`, `telepon`, `no_hp`, `email`, `no_registrasi_akta`, `bank`, `no_rekening_bank`, `rekening_atas_nama`, `kebutuhan_khusus`, `sekolah_asal`, `lintang`, `bujur`) VALUES ('NULL','$nik','$nis','$tempat_lahir','$tanggal_lahir','$agama','$kewarganegaraan','$anak_ke','$jumlah_saudara','$jalan','$rt','$rw','$kodepos','$dusun','$kelurahan','$kecamatan','$kota_kab','$provinsi','$no_kk','$no_kks','$jarak_ke_sekolah','$berat_badan','$tinggi_badan','$lingkar_kepala','$jenis_tinggal','$transportasi','$telepon','$no_hp','$email','$no_registrasi_akta','$bank','$no_rekening_bank','$rekening_atas_nama','$kebutuhan_khusus','$sekolah_asal','$lintang','$bujur')";
            mysqli_query($koneksi, $sql_diri);
        } else {
            // data diri
            $sql_diri = "UPDATE `data-diri-siswa` SET `nik`='$nik',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`agama`='$agama',`kewarganegaraan`='$kewarganegaraan',`anak_ke`='$anak_ke',`jumlah_saudara`='$jumlah_saudara',`jalan`='$jalan',`rt`='$rt',`rw`='$rw',`kodepos`='$kodepos',`dusun`='$dusun',`kelurahan`='$kelurahan',`kecamatan`='$kecamatan',`kota_kab`='$kota_kab',`provinsi`='$provinsi',`no_kk`='$no_kk',`no_kks`='$no_kks',`jarak_ke_sekolah`='$jarak_ke_sekolah',`berat_badan`='$berat_badan',`tinggi_badan`='$tinggi_badan',`lingkar_kepala`='$lingkar_kepala',`jenis_tinggal`='$jenis_tinggal',`transportasi`='$transportasi',`telepon`='$telepon',`no_hp`='$no_hp',`email`='$email',`no_registrasi_akta`='$no_registrasi_akta',`bank`='$bank',`no_rekening_bank`='$no_rekening_bank',`rekening_atas_nama`='$rekening_atas_nama',`kebutuhan_khusus`='$kebutuhan_khusus',`sekolah_asal`='$sekolah_asal',`lintang`='$lintang',`bujur`='$bujur' WHERE `nis`='$nis'";
            mysqli_query($koneksi, $sql_diri);
        }
    } else if ($halaman == 'sekolah') {
        // data sekolah
        $skhun = !empty($_POST['skhun']) ? $_POST['skhun'] : "--";
        $no_kps = !empty($_POST['no_kps']) ? $_POST['no_kps'] : "--";
        $penerima_kps = !empty($_POST['penerima_kps']) ? $_POST['penerima_kps'] : "--";
        $penerima_kip = !empty($_POST['penerima_kip']) ? $_POST['penerima_kip'] : "--";
        $no_ujian_nasional = !empty($_POST['no_ujian_nasional']) ? $_POST['no_ujian_nasional'] : "--";
        $no_ijazah = !empty($_POST['no_ijazah']) ? $_POST['no_ijazah'] : "--";
        $no_kip = !empty($_POST['no_kip']) ? $_POST['no_kip'] : "--";
        $alasan_pip = !empty($_POST['alasan_pip']) ? $_POST['alasan_pip'] : "--";
        $nama_kip = !empty($_POST['nama_kip']) ? $_POST['nama_kip'] : "--";

        $sql_jum_sekolah = "SELECT * FROM `data-sekolah-siswa` WHERE `nis`='$nis'";
        $jum_sekolah = mysqli_num_rows(mysqli_query($koneksi, $sql_jum_sekolah));

        if ($jum_sekolah < 1) {
            $sql_sekolah = "INSERT INTO `data-sekolah-siswa`(`id`, `nis`, `skhun`, `penerima_kps`, `no_kps`, `no_ujian_nasional`, `no_ijazah`, `penerima_kip`, `no_kip`, `nama_kip`, `layak_pip`, `alasan_pip`) VALUES ('NULL','$nis','$skhun','$penerima_kps','$no_kps','$no_ujian_nasional','$no_ijazah','$penerima_kip','$no_kip','$nama_kip','$layak_pip','$alasan_pip')";
            mysqli_query($koneksi, $sql_sekolah);
        } else {
            // data sekolah
            $sql_sekolah = "UPDATE `data-sekolah-siswa` SET `skhun`='$skhun',`penerima_kps`='$penerima_kps',`no_kps`='$no_kps',`no_ujian_nasional`='$no_ujian_nasional',`no_ijazah`='$no_ijazah',`penerima_kip`='$penerima_kip',`no_kip`='$no_kip',`layak_pip`='$layak_pip',`alasan_pip`='$alasan_pip' WHERE `nis`='$nis'";
            mysqli_query($koneksi, $sql_sekolah);
        }
    } else if ($halaman == 'utama') {

        // data utama
        $nama = $_POST['nama'];
        $nisn = $_POST['nisn'];
        $kelas = $_POST['kelas'];
        $tahun_masuk = $_POST['tahun_masuk'];
        $jenis_kelamin = $_POST['jenis_kelamin'];

        if (empty($nama) || empty($nisn) || empty($kelas) || empty($tahun_masuk) || empty($jenis_kelamin) || empty($nis)) {
            header("Location:detail-data-siswa&notif=editkosong&data=$nis");
            die;
        }
        // data utama
        $sql = "UPDATE `data-utama-siswa` SET `nama`='$nama', `nis`='$nis', `nisn`='$nisn', `kelas`='$kelas', `tahun_masuk`='$tahun_masuk', `jenis_kelamin`='$jenis_kelamin' WHERE `nis`='$nis'";

        mysqli_query($koneksi, $sql);
    } else {
        header("Location:detail-data-siswa&notif=editkosong&data=$nis&halaman=$halaman");
    }

    unset($_SESSION['nis']);
    header("Location:data-siswa&notif=editberhasil");
}
