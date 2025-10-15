<?php
include("dashboard/connect.php");

if (isset($_POST['add'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $package = $_POST['package'];

    $sql = "INSERT INTO memberships (firstname, lastname, email, phone, package, date) VALUES ('$firstname', '$lastname', '$email', '$phone', '$package', CURTIME())";
    $q1 = mysqli_query($koneksi, $sql);
    if ($q1) {
        header('Location: ' . $_SERVER['HTTP_REFERER']. "?successAdd=true");
    } else {
        echo "Failed to add data" . mysqli_error($koneksi);
    }
}


?>

