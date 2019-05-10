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
  if (isset($_POST['submit'])){
	  $nama  = $_POST["nama"];
	  $tempat  = $_POST["tempat"];
	  $ttl    = $_POST["ttl"];
	  $umur    = $_POST["umur"];
	  $agama = $_POST["agama"];
	  $jenis_kelamin = $_POST["jenis_kelamin"];
	  $email = $_POST["email"];
	  $no_hp = $_POST["no_hp"];
	  $alamat = $_POST["alamat"];
	  $conn = new database();
	  $conn->tambah($nama, $tempat, $ttl, $umur, $agama, $jenis_kelamin, $email, $no_hp, $alamat);
	  header('location: nasabah.php');
  }
  else{
     //jika insert gagal maka buat pesan
     $pesan_error = "Insert gagal!<br/>" .  mysqli_error($connection);
  }
   
   
  //tampilkan pesan sukses
  if (!empty($pesan_sukses)) {
    //echo "<span style='color:green'>"  . $pesan_sukses . "</span><br/>";
	
  }

  //tampilkan pesan error
  if (!empty($pesan_error)) {
    echo "<span style='color:red'>"  . $pesan_error . "</span><br/>";
  }

  //echo "<br/>";
  //echo "<a href='setor.php'>Setor</a> &nbsp;";
  //echo "<a href='index.php'>Home</a>";
 ?>
