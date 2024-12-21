<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">	
</head>
<body>
<div class="container">	
	<h1>Data Mahasiswa</h1>
	<a href="input.php" class="btn btn-primary">Tambah Data</a>
	<br> <br>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<td width="5%">No</td>
				<td>NIM</td>
				<td>Nama</td>
				<td>Program Studi</td>				
				<td width="15%">Aksi</td>
			</tr>
		</thead>
		<tbody>
		<?php 
		include 'aksi.php';
		$db = new aksi();
		$no=1;
		foreach($db->tampilkan() as $row){		
			echo "
			<tr>
				<td>$no</td>
				<td>$row[nim]</td>
				<td>$row[nama]</td>
				<td>$row[prodi]</td>				
				<td>
					<a href='hapus.php?nim=$row[nim]' class='btn btn-danger btn-sm'>hapus</a>
					<a href='form_ubah.php?nim=$row[nim]' class='btn btn-info btn-sm'>ubah</a>
				</td>
			</tr>
			";
			$no++;
		}
		?>
		</tbody>
	</table>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>