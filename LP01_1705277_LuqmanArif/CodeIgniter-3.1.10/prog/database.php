<?php
  //buat koneksi
  class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "db_cv";
	var $conn;
	var $error;
	private $data;
 
	function __construct(){
		$this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database" . $this->connect->connect_error();
				return false;
			}
	}
 
	function tampil_data(){
		$data =  $this->conn->prepare("SELECT * FROM `datapegawai` ORDER BY `id_data`") or die($this->conn->error);
			if($data->execute()){
				$result = $data->get_result();
				return $result;
			}
	}
	
	function tampil_data1(){
		$data =  $this->conn->prepare("SELECT * FROM `datapendidikan` ORDER BY `id_pendidikan`") or die($this->conn->error);
			if($data->execute()){
				$result = $data->get_result();
				return $result;
			}
	}
	
	function tampil_data2(){
		$data =  $this->conn->prepare("SELECT * FROM `dataorganisasi` ORDER BY `id`") or die($this->conn->error);
			if($data->execute()){
				$result = $data->get_result();
				return $result;
			}
	}
	function tampil_data3(){
		$data =  $this->conn->prepare("SELECT * FROM `datakerja` ORDER BY `id`") or die($this->conn->error);
			if($data->execute()){
				$result = $data->get_result();
				return $result;
			}
	}
	
	
	function tambah($nama, $tempat,$ttl,$umur,$agama,$jenis_kelamin,$email,$no_hp,$alamat){
			extract($nama, $tempat,$ttl,$umur,$agama,$jenis_kelamin,$email,$no_hp,$alamat);
		$data = $this->conn->query("insert into datapegawai (nama, tempat, ttl, umur, agama,jenis_kelamin,email,no_hp,alamat)
        values ('$nama', '$tempat','$ttl','$umur', '$agama', '$jenis_kelamin', '$email', '$no_hp', '$alamat')");
			if(!$this->conn->error){
					return 1;
			}
			else{
					return $this->conn->error;
			}
	}
	
	function tambah1($id_data, $tahun_tk, $tk){
		$data = $this->conn->query("insert into datapendidikan (id_data, tahun_tk, tk)
        values ('$id_data', '$tahun_tk', '$tk')");
			if(!$this->conn->error){
					return 1;
			}
			else{
					return $this->conn->error;
			}
	}
	
	function tambah2($id_data,$nama_organisasi, $jabatan, $tahun_organisasi){
		$data = $this->conn->query("insert into dataorganisasi (id_data, nama_organisasi, jabatan, tahun_organisasi)
        values ('$id_data', '$nama_organisasi', '$jabatan', '$tahun_organisasi')");
			if(!$this->conn->error){
					return 1;
			}
			else{
					return $this->conn->error;
			}
	}
	
	function hapus($id_data){
	
		$data = $this->conn->query("delete from datapegawai where id_data=$id_data") or die($this->conn->error);
			if(!$this->conn->error){
					return 1;
			}
			else{
					return $this->conn->error;
			}
	}
	
	function hapus1($id_data){
	
		$data = $this->conn->query("delete from datapendidikan where id_data=$id_data") or die($this->conn->error);
			if(!$this->conn->error){
					return 1;
			}
			else{
					return $this->conn->error;
			}
	}
	
	
	function hapus2($id_data){
	
		$data = $this->conn->query("delete from dataorganisasi where id=$id_data") or die($this->conn->error);
			if(!$this->conn->error){
					return 1;
			}
			else{
					return $this->conn->error;
			}
	}
	
	function hapus3($id_data){
		$data = $this->conn->query("delete from datakerja where id=$id_data") or die($this->conn->error);
			if(!$this->conn->error){
					return 1;
			}
			else{
					return $this->conn->error;
			}
	}

 
} 
?>
