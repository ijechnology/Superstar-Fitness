<?php
include("connect.php");

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $coach = $_POST['coach'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $type = $_POST['type'];
    $intensity = $_POST['intensity'];
    $complexity = $_POST['complexity'];
    $duration = $_POST['duration'];
    $description = $_POST['description'];

    $sql = "INSERT INTO classes (name, coach, date, time, type, intensity, complexity, duration, description) VALUES ('$name', '$coach', '$date', '$time', '$type', '$intensity', '$complexity', '$duration', '$description')";
    $q1 = mysqli_query($koneksi, $sql);
    if ($q1) {
        header("Location: classes.php?successAdd=true");
    } else {
        echo "Failed to add data" . mysqli_error($koneksi);
    }
}


?>

