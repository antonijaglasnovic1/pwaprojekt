<?php 
session_start();
include 'connect.php'; 
define('UPLPATH', 'img/'); 
$uspjesnaPrijava = false;
$admin = false;

if (isset($_SESSION['username']) && isset($_SESSION['level'])) {
    $uspjesnaPrijava = true;
    if ($_SESSION['level'] == 1) { 
        $admin = true; 
    } else { 
        $admin = false; 
    } 
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
    <title>Administracija</title>
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
          <li class="nav-item"><a class="nav-link" href="administrator.php" class="">Administracija</a></li>
          <li class="nav-item"><a class="nav-link" href="registracija.php">Registracija</a></li>
        <li class="nav-item"><a class="nav-link" href="prijava.php">Prijava</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <main class="container main">
    <?php 
    if (($uspjesnaPrijava && $admin) || (isset($_SESSION['username']) && $_SESSION['level'] == 1)) { 
        echo '<p>Bok ' . $_SESSION['username'] . '!.</p>';
        $query = "SELECT * FROM jutarnji"; 
        $result = mysqli_query($dbc, $query); 
        while($row = mysqli_fetch_array($result)) { 
            echo '<form enctype="multipart/form-data" action="" method="POST"> 
                    <div class="form-item"> 
                    <label for="title">Naslov vjesti:</label> 
                    <div class="form-field"> 
                    <input type="text" name="title" class="form-field-textual" value="'.$row['naslov'].'"> 
                    </div> 
                    </div> 
                    <div class="form-item"> 
                    <label for="about">Kratki sadržaj vijesti (do 50 znakova):</label> 
                    <div class="form-field"> 
                    <textarea name="about" id="" cols="30" rows="10" class="form-field-textual">'.$row['sazetak'].'</textarea> 
                    </div> 
                    </div> 
                    <div class="form-item"> 
                    <label for="content">Sadržaj vijesti:</label> 
                    <div class="form-field"> 
                    <textarea name="content" id="" cols="30" rows="10" class="form-field-textual">'.$row['tekst'].'</textarea> 
                    </div> 
                    </div> 
                    <div class="form-item"> 
                    <label for="pphoto">Slika:</label> 
                    <div class="form-field">
                    <input type="file" class="input-text" id="pphoto" value="'.$row['slika'].'" name="pphoto"/> <br>
                    <img src="' . UPLPATH . $row['slika'] . '" width=100px> 
                    </div> 
                    </div> 
                    <div class="form-item"> 
                    <label for="category">Kategorija vijesti:</label> 
                    <div class="form-field"> 
                    <select name="category" id="" class="form-field-textual" value="'.$row['kategorija'].'"> 
                    <option value="moda">Celebrities</option> 
                    <option value="parfemi">MakeUp</option> 
                    </select> 
                    </div> 
                    </div> 
                    <div class="form-item"> 
                    <label>Spremiti u arhivu: 
                    <div class="form-field">'; if($row['arhiva'] == 0) { 
                        echo '<input type="checkbox" name="archive" id="archive"/> Arhiviraj?'; 
                    } else { 
                        echo '<input type="checkbox" name="archive" id="archive" checked/> Arhiviraj?'; 
                    } 
                    echo '</div> </label> </div> </div> 
                    <div class="form-item"> 
                    <input type="hidden" name="id" class="form-field-textual" value="'.$row['id'].'"> 
                    <button type="reset" value="Poništi" class="ponisti">Poništi</button> 
                    <button type="submit" name="update" value="Prihvati" class="slanje"> Izmjeni</button> 
                    <button type="submit" name="delete" value="Izbriši" class="ponisti"> Izbriši</button> 
                    </div> 
                    </form>'; 
        }
        if(isset($_POST['delete'])){ 
            $id=$_POST['id']; 
            $query = "DELETE FROM jutarnji WHERE id=$id "; 
            $result = mysqli_query($dbc, $query); 
        }
        if(isset($_POST['update'])){ 
            $picture = $_FILES['pphoto']['name']; 
            $title=$_POST['title']; 
            $about=$_POST['about']; 
            $content=$_POST['content']; 
            $category=$_POST['category']; 
            if(isset($_POST['archive'])){ 
                $archive=1; 
            } else { 
                $archive=0; 
            } 
            $target_dir = 'img/'.$picture; 
            move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir); 
            $id=$_POST['id']; 
            $query = "UPDATE jutarnji SET naslov='$title', sazetak='$about', tekst='$content', slika='$picture', kategorija='$category', arhiva='$archive' WHERE id=$id "; 
            $result = mysqli_query($dbc, $query); 
        }
    } else if ($uspjesnaPrijava && !$admin) { 
        echo '<p>Bok ' . $_SESSION['username'] . '! Uspješno ste prijavljeni, ali niste administrator.</p>'; 
    } else if (isset($_SESSION['username']) && $_SESSION['level'] == 0) {
        echo '<p>Bok ' . $_SESSION['username'] . '! Uspješno ste prijavljeni, ali niste administrator.</p>';
    } else { 
        echo '<p>Niste prijavljeni, molim vas <a href="prijava.php">slijedite LINK</a>.</p>';
    }
    ?>
    </main>
    <footer class="footer">
    <p>Copyright 2024 Antonija Glasnović</p>
</footer>
</body>
</html>
