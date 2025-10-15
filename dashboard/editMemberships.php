<?php
include("connect.php");

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $package = $_POST['package'];
    $date = $_POST['date'];

    $sql1 = "update memberships set firstname = '$firstname', lastname = '$lastname', email = '$email', phone='$phone', package='$package', date='$date' where id = '$id'";
    $q2 = mysqli_query($koneksi, $sql1);
    if ($q2) {
        header("Location: memberships.php?successEdit=true");
    } else {
        echo "Failed to update data" . mysqli_error($koneksi);
    }
}