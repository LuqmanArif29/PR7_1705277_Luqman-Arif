<?php include_once "header.php" ?>
<div class="container">

<h1>Nasabah</h1>
<?php
      //buka koneksi
      include_once "koneksi.php";

       //membuat query
      $query = "select * from datapendidikan order by id_data";

      //eksekusi $query
      $result = mysqli_query($connection, $query);

      //nomor urut

      //Total
?>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Tahun</th>
            <th scope="col">Nama Sekolah</th>
			
          </tr>
        </thead>
        <tbody>
<?php


      //judul


      //bagian loop
      while ($data = mysqli_fetch_object($result))
      {
        //bagian yang berulang
?>
        <tr>
          <td><?php echo $data->id_data ?></td>
          <td><?php echo $data->tahun_tk ?></td>
          <td><?php echo $data->tk ?></td>
        </tr>
<?php


        //next loop

      }
?>
<tr>
 
</tr>
</tbody>
</table>
</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="prod.js"></script>
<?php include_once "footer.php" ?>
