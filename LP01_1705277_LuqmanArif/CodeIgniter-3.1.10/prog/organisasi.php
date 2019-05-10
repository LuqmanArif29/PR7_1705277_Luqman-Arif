<?php include_once "header.php" ?>
<div class="container">


    <h1>Riwayat Organisasi</h1>
	<div class="form-popup" id="myForm">
    <form action="organisasi_save.php" method="post">
	<div class="form-group">
      <label for="exampleInputEmail1">Id Data:</label>
      <input type="text" name="id_data" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="norek" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Organisasi:</label>
      <input type="text" name="nama_organisasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="norek" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Jabatan :</label>
      <input type="text" name="jabatan" class="form-control" id="">
    </div>
	 <div class="form-group">
      <label for="exampleInputPassword1">Tahun Organisasi:</label>
      <input type="date" name="tahun" class="form-control" id="">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
  
  
	</div>


  </div>
<?php include_once "footer.php" ?>
