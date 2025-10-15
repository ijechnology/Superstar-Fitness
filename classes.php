<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes: Superstar Fitness</title>
    <link rel="icon" href="asset/image/favicon.png" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/public.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar p-0" style="width: 100%; background-color: #0C356A;">
        <div class="container-fluid justify-content-between" style="padding: 0 50px;">
            <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="index.php">
                <img src="asset/image/favicon.png" height="50" alt="Superstar Fitness Logo" />
            </a>
            <ul class="navbar-nav flex-row">
                <li class="nav-item me-3 me-lg-1">
                    <a class="under nav-link d-sm-flex align-items-sm-center" href="membership.php">
                        <strong class="d-none d-sm-block ms-1">Membership</strong>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="under nav-link d-sm-flex align-items-sm-center" href="classes.php?type=all">
                        <strong class="d-none d-sm-block ms-1 active">Classes</strong>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="under nav-link d-sm-flex align-items-sm-center" href="about.php">
                        <strong class="d-none d-sm-block ms-1">Why Superstar Fitness</strong>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link d-sm-flex align-items-sm-center" href="join.php">
                        <strong class="d-none d-sm-block ms-1 join">
                            Join Online
                            <i class="fa fa-location-arrow"></i>
                        </strong>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
                aria-current="true"></button>
        </div>
        <div class="carousel-inner text-center">
            <div class="carousel-item">
                <img src="asset/image/public/classes/hero1.webp" class="bd-placeholder-img" width="100%" height="100%"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" style="height: 91vh;">
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <div class="container px-1 py-5">
                            <div class="row align-items-center g-lg-5 py-5">
                                <div class="col-lg-7 text-center text-lg-start animation-x" style="margin-top: 7rem;">
                                    <h1 class="display-4 fw-bold lh-1 mb-3 permanent-marker-regular"
                                        style="font-size: 90px;color: #FFC436;text-shadow: 7px 4px 3px #0C356A;">BASIC
                                        STEP</h1>
                                    <p style="color: wheat;">Step up your star value with a low-impacy cardio workout.
                                        Burn calories, boost coordiantion, and tone muscles. Perfect for beginners
                                        seeking max results and fun.</p>
                                    <a class="nav-link d-sm-flex align-items-sm-center" href="classes.php?type=Cardio">
                                        <!-- disini linkin ke clasees tapi bagian tipe cardio -->
                                        <strong class="d-none d-sm-block ms-1 join animation">
                                            View This Class
                                            <i class="fa fa-location-arrow"></i>
                                        </strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="asset/image/public/classes/hero2.jpg" class="bd-placeholder-img" width="100%" height="100%"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" style="height: 91vh;">
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <div class="container px-1 py-5">
                            <div class="row align-items-center g-lg-5 py-5">
                                <div class="col-lg-7 text-center text-lg-start animation-x" style="margin-top: 7rem;">
                                    <h1 class="display-4 fw-bold lh-1 mb-3 permanent-marker-regular"
                                        style="font-size: 90px;color: #FFC436;text-shadow: 7px 4px 3px #0C356A;">FASTFIT
                                    </h1>
                                    <p style="color: #FFC436;">Unleash the boss in you with three-dimensional functional
                                        exercises.<br>Torch calories, boost metabolism, and sculpt your way to stardom.
                                    </p>
                                    <a class="nav-link d-sm-flex align-items-sm-center" href="classes.php?type=hit">
                                        <!-- ini di link ke type yang agak keras gitchu -->
                                        <strong class="d-none d-sm-block ms-1 join animation">
                                            View This Class
                                            <i class="fa fa-location-arrow"></i>
                                        </strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container text-center" style="margin-top: 5rem; margin-bottom: 5rem;">
        <h1 class="permanent-marker-regular animation-x"
            style="color: #FFC436;text-shadow: 7px 4px 3px #242930;font-size: 80px;">EXPLORE ALL CLASSES</h1>
        <div class="row align-items-end animation" style="margin-top: 4rem;">
            <a href="classes.php?type=all" class="btn align-content-center col text-start tipe <?php if($_GET['type'] == "all") { ?>tipe-active <?php } ?>">
                <!-- ini link ke list semua class -->
                <h4 class="permanent-marker-regular animation-x text-center" style="text-transform: uppercase;">All</h4>
            </a>
            <?php
                include ("dashboard/connect.php");
                $sql1 = "select name from types order by RAND()";
                $q2 = mysqli_query($koneksi, $sql1);
                while ($data = mysqli_fetch_array($q2)) {
            ?>         
            <a href="classes.php?type=<?=$data['name']?>" class="btn col align-content-center text-start tipe <?php if($_GET['type'] == $data['name']) { ?>tipe-active <?php } ?>">
                <!-- ini ntar loop tampilin class sesuai nama tipenya -->
                <h4 class="permanent-marker-regular animation-x text-center" style="text-transform: uppercase;"><?=$data['name']?></h4>
            </a>
            <?php } ?>
        </div>
        <div class="row align-items-end animation" style="margin-top: 4rem;">
            <?php 
            include ("dashboard/connect.php");
            $type = isset($_GET['type']) ? $_GET['type'] : '';
            if ($type!="all") {
                $sql1 = "select * from classes, types where types.name = classes.type AND types.name = '$type' order by classes.id asc;";
            } else {
                $sql1 = "select * from classes, types where types.name = classes.type order by classes.id asc;";
            }
            $q2 = mysqli_query($koneksi, $sql1);
            while ($data = mysqli_fetch_array($q2)) { ?>
            <div class="col-md-3 text-start">
                <a href="class.php?type=<?=$data['name']?>"
                    style="margin-bottom:20px; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); border-radius: 10px; background-color: #1a4377; width: 100%;">
                    <!-- ini ngelink ke class.php sesuai kelasnya -->
                    <div class="zoom-effect">
                        <div class="kotak">
                            <img src="asset/image/banner/<?= $data['banner'] ?>" style="height: 200px;width: -webkit-fill-available;">
                        </div>
                    </div>
                    <h4 class="permanent-marker-regular"
                        style="color: #FFC436; margin-top: 15px; text-shadow: 3px 5px 8px #242930;"><?=$data[1]?></h4>
                    <h6 style="color: wheat;"><?=$data['type']?> | <?=$data['duration']?></h6>
                </a>
            </div> 
            <?php } ?>
        </div>
    </div>
    <div class="container">
        <hr class="animation-x" style="margin: 0; border: 2px solid #FFC436; opacity: .8;">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3">
            <p class="col-md-4 mb-0 animation-x" style="color: wheat;">© 2024 Superstar Fitness, Inc</p>
            <ul class="nav justify-content-end">
                <li class="nav-item animation"><a href="index.php" class="nav-link foot px-2">Home</a></li>
                <li class="nav-item animation"><a href="membership.php" class="nav-link foot px-2">Membership</a></li>
                <li class="nav-item animation"><a href="classes.php?type=all" class="nav-link foot px-2 active">Classes</a></li>
                <li class="nav-item animation"><a href="about.php" class="nav-link foot px-2">About</a></li>
                <li class="nav-item animation"><a href="join.php" class="nav-link foot px-2">Join</a></li>
            </ul>
        </footer>
    </div>
    <script>
    const the_animation = document.querySelectorAll('.animation')
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('scroll-animation')
            } else {
                entry.target.classList.remove('scroll-animation')
            }

        })
    }, {
        threshold: 0.5
    });
    for (let i = 0; i < the_animation.length; i++) {
        const elements = the_animation[i];
        observer.observe(elements);
    }
    const the_animation_x = document.querySelectorAll('.animation-x')
    const observer_x = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('scroll-animation-x')
            } else {
                entry.target.classList.remove('scroll-animation-x')
            }

        })
    }, {
        threshold: 0.5
    });
    for (let i = 0; i < the_animation_x.length; i++) {
        const elements_x = the_animation_x[i];
        observer_x.observe(elements_x);
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>