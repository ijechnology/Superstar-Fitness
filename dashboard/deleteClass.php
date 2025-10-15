<?php
include("connect.php");

if (isset($_POST['delete'])) {
    $id = $_POST['idProduct'];

    $sql1 = "SELECT type FROM classes WHERE id = $id";
    $q = mysqli_query($koneksi, $sql1);
    if ($q && mysqli_num_rows($q) > 0) {
        $row = mysqli_fetch_array($q);
        $type = $row['type'];

        $sql = "delete from classes where id = $id";
        $q1 = mysqli_query($koneksi, $sql);

        if ($q1) {
            header("Location: class.php?type=$type&successDelete=true");
        } else {
            echo "Failed to delete data" . mysqli_error($koneksi);
        }
    }
}
