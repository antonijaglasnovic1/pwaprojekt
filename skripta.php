<?php 
    $category = $title = $image = $about = $content = '';

    if (isset($_POST['category'])) {
        $category = ($_POST['category']);
    }
    if (isset($_POST['title'])) {
        $title = ($_POST['title']);
    }
    if (isset($_POST['photo'])) {
        $image = ($_POST['photo']);
    }
    if (isset($_POST['about'])) {
        $about = ($_POST['about']);
    }
    if (isset($_POST['content'])) {
        $content = ($_POST['content']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Antonija Glasnović">
    <meta name="keywords" content="news">
    <meta name="description" content="news">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/59f64714b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Članak</title>
</head>



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
          <li class="nav-item"><a class="nav-link" href="prijava.php">Prijava</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container tijelo_clanka">
        <div class="row"> 
        <!--    <p class="category"> <?php echo $category; ?></p> -->
                 <h1 class="title"><?php echo $title; ?></h1> 
        </div> 
        <div class="row"> 
            <section class="datum"> <?php echo date('d.m.Y')?></section>
        </div>
            <section class="slika"> <?php echo "<img src='img/$image'"; ?> </section> 
          <!--  <section class="about"> <p> <?php echo $about; ?> </p> </section> -->
            <section class="sadrzaj"> <p> <?php echo $content; ?> </p>        
    </main>
    
    <footer class="footer">
    <p>Copyright 2024 Antonija Glasnović</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
