<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS Sendiri -->

    <link rel="stylesheet" href="{{asset('/assets/css/CSS-sendiri.css')}}">

    <title>Cari Sablon</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">Cari Sablon</a>
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link btn tombol-penjual" href="#">Jadi Penjual</a>
          </div>
        </div>
    </div>
  </nav>

<!--Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
            <h1 class="display-4">Selamat Datang Di Cari Sablon</h1>
            <p class="lead">Penyedia berbagai jasa sablon yang terpercaya dan berkualitas</p>
      </div>
  </div>

<!-- Kolom Pencarian -->
<div class="container-fluid">
<form action="/" method="GET">
  <div class="row">
    <div class="col-lg-12 form-cari">
       <div class="form-row">
          <div class="form-group col-md-3">
            <label for="kategori"></label>
              <select id="kategori" class="form-control" input style="height:75px;">
                <option selected value="">Pilih kategori</option>
                <option>Basic</option>
                <option>Standard</option>
                <option>Premium</option>
              </select>
          </div>
          <div class="form-group col-md-3">
            <label for="lokasi"></label>
            <input type="text" class="form-control" id="lokasi" placeholder="Masukkan lokasi" input style="height:75px;">
          </div>
          <div class="form-group col-md-3">
            <label for="harga_minimal"></label>
            <input type="number" class="form-control" id="harga_minimal" placeholder="Masukkan harga minimal" input style="height:75px;">
          </div>
          <div class="form-group col-md-3">
            <label><br><br><br></label>
            <button type="submit" class="btn tombol-cari" input style="height:75px; width:320px;"> Cari </button>
          </div>
        </div>
      </div>
    </div>
  </form>
  </div>






  <!-- Footer -->
  <div class="row footer justify-content-center">
    <div class="col-8">
      <p><br><br></p>
      <p> Hubungi Cari Sablon</p>
      <p> carisablon@gmail.com</p>
      <p> 0812-1256-7444</p>
      <p> Jl. Batu Waras No.03, RT.61/RW.30,</p>
      <p> Batu Ampas, Kramatbanget, Kota Jakarta Timur,</p>
      <p> Daerah Khusus Ibukota Jakarta, Indonesia, 13520</p>
      <p><br></p>
    </div>

  </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
