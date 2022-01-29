<?php 
	$nama = $_POST['nama'];
	$nis = $_POST['nis'];
	$nisn = $_POST['nisn'];
	$kelas = $_POST['kelas'];
	$tahun_masuk = $_POST['tahun_masuk'];
	$jenis_kelamin = $_POST['jenis_kelamin'];

	if(empty($nama) || empty($nis) || empty($nisn) || empty($kelas) || empty($tahun_masuk) || empty($jenis_kelamin)){
		header("Location:tambah-data-siswa&notif=tambahkosong");
	}else{

		// data siswa  
		$sql = "INSERT INTO `data-utama-siswa`(`id`, `nama`, `nis`, `nisn`, `kelas`, `tahun_masuk`, `jenis_kelamin`) VALUES (NULL,'$nama','$nis','$nisn','$kelas','$tahun_masuk','$jenis_kelamin')";
		mysqli_query($koneksi,$sql);

	header("Location:data-siswa&notif=tambahberhasil");	
	}
