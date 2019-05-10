<?php include_once "header.php" ?>
<div class="container">


    <h1>Biodata</h1>
	<div class="form-popup" id="myForm">
    <form action="setor_save.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Nama :</label>
      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="norek" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Tempat lahir :</label>
      <input type="text" name="tempat" class="form-control" id="">
    </div>
	 <div class="form-group">
      <label for="exampleInputPassword1">Tanggal lahir:</label>
      <input type="date" name="ttl" class="form-control" id="">
    </div>
	<div class="form-group">
      <label for="exampleInputPassword1">Umur :</label>
      <input type="text" name="umur" class="form-control" id="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Agama :</label>
      <input type="text" name="agama" class="form-control" id="">
    </div>
	<div class="form-group">
	 <label for="exampleInputPassword1">Jenis Kelamin :</label><br/>
	   <select name="jenis_kelamin">
		  <option value="L">L</option>
		  <option value="P">P</option>
	   </select>
    </div>
	<div class="form-group">
      <label for="exampleInputPassword1">Email :</label>
      <input type="text" name="email" class="form-control" id="">
    </div>
	<div class="form-group">
      <label for="exampleInputPassword1">No Handphone :</label>
      <input type="text" name="no_hp" class="form-control" id="">
    </div>
	<div class="form-group">
      <label for="exampleInputPassword1">Alamat :</label>
      <input type="text" name="alamat" class="form-control" id="">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
  
  
	</div>


  </div>
<?php include_once "footer.php" ?>
