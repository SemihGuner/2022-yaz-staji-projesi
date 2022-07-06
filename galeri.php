<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Semih Güner</title>
    <style>
        .navbarrengi
        {
            background-color: #3462cf;
        }
        .w-100 
        {
        width: 100% !important;
        height: 600px;
        }
    </style>
  </head>
  <body>
    <!-- status check starts -->
    <aside>
      <div class="container-fluid pb-0 mb-0">
        <div class="row">
          <div class="col mr-0 ml-0 mt-5 pt-0">
            <?php
              $servername = "mariadb";
              $username = "semih";
              $password = "semih";
              $database = "galeridb";
              $mysqli = new mysqli($servername,$username,$password,$database,3306);
              if ($mysqli -> connect_errno) 
              { 
                echo "<div class=\"mt-2 float-right\">";
                echo "<img src=\"./fotolar/kizilampul.png\" alt=\"kırmızı yanan ampül png'si\" width=\"30px\">";
                echo "<h2 style=\"display:inline; color:red; font-size:20px;\">Hata! MySQL bağlantısı yapılamadı: ($mysqli -> connect_error)</h2>";
                echo "</div>";
                exit();
              } 
              else
              {
                echo "<div class=\"mt-2 float-right\">";
                echo "<img src=\"./fotolar/ampul.png\" alt=\"yanan ampül png'si\" width=\"30px\">";
                echo "<h2 style=\"display:inline; color:green; font-size:20px;\">MariaDB bağlandı.</h2>";
                echo "</div>";
              }
            ?>
          </div>
        </div>
      </div>
    </aside> 
    <!-- status check ends -->
    <!-- header starts-->
    <header>
      <div class="container">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark navbarrengi fixed-top">
              <a class="navbar-brand pr-5 font-weight-bold" href="index.html">semihguner.com</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <a class="nav-link active" href="index.html">Anasayfa<span class="sr-only">(current)</span></a>
                  </div>
                  <div class="navbar-nav">
                      <a class="nav-link active" href="hakkimda.html">Hakkımda<span class="sr-only">(current)</span></a>
                </div>
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Galeri<span class="sr-only">(current)</span></a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- header ends-->
    <!-- galeri start! -->
    <main>
      <h1 style="text-align:center;">Galeri</h1>
      <br> 
      <div id="GaleriCarouseli" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#GaleriCarouseli" data-slide-to="0" class="active"></li>
        <li data-target="#GaleriCarouseli" data-slide-to="1"></li>
        <li data-target="#GaleriCarouseli" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://picsum.photos/1920/600" class="d-block w-100" alt="IMG 1">
        </div>
        <div class="carousel-item">
          <img src="https://picsum.photos/1920/600" class="d-block w-100" alt="IMG 2">
        </div>
        <div class="carousel-item">
          <img src="https://picsum.photos/1920/600" class="d-block w-100" alt="IMG 3">
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

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>