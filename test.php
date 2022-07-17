<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Semih Güner Official Website</title>
  </head>
  <body style="text-align:center ;">
    <?php
        echo "<h1>This is semihguner.com index page! Woooo!!!</h1>";
        echo "<h2>Hello PHP World!</h2>";
        echo date("Y-m-d H:i:s");
        $hostName = "mariadb";
        $userName = "root";
        $password = "root";
        $databaseName = "esyalar";
        $conn = new mysqli($hostName, $userName, $password, $databaseName); 
        if ($conn->connect_error) {
          die("Bağlantı Hatası: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM mobilya";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='3'><tr><th>ID</th><th>Eşya Adı</th><th>Üretim Yılı</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["urunAdi"]."</td><td>".$row["uretimYili"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>
  </body>
</html>