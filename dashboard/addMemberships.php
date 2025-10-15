<?php
include("connect.php");

if (isset($_POST['add'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $package = $_POST['package'];
    $date = $_POST['date'];

    $sql = "INSERT INTO memberships (firstname, lastname, email, phone, package, date) VALUES ('$firstname', '$lastname', '$email', '$phone', '$package', '$date')";
    $q1 = mysqli_query($koneksi, $sql);
    if ($q1) {
        header("Location: memberships.php?successAdd=true");
    } else {
        echo "Failed to add data" . mysqli_error($koneksi);
    }
}


?>

