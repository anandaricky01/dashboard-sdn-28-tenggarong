<?php 
	
	include('koneksi/koneksi.php');


 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">nama</th>
	      <th scope="col">detail</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php
	    	$sql = "SELECT * FROM `data-guru`";
	    	$query = mysqli_query($koneksi, $sql);
	      while($data=mysqli_fetch_assoc($query)) { 
	      	$i = $data['NO'];
	      	$nama = $data['NAMA'];
	    ?>
	    <tr>
	      	<th scope="row"><?php echo $i; ?></th>
	      	<td><?php echo $nama; ?></td>
	      	<td><!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i;?>">
				  <?php echo $nama; ?>
				</button>
			</td>
	    </tr>
	<?php } ?>
		</tbody>
	</table>

	 <?php
	    	$sql = "SELECT * FROM `data-guru`";
	    	$query = mysqli_query($koneksi, $sql);
	      while($data=mysqli_fetch_assoc($query)) { 
	      	$i = $data['NO'];
	      	$nama = $data['NAMA'];
	      	$nip = $data['NIP'];
	      	$jk = $data['JK'];
	    ?>
	<!-- Modal -->
		<div class="modal fade" id="exampleModal<?= $i;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel"><?php echo $nama; ?></h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        <!-- tabel -->
		        <table class="table">
				  <tbody>
				    <tr>
				      <th scope="row">Nama</th>
				      <td><?php echo $nama; ?></td>
				    </tr>
				    <tr>
				      <th scope="row">NIP</th>
				      <td><?php echo $nip; ?></td>
				    </tr>
				    <tr>
				      <th scope="row">Jenis Kelamin</th>
				      <td><?php echo $jk; ?></td>
				    </tr>
				  </tbody>
				</table>
		        <!-- tutup tabel -->
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
	<?php } ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>