<?php 
    session_start();
    include("../koneksi/koneksi.php");
    if(isset($_GET["include"])){
      $include = $_GET["include"];
      if($include=="konfirmasi-login"){
        include("include/konfirmasilogin.php");
      }else if($include=="signout"){
        include("include/signout.php");
      } // kategori kategori kegiatan
      else if($include=="konfirmasi-tambah-data-siswa"){
        include("include/konfirmasitambahsiswa.php");
      }else if($include=="konfirmasi-edit-data-siswa"){
        include("include/konfirmasieditsiswa.php");
        } // departemen
      else if($include=="konfirmasi-tambah-data-guru"){
        include("include/konfirmasitambahguru.php");
      }else if($include=="konfirmasi-edit-data-guru"){
        include("include/konfirmasieditguru.php");
      } 
      // kategori galeri
      else if($include=="konfirmasi-tambah-galeri"){
        include("include/konfirmasitambahgaleri.php");
      }else if($include=="konfirmasi-edit-galeri"){
        include("include/konfirmasieditgaleri.php");
      }
      // pengaturan user
      else if($include=="konfirmasi-tambah-user"){
        include("include/konfirmasitambahuser.php");
      }
      else if($include=="konfirmasi-edit-user"){
        include("include/konfirmasiedituser.php");
      }
      // edit profil
      else if($include=="konfirmasi-edit-profil"){
        include("include/konfirmasieditprofil.php");
      }
    }
?>



<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head.php") ?>
</head>
<?php
//cek ada get include
if(isset($_GET["include"])){
   $include = $_GET["include"];
   //cek apakah ada session id admin
   if(isset($_SESSION['id_user'])){
    ?>
    <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <?php include("includes/header.php") ?>
        <?php include("includes/sidebar.php") ?>
        <div class="content-wrapper">
          <?php 
            // data master    
                // kategori buku
                if($include=="data-siswa"){
                    include("include/datasiswa.php");
                }else if($include=="tambah-data-siswa"){
                    include("include/tambahsiswa.php");
                }else if($include=="edit-data-siswa"){
                    include("include/editsiswa.php");
                }else if($include=="detail-data-siswa"){
                  include("include/detailsiswa.php");
              }
                // departemen
                else if($include=="data-guru"){
                    include("include/dataguru.php");
                }else if($include=="tambah-data-guru"){
                    include("include/tambahguru.php");
                }else if($include=="edit-data-guru"){
                    include("include/editguru.php");
                }else if($include=="detail-data-guru"){
                    include("include/detailguru.php");
                }
              
                // galeri
                else if($include=="galeri"){
                    include("include/galeri.php");
                }else if($include=="tambah-galeri"){
                    include("include/tambahgaleri.php");
                }else if($include=="edit-galeri"){
                    include("include/editgaleri.php");
                }else if($include=="detail-galeri"){
                    include("include/detailgaleri.php");
                }
            // akhir data master

            // konten 
                else if($include=="konten"){
                    include("include/konten.php");
                }
                else if($include=="edit-konten"){
                    include("include/editkonten.php");
                }
                else if($include=="detail-konten"){
                    include("include/detailkonten.php");
                }
            // akhir konten

            // buku
                else if($include=="buku"){
                    include("include/buku.php");
                }
                else if($include=="detail-buku-admin"){
                    include("include/detailbukuadmin.php");
                }
                else if($include=="edit-buku"){
                    include("include/editbuku.php");
                }
                else if($include=="tambah-buku"){
                    include("include/tambahbuku.php");
                }
            // akhir buku

            // pengaturan user
                else if($include=="user"){
                    include("include/user.php");
                }
                else if($include=="detail-user"){
                    include("include/detailuser.php");
                }
                else if($include=="tambah-user"){
                    include("include/tambahuser.php");
                }
                else if($include=="edit-user"){
                    include("include/edituser.php");
                }
            // akhir pengaturan user

            // ubah password
                else if($include=="ubah-password"){
                    include("include/ubahpassword.php");
                }
            // akhir ubah password
            
            // default (profil)
                else if($include=="edit-profil"){
                    include("include/editprofil.php");
                }
                else{
                    echo $_SESSION['level'];
                    include("include/profil.php");
                }  
            ?>

        </div>
        <!-- /.content-wrapper -->
        <?php include("includes/footer.php") ?>
      </div>
      <!-- ./wrapper -->
      <?php include("includes/script.php") ?>
    </body>
    <?php
    }else{
    //pemanggilan halaman form login
      include("include/login.php");
    }  
}else{
  if(isset($_SESSION['id_user'])){
  //pemanggilan ke halaman-halaman profil jika ada session
  ?>
  <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <?php include("includes/header.php") ?>
        <?php include("includes/sidebar.php") ?>
        <div class="content-wrapper">
        <?php
          //pemanggilan profil
          include("include/profil.php");
        ?>
        </div>
        <!-- /.content-wrapper -->
        <?php include("includes/footer.php") ?>
      </div>
      <!-- ./wrapper -->
      <?php include("includes/script.php") ?>
    </body>
    <?php
  }else{
  //pemanggilan halaman form login
    include("include/login.php");
  } 
}
?>


</html>
