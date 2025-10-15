<?php
include("connect.php");

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $coach = $_POST['coach'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $type = $_POST['type'];
    $intensity = $_POST['intensity'];
    $complexity = $_POST['complexity'];
    $duration = $_POST['duration'];
    $description = $_POST['description'];

    $sql1 = "update classes set name = '$name', coach = '$coach', type = '$type', date = '$date', time='$time', intensity='$intensity', complexity='$complexity', duration='$duration', description='$description' where id = '$id'";
    $q2 = mysqli_query($koneksi, $sql1);
    if ($q2) {
        header("Location: class.php?type=$type&successEdit=true");
    } else {
        echo "Failed to update data" . mysqli_error($koneksi);
    }
}