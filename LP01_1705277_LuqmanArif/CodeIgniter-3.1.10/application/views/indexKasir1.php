<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Kasir Restoran</title>
    <!-- Bootstrap CSS -->
    <link type="text/css" href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url('css/mystylesheet.css'); ?>" rel="stylesheet">
    <!-- jQuery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!-- jQuery -->
    <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="<?php echo site_url('Welcome/index'); ?>">
                <h3>Left Join</h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo site_url('Welcome/index1'); ?>">
                <h3>Right Join</h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo site_url('Welcome/index2'); ?>">
                <h3>Inner Join</h3>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
        <div class="row">
          <div class="col-12 mt-5">
            <table class="table table-bordered">
              <thead>
                <th>no</th>
                <th>Kode kursi</th>
                <th>Kode gerbong</th>
                <th>Kode kereta</th>
                <th>Nama</th>
              </thead>
              <tbody>
                <?php
                $no =1;
                foreach ($kursi as $value): ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $value->kd_kursi ?></td>
                    <td><?php echo $value->kd_gerbong ?></td>
                    <td><?php echo $value->kd_kereta ?></td>
                    <td><?php echo $value->nama ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
              <a href="<?php echo site_url("Welcome/v_Add") ?>">Tambah Data</a>
          </div>
        </div>
      </div>
  </body>
</html>
