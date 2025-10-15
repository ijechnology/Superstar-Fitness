<?php
include("connect.php");

if (isset($_POST['delete'])) {
    $id = $_POST['idProduct'];
    $sql = "delete from memberships where id = $id";
    $q1 = mysqli_query($koneksi, $sql);

    if ($q1) {
        header("Location: memberships.php?successDelete=true");
    } else {
        echo "Failed to delete data" . mysqli_error($koneksi);
    }
}
