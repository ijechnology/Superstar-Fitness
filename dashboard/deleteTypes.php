<?php
include("connect.php");

if (isset($_POST['delete'])) {
    $id = $_POST['idProduct'];

    $sql = "select * from types where id = $id";
    $q1 = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($q1);

    unlink("../asset/image/banner/".$data['banner']);

    $sql1 = "delete from types where id = $id";
    $q2 = mysqli_query($koneksi, $sql1);

    if ($q1) {
        header("Location: types.php?successDelete=true");
    } else {
        echo "Failed to delete data" . mysqli_error($koneksi);
    }
}
