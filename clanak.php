<?php 
    include 'connect.php'; 
    define('UPLPATH', 'img/'); 
    if (!$dbc) {
        die("Povezivanje nije uspjelo: " . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($dbc, $_GET['id']);
    } else {
        die("Članak nije specificiran.");
    }
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Antonija Glasnović">
    <meta name="keywords" content="vijesti">
    <meta name="description" content="vijesti">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/59f64714b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Članak</title>
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
                <li class="nav-item"><a class="nav-link" href="kategorija.php?id=celebrities">Celebrities</a></li>
                <li class="nav-item"><a class="nav-link" href="kategorija.php?id=makeup">Make Up</a></li>
                <li class="nav-item"><a class="nav-link" href="administrator.php">Administracija</a></li>
                <li class="nav-item"><a class="nav-link" href="registracija.php">Registracija</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="container main">
    <section role="main"> 
        <?php 
            $query = "SELECT * FROM jutarnji WHERE id='$id'";
            $result = mysqli_query($dbc, $query); 

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo '<div class="row">';
                echo '<div class="col-12">';
                echo '<div class="naslov"><h1>' . $row['naslov'] . '</h1></div>'; 
                echo '<p class="datum"><i class="far fa-clock"></i> ' . $row['datum'] . '</p>'; 
                echo '<div class="slika"><img src="' . UPLPATH . $row['slika'] . '" class="img-fluid"></div>'; 
                echo '<div class="about"><p><i>' . $row['sazetak'] . '</i></p></div>'; 
                echo '<div class="sadrzaj"><p>' . $row['tekst'] . '</p></div>'; 
                echo '</div>';
                echo '</div>';
            } else {
                echo "Članak nije pronađen.";
            }
        ?>
    </section>
</main>

<footer class="footer">
    <p>Copyright 2024 Antonija Glasnović</p>
</footer>
</body>
</html>
