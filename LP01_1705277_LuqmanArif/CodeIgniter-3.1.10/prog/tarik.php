<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tarik</title>
  </head>
  <body>
    <h1>TARIK</h1>
    <form class="" action="tarik_save.php" method="post">
      Nomor Rekening :<input type="text" name="norek" value="" autofocus><br>
      Tanggal :<input type="date" name="tgl" value="<?php echo date("Y-m-d") ?>"><br>
      Jumlah :<input type="number" name="jumlah" value=""><br>
      <button type="submit" name="save">Simpan</button>
      <button type="submit" name="cancel">Batal</button>
    </form>
  </body>
</html>
