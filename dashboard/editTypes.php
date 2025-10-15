<?php
include("connect.php");

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];

    $sql = "select * from types where id = $id";
    $q1 = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($q1);

    if($_FILES['banner']['name'] == ""){
        $banner = $data['banner'];
    } else {
        $banner = $_FILES['banner']['name'];
        unlink("../asset/image/banner/".$data['banner']);
        move_uploaded_file($_FILES['banner']['tmp_name'], '../asset/image/banner/'.$_FILES['banner']['name']);
    }

    $sql1 = "update types set name = '$name', banner = '$banner', class = '$class' where id = '$id'";
    $q2 = mysqli_query($koneksi, $sql1);
    if ($q2) {
        header("Location: types.php?successEdit=true");
    } else {
        echo "Failed to update data" . mysqli_error($koneksi);
    }
}