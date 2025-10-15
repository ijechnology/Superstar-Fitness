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
    <title>Types - Dasboard Superstar Fitness</title>
    <link rel="icon" href="../asset/image/favicon.png" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.7/datatables.min.css" rel="stylesheet">
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

            <h1><b>ALL TYPES OF CLASS</b></h1>
            <p class="text-body-secondary">This feature is used to display, add, delete and update all types of class
                that available at Superstar Fitness.</p>
            <a href="/" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addType">Add New Type
                of Class</a>
            <div class="modal fade" id="addType" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addTypesLabel<?= $data['id'] ?>">Add New Type of Class</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="addTypes.php" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <div class="col-md form-floating mb-3">
                                        <input required type="text" class="form-control" id="Name" name="name"
                                            placeholder="Type Name">
                                        <label for="Name">Type Name</label>
                                    </div>
                                    <div class="col-md mb-3">
                                        <label for="banner">Type Banner (2:6)</label>
                                        <input required type="file" class="form-control" id="banner" name="banner"
                                            accept="image/png, image/jpeg, image/jpg, image/gif, image/webp"
                                            placeholder="Type Banner">
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
            if (isset($_GET['successAdd']) && $_GET['successAdd'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                New Type of Class Successfully Added!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }

            if (isset($_GET['successEdit']) && $_GET['successEdit'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                A Type of Class Successfully Updated!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }

            if (isset($_GET['successDelete']) && $_GET['successDelete'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                A Type of Class Successfully Deleted!
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
                            <th scope="col" style="text-align: center;">Banner</th>
                            <th scope="col" style="text-align: center;">Many Class</th>
                            <th scope="col" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include ("connect.php");
                        $sql1 = "select id, name, banner from types order by id asc";
                        $q2 = mysqli_query($koneksi, $sql1);
                        $urut = 1;
                        while ($data = mysqli_fetch_array($q2)) {
                        ?>
                        <tr>
                            <th scope="row" style="vertical-align: middle; text-align: center;"><?= $urut++ ?></th>
                            <td style="vertical-align: middle;"><?=ucfirst($data['name']) ?></td>
                            <td style="vertical-align: middle; text-align: center;">
                                <img src="../asset/image/banner/<?= $data['banner'] ?>" width="120" height="100"
                                    alt="#">
                            </td>
                            <td style="vertical-align: middle; text-align: center">
                                <a href="class.php?type=<?=$data['name']?>" style="text-decoration: none;color: black;">
                                    <?php
                            $sql = "SELECT COUNT(*) AS totalData FROM classes where type = '{$data['name']}'";
                            $q1 = mysqli_query($koneksi, $sql);
                            while($data2 = mysqli_fetch_array($q1)){ ?>
                                    <?=$data2['totalData']?>
                                    <?php } ?>
                                </a>
                            </td>
                            <td style="vertical-align: middle; text-align: center;">
                                <a href="editType.php?id=<?= $data['id'] ?>" type="button" class="btn btn-warning"
                                    data-bs-toggle="modal" data-bs-target="#editType<?= $data['id'] ?>">
                                    <i class="fa fa-pencil-square-o" style="font-size: 30px;"></i>
                                </a>
                                <a href="deleteType.php?id=<?= $data['id'] ?>" type="button" class="btn btn-danger"
                                    data-bs-toggle="modal" data-bs-target="#deleteType<?= $data['id'] ?>">
                                    <i class="fa fa-trash-o" style="font-size: 30px;"></i>
                                </a>
                            </td>

                            <!-- edit type -->
                            <div class="modal fade" id="editType<?= $data['id'] ?>" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="editTypeLabel<?= $data['id'] ?>"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editType<?= $data['id'] ?>">Edit Type of
                                                Class</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="editTypes.php" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <div class="col-md form-floating mb-3">
                                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                        <input required type="text" class="form-control"
                                                            id="name<?= $data['id'] ?>" name="name"
                                                            value="<?= $data['name'] ?>" placeholder="Type Name">
                                                        <label for="Name">Type Name</label>
                                                    </div>
                                                    <div class="col-md mb-3">
                                                        <label for="banner">Type Banner (2:4)</label>
                                                        <input type="file" class="form-control"
                                                            id="banner<?= $data['id'] ?>" name="banner"
                                                            value="<?= $data['banner'] ?>"
                                                            accept="image/jpg, image/jpeg, image/png, image/gif, image/webp"
                                                            placeholder="Type Banner">
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

                            <!-- delete type -->
                            <div class="modal fade" id="deleteType<?= $data['id'] ?>" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="deleteTypeLabel<?= $data['id'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deleteType<?= $data['id'] ?>">Delete Type
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="deleteTypes.php">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <?php
                                                $sql = "SELECT COUNT(*) AS totalData FROM classes where type = '{$data['name']}'";
                                                $q1 = mysqli_query($koneksi, $sql);
                                                $data2 = mysqli_fetch_array($q1); ?>
                                                    Are you sure want to delete <?= $data['name'] ?> type of class that
                                                    has <?=$data2['totalData']?> class on it?
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