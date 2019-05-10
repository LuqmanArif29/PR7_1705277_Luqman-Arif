<?php include_once "header.php" ?>
<div class="container">


    <h1>SEKOLAH</h1>
	<div class="form-popup" id="myForm">
    <form action="sekolah_save.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Id_data :</label>
      <input type="text" name="id_data" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="norek" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Tahun Ajaran :</label>
      <input type="text" name="tahun_tk" class="form-control" id="">
    </div>
	 <div class="form-group">
      <label for="exampleInputPassword1">Nama Sekolah :</label>
      <input type="text" name="tk" class="form-control" id="">
    </div>
	
    <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
  </form>
	</div>


  </div>
<?php include_once "footer.php" ?>
