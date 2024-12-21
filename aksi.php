<?php 
class Aksi{
  protected $mysqli;
  function __construct(){
    require_once "database.php";
    $conn = new database();    
    $this->mysqli = $conn->connect();        
  }
  function tampilkan(){        
    $data = $this->mysqli->query("SELECT * FROM tabel_mhs");
    while($amb = mysqli_fetch_array($data)){
      $hasil[] = $amb;
    }    
    return $hasil;
  }
  function simpan($nim,$nama,$prodi){    
    $result = $this->mysqli->query("INSERT INTO tabel_mhs values('$nim','$nama','$prodi')");		    
    if($result) return 1;
      else return 0;    
  }
  function update($nim,$nama,$prodi){    
    $result = $this->mysqli->query("UPDATE tabel_mhs SET nim = '$nim', nama = '$nama', prodi = '$prodi' WHERE nim = '$nim'");		    
    if($result) return 1;
      else return 0;    
  }
  function detail($nim){    
    $result = $this->mysqli->query("SELECT * FROM tabel_mhs WHERE nim = '$nim'");		
    $data   = $result->fetch_assoc();        
    return $data;
  }
  function hapus($nim){    
    $this->mysqli->query("DELETE FROM tabel_mhs WHERE nim = '$nim'");		    
	}
}
?>