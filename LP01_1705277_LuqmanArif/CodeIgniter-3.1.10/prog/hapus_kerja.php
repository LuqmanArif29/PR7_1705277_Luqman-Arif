<?php
  //menangkap semua nilai var dari post
  // print_r($_POST);
  // exit();
  //
  //buka koneksi
  include_once "database.php";

	  $conn = new database();
	  $id_data = $_GET['id'];
	  $hasil = $conn->hapus2($id_data);
	  if($hasil == 1){
		header('location: nasabah.php');  
	  }
	  else{
		$pesan_error = "Insert gagal!<br/>" . ($hasil);  
	  }
	  

 
 ?>
