<?php 
include "aksi.php";
$db = new aksi();
$nim =$_GET['nim'];
$result = $db->hapus($nim);
echo "
<script>
	alert('Data berhasil dihapus');
	window.location.href='index.php';
</script>
";
?>