<?php
    session_start();

    include("connect.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from admin where username = '$username'";
    $q1 = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($q1) > 0) {
        $q2 = mysqli_fetch_array($q1);
        $_SESSION["login"] = true;
        header("location: index.php?successLogin=true");
    } else {
        header("location: login.php?successLogin=false");
    }
?>