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

	<form action="input_aksi.php" method="POST" enctype="multipart/form-data">
	  <div class="row mb-3">
	    <label class="col-sm-2 col-form-label">NIM *</label>
	    <div class="col-sm-4">
	      <input type="text" required class="form-control" name="nim" placeholder="NIM">
	    </div>
	  </div>
	  <div class="row mb-3">
	    <label class="col-sm-2 col-form-label">Nama</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="nama" placeholder="Nama">
	    </div>
	  </div>
	  <div class="row mb-3">
	    <label class="col-sm-2 col-form-label">Program Studi</label>
	    <div class="col-sm-4">
	      <select class="form-control" name="prodi">
	      	<option value="">- pilih -</option>
	      	<option>Sistem Informasi</option>
	      	<option>Teknologi Informasi</option>
	      	<option>Informatika</option>
	      	<option>Ilmu Komunikasi</option>
	      	<option>Ilmu Pemerintahan</option>
	      </select>
	    </div>	    
	  </div>	  
	  <div class="row mb-3">
	  	<div class="col-sm-2"></div>
	  	<div class="col-sm-10">
	  		<button type="submit" class="btn btn-primary">Simpan</button>
	  		<button type="reset" class="btn btn-warning">Batal</button>
	  	</div>
	  </div>	  
	</form>

</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>