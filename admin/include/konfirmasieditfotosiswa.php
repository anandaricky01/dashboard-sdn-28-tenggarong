<?php 
	// mengambil data nis dari session
	$nis = $_SESSION['nis'];
	$foto = $_FILES; 

	$targetDir = "../foto/"; // directory target

	$targetFile_1 = $targetDir . basename($_FILES["foto_1"]["name"]); // file target kelas 1

	$targetFile_4 = $targetDir . basename($_FILES["foto_4"]["name"]); // file target kelas 4

	$targetFile_6 = $targetDir . basename($_FILES["foto_6"]["name"]); // file target kelas 6

	$imageFileType_1 = strtolower(pathinfo($targetFile_1,PATHINFO_EXTENSION));
	$imageFileType_4 = strtolower(pathinfo($targetFile_4,PATHINFO_EXTENSION));
	$imageFileType_6 = strtolower(pathinfo($targetFile_6,PATHINFO_EXTENSION));

	/* 
		menghitung jumlah kolom pada tabel foto-siswa 
		guna agar mengetahui apakah siswa tersebut sudah punya foto atau belum
	*/
	$sql_jum = "SELECT * FROM `foto-siswa` WHERE `nis`='$nis'";
	$query_jum = mysqli_query($koneksi, $sql_jum);

	/*
		menghitung apakah siswa memiliki foto kelas 1
	*/
	$sql_1 = "SELECT `foto` FROM `foto-siswa` WHERE `nis`='$nis' AND `kelas`='1'";
	$query_1 = mysqli_query($koneksi, $sql_1);

	/*
		menghitung apakah siswa memiliki foto kelas 4
	*/
	$sql_4 = "SELECT `foto` FROM `foto-siswa` WHERE `nis`='$nis' AND `kelas`='4'";
	$query_4 = mysqli_query($koneksi, $sql_4);

	/*
		menghitung apakah siswa memiliki foto kelas 6
	*/
	$sql_6 = "SELECT `foto` FROM `foto-siswa` WHERE `nis`='$nis' AND `kelas`='6'";
	$query_6 = mysqli_query($koneksi, $sql_6);

	$jumlah = mysqli_num_rows($query_jum);
	$jumlah_1 = mysqli_num_rows($query_1);
	$jumlah_4 = mysqli_num_rows($query_4);
	$jumlah_6 = mysqli_num_rows($query_6);
	
	// apakah terdapat data foto siswa terkait pada tabel

	// jika tidak ada
	if ($jumlah < 1) {

		// cek apakah mengupload foto kelas 1
		if ($foto['foto_1']['error'] == 0) {
			if($imageFileType_1 != "jpg" && $imageFileType_1 != "png" && $imageFileType_1 != "jpeg") {
				header("Location:edit-foto-siswa&data=$nis&notif=jenisfile");
				die;
			} 

			// Check file size
			if ($foto["foto_1"]["size"] > 5000000) {
			  	header("Location:edit-foto-siswa&data=$nis&notif=size");
				die;
			}

			// rename nama file
			$temp = explode(".", $foto["foto_1"]["name"]);
			$newfilename = md5(rand()) . '1' .'.' . end($temp);
			move_uploaded_file($foto["foto_1"]["tmp_name"], "../foto/" . $newfilename);

			// masukan ke database
			$sql_input = "INSERT INTO `foto-siswa`(`id`, `nis`, `foto`, `kelas`) VALUES (NULL,'$nis','$newfilename','1')";
			mysqli_query($koneksi, $sql_input);
		}

		// cek apakah mengupload foto kelas 4
		if ($foto['foto_4']['error'] == 0) {
			if($imageFileType_4 != "jpg" && $imageFileType_4 != "png" && $imageFileType_4 != "jpeg") {
				header("Location:edit-foto-siswa&data=$nis&notif=jenisfile");
				die;
			} 

			// Check file size
			if ($foto["foto_4"]["size"] > 5000000) {
			  	header("Location:edit-foto-siswa&data=$nis&notif=size");
				die;
			}

			// rename nama file
			$temp = explode(".", $foto["foto_4"]["name"]);
			$newfilename = md5(rand()) . '1' . '.' . end($temp);
			move_uploaded_file($foto["foto_4"]["tmp_name"], "../foto/" . $newfilename);

			// masukan ke database
			$sql_input = "INSERT INTO `foto-siswa`(`id`, `nis`, `foto`, `kelas`) VALUES (NULL,'$nis','$newfilename','4')";
			mysqli_query($koneksi, $sql_input);
		}

		// cek apakah mengupload foto kelas 6
		if ($foto['foto_6']['error'] == 0) {
			if($imageFileType_6 != "jpg" && $imageFileType_6 != "png" && $imageFileType_6 != "jpeg") {
				header("Location:edit-foto-siswa&data=$nis&notif=jenisfile");
				die;
			} 

			// Check file size
			if ($foto["foto_6"]["size"] > 5000000) {
			  	header("Location:edit-foto-siswa&data=$nis&notif=size");
				die;
			}

			// rename nama file
			$temp = explode(".", $foto["foto_6"]["name"]);
			$newfilename = md5(rand()) . '6' . '.' . end($temp);
			move_uploaded_file($foto["foto_6"]["tmp_name"], "../foto/" . $newfilename);

			// masukan ke database
			$sql_input = "INSERT INTO `foto-siswa`(`id`, `nis`, `foto`, `kelas`) VALUES (NULL,'$nis','$newfilename','6')";
			mysqli_query($koneksi, $sql_input);
		}

		header("Location:foto-siswa&notif=editberhasil");
	} else {

		// apakah terdapat foto kelas 1
		if ($jumlah_1 == 1) {

			// apakah mengupload foto lagi
			if ($foto['foto_1']['error'] == 0) {

				// check ekstensi foto
				if($imageFileType_1 != "jpg" && $imageFileType_1 != "png" && $imageFileType_1 != "jpeg") {
				header("Location:edit-foto-siswa&data=$nis&notif=jenisfile");
				die;
				}

				// Check file size
				if ($foto["foto_1"]["size"] > 5000000) {
				  	header("Location:edit-foto-siswa&data=$nis&notif=size");
					die;
				}

				// hapus file lama
				$oldFileName_1 = mysqli_fetch_assoc($query_1);
				unlink("../foto/" . $oldFileName_1['foto']);

				$temp_1 = explode(".", $foto["foto_1"]["name"]);
				$newfilename_1 = md5(rand()) . '1' .  '.' . end($temp_1);

				move_uploaded_file($foto["foto_1"]["tmp_name"], "../foto/" . $newfilename_1);

				$sql_update_1 = "UPDATE `foto-siswa` SET `foto`='$newfilename_1' WHERE `nis`='$nis' AND `kelas`='1'";
				mysqli_query($koneksi, $sql_update_1);

			}
		} else {

			if ($foto['foto_1']['error'] == 0) {
				if($imageFileType_1 != "jpg" && $imageFileType_1 != "png" && $imageFileType_1 != "jpeg") {
					header("Location:edit-foto-siswa&data=$nis&notif=jenisfile");
					die;
				} 

				// Check file size
				if ($foto["foto_1"]["size"] > 5000000) {
				  	header("Location:edit-foto-siswa&data=$nis&notif=size");
					die;
				}

				// rename nama file
				$temp_1 = explode(".", $foto["foto_1"]["name"]);
				$newfilename_1 = md5(rand()) . '1' . '.' . end($temp_1);
				move_uploaded_file($foto["foto_1"]["tmp_name"], "../foto/" . $newfilename_1);

				// masukan ke database
				$sql_input_1 = "INSERT INTO `foto-siswa`(`id`, `nis`, `foto`, `kelas`) VALUES (NULL,'$nis','$newfilename_1','1')";
				mysqli_query($koneksi, $sql_input_1);
			}
		}

		// apakah terdapat foto kelas 4
		if ($jumlah_4 == 1) {
			// apakah mengupload foto lagi
			if ($foto['foto_4']['error'] == 0) {

				// check ekstensi foto
				if($imageFileType_4 != "jpg" && $imageFileType_4 != "png" && $imageFileType_4 != "jpeg") {
				header("Location:edit-foto-siswa&data=$nis&notif=jenisfile");
				die;
				}

				// Check file size
				if ($foto["foto_4"]["size"] > 5000000) {
				  	header("Location:edit-foto-siswa&data=$nis&notif=size");
					die;
				}

				// hapus file lama
				$oldFileName_4 = mysqli_fetch_assoc($query_4);
				unlink("../foto/" . $oldFileName_4['foto']);

				$temp_4 = explode(".", $foto["foto_4"]["name"]);
				$newfilename_4 = md5(rand()) . '4' . '.' . end($temp_4);
				move_uploaded_file($foto["foto_4"]["tmp_name"], "../foto/" . $newfilename_4);

				$sql_update_4 = "UPDATE `foto-siswa` SET `foto`='$newfilename_4' WHERE `nis`='$nis' AND `kelas`='4'";
				mysqli_query($koneksi, $sql_update_4);

			}
		} else {
			if ($foto['foto_4']['error'] == 0) {
				if($imageFileType_4 != "jpg" && $imageFileType_4 != "png" && $imageFileType_4 != "jpeg") {
					header("Location:edit-foto-siswa&data=$nis&notif=jenisfile");
					die;
				} 

				// Check file size
				if ($foto["foto_4"]["size"] > 5000000) {
				  	header("Location:edit-foto-siswa&data=$nis&notif=size");
					die;
				}

				// rename nama file
				$temp_4 = explode(".", $foto["foto_4"]["name"]);
				$newfilename_4 = md5(rand()) . '4' . '.' . end($temp_4);
				move_uploaded_file($foto["foto_4"]["tmp_name"], "../foto/" . $newfilename_4);

				// masukan ke database
				$sql_input_4 = "INSERT INTO `foto-siswa`(`id`, `nis`, `foto`, `kelas`) VALUES (NULL,'$nis','$newfilename_4','4')";
				mysqli_query($koneksi, $sql_input_4);
			}
		}

		// apakah terdapat foto kelas 1
		if ($jumlah_6 == 1) {
			// apakah mengupload foto lagi
			if ($foto['foto_6']['error'] == 0) {

				// check ekstensi foto
				if($imageFileType_6 != "jpg" && $imageFileType_6 != "png" && $imageFileType_6 != "jpeg") {
				header("Location:edit-foto-siswa&data=$nis&notif=jenisfile");
				die;
				}

				// Check file size
				if ($foto["foto_6"]["size"] > 5000000) {
				  	header("Location:edit-foto-siswa&data=$nis&notif=size");
					die;
				}

				// hapus file lama
				$oldFileName_6 = mysqli_fetch_assoc($query_6);
				unlink("../foto/" . $oldFileName_6['foto']);

				$temp_6 = explode(".", $foto["foto_6"]["name"]);
				$newfilename_6 = md5(rand()) . '6' . '.' . end($temp_6);
				move_uploaded_file($foto["foto_6"]["tmp_name"], "../foto/" . $newfilename_6);

				$sql_update_6 = "UPDATE `foto-siswa` SET `foto`='$newfilename_6' WHERE `nis`='$nis' AND `kelas`='6'";
				mysqli_query($koneksi, $sql_update_6);

			}
		} else {
			if ($foto['foto_6']['error'] == 0) {
				if($imageFileType_6 != "jpg" && $imageFileType_6 != "png" && $imageFileType_6 != "jpeg") {
					header("Location:edit-foto-siswa&data=$nis&notif=jenisfile");
					die;
				} 

				// Check file size
				if ($foto["foto_6"]["size"] > 5000000) {
				  	header("Location:edit-foto-siswa&data=$nis&notif=size");
					die;
				}

				// rename nama file
				$temp_6 = explode(".", $foto["foto_6"]["name"]);
				$newfilename_6 = md5(rand()) . '6' . '.' . end($temp_6);
				move_uploaded_file($foto["foto_6"]["tmp_name"], "../foto/" . $newfilename_6);

				// masukan ke database
				$sql_input_6 = "INSERT INTO `foto-siswa`(`id`, `nis`, `foto`, `kelas`) VALUES (NULL,'$nis','$newfilename_6','6')";
				mysqli_query($koneksi, $sql_input_6);
			}
		}
		header("Location:foto-siswa&notif=editberhasil");
	}

	die;
