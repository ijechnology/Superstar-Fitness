<?php
include("connect.php");

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $banner = $_FILES['banner']['name'];
    $class = $_POST['class'];

    $directory = "../asset/image/banner/";
    $tmpFile = $_FILES['banner']['tmp_name'];

    move_uploaded_file($tmpFile, $directory.$banner);

    $sql = "INSERT INTO types (name, banner, class) VALUES ('$name', '$banner', '$class')";
    $q1 = mysqli_query($koneksi, $sql);
    if ($q1) {
        header("Location: types.php?successAdd=true");
    } else {
        echo "Failed to add data" . mysqli_error($koneksi);
    }
}


?>

