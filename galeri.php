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
        .navbarrengi{
            background-color: #3462cf;
        }
    </style>
  </head>
  <body>
    <!-- #A0AECD ve #000000 ana renkler -->
    <!-- header starts-->

    <header style="margin: 60px;">
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
              <div class="navbar-nav">
                  <a class="nav-link active" href="iletisim.html">İletişim<span class="sr-only">(current)</span></a>
             </div>
            </div>
        </nav>
    </header>
    <!-- header ends-->
    <!-- galeri start! -->
    <main>
      <?php
      echo "<h1>Hoşgeldiniz<br></h1>";
      $servername = "mariadb";
      $username = "semih";
      $password = "semih";
      $database = "testdb";
      $mysqli = new mysqli($servername,$username,$password,$database,3306);
      if ($mysqli -> connect_errno) 
      {
        echo "<h2>Failed to connect to MySQL: ($mysqli -> connect_error)</h2>";
        exit();
      } 
      else
      {
        echo "<h2>MariaDB bağlandı.</h2>";
      }

      $query = mysqli_query($mysqli, "SELECT * FROM books ") or die (mysqli_error($dbconnect));
      echo"<table border='1'>";
      echo"<tr>";
      echo"<td>ISBN</td>";
      echo"<td>Title</td>";
      echo"<td>Published Year</td>";
      echo"</tr>";
      while ($row = mysqli_fetch_array($query)){
        echo "<tr>"; 
        echo "<td>{$row['isbn']}</td>"; 
        echo "<td>{$row['title']}</td>";
        echo "<td>{$row['year_pub']}</td>"; 
        echo "</tr>"; }
      mysqli_close($mysqli);
      ?>
    </main>
    <!-- galeri end! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>