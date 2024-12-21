<?php 
class Database{
  var $server = "localhost";
  var $user = "root";
  var $pwd = "";
  var $db = "dbi_mahasiswa";

  function connect(){
    $mysqli = new mysqli($this->server, $this->user, $this->pwd, $this->db);	
		if ($mysqli->connect_error){
			echo "Gagal terkoneksi ke database : (".$mysqli->connect_error.")";
		}  		
		return $mysqli;
  }  
}
?>