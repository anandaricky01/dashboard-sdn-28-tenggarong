<?php 
	if(isset($_SESSION['nis'])){

	  $nis = $_SESSION['nis'];
	  $nama = $_POST['nama'];
	  $nisn = $_POST['nisn'];
	  $kelas = $_POST['kelas'];
	  $tahun_masuk = $_POST['tahun_masuk'];
	  $jenis_kelamin = $_POST['jenis_kelamin'];
	  $skhun = $_POST['skhun'];
      $no_kps = $_POST['no_kps'];
      $penerima_kps = $_POST['penerima_kps'];
      $penerima_kip = $_POST['penerima_kip'];
      $no_ujian_nasional = $_POST['no_ujian_nasional'];
      $no_ijazah = $_POST['no_ijazah'];
      $no_kip = $_POST['no_kip'];
      $alasan_pip = $_POST['alasan_pip'];
      $nik = $_POST['nik'];
      $tempat_lahir = $_POST['tempat_lahir'];
      $tanggal_lahir = $_POST['tanggal_lahir'];
      $agama = $_POST['agama'];
      $kewarganegaraan = $_POST['kewarganegaraan'];
      $anak_ke = $_POST['anak_ke'];
      $jumlah_saudara = $_POST['jumlah_saudara'];
      $jalan = $_POST['jalan'];
      $dusun = $_POST['dusun'];
      $rt = $_POST['rt'];
      $rw = $_POST['rw'];
      $kodepos = $_POST['kodepos'];
      $kelurahan = $_POST['kelurahan'];
      $kecamatan = $_POST['kecamatan'];
      $kota_kab = $_POST['kota_kab'];
      $provinsi = $_POST['provinsi'];
      $no_kk = $_POST['no_kk'];
      $no_kks = $_POST['no_kks'];
      $layak_pip = $_POST['layak_pip'];
      $jarak_ke_sekolah = $_POST['jarak_ke_sekolah'];
      $jenis_tinggal = $_POST['jenis_tinggal'];
      $transportasi = $_POST['transportasi'];
      $telepon = $_POST['telepon'];
      $no_hp = $_POST['no_hp'];
      $email = $_POST['email'];
      $no_registrasi_akta = $_POST['no_registrasi_akta'];
      $bank = $_POST['bank'];
      $no_rekening_bank = $_POST['no_rekening_bank'];
      $rekening_atas_nama = $_POST['rekening_atas_nama'];
      $kebutuhan_khusus = $_POST['kebutuhan_khusus'];
      $sekolah_asal = $_POST['sekolah_asal'];
      $lintang = $_POST['lintang'];
      $bujur = $_POST['bujur'];
      $berat_badan = $_POST['berat_badan'];
      $tinggi_badan = $_POST['tinggi_badan'];
      $lingkar_kepala = $_POST['lingkar_kepala'];
	 
	   if(empty($nis)||empty($nama)||empty($nisn)||empty($kelas)||empty($tahun_masuk)||empty($jenis_kelamin)){
	 	    header("Location:edit-data-siswa&data=".$nis."&notif=editkosong");
	  }else{
		$sql = "update `data-utama-siswa` set `nama`='$nama', `nis`='$nis', `nisn`='$nisn', `kelas`='$kelas', `tahun_masuk`='$tahun_masuk', `jenis_kelamin`='$jenis_kelamin' 
		where `nis`='$nis'";
		mysqli_query($koneksi,$sql);

		$sql_sekolah = "UPDATE `data-sekolah-siswa` SET `skhun`='$skhun',`penerima_kps`='$penerima_kps',`no_kps`='$no_kps',`no_ujian_nasional`='$no_ujian_nasional',`no_ijazah`='$no_ijazah',`penerima_kip`='$penerima_kip',`no_kip`='$no_kip',`layak_pip`='$layak_pip',`alasan_pip`='$alasan_pip' WHERE `nis`='$nis'";

		mysqli_query($koneksi,$sql_sekolah);

		$sql_diri = "UPDATE `data-diri-siswa` SET `nik`='$nik',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`agama`='$agama',`kewarganegaraan`='$kewarganegaraan',`anak_ke`='$anak_ke',`jumlah_saudara`='$jumlah_saudara',`jalan`='$jalan',`rt`='$rt',`rw`='$rw',`kodepos`='$kodepos',`dusun`='$dusun',`kelurahan`='$kelurahan',`kecamatan`='$kecamatan',`kota_kab`='$kota_kab',`provinsi`='$provinsi',`no_kk`='$no_kk',`no_kks`='$no_kks',`jarak_ke_sekolah`='$jarak_ke_sekolah',`berat_badan`='$berat_badan',`tinggi_badan`='$tinggi_badan',`lingkar_kepala`='$lingkar_kepala',`jenis_tinggal`='$jenis_tinggal',`transportasi`='$transportasi',`telepon`='$telepon',`no_hp`='$no_hp',`email`='$email',`no_registrasi_akta`='$no_registrasi_akta',`bank`='$bank',`no_rekening_bank`='$no_rekening_bank',`rekening_atas_nama`='$rekening_atas_nama',`kebutuhan_khusus`='$kebutuhan_khusus',`sekolah_asal`='$sekolah_asal',`lintang`='$lintang',`bujur`='$bujur' WHERE `nis`='$nis'";
		mysqli_query($koneksi,$sql_diri);

		unset($_SESSION['nis']);
		header("Location:data-siswa&notif=editberhasil");
	  }
	}
?>
