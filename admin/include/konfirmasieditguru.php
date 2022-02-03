<?php
if (isset($_SESSION['NO'])) {
	$id = $_SESSION['NO'];
	$nip = $_POST['NIP_BARU'];
	$kode = $_POST['KODE'];
	$nama = $_POST['NAMA'];
	$jenis_kelamin = $_POST['JK'];
	$tugas_jabatan = $_POST['TUGAS_JABATAN'];
	$NIP_LAMA = $_POST['NIP'];
	$NRG = $_POST['NRG'];
	$NPWP = $_POST['NPWP'];
	$NO_REK_BPD = $_POST['NO_REK_BPD'];
	$TEMPAT_LAHIR = $_POST['TEMPAT_LAHIR'];
	$TGLLAHIR = $_POST['TGLLAHIR'];
	$AGAMA = $_POST['AGAMA'];
	$NKARPEG = $_POST['NKARPEG'];
	$PKT_AWAL = $_POST['PKT_AWAL'];
	$GOL = $_POST['GOL'];
	$TMT_AWAL = $_POST['TMT_AWAL'];
	$CPNS_TMT = $_POST['CPNS_TMT'];
	$PNS_TMT = $_POST['PNS_TMT'];
	$MK_SLRH = $_POST['MK_SLRH'];
	$MK_GOL = $_POST['MK_GOL'];
	$PKT_AKHIR = $_POST['PKT_AKHIR'];
	$TMT_AKHIR = $_POST['TMT_AKHIR'];
	$PEND = $_POST['PEND'];
	$TH = $_POST['TH'];
	$JURUSAN = $_POST['JURUSAN'];
	$TUGAS_TAMBAHAN = $_POST['TUGAS_TAMBAHAN'];
	$JJM = $_POST['JJM'];
	$MENGAJAR = $_POST['MENGAJAR'];
	$UMUR = $_POST['UMUR'];
	$GOL_AKHIR = $_POST['GOL_AKHIR'];
	$NO_SERTIFIKAT = $_POST['NO_SERTIFIKAT'];
	$TH_SRTF = $_POST['TH_SRTF'];
	$EMAIL = $_POST['EMAIL'];
	$TMT_DSNI = $_POST['TMT_DSNI'];
	$GAJI_POKOK = $_POST['GAJI_POKOK'];
	$NO_REK_SERTIFIKAT = $_POST['NO_REK_SERTIFIKAT'];
	$TMT_PNS = $_POST['TMT_PNS'];
	$NUPTK2 = $_POST['NUPTK2'];
	$GOL_DRH = $_POST['GOL_DRH'];
	$STATUS = $_POST['STATUS'];
	$NAMA_SAJA = $_POST['NAMA_SAJA'];
	$GELAR_BLK = $_POST['GELAR_BLK'];
	$HP = $_POST['HP'];
	$PASS_DAPO = $_POST['PASS_DAPO'];
	$JAB_GURU_1 = $_POST['JAB_GURU_1'];
	$JAB_GURU_2 = $_POST['JAB_GURU_2'];
	$NO_PSRT_4 = $_POST['NO_PSRT_4'];
	$NO_SKTP_4 = $_POST['NO_SKTP_4'];
	$FOTO = $_FILES['FOTO'];
	$namaFoto = $FOTO['name'];
	$lokasiFoto = $FOTO['tmp_name'];
	$ext = end(explode('.', $namaFoto)); // upload file ext
	$path = "../fotoGuru/";

	if (empty($id) || empty($nama) || empty($nip) || empty($kode) || empty($tugas_jabatan) || empty($jenis_kelamin)) {
		header("Location:edit-data-guru&data=" . $id . "&notif=editkosong");
	} else {
		$sql_foto_lama = "SELECT `FOTO` FROM `data-guru` WHERE `NO`='$id'";
		$fotoLama = mysqli_fetch_assoc(mysqli_query($koneksi, $sql_foto_lama))['FOTO'];
		$namaFileBaru = md5(rand()) . '.' . $ext; // rename nama file gambar
		unlink("../fotoGuru/" . $fotoLama);
		move_uploaded_file($lokasiFoto, "../fotoGuru/" . $namaFileBaru);
		$sql = "UPDATE `data-guru` SET `NAMA`='$nama',`NIP`='$NIP_LAMA',`NIP_BARU`='$nip',`NUPTK`='$NUPTK',`KODE`='$kode',`NRG`='$NRG',`NPWP`='$NPWP',`NO_REK_BPD`='$NO_REK_BPD',`TEMPAT_LAHIR`='$TEMPAT_LAHIR',`TGLLAHIR`='$TGLLAHIR',`JK`='$jenis_kelamin',`AGAMA`='$AGAMA',`NKARPEG`='$NKARPEG',`PKT_AWAL`='$PKT_AWAL',`GOL`='$GOL',`TMT_AWAL`='$TMT_AWAL',`CPNS_TMT`='$CPNS_TMT',`PNS_TMT`='$PNS_TMT',`MK_SLRH`='$MK_SLRH',`MK_GOL`='$MK_GOL',`PKT_AKHIR`='$PKT_AKHIR',`TMT_AKHIR`='$TMT_AKHIR',`PEND`='$PEND',`TH`='$TH',`JURUSAN`='$JURUSAN',`TUGAS_JABATAN`='$tugas_jabatan',`TUGAS_TAMBAHAN`='$TUGAS_TAMBAHAN',`JJM`='$JJM',`MENGAJAR`='$MENGAJAR',`UMUR`='$UMUR',`GOL_AKHIR`='$GOL_AKHIR',`NO_SERTIFIKAT`='$NO_SERTIFIKAT',`TH_SRTF`='$TH_SRTF',`EMAIL`='$EMAIL',`TMT_DSNI`='$TMT_DSNI',`GAJI_POKOK`='$GAJI_POKOK',`NO_REK_SERTIFIKAT`='$NO_REK_SERTIFIKAT',`TMT_PNS`='$TMT_PNS',`NUPTK2`='$NUPTK2',`GOL_DRH`='$GOL_DRH',`STATUS`='$STATUS',`NAMA_SAJA`='$NAMA_SAJA',`GELAR_BLK`='$GELAR_BLK',`HP`='$HP',`PASS_DAPO`='$PASS_DAPO',`JAB_GURU_1`='$JAB_GURU_1',`JAB_GURU_2`='$JAB_GURU_2',`NO_PSRT_4`='$NO_PSRT_4',`NO_SKTP_4`='$NO_SKTP_4',`FOTO`='$namaFileBaru' WHERE `NO` = '$id'";
		mysqli_query($koneksi, $sql);
		unset($_SESSION['NO']);
		header("Location:data-guru&notif=editberhasil");
		die;
	}
}
