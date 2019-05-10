<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Restoran</title>
    <!-- Bootstrap CSS -->
    <link type="text/css" href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url('css/mystylesheet.css'); ?>" rel="stylesheet">
    <!-- jQuery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="<?php echo site_url("Welcome/index3") ?>">
                <h3>Daftar Menu</h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="daftarpesanan.html">
                <h3>Daftar Pesanan</h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="struk.html">
                <h3>Rincian Pemesanan (Bill)</h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="about.html">
                <h3>About Us</h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">
                <h3>Logout</h3>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-12 mt-5">
          <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Telur</td>
              <td>Telur yang dikulub</td>
              <td>5000</td>
              <td><a href="#">Pesan!</a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Telur Mata Sapi</td>
              <td>Telur yang digoreng</td>
              <td>6000</td>
              <td><a href="#">Pesan!</a></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Telur Dadar</td>
              <td>Telur yang dikocok</td>
              <td>4000</td>
              <td><a href="#">Pesan!</a></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
