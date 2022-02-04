<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);;
$level = $_POST['level'];

if (empty($nama)) {
   header("Location:tambah-user&notif=tambahkosong&jenis=nama");
} else if (empty($email)) {
   header("Location:tambah-user&notif=tambahkosong&jenis=email");
} else if (empty($username)) {
   header("Location:tambah-user&notif=tambahkosong&jenis=username");
} else if (empty($password)) {
   header("Location:tambah-user&notif=tambahkosong&jenis=password");
} else if (empty($level)) {
   header("Location:tambah-user&notif=tambahkosong&jenis=level");
} else {

   $sql = "INSERT INTO `user` 
      (`id_user`,`nama`,`email`,`username`,
   `password`,`id_role`)
      VALUES (NULL,'$nama','$email','$username',
   '$password','$level')";
   //echo $sql;
   mysqli_query($koneksi, $sql);
   $id_buku = mysqli_insert_id($koneksi);

   header("Location:user&notif=tambahberhasil");
}
