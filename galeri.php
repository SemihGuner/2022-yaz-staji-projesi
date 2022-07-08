<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Semih Güner Official Website</title>
    <style>
        body{
            background-color: rgb(234, 226, 216);
            height:100vh;
        }
    </style>
  </head>
  <body class="justify-content-center align-items-center">
    <!-- Navbar Başlar-->
    <header class="mx-auto">
        <div class="container-fluid pl-0 pr-0"> 
            <div class="row">
                <div class="col-8 offset-2">
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                        <a class="navbar-brand font-weight-bold" style="font-family: 'Source Sans Pro', sans-serif; font-size: 30px;" href="index.html">
                            <img src="/fotolar/semihguner.png" width="40" height="40" class="d-inline-block align-top" alt="">
                            SEMİH GÜNER
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item active font-weight-bold" style="font-family: 'Sarala', sans-serif; font-size: 25px;">
                              <a class="nav-link" href="hakkimda.html">Hakkımda</a>
                            </li>
                            <li class="nav-item active font-weight-bold" style="font-family: 'Sarala', sans-serif; font-size: 25px;">
                              <a class="nav-link" href="galeri.php">Galeri</a>
                            </li>
                          </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>     
    <!-- Navbar Biter-->
    <main>
      <h1 style="text-align:center;" class="mt-4">Galeri</h1>
      <br> 
      <div id="GaleriCarouseli" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#GaleriCarouseli" data-slide-to="0" class="active"></li>
        <li data-target="#GaleriCarouseli" data-slide-to="1"></li>
        <li data-target="#GaleriCarouseli" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="fotoBasar.php?id=1" class="d-block w-100" alt="IMG 1">
        </div>
        <div class="carousel-item">
          <img src="fotoBasar.php?id=2" class="d-block w-100" alt="IMG 2">
        </div>
        <div class="carousel-item">
          <img src="fotoBasar.php?id=3" class="d-block w-100" alt="IMG 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#GaleriCarouseli" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Önceki</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#GaleriCarouseli" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Sonraki</span>
      </button>
      </div>
    </main>
    <!-- galeri end! -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>