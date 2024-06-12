<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Print received data for debugging
    echo '<pre>';
    print_r($_POST);
    print_r($_FILES);
    echo '</pre>';

    $title = isset($_POST['title']) ? mysqli_real_escape_string($dbc, $_POST['title']) : '';
    $about = isset($_POST['about']) ? mysqli_real_escape_string($dbc, $_POST['about']) : '';
    $content = isset($_POST['content']) ? mysqli_real_escape_string($dbc, $_POST['content']) : '';
    $category = isset($_POST['category']) ? mysqli_real_escape_string($dbc, $_POST['category']) : '';
    $archive = isset($_POST['archive']) ? 1 : 0;
    $date = date('Y-m-d');

    $picture = $_FILES['pphoto']['name'];
    $target_dir = 'img/' . $picture;

    if (move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir)) {
        $stmt = $dbc->prepare("INSERT INTO jutarnji (datum, naslov, sazetak, tekst, slika, kategorija, arhiva) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssi", $date, $title, $about, $content, $picture, $category, $archive);

        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$dbc->close();
?>
