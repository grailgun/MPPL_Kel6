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

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-profil">
          <a class="navbar-brand" href="/">Cari Sablon</a>
          <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
          </form>
      </div>
      </nav>
    </div>

    <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h3><span>Kami akan menerima segala desain dengan hasil yang memuaskan<span></h3>
        <div class="media">
          <img src="{{asset('assets/img/profile-photo-a.png')}}" class="mr-3 img-rounded" alt="foto-profil">
          <div class="media-body">
          <h5 class="nama-sablon">Sablon C</h5>
          </div>
        </div>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('assets/img/background.jpg')}}"; class="d-block w-100 carousel-fix" alt="produk-1">
            </div>
            <div class="carousel-item">
              <img src="{{asset('assets/img/background-2.jpg')}}" class="d-block w-100 carousel-fix" alt="produk-2">
            </div>
            <div class="carousel-item">
              <img src="{{asset('assets/img/background-3.jpg')}}" class="d-block w-100 carousel-fix" alt="produk-3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>



      <p class="tentang-penyablon">Tentang Penyablon</p>

      <div class="detail-tentang-penyablon">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor sit tellus phasellus amet, condimentum massa sagittis laoreet. In nec vitae interdum lectus. Etiam enim sed pharetra risus aenean aenean gravida nunc semper. Amet eget eget diam scelerisque.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor sit tellus phasellus amet, condimentum massa sagittis laoreet. In nec vitae interdum lectus. Etiam enim sed pharetra risus aenean aenean gravida nunc semper. Amet eget eget diam scelerisque.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor sit tellus phasellus amet, condimentum massa sagittis laoreet. In nec vitae interdum lectus. Etiam enim sed pharetra risus aenean aenean gravida nunc semper. Amet eget eget diam scelerisque.</p>
          </div>
        </div>


      <div class="col-lg-4">
        <div class="row">
          <div class="col border-dark bg-light">
            <h5 class="panel-jasa-sablon">Jasa/Produk Sablon Kami</h5>
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      [Nama Produk-1]
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <div class="row">
                     <div class="col">
                      <p><span>Harga mulai:</span></p>
                     </div>
                     <div class="col harga-profil">
                      <p class="ml"><span>IDR50.000</span></p>
                     </div>
                    </div>
                    [Deskripsi Produk-1] Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      [Nama Produk-2]
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                  <div class="row">
                     <div class="col">
                      <p><span>Harga mulai:</span></p>
                     </div>
                     <div class="col harga-profil">
                      <p class="ml"><span>IDR50.000</span></p>
                     </div>
                    </div>
                    [Deskripsi Produk-2] Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      [Nama Produk-3]
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                  <div class="row">
                     <div class="col">
                      <p><span>Harga mulai:</span></p>
                     </div>
                     <div class="col harga-profil">
                      <p class="ml"><span>IDR50.000</span></p>
                     </div>
                    </div>
                    [Deskripsi Produk-3] Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor
                  </div>
                </div>
              </div>
            </div>

            <a class="btn tombol-hubungi-penjual" href="https://www.whatsapp.com/?lang=en"> Hubungi Penyablon </a>

          </div>
        </div>
      </div>
    </div>
    </div>

 

    




  <!-- Footer -->
  <div class="row footer justify-content-center">
    <div class="col">
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