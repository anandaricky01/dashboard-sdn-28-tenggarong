<?php
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // periksa username
    $sql_periksa = "SELECT * FROM `user` WHERE `username`='$user'";
    $password_user = mysqli_fetch_assoc(mysqli_query($koneksi, $sql_periksa))['password'];

    // password_verify($_POST['password'], $user['password']

    $username = mysqli_real_escape_string($koneksi, $user);
    $password = mysqli_real_escape_string($koneksi, $pass);

    //cek username dan password
    $sql = "select `id_user`, `id_role` from `user` 
                where `username`='$username'";
    $query = mysqli_query($koneksi, $sql);
    $jumlah = mysqli_num_rows($query);
    if (empty($user)) {
        header("Location:index.php?include=login&gagal=userKosong");
    } else if (empty($pass)) {
        header("Location:index.php?include=login&gagal=passKosong");
    } else if ($jumlah == 0) {
        header("Location:index.php?include=login&gagal=userpassSalah");
    } else {
        // verifikasi
        if (password_verify($password, $password_user)) {

            //get data
            while ($data = mysqli_fetch_row($query)) {
                $id_user = $data[0]; //1
                $level = $data[1]; //speradmin
                $_SESSION['id_user'] = $id_user;
                $_SESSION['level'] = $level;
                header("Location:profil");
                exit;
            }
        } else {
            header("Location:index.php?include=login&gagal=userpassSalah");
        }
    }
}
