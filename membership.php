<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership: Superstar Fitness</title>
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
    <nav class="navbar p-0" style="position: absolute; width: 100%; background-color: #0C356A;">
        <div class="container-fluid justify-content-between" style="padding: 0 50px;">
            <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="index.php">
                <img src="asset/image/favicon.png" height="50" alt="Superstar Fitness Logo" />
            </a>
            <ul class="navbar-nav flex-row">
                <li class="nav-item me-3 me-lg-1">
                    <a class="under nav-link d-sm-flex align-items-sm-center" href="membership.php">
                        <strong class="d-none d-sm-block ms-1 active">Membership</strong>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="under nav-link d-sm-flex align-items-sm-center" href="classes.php?type=all">
                        <strong class="d-none d-sm-block ms-1">Classes</strong>
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
    <div class="px-4 py-5 text-center"
        style="background-image: url(asset/image/public/membership/hero.webp); background-size: cover; height: 100vh;">
        <div class="container px-1 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start animation-x" style="margin-top: 8rem;">
                    <h6 class="permanent-marker-regular" style="font-size: 40px;">MEMBERSHIP</h6>
                    <h1 class="display-4 fw-bold lh-1 mb-3 permanent-marker-regular"
                        style="font-size: 90px;color: #FFC436;text-shadow: 7px 4px 3px #0C356A;">GET YOUR STAR POWER ON
                    </h1>
                    <p>You are in charge. Get pumped with your choice of classes.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center" style="margin-top: 5rem; margin-bottom: 5rem;">
        <div class="row align-items-end animation" style="margin-top: 4rem;">
            <div class="col d-flex align-items-center"
                style="margin-right: 20px;padding: 20px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);border-radius: 10px;background-color: #1a4377;justify-content: center;align-items: center;">
                <?php
                    include ("dashboard/connect.php");
                    $sql = "SELECT COUNT(*) AS totalData FROM types";
                    $q1 = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_array($q1); 
                    $totalData = $data['totalData'] 
                ?>
                <h2 class="permanent-marker-regular"
                    style="text-shadow: 3px 5px 8px #242930;color: #FFC436;font-size: 100px;margin-right: 20px;"><?=$totalData?></h2>
                <p style="color: wheat;text-transform: uppercase;font-weight: 700;font-size: 30px;margin: 0;">Class
                    Types</p>
            </div>
            <div class="col d-flex align-items-center"
                style="margin-right: 20px;padding: 20px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);border-radius: 10px;background-color: #1a4377;justify-content: center;align-items: center;">
                <?php
                    include ("dashboard/connect.php");
                    $sql = "SELECT COUNT(*) AS totalData FROM classes";
                    $q1 = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_array($q1); 
                    $totalData = $data['totalData']
                ?>
                <h2 class="permanent-marker-regular"
                    style="text-shadow: 3px 5px 8px #242930;color: #FFC436;font-size: 100px;margin-right: 20px;"><?=$totalData?></h2>
                <p style="color: wheat;text-transform: uppercase;font-weight: 700;font-size: 30px;margin: 0;">Classes
                </p>
            </div>
            <div class="col d-flex align-items-center"
                style="margin-right: 20px;padding: 20px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);border-radius: 10px;background-color: #1a4377;justify-content: center;align-items: center;">
                <?php
                    include ("dashboard/connect.php");
                    $sql = "SELECT COUNT(*) AS totalData FROM memberships";
                    $q1 = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_array($q1); 
                    $totalData = $data['totalData']
                ?>
                <h2 class="permanent-marker-regular"
                    style="text-shadow: 3px 5px 8px #242930;color: #FFC436;font-size: 100px;margin-right: 20px;"><?=$totalData?></h2>
                <p style="color: wheat;text-transform: uppercase;font-weight: 700;font-size: 30px;margin: 0;">Members
                </p>
            </div>
        </div>
    </div>
    <div class="container text-center" style="margin-top: 5rem; margin-bottom: 5rem;">
        <h1 class="permanent-marker-regular animation-x"
            style="color: #FFC436;text-shadow: 7px 4px 3px #242930;font-size: 80px;">JOIN ONLINE IN 3 EASY STEPS</h1>
        <p class="animation-x" style="color: wheat;">Dive into superstar-inspired fitness at Superstar Fitness
            Indonesia. Fun, dynamic classes that’ll get you training like a star!</p>
        <div class="row align-items-end animation" style="margin-top: 4rem;">
            <div class="col text-start"
                style="margin: 0px 20px; padding: 20px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); border-radius: 10px; background-color: #1a4377;">
                <h1 class="permanent-marker-regular animation-x "
                    style="color: #FFC436;text-shadow: 7px 4px 3px #242930;font-size: 80px;">01</h1>
                <h4 class="permanent-marker-regular animation-x"
                    style="color: wheat; margin-top: 15px; text-shadow: 3px 5px 8px #242930;">GET STARTED</h4>
                <div class="d-flex align-items-center col animation-x" style="margin-top: 2rem;">
                    <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                        style="margin-right: 1.5rem;">
                        <i class="fa fa-check-circle-o" aria-hidden="true" style="font-size: 3rem; color: #FFC436;"></i>
                    </div>
                    <div>
                        <span style="color: wheat;">Fill in your details and select your package.</span>
                    </div>
                </div>
            </div>
            <div class="col text-start"
                style="margin: 0px 20px; padding: 20px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); border-radius: 10px; background-color: #1a4377;">
                <h1 class="permanent-marker-regular animation-x "
                    style="color: #FFC436;text-shadow: 7px 4px 3px #242930;font-size: 80px;">02</h1>
                <h4 class="permanent-marker-regular animation-x"
                    style="color: wheat; margin-top: 15px; text-shadow: 3px 5px 8px #242930;">SELECT CLUB ACCESS</h4>
                <div class="d-flex align-items-center col animation-x" style="margin-top: 2rem;">
                    <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                        style="margin-right: 1.5rem;">
                        <i class="fa fa-check-circle-o" aria-hidden="true" style="font-size: 3rem; color: #FFC436;"></i>
                    </div>
                    <div>
                        <span style="color: wheat;">Pick your classes, add-ons, start date and duration.</span>
                    </div>
                </div>
            </div>
            <div class="col text-start"
                style="margin: 0px 20px; padding: 20px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); border-radius: 10px; background-color: #1a4377;">
                <h1 class="permanent-marker-regular animation-x "
                    style="color: #FFC436;text-shadow: 7px 4px 3px #242930;font-size: 80px;">03</h1>
                <h4 class="permanent-marker-regular animation-x"
                    style="color: wheat; margin-top: 15px; text-shadow: 3px 5px 8px #242930;">SELECT BRAND ACCESS</h4>
                <div class="d-flex align-items-center col animation-x" style="margin-top: 2rem;">
                    <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                        style="margin-right: 1.5rem;">
                        <i class="fa fa-check-circle-o" aria-hidden="true" style="font-size: 3rem; color: #FFC436;"></i>
                    </div>
                    <div>
                        <span style="color: wheat;">Confirm your personal details and make payment.</span>
                    </div>
                </div>
            </div>
        </div>
        <a class="nav-link d-sm-flex align-items-sm-center justify-content-center" href="join.php">
            <strong class="d-none d-sm-block ms-1 join animation" style="border: 1px solid #FFC436; margin-top: 20px;">
                Join Now
                <i class="fa fa-location-arrow"></i>
            </strong>
        </a>
    </div>
    <div class="container text-center" style="margin-top: 5rem; margin-bottom: 7rem;">
        <h1 class="permanent-marker-regular animation-x"
            style="color: #FFC436;text-shadow: 7px 4px 3px #242930;font-size: 80px;">FIND A PLAN THAT SUITS YOU</h1>
        <div class="container promo-container">
            <div class="promos bg-base-1 animation">
                <div class="promo first" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                    <h4 class="strong-600 permanent-marker-regular"
                        style="color: #FFC436;text-shadow: 7px 4px 3px #242930;font-size: 3rem;">1 MONTH</h4>
                    <h1 style="font-weight: 700; color: wheat; font-size: 3.25rem;">Rp350.000</h1>
                    <a class="nav-link d-sm-flex align-items-sm-center justify-content-center" href="join.php">
                        <strong class="d-none d-sm-block ms-1 join animation"
                            style="border: 1px solid #FFC436; margin-top: 20px;">
                            SELECT PLAN
                            <i class="fa fa-location-arrow"></i>
                        </strong>
                    </a>
                </div>
                <div class="promo second" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                    <h4 class="strong-600 permanent-marker-regular"
                        style="color: #FFC436;text-shadow: 7px 4px 3px #242930;font-size: 3rem;">1 YEAR</h4>
                    <h1 style="font-weight: 700; color: wheat; font-size: 3.25rem;">Rp3.000.000</h1>
                    <a class="nav-link d-sm-flex align-items-sm-center justify-content-center" href="join.php">
                        <strong class="d-none d-sm-block ms-1 join animation"
                            style="border: 1px solid #FFC436; margin-top: 20px;">
                            SELECT PLAN
                            <i class="fa fa-location-arrow"></i>
                        </strong>
                    </a>
                </div>
                <div class="promo third scale">
                    <h4 class="strong-600 permanent-marker-regular"
                        style="color: #FFC436;text-shadow: 7px 4px 3px #242930;font-size: 3rem;">4 MONTH</h4>
                    <h1 style="font-weight: 700; color: wheat; font-size: 3.25rem;">Rp1.200.000</h1>
                    <a class="nav-link d-sm-flex align-items-sm-center justify-content-center" href="join.php">
                        <strong class="d-none d-sm-block ms-1 join animation"
                            style="border: 1px solid #FFC436; margin-top: 20px;">
                            SELECT PLAN
                            <i class="fa fa-location-arrow"></i>
                        </strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 5rem; margin-bottom: 5rem;">
        <div class="d-flex flex-row">
            <div class="animation my-auto" style="margin-right: 100px; width: 25rem;">
                <img src="asset/image/public/membership/side-pict.jpg"
                    style="width: -webkit-fill-available;border-radius: 10px;">
            </div>
            <div>
                <p class="permanent-marker-regular animation-x"
                    style="color: #FFC436;text-shadow: 7px 4px 3px #242930; font-size: 70px;">ROCKSTAR-WORTHY WORKOUTS
                </p>
                <p class="animation-x" style="color: wheat;">Our group classes totally rock! Killer workouts. Ultimate
                    training... everything worthy of a rockstar.</p>
                <div class="animation-x"
                    style="margin-top: 2rem; color: wheat;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); border-radius: 10px; padding: 20px;">
                    <div class="d-flex align-items-center col animation-x">
                        <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                            style="margin-right: 1.5rem;">
                            <i class="fa fa-check-circle-o" aria-hidden="true"
                                style="font-size: 3rem; color: #FFC436;"></i>
                        </div>
                        <div>
                            <span>Unlimited group fitness classes</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center col animation-x">
                        <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                            style="margin-right: 1.5rem;">
                            <i class="fa fa-check-circle-o" aria-hidden="true"
                                style="font-size: 3rem; color: #FFC436;"></i>
                        </div>
                        <div>
                            <span>Unlimited HIIT classes</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center col animation-x">
                        <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                            style="margin-right: 1.5rem;">
                            <i class="fa fa-check-circle-o" aria-hidden="true"
                                style="font-size: 3rem; color: #FFC436;"></i>
                        </div>
                        <div>
                            <span>Unlimited Mind and Body sessions</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center col animation-x">
                        <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                            style="margin-right: 1.5rem;">
                            <i class="fa fa-check-circle-o" aria-hidden="true"
                                style="font-size: 3rem; color: #FFC436;"></i>
                        </div>
                        <div>
                            <span>Unlimited Cycling experiences</span>
                        </div>
                    </div>
                    <a class="nav-link d-sm-flex align-items-sm-center" href="about.php">
                        <strong class="d-none d-sm-block ms-1 join animation"
                            style="border: 1px solid #FFC436; margin-top: 20px;">
                            DISCOVER MORE
                            <i class="fa fa-location-arrow"></i>
                        </strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr class="animation-x" style="margin: 0; border: 2px solid #FFC436; opacity: .8;">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3">
            <p class="col-md-4 mb-0 animation-x" style="color: wheat;">© 2024 Superstar Fitness, Inc</p>
            <ul class="nav justify-content-end">
                <li class="nav-item animation"><a href="index.php" class="nav-link foot px-2">Home</a></li>
                <li class="nav-item animation"><a href="membership.php" class="nav-link foot px-2 active">Membership</a>
                </li>
                <li class="nav-item animation"><a href="classes.php?type=all" class="nav-link foot px-2">Classes</a></li>
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