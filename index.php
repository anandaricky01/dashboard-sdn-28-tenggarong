<?php 

  include('koneksi/koneksi.php');

 ?>

<!doctype html>
<html lang="en">
  <head>
    <?php include('includes/head.php'); ?>
      <style>
        .zoom {
          transition: transform .5s; /* Animation */
        }

        .zoom:hover {
          transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
      </style>
  </head>
  <body class="bg-light">
  	<?php include('includes/navbar.php'); ?>
      <?php if (isset($_GET['include'])) {
          // datasiswa
    	   if($_GET['include'] == 'data-siswa'){
            include('include/datasiswa.php');
         } else if($_GET['include'] == 'detail-siswa'){
          include('include/detailsiswa.php');
       }
          // home
         else {
            include('include/index.php');
         }
      } else {
        include('include/index.php');
      }

      ?>

      <div class="mb-5">

      </div>
    	<?php include('includes/footer.php'); ?>

    <?php include('includes/javascript.php'); ?>
    <?php if ($_GET['include'] == 'kegiatan') { ?>
      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <?php } ?>
  </body>
</html>