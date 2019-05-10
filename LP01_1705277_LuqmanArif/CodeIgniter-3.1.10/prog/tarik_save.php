<?php
  //menangkap semua nilai var dari post
  //print_r($_POST);

  //buka koneksi
  include_once "koneksi.php";
  include_once "nasabah_class.php";

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
  $pesan_error  ="";
  $pesan_sukses ="";


  //ambil var dari form
  $norek  = $_POST["norek"];
  $tgl    = $_POST["tgl"];
  $jumlah = $_POST["jumlah"];

  //mencari id nasabah berdasarkan norek
  $nasabah = new nasabah();
  $data_nasabah    = $nasabah->getByNorek($norek);

  //cek  data nasabah
  if ($data_nasabah) {
      //jika norek ditemukan maka catat id nasabah

  } else {
     //nasabah tidak ada
     $pesan_error="No.Rekening salah!";
  }

  //tampilkan pesan sukses
  if (!empty($pesan_sukses)) {
    echo "<span style='color:green'>"  . $pesan_sukses . "</span><br/>";
  }

  //tampilkan pesan error
  if (!empty($pesan_error)) {
    echo "<span style='color:red'>"  . $pesan_error . "</span><br/>";
  }

  echo "<a href='tarik.php'>Tarik</a> &nbsp;";
  echo "<a href='index.php'>Home</a>";
 ?>
