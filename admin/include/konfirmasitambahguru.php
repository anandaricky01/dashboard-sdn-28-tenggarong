<?php 
	$nip = $_POST['NIP_BARU'];
	$kode = $_POST['KODE'];
	$nama = $_POST['NAMA'];
	$jenis_kelamin = $_POST['JK'];
	$tugas_jabatan = $_POST['TUGAS_JABATAN'];
	if(empty($nama)||empty($nip)||empty($kode)||empty($tugas_jabatan)){
		header("Location:tambah-data-guru&notif=tambahkosong");
	}else{
		$sql = "INSERT INTO `data-guru` (`NO`,`NAMA`,`NIP_BARU`,`KODE`,`TUGAS_JABATAN`,`JK`) 
		values (NULL,'$nama','$nip','$kode','$tugas_jabatan','$jenis_kelamin')";
		mysqli_query($koneksi,$sql);
	header("Location:data-guru&notif=tambahberhasil");	
	}
?>