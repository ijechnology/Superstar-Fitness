<?php
session_start();

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
    <title>Membership - Dasboard Superstar Fitness</title>
    <link rel="icon" href="../asset/image/favicon.png" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.7/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/dashboard.css" />
</head>

<body class="d-flex">
    <!-- sidebar -->
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
                    class="tooltipp here d-flex flex-column align-items-center text-secondary">
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

    <!-- main page -->
    <div class="container" style="margin-left:150px">
        <div class="my-5">

            <h1><b>ALL MEMBERSHIPS</b></h1>
            <p class="text-body-secondary">This feature is used to display, add, delete and update all memberships at
                Superstar Fitness.</p>
            <a href="/" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addMembership">Add
                New Membership</a>
            <div class="modal fade" id="addMembership" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">

                <!-- add membership -->
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addMembershipLabel<?= $data['id'] ?>">Add New Membership
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="addMemberships.php">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <div class="row g-2">
                                        <div class="col-md form-floating mb-3">
                                            <input required type="text" class="form-control" id="firstname"
                                                name="firstname" placeholder="Type Membership First Name">
                                            <label for="firstname">First Name</label>
                                        </div>
                                        <div class="col-md form-floating mb-3">
                                            <input required type="text" class="form-control" id="lastname"
                                                name="lastname" placeholder="Type Membership Last Name">
                                            <label for="lastname">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-md form-floating mb-3">
                                            <input required type="email" class="form-control" id="Email" name="email"
                                                placeholder="Type Membership Email">
                                            <label for="Email">Active Email</label>
                                        </div>
                                        <div class="col-md form-floating mb-3">
                                            <input required type="phone" class="form-control" id="Number" name="phone"
                                                placeholder="Type Membership Number">
                                            <label for="Number">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="Package" name="package"
                                                aria-label="Floating label select example">
                                                <option disabled default>Package</option>
                                                <option value="1 Month">1 Month (Rp350.000)</option>
                                                <option value="4 Month">4 Month (Rp1.200.000)</option>
                                                <option value="1 Year">1 Year (Rp3.000.000)</option>
                                            </select>
                                            <label for="Package">Package</label>
                                        </div>
                                        <div class="col-md form-floating mb-3">
                                            <input required type="date" class="form-control" id="Register" name="date"
                                                placeholder="Type Membership Register">
                                            <label for="Register">Start On</label>
                                        </div>
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
                New Membership Successfully Added!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }

            if (isset($_GET['successEdit']) && $_GET['successEdit'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                A Membership Successfully Updated!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }

            if (isset($_GET['successDelete']) && $_GET['successDelete'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                A Membership Successfully Deleted!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php } ?>
            <div class="container px-4 py-2" style="background-color: white; border-radius: 10px;">
                <table class="table table-hover display data">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center;">#</th>
                            <th scope="col" style="text-align: center;">Name</th>
                            <th scope="col" style="text-align: center;">Email</th>
                            <th scope="col" style="text-align: center;">Phone Number</th>
                            <th scope="col" style="text-align: center;">Package</th>
                            <th scope="col" style="text-align: center;">Since</th>
                            <th scope="col" style="text-align: center;">End</th>
                            <th scope="col" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include ("connect.php");
                        function dateDiffInDays($date1, $date2) { 
	
                            // Calculating the difference in timestamps 
                            $diff = strtotime($date2) - strtotime($date1); 
                        
                            // 1 day = 24 hours 
                            // 24 * 60 * 60 = 86400 seconds 
                            return abs(round($diff / 86400)); 
                        } 
                        $sql1 = "select id, firstname, lastname, email, phone, package, date_format(date, '%d %M %Y') as ndate, date_format(date_add(date, interval case when package = '1 Month' then 1 when package = '4 Month' then 4 when package = '1 Year' then 12 else 0 end month), '%d %M %Y') as endDate, curdate() as currentdate from memberships order by id asc";
                        $q2 = mysqli_query($koneksi, $sql1);
                        $urut = 1;
                        while ($data = mysqli_fetch_array($q2)) {
                             
                        ?>
                        <tr>
                            <th scope="row" style="vertical-align: middle; text-align: center;
                                    <?php     
                                    $date1 = $data['endDate']; 
                                    $date2 = $data['currentdate']; 
                                    $dateDiff = dateDiffInDays($date1, $date2); 
                                    if ((strtotime($data['endDate']) < strtotime($data['currentdate']))) {
                                        echo "background-color: #edb782";
                                    }else if($dateDiff <= 3) {
                                        echo "background-color: #FFF0CE";
                                    } 
                                    ?>
                                ;"><?=$urut++?>
                            </th>
                            <td style="vertical-align: middle;
                                    <?php     
                                    $date1 = $data['endDate']; 
                                    $date2 = $data['currentdate']; 
                                    $dateDiff = dateDiffInDays($date1, $date2); 
                                    if ((strtotime($data['endDate']) < strtotime($data['currentdate']))) {
                                        echo "background-color: #edb782";
                                    }else if($dateDiff <= 3) {
                                        echo "background-color: #FFF0CE";
                                    } 
                                    ?>
                                ;"><?= $data['firstname'] . ' ' . $data['lastname'] ?></td>
                            <td style="vertical-align: middle;
                                    <?php     
                                    $date1 = $data['endDate']; 
                                    $date2 = $data['currentdate']; 
                                    $dateDiff = dateDiffInDays($date1, $date2); 
                                    if ((strtotime($data['endDate']) < strtotime($data['currentdate']))) {
                                        echo "background-color: #edb782";
                                    }else if($dateDiff <= 3) {
                                        echo "background-color: #FFF0CE";
                                    } 
                                    ?>
                                ;"><?= $data['email'] ?></td>
                            <td style="vertical-align: middle;
                                    <?php     
                                    $date1 = $data['endDate']; 
                                    $date2 = $data['currentdate']; 
                                    $dateDiff = dateDiffInDays($date1, $date2); 
                                    if ((strtotime($data['endDate']) < strtotime($data['currentdate']))) {
                                        echo "background-color: #edb782";
                                    }else if($dateDiff <= 3) {
                                        echo "background-color: #FFF0CE";
                                    } 
                                    ?>
                                ;"><a href="https://wa.me/<?= $data['phone'] ?>"
                                    style="text-decoration: none; color: #000;"><?= $data['phone'] ?></a></td>
                            <td style="vertical-align: middle;
                                    <?php     
                                    $date1 = $data['endDate']; 
                                    $date2 = $data['currentdate']; 
                                    $dateDiff = dateDiffInDays($date1, $date2); 
                                    if ((strtotime($data['endDate']) < strtotime($data['currentdate']))) {
                                        echo "background-color: #edb782";
                                    }else if($dateDiff <= 3) {
                                        echo "background-color: #FFF0CE";
                                    } 
                                    ?>
                                ;"><?= $data['package'] ?></td>
                            <td style="vertical-align: middle;
                                    <?php     
                                    $date1 = $data['endDate']; 
                                    $date2 = $data['currentdate']; 
                                    $dateDiff = dateDiffInDays($date1, $date2); 
                                    if ((strtotime($data['endDate']) < strtotime($data['currentdate']))) {
                                        echo "background-color: #edb782";
                                    }else if($dateDiff <= 3) {
                                        echo "background-color: #FFF0CE";
                                    } 
                                    ?>
                                ;"><?= $data['ndate'] ?></td>
                            <td style="vertical-align: middle;
                                    <?php     
                                    $date1 = $data['endDate']; 
                                    $date2 = $data['currentdate']; 
                                    $dateDiff = dateDiffInDays($date1, $date2); 
                                    if ((strtotime($data['endDate']) < strtotime($data['currentdate']))) {
                                        echo "background-color: #edb782";
                                    }else if($dateDiff <= 3) {
                                        echo "background-color: #FFF0CE";
                                    } 
                                    ?>
                                ;"><?= $data['endDate'] ?></td>
                            <!-- the whole column background-color wil be ##edb782 if its 3 days before its end, and will be #FFF0CE if its already end -->
                            <td style="vertical-align: middle; text-align: center
                                    <?php     
                                    $date1 = $data['endDate']; 
                                    $date2 = $data['currentdate']; 
                                    $dateDiff = dateDiffInDays($date1, $date2); 
                                    if ((strtotime($data['endDate']) < strtotime($data['currentdate']))) {
                                        echo ";background-color: #edb782";
                                    }else if($dateDiff <= 3) {
                                        echo ";background-color: #FFF0CE";
                                    } 
                                    ?>
                                    ;">
                                <a href="editMemberships.php?id=<?= $data['id'] ?>" type="button"
                                    class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editMembership<?= $data['id'] ?>">
                                    <i class="fa fa-pencil-square-o" style="font-size: 30px;"></i>
                                </a>
                                <a href="deleteMembership.php?id=<?= $data['id'] ?>" type="button"
                                    class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteMembership<?= $data['id'] ?>">
                                    <i class="fa fa-trash-o" style="font-size: 30px;"></i>
                                </a>
                            </td>

                            <!-- edit membership -->
                            <div class="modal fade" id="editMembership<?= $data['id'] ?>" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="editMembershipLabel<?= $data['id'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editMembershipLabel<?= $data['id'] ?>">Edit
                                                Membership</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="editMemberships.php">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <div class="row g-2">
                                                        <div class="col-md form-floating mb-3">
                                                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                            <input required type="text" class="form-control"
                                                                id="firstname<?= $data['id'] ?>" name="firstname"
                                                                value="<?= $data['firstname'] ?>"
                                                                placeholder="Type Membership First Name">
                                                            <label for="firstname<?= $data['id'] ?>">First Name</label>
                                                        </div>
                                                        <div class="col-md form-floating mb-3">
                                                            <input required type="text" class="form-control"
                                                                id="lastname<?= $data['id'] ?>" name="lastname"
                                                                value="<?= $data['lastname'] ?>"
                                                                placeholder="Type Membership Last Name">
                                                            <label for="lastname<?= $data['id'] ?>">Last Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col-md form-floating mb-3">
                                                            <input required type="email" class="form-control"
                                                                id="Email<?= $data['id'] ?>" name="email"
                                                                value="<?= $data['email'] ?>"
                                                                placeholder="Type Membership Email">
                                                            <label for="Email<?= $data['id'] ?>">Active Email</label>
                                                        </div>
                                                        <div class="col-md form-floating mb-3">
                                                            <input required type="phone" class="form-control"
                                                                id="Number<?= $data['id'] ?>" name="phone"
                                                                value="<?= $data['phone'] ?>"
                                                                placeholder="Type Membership Number">
                                                            <label for="Number<?= $data['id'] ?>">Phone Number</label>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="form-floating mb-3">
                                                            <select class="form-select" id="Package<?= $data['id'] ?>"
                                                                aria-label="Floating label select example"
                                                                name="package">
                                                                <option disabled default>Package</option>
                                                                <option value="1 Month"
                                                                    <?php if ($data['package'] == "1 Month") { ?>selected<?php } ?>>
                                                                    1 Month (Rp350.000)</option>
                                                                <option value="4 Month"
                                                                    <?php if ($data['package'] == "4 Month") { ?>selected<?php } ?>>
                                                                    4 Month (Rp1.200.000)</option>
                                                                <option value="1 Year"
                                                                    <?php if ($data['package'] == "1 Year") { ?>selected<?php } ?>>
                                                                    1 Year (Rp3.000.000)</option>
                                                            </select>
                                                            <label for="Package<?= $data['id'] ?>">Package</label>
                                                        </div>
                                                        <div class="col-md form-floating mb-3">
                                                            <input required type="date" class="form-control"
                                                                id="Register<?= $data['id'] ?>" name="date"
                                                                value="<?= date('Y-m-d', strtotime($data['ndate'])) ?>"
                                                                placeholder="Type Membership Register">
                                                            <label for="Register<?= $data['id'] ?>">Start On</label>
                                                        </div>
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

                            <!-- delete membership -->
                            <div class="modal fade" id="deleteMembership<?= $data['id'] ?>" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="deleteMembershipLabel<?= $data['id'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deleteMembershipLabel<?= $data['id'] ?>">
                                                Delete Membership</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="deleteMembership.php">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    Are you sure want to delete
                                                    <?= $data['firstname'] . ' ' . $data['lastname'] ?> membership that
                                                    ends on <?= $data['endDate'] ?>?
                                                    <input required type="phone" value="<?= $data['id'] ?>"
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
        integrity="sha384-I7E8VVD/ismYTF4hfirstjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
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