<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">	
</head>
<body>
<div class="container">	
	<h1>Data Mahasiswa</h1>
	<a href="index.php" class="btn btn-warning">Lihat Data</a>
	<br> <br>
	<?php 
	include 'aksi.php';
	$db = new aksi();
	$nim = $_GET['nim'];	
	$row = $db->detail($nim);
	?>
	<form action="ubah_aksi.php" method="POST" enctype="multipart/form-data">
	  <div class="row mb-3">
	    <label class="col-sm-2 col-form-label">NIM *</label>
	    <div class="col-sm-4">
	      <input type="text" required readonly class="form-control" value="<?php echo $row['nim'] ?>" name="nim" placeholder="NIM">
	    </div>
	  </div>
	  <div class="row mb-3">
	    <label class="col-sm-2 col-form-label">Nama</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" value="<?php echo $row['nama'] ?>" name="nama" placeholder="Nama">
	    </div>
	  </div>
	  <div class="row mb-3">
	    <label class="col-sm-2 col-form-label">Program Studi</label>
	    <div class="col-sm-4">
	      <select class="form-control" name="prodi">
	      	<option <?php if($row['prodi']=="") echo 'selected' ?> value="">- pilih -</option>
	      	<option <?php if($row['prodi']=="Sistem Informasi") echo 'selected' ?>>Sistem Informasi</option>
	      	<option <?php if($row['prodi']=="Teknologi Informasi") echo 'selected' ?>>Teknologi Informasi</option>
	      	<option <?php if($row['prodi']=="Informatika") echo 'selected' ?>>Informatika</option>
	      	<option <?php if($row['prodi']=="Ilmu Komunikasi") echo 'selected' ?>>Ilmu Komunikasi</option>
	      	<option <?php if($row['prodi']=="Ilmu Pemerintahan") echo 'selected' ?>>Ilmu Pemerintahan</option>
	      </select>
	    </div>
	  </div>	  
	  <div class="row mb-3">
	  	<div class="col-sm-2"></div>
	  	<div class="col-sm-10">
	  		<button type="submit" class="btn btn-primary">Update</button>
	  		<button type="reset" class="btn btn-warning">Batal</button>
	  	</div>
	  </div>	  
	</form>


</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>