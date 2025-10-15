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
    <title>Cardio Classes - Dasboard Superstar Fitness</title>
    <link rel="icon" href="../asset/image/favicon.png" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.7/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/dashboard.css" />
</head>

<body class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 bg-body-tertiary px-2" style="height: 100vh; position: fixed;">
        <div class="m-2 mt-4">
            <img src="../asset/image/dasboard/logo.svg" alt="Logo Berbinar Insightful Indonesia"
                title="Logo Berbinar Insightful Indonesia" style="height: 70px;">
        </div>
        <hr>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center mt-4 text-gray-700 list-unstyled w-100"
            style="margin-left: 0px;">
            <li class="mb-4 rounded nav-item">
                <a href="index.php" style="text-decoration: none;"
                    class="tooltipp d-flex flex-column align-items-center text-secondary">
                    <i class="fa fa-tachometer " style="font-size: 40px;"></i>
                    <span class="tooltipptext tooltipp-right"
                        style="margin-top: 10px;margin-left: -30px;">Dashboard</span>
                </a>
            </li>
            <li class="my-4 rounded nav-item">
                <a href="types.php" style="text-decoration: none;"
                    class="tooltipp here d-flex flex-column align-items-center text-secondary">
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
        include ("connect.php");
        $type = $_GET['type'];
        $sql = "select name from types where name = '$type'";
        $q1 = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_array($q1);
        ?>
            <h1><b>ALL <?=strtoupper($data['name'])?> CLASSES</b></h1>
            <p class="text-body-secondary">This feature is used to display, add, delete and update all
                <?=$data['name']?> classes that available at Superstar Fitness.</p>
            <a href="/" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addClass">Add New
                <?=ucfirst($data['name'])?> Class</a>
            <div class="modal fade" id="addClass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addClassLabel<?= $data['name'] ?>">Add New
                                <?=ucfirst($data['name'])?> Class</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="addClass.php">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <div class="row g-2">
                                        <div class="col-md form-floating mb-3">
                                            <input required type="text" class="form-control" id="Name" name="name"
                                                placeholder="Type Class Name">
                                            <label for="Name">Class Name</label>
                                        </div>
                                        <div class="col-md form-floating mb-3">
                                            <input required type="text" class="form-control" id="coach" name="coach"
                                                placeholder="Type Class Coach">
                                            <label for="coach">Class Coach</label>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-md form-floating mb-3">
                                            <input required type="date" class="form-control" id="Date" name="date"
                                                placeholder="Type Class Date">
                                            <label for="Date">Class Date</label>
                                        </div>
                                        <div class="col-md form-floating mb-3">
                                            <input required type="time" class="form-control" id="Time" name="time"
                                                placeholder="Type Class Time">
                                            <label for="Time">Class Time</label>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-md form-floating mb-3">
                                                <?php 
                                        include ("connect.php");
                                        $data['type'] = $_GET['type'];
                                        $sql = "select name from types where name = '{$data['type']}'";
                                        $q1 = mysqli_query($koneksi, $sql);
                                        while ($data = mysqli_fetch_array($q1)) {
                                        ?>
                                                <input readonly type="type" value=<?=$data['name']?> class="form-control" id="type" name="type"
                                                placeholder="Type Class Type">
                                                <?php } ?>
                                            <label for="type">Class Type</label>
                                        </div>
                                        <div class="col-md form-floating mb-3">
                                            <select class="form-select" id="intensity" name="intensity"
                                                aria-label="Floating label select example">
                                                <option disabled default>Intensity</option>
                                                <option value="Low">Low</option>
                                                <option value="Medium">Medium</option>
                                                <option value="High">High</option>
                                            </select>
                                            <label for="intensity">Class Intensity</label>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-md form-floating mb-3">
                                            <select class="form-select" id="Complexity" name="complexity"
                                                aria-label="Floating label select example">
                                                <option disabled default>Complexity</option>
                                                <option value="Easy">Easy</option>
                                                <option value="Moderate">Moderate</option>
                                                <option value="Advance">Advance</option>
                                            </select>
                                            <label for="Complexity">Class Complexity</label>
                                        </div>
                                        <div class="col-md form-floating mb-3">
                                            <select class="form-select" id="Duration" name="duration"
                                                aria-label="Floating label select example">
                                                <option disabled default>Duration</option>
                                                <option value="30 Minutes">30 Minutes</option>
                                                <option value="45 Minutes">45 Minutes</option>
                                                <option value="50 Minutes">50 Minutes</option>
                                                <option value="60 Minutes">60 Minutes</option>
                                                <option value="75 Minutes">75 Minutes</option>
                                                <option value="90 Minutes">90 Minutes</option>
                                            </select>
                                            <label for="Duration">Class Duration</label>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Class Description" id="description"
                                            name="description" style="height: 100px;"></textarea>
                                        <label for="desc">Class Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="add">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
        $type = $_GET['type'];
        $sql = "select name from types where name = '$type'";
        $q1 = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_array($q1);

            if (isset($_GET['successAdd']) && $_GET['successAdd'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                New <?=$data['name']?> Class Successfully Added!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }

            if (isset($_GET['successEdit']) && $_GET['successEdit'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                A <?=$data['name']?> Class Successfully Updated!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }

            if (isset($_GET['successDelete']) && $_GET['successDelete'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                A <?=$data['name']?> Class Successfully Deleted!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
            } 
        ?>

            <div class="container px-4 py-2" style="background-color: white; border-radius: 10px;">
                <table class="table table-striped table-hover display data">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center;">#</th>
                            <th scope="col" style="text-align: center;">Name</th>
                            <th scope="col" style="text-align: center;">Coach</th>
                            <th scope="col" style="text-align: center;">Schedule</th>
                            <th scope="col" style="text-align: center;">Complexity</th>
                            <th scope="col" style="text-align: center;">Intensity</th>
                            <th scope="col" style="text-align: center;">Duration</th>
                            <th scope="col" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include ("connect.php");
                        $data['type'] = $_GET['type'];
                        $sql1 = "select id, name, type, coach, date_format(date, '%W, %d %M %Y') as formatdate, time_format(time, '%H:%i') as formattime, complexity, intensity, duration, description from classes where type = '{$data['type']}' order by id asc";
                        $q2 = mysqli_query($koneksi, $sql1);
                        $urut = 1;
                        while ($data = mysqli_fetch_array($q2)) {
                    ?>
                        <tr>
                            <th scope="row" style="vertical-align: middle; text-align: center;"><?= $urut++ ?></th>
                            <td style="vertical-align: middle;"><?= $data['name'] ?></td>
                            <td style="vertical-align: middle;"><?= $data['coach'] ?></td>
                            <td style="vertical-align: middle;">
                                <?= $data['formatdate'] . ' on ' . $data['formattime'] ?></td>
                            <td style="vertical-align: middle;"><?= $data['complexity'] ?></td>
                            <td style="vertical-align: middle;"><?= $data['intensity'] ?></td>
                            <td style="vertical-align: middle;"><?= $data['duration'] ?></td>
                            <td style="vertical-align: middle; text-align: center;">
                                <a href="editClass.php?id=<?= $data['id'] ?>" type="button" class="btn btn-warning"
                                    data-bs-toggle="modal" data-bs-target="#editClass<?= $data['id'] ?>">
                                    <i class="fa fa-pencil-square-o" style="font-size: 30px;"></i>
                                </a>
                                <a href="deleteClass.php?id=<?= $data['id'] ?>" type="button" class="btn btn-danger"
                                    data-bs-toggle="modal" data-bs-target="#deleteClass<?= $data['id'] ?>">
                                    <i class="fa fa-trash-o" style="font-size: 30px;"></i>
                                </a>
                            </td>

                            <!-- edit classes -->
                            <div class="modal fade" id="editClass<?= $data['id'] ?>" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="editClassLabel<?= $data['id'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editClass<?= $data['id'] ?>">Edit Class
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="editClass.php">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <div class="row g-2">
                                                        <div class="col-md form-floating mb-3">
                                                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                            <input required type="text" class="form-control"
                                                                id="name<?= $data['id'] ?>" name="name"
                                                                value="<?= $data['name'] ?>"
                                                                placeholder="Type Class Name">
                                                            <label for="Name">Class Name</label>
                                                        </div>
                                                        <div class="col-md form-floating mb-3">
                                                            <input required type="text" class="form-control"
                                                                id="coach<?= $data['id'] ?>" name="coach"
                                                                value="<?= $data['coach'] ?>"
                                                                placeholder="Type Class Coach">
                                                            <label for="coach">Class Coach</label>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col-md form-floating mb-3">
                                                            <input required type="date" class="form-control"
                                                                id="date<?= $data['id'] ?>" name="date"
                                                                value="<?= date('Y-m-d', strtotime($data['formatdate'])) ?>"
                                                                placeholder="Type Class Date">
                                                            <label for="Date">Class Date</label>
                                                        </div>
                                                        <div class="col-md form-floating mb-3">
                                                            <input required type="time" class="form-control"
                                                                id="time<?= $data['id'] ?>" name="time"
                                                                value="<?= date('H:i', strtotime($data['formattime'])) ?>"
                                                                placeholder="Type Class Time">
                                                            <label for="Time">Class Time</label>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col-md form-floating mb-3">
                                                            <input readonly type="type" value=<?=$data['type']?> class="form-control" id="type" name="type"
                                                                placeholder="Type Class Type">
                                                            <label for="type<?= $data['id'] ?>">Class Type</label>
                                                        </div>
                                                        <div class="col-md form-floating mb-3">
                                                            <select class="form-select" id="intensity<?= $data['id'] ?>"
                                                                aria-label="Floating label select example"
                                                                name="intensity">
                                                                <option disabled default>Intensity</option>
                                                                <option value="Low"
                                                                    <?php if ($data['intensity'] == "Low") { ?>selected<?php } ?>>
                                                                    Low</option>
                                                                <option value="Medium"
                                                                    <?php if ($data['intensity'] == "Medium") { ?>selected<?php } ?>>
                                                                    Medium</option>
                                                                <option value="High"
                                                                    <?php if ($data['intensity'] == "High") { ?>selected<?php } ?>>
                                                                    High</option>
                                                            </select>
                                                            <label for="intensity<?= $data['id'] ?>">Class
                                                                Intensity</label>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col-md form-floating mb-3">
                                                            <select class="form-select"
                                                                id="complexity<?= $data['id'] ?>"
                                                                aria-label="Floating label select example"
                                                                name="complexity">
                                                                <option disabled default>Complexity</option>
                                                                <option value="Easy"
                                                                    <?php if ($data['complexity'] == "Easy") { ?>selected<?php } ?>>
                                                                    Easy</option>
                                                                <option value="Moderate"
                                                                    <?php if ($data['complexity'] == "Moderate") { ?>selected<?php } ?>>
                                                                    Moderate</option>
                                                                <option value="Advance"
                                                                    <?php if ($data['complexity'] == "Advance") { ?>selected<?php } ?>>
                                                                    Advance</option>
                                                            </select>
                                                            <label for="complexity<?= $data['id'] ?>">Class
                                                                Complexity</label>
                                                        </div>
                                                        <div class="col-md form-floating mb-3">
                                                            <select class="form-select" id="duration<?= $data['id'] ?>"
                                                                aria-label="Floating label select example"
                                                                name="duration">
                                                                <option disabled default>Duration</option>
                                                                <option value="30 Minutes"
                                                                    <?php if ($data['duration'] == "30 Minutes") { ?>selected<?php } ?>>
                                                                    30 Minutes</option>
                                                                <option value="45 Minutes"
                                                                    <?php if ($data['duration'] == "45 Minutes") { ?>selected<?php } ?>>
                                                                    45 Minutes</option>
                                                                <option value="50 Minutes"
                                                                    <?php if ($data['duration'] == "50 Minutes") { ?>selected<?php } ?>>
                                                                    50 Minutes</option>
                                                                <option value="60 Minutes"
                                                                    <?php if ($data['duration'] == "60 Minutes") { ?>selected<?php } ?>>
                                                                    60 Minutes</option>
                                                                <option value="75 Minutes"
                                                                    <?php if ($data['duration'] == "75 Minutes") { ?>selected<?php } ?>>
                                                                    75 Minutes</option>
                                                                <option value="90 Minutes"
                                                                    <?php if ($data['duration'] == "90 Minutes") { ?>selected<?php } ?>>
                                                                    90 Minutes</option>
                                                            </select>
                                                            <label for="duration<?= $data['id'] ?>">Class
                                                                Duration</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" placeholder="Class Description"
                                                            id="description<?= $data['id'] ?>" name="description"
                                                            style="height: 100px;"><?= $data['description'] ?></textarea>
                                                        <label for="description<?= $data['id'] ?>">Class
                                                            Description</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    name="edit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="editClass<?= $data['id'] ?>" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="editClassLabel<?= $data['id'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editClass<?= $data['id'] ?>">Edit Cardio
                                                Class</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="editClass.php" method="POST">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <div class="row g-2">
                                                        <div class="col-md form-floating mb-3">
                                                            <input required type="text" class="form-control"
                                                                id="name<?= $data['id'] ?>" name="name"
                                                                value="<?= $data['name'] ?>"
                                                                placeholder="Type Class Name">
                                                            <label for="Name">Class Name</label>
                                                        </div>
                                                        <div class="col-md form-floating mb-3">
                                                            <input required type="text" class="form-control"
                                                                id="coach<?= $data['id'] ?>" name="coach"
                                                                value="<?= $data['coach'] ?>"
                                                                placeholder="Type Class Coach">
                                                            <label for="coach">Class Coach</label>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col-md form-floating mb-3">
                                                            <input required type="date" class="form-control"
                                                                id="date<?= $data['id'] ?>" name="date"
                                                                value="<?= date('Y-m-d', strtotime($data['formatdate'])) ?>"
                                                                placeholder="Type Class Date">
                                                            <label for="Date">Class Date</label>
                                                        </div>
                                                        <div class="col-md form-floating mb-3">
                                                            <input required type="time" class="form-control"
                                                                id="time<?= $data['id'] ?>" name="time"
                                                                value="<?= date('H:i', strtotime($data['formattime'])) ?>"
                                                                placeholder="Type Class Time">
                                                            <label for="Time">Class Time</label>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col-md form-floating mb-3">
                                                            <select class="form-select" id="type<?= $data['id'] ?>"
                                                                aria-label="Floating label select example" name="type">
                                                                <option disabled default>Type</option>
                                                                <option value="Cardio"
                                                                    <?php if ($data['type'] == "Cardio") { ?>selected<?php } ?>>
                                                                    Cardio</option>
                                                                <option value="Cycling"
                                                                    <?php if ($data['type'] == "Cycling") { ?>selected<?php } ?>>
                                                                    Cycling</option>
                                                                <option value="Dance"
                                                                    <?php if ($data['type'] == "Dance") { ?>selected<?php } ?>>
                                                                    Dance</option>
                                                                <option value="Hit"
                                                                    <?php if ($data['type'] == "Hit") { ?>selected<?php } ?>>
                                                                    Hit</option>
                                                                <option value="Mind and Body"
                                                                    <?php if ($data['type'] == "Mind and Body") { ?>selected<?php } ?>>
                                                                    Mind and Body</option>
                                                                <option value="Strength and Conditioning"
                                                                    <?php if ($data['type'] == "Strength and Conditioning") { ?>selected<?php } ?>>
                                                                    Strength and Conditioning</option>
                                                            </select>
                                                            <label for="type<?= $data['id'] ?>">Class Type</label>
                                                        </div>
                                                        <div class="col-md form-floating mb-3">
                                                            <select class="form-select" id="intensity<?= $data['id'] ?>"
                                                                aria-label="Floating label select example"
                                                                name="intensity">
                                                                <option disabled default>Intensity</option>
                                                                <option value="Low"
                                                                    <?php if ($data['intensity'] == "Low") { ?>selected<?php } ?>>
                                                                    Low</option>
                                                                <option value="Medium"
                                                                    <?php if ($data['intensity'] == "Medium") { ?>selected<?php } ?>>
                                                                    Medium</option>
                                                                <option value="High"
                                                                    <?php if ($data['intensity'] == "High") { ?>selected<?php } ?>>
                                                                    High</option>
                                                            </select>
                                                            <label for="intensity<?= $data['id'] ?>">Class
                                                                Intensity</label>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col-md form-floating mb-3">
                                                            <select class="form-select"
                                                                id="Complexity<?= $data['id'] ?>"
                                                                aria-label="Floating label select example"
                                                                name="complexity">
                                                                <option disabled default>Complexity</option>
                                                                <option value="Easy"
                                                                    <?php if ($data['complexity'] == "Easy") { ?>selected<?php } ?>>
                                                                    Easy</option>
                                                                <option value="Moderate"
                                                                    <?php if ($data['complexity'] == "Moderate") { ?>selected<?php } ?>>
                                                                    Moderate</option>
                                                                <option value="Advance"
                                                                    <?php if ($data['complexity'] == "Advance") { ?>selected<?php } ?>>
                                                                    Advance</option>
                                                            </select>
                                                            <label for="Complexity<?= $data['id'] ?>">Class
                                                                Complexity</label>
                                                        </div>
                                                        <div class="col-md form-floating mb-3">
                                                            <select class="form-select" id="Duration<?= $data['id'] ?>"
                                                                aria-label="Floating label select example"
                                                                name="duration">
                                                                <option disabled default>Duration</option>
                                                                <option value="30 Minutes"
                                                                    <?php if ($data['duration'] == "30 Minutes") { ?>selected<?php } ?>>
                                                                    30 Minutes</option>
                                                                <option value="45 Minutes"
                                                                    <?php if ($data['duration'] == "45 Minutes") { ?>selected<?php } ?>>
                                                                    45 Minutes</option>
                                                                <option value="50 Minutes"
                                                                    <?php if ($data['duration'] == "50 Minutes") { ?>selected<?php } ?>>
                                                                    50 Minutes</option>
                                                                <option value="60 Minutes"
                                                                    <?php if ($data['duration'] == "60 Minutes") { ?>selected<?php } ?>>
                                                                    60 Minutes</option>
                                                                <option value="75 Minutes"
                                                                    <?php if ($data['duration'] == "75 Minutes") { ?>selected<?php } ?>>
                                                                    75 Minutes</option>
                                                                <option value="90 Minutes"
                                                                    <?php if ($data['duration'] == "90 Minutes") { ?>selected<?php } ?>>
                                                                    90 Minutes</option>
                                                            </select>
                                                            <label for="Duration<?= $data['id'] ?>">Class
                                                                Duration</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" placeholder="Class Description"
                                                            id="description<?= $data['id'] ?>" name="description"
                                                            style="height: 100px;"><?= $data['description'] ?></textarea>
                                                        <label for="description<?= $data['id'] ?>">Class
                                                            Description</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    name="edit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- delete class -->
                            <div class="modal fade" id="deleteClass<?= $data['id'] ?>" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="deleteClassLabel<?= $data['id'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deleteClass<?= $data['id'] ?>">Delete Class
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="deleteClass.php">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    Are you sure want to delete <?= $data['name'] ?> class that will be
                                                    held on <?= $data['formatdate'] . ' ' . $data['formattime'] ?>?
                                                    <input required type="number" value="<?= $data['id'] ?>"
                                                        class="form-control" id="idProduct<?= $data['id'] ?>"
                                                        name="idProduct" hidden>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="delete">Yes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.7/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.data').DataTable();
    });
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
    })
    </script>
</body>

</html>