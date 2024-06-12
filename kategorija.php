<?php 
include 'connect.php'; 
define('UPLPATH', 'img/'); 
if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Antonija Glasnović">
    <meta name="keywords" content="news">
    <meta name="description" content="news">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/59f64714b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
        <div class="logo">
            <img src="mopo.png" alt="MOPO Logo">
        </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="unos.html">Forma</a></li>
          <li class="nav-item"><a class="nav-link" href="kategorija.php?kategorija=celebrities">Celebrities</a></li>
          <li class="nav-item"><a class="nav-link" href="kategorija.php?kategorija=makeup">Make Up</a></li>
          <li class="nav-item"><a class="nav-link" href="administrator.php">Administracija</a></li>
          <li class="nav-item"><a class="nav-link" href="registracija.php">Registracija</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <main class="container main">
        <section class="celebrities">
            <h2>Celebrities</h2>
            <hr>
            <div class="row">
            <?php 
                if (isset($_GET['kategorija'])) {
                    $kategorija = mysqli_real_escape_string($dbc, $_GET['kategorija']);
                    
                    $query = "SELECT * FROM jutarnji WHERE kategorija='$kategorija'";
                    $result = mysqli_query($dbc, $query); 
                    if (!$result) {
                        die("Query failed: " . mysqli_error($dbc));
                    }
                    
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) { 
                            echo '<article class="col-lg-4 col-sm-4">'; 
                            echo '<div class="article">'; 
                            echo '<div class="celebrities_img">'; 
                            echo '<img src="' . UPLPATH . $row['slika'] . '" alt="' . $row['naslov'] . '">'; 
                            echo '</div>'; 
                            echo '<div class="media_body">'; 
                            echo '<h4 class="title">'; 
                            echo '<a href="clanak.php?id=' . $row['id'] . '">'; 
                            echo $row['naslov']; 
                            echo '</a></h4>'; 
                            echo '</div></div>'; 
                            echo '</article>'; 
                        }
                    } else {
                        echo "Nema vijesti u kategoriji " . htmlspecialchars($kategorija) . ".";
                    }
                } else {
                    echo "Kategorija nije odabrana.";
                }
            ?>
            </div>
        </section>
    </main>
            </div>
        </section>
    </main>
    <footer class="footer">
    <p>Copyright 2024 Antonija Glasnović</p>
</footer>

</body>
</html>
