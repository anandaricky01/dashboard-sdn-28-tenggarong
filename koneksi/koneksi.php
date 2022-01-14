<?php 

	$koneksi = mysqli_connect('localhost', 'root', '', 'data-sekolah');

	if (!$koneksi) {
		die("Error koneksi " . mysqli_connect_errno());
	}

 ?>