<?php session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Dasboard Superstar Fitness</title>
    <link rel="icon" href="../asset/image/favicon.png" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../asset/css/dashboard.css" />
</head>

<body class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 bg-body-tertiary px-2" style="height: 100vh; position:fixed;">
        <div class="m-2 mt-4">
            <img src="../asset/image/dasboard/logo.svg" alt="Logo Berbinar Insightful Indonesia"
                title="Logo Berbinar Insightful Indonesia" style="height: 70px;">
        </div>
        <hr>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center mt-4 text-gray-700 list-unstyled w-100"
            style="margin-left: 0px;">
            <li class="mb-4 rounded nav-item">
                <a href="index.php" style="text-decoration: none;"
                    class="tooltipp here d-flex flex-column align-items-center text-secondary">
                    <i class="fa fa-tachometer " style="font-size: 40px;"></i>
                    <span class="tooltipptext tooltipp-right"
                        style="margin-top: 10px;margin-left: -30px;">Dashboard</span>
                </a>
            </li>
            <li class="my-4 rounded nav-item">
                <a href="types.php" style="text-decoration: none;"
                    class="tooltipp d-flex flex-column align-items-center text-secondary">
                    <i class="fa fa-cube" style="font-size: 40px;"></i>
                    <span class="tooltipptext tooltipp-right" style="margin-top: 10px;margin-left: -30px;">Class
                        Types</span>
                </a>
            </li>
            <li class="my-4 rounded nav-item">
                <a href="classes.php" style="text-decoration: none;"
                    class="tooltipp d-flex flex-column align-items-center text-secondary">
                    <i class="fa fa-cubes" style="font-size: 40px;"></i>
                    <span class="tooltipptext tooltipp-right"
                        style="margin-top: 10px;margin-left: -30px;">Classes</span>
                </a>
            </li>
            <li class="my-4 rounded nav-item">
                <a href="memberships.php" style="text-decoration: none;"
                    class="tooltipp d-flex flex-column align-items-center text-secondary">
                    <i class="fa fa-users" style="font-size: 40px;"></i>
                    <span class="tooltipptext tooltipp-right"
                        style="margin-top: 10px;margin-left: -30px;">Memberships</span>
                </a>
            </li>
        </ul>
        <div class="border-top">
            <a href="#"
                class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none"
                aria-expanded="false">
                <i class="fa fa-sign-out" data-bs-toggle="modal" data-bs-target="#logOut" aria-hidden="true"
                    style="font-size: 50px;"></i>
            </a>
        </div>
        <div class="modal fade" id="logOut" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Log Out </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="logout.php">
                        <div class="modal-body">
                            <div>
                                Are you sure want to end your session?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-left:150px">
        <div class="my-5">
            <?php
        if (isset($_GET['successLogin']) && $_GET['successLogin'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                You have successfully logged in!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
        } 
        ?>
            <h1><b>Dashboard Superstar Fitness</b></h1>
            <p class="text-body-secondary mb-5">This feature is used to display the number of existing class types,
                classes, memberships and workers.</p>
            <div class="d-flex flex-wrap gap-4 row m-0">
                <div class="d-flex align-items-center py-4 px-5 bg-white shadow rounded col">
                    <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                        style="margin-right: 1.5rem;">
                        <i class="fa fa-cube fs-2"></i>
                    </div>
                    <div>
                        <?php
                        include ("connect.php");
                        $sql = "SELECT COUNT(*) AS totalData FROM types";
                        $q1 = mysqli_query($koneksi, $sql);
                        $data = mysqli_fetch_array($q1); 
                        $totalData = $data['totalData']?>
                        <span class="d-block fs-2 fw-bold"><?=$totalData?></span>
                        <span class="d-block text-muted">Class Types</span>
                    </div>
                </div>
                <div class="d-flex align-items-center py-4 px-5 bg-white shadow rounded col">
                    <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                        style="margin-right: 1.5rem;">
                        <i class="fa fa-cubes fs-2"></i>
                    </div>
                    <div>
                        <?php
                        include ("connect.php");
                        $sql = "SELECT COUNT(*) AS totalData FROM classes";
                        $q1 = mysqli_query($koneksi, $sql);
                        $data = mysqli_fetch_array($q1); 
                        $totalData = $data['totalData']?>
                        <span class="d-block fs-2 fw-bold"><?=$totalData?></span>
                        <span class="d-block text-muted">Classes</span>
                    </div>
                </div>
                <div class="d-flex align-items-center py-4 px-5 bg-white shadow rounded col">
                    <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                        style="margin-right: 1.5rem;">
                        <i class="fa fa-users fs-2"></i>
                    </div>
                    <div>
                        <?php
                        include ("connect.php");
                        $sql = "SELECT COUNT(*) AS totalData FROM memberships";
                        $q1 = mysqli_query($koneksi, $sql);
                        $data = mysqli_fetch_array($q1); 
                        $totalData = $data['totalData']?>
                        <span class="d-block fs-2 fw-bold"><?=$totalData?></span>
                        <span class="d-block text-muted">Memberships</span>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center py-4 px-5 bg-white shadow rounded mt-4">
                <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                    style="margin-right: 1.5rem;">
                    <i class="fa fa-bell fs-2"></i>
                </div>
                <div>
                    <?php 
                    include ("connect.php");
                    $sql = "SELECT date_format(date, '%W, %d %M %Y') as formatdate, time_format(time, '%H:%i') as formattime, name as classname, coach as classcoach FROM classes WHERE date >= CURDATE() ORDER BY date";
                    $q1 = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_array($q1);
                    ?>
                    <span class="d-block fs-2 fw-bold"><?= $data['formatdate'] . ' on ' . $data['formattime'] ?></span>
                    <span class="d-block text-muted">The nearest class that will be held is <?=$data['classname']?>
                        Class with <?=$data['classcoach']?> as the coach</span>
                </div>
            </div>
        </div>

    </div>
    <script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
    })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>