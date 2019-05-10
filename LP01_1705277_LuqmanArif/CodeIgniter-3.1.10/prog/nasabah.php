<?php include_once "header.php" 
?>
<div class="container">

<h1>Biodata</h1>
<?php
      //buka koneksi
      include_once "database.php";
	  $db = new database();
?>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Umur</th>
            <th scope="col">agama</th>
			<th scope="col">jenis kelamin</th>
			<th scope="col">email</th>
			<th scope="col">no handphone</th>
			<th scope="col">alamat</th>
			<th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
<?php


      //judul


      //bagian loop
    $no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['tempat']; ?></td>
		<td><?php echo $x['ttl']; ?></td>
		<td><?php echo $x['umur']; ?></td>
		<td><?php echo $x['agama']; ?></td>
		<td><?php echo $x['jenis_kelamin']; ?></td>
		<td><?php echo $x['email']; ?></td>
		<td><?php echo $x['no_hp']; ?></td>
		<td><?php echo $x['alamat']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id_data']; ?>&aksi=edit">Edit</a>
			<a href="hapus.php?id=<?php echo $x['id_data']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
<?php


        //next loop

      }
?>



<tr>
 
</tr>
</tbody>
</table>
<br/>
		<a style="margin-left:1020px;" href="setor.php"><button class="btn btn-primary">Tambah Data</button></a>
</div>
<br/>
<br/>
<div class="container">

<h1>Riwayat Pendidikan</h1>
<?php
      //buka koneksi
       include_once "database.php";
	  $db1 = new database();

?>
      <table class="table table-hover">
        <thead>
          <tr>
		  <th scope="col">No</th>
            <th scope="col">Id</th>
            <th scope="col">Tahun</th>
            <th scope="col">Nama Sekolah</th>
			<th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
<?php


      //judul


      //bagian loop
       $no = 1;
	foreach($db1->tampil_data1() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['id_data']; ?></td>
		<td><?php echo $x['tahun_tk']; ?></td>
		<td><?php echo $x['tk']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="hapus.php?id=<?php echo $x['id_data']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
<?php


        //next loop

      }
?>
<tr>
	
</tr>
</tbody>
</table>
<br/>
<div style="display:inline; margin-left:1000px;">
<a href="sekolah.php"><button class="btn btn-primary">Tambah Data</button></a>
</div>
</div>

<div class="container">

<h1>Riwayat Organisasi</h1>
<?php
      //buka koneksi
      include_once "database.php";
	  $db2 = new database();
?>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Organisasi</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Tahun Organisasi</th>
			<th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
<?php


      //judul


      //bagian loop
    $no = 1;
	foreach($db2->tampil_data2() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama_organisasi']; ?></td>
		<td><?php echo $x['jabatan']; ?></td>
		<td><?php echo $x['tahun_organisasi']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="hapus_kerja.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
<?php


        //next loop

      }
?>



<tr>
 
</tr>
</tbody>
</table>
<br/>
		<a style="margin-left:1020px;" href="organisasi.php"><button class="btn btn-primary">Tambah Data</button></a>
</div>
<br/>
<br/>

<div class="container">

<h1>Riwayat Pekerjaan</h1>
<?php
      //buka koneksi
      include_once "database.php";
	  $db3 = new database();
?>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Tahun Kerja</th>
			<th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
<?php


      //judul


      //bagian loop
    $no = 1;
	foreach($db3->tampil_data3() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama_pekerjaan']; ?></td>
		<td><?php echo $x['tahun_kerja']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="hapus_kerja1.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
<?php


        //next loop

      }
?>



<tr>
 
</tr>
</tbody>
</table>
<br/>
		<a style="margin-left:1020px;" href="setor.php"><button class="btn btn-primary">Tambah Data</button></a>
	<a href="print.php"><button class="btn btn-primary">Print</button></a>
</div>
<br/>
<br/>


<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="prod.js"></script>
<?php include_once "footer.php" ?>
