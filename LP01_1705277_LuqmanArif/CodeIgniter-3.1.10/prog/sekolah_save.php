<?php
  //menangkap semua nilai var dari post
  // print_r($_POST);
  // exit();
  //
  //buka koneksi
  include_once "database.php";

  //jika requst bukan post
  if ($_SERVER['REQUEST_METHOD'] != 'POST') {
     //kembali ke index
     header("location: index.php");
     exit();
  }
  
  //jika batal
  if (isset($_POST['cancel'])) {
    //kembali ke index
    header("location: index.php");
    exit();
  }

  //siapkan pesan


  //ambil var dari form
  if (isset($_POST['simpan'])){
	  $id_data  = $_POST["id_data"];
	  $tahun_tk  = $_POST["tahun_tk"];
	  $tk  = $_POST["tk"];
	  $conn = new database();
	  
	  $hasil = $conn->tambah1($id_data, $tahun_tk, $tk);
	  if($hasil == 1){
		header('location: nasabah.php');  
	  }
	  else{
		$pesan_error = "Insert gagal!<br/>" . ($hasil);  
	  }
	  
  }
 

  //jika valid maka proses jalankan selanjutnya

    

 



  //tampilkan pesan sukses
  if (!empty($pesan_sukses)) {
    //echo "<span style='color:green'>"  . $pesan_sukses . "</span><br/>";
	echo "<script> document.location.href='nasabah.php' </script>";
  }

  //tampilkan pesan error
  if (!empty($pesan_error)) {
    echo "<span style='color:red'>"  . $pesan_error . "</span><br/>";
  }

  //echo "<br/>";
  //echo "<a href='setor.php'>Setor</a> &nbsp;";
  //echo "<a href='index.php'>Home</a>";
 ?>
