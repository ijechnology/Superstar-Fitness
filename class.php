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
    <div class="px-4 py-5 text-center"
        <?php
        include ("dashboard/connect.php");
        $type = $_GET['type'];
        $sql = "select * from classes, types where types.name = classes.type AND types.name = '$type' order by classes.id asc";
        $q1 = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_array($q1);
        ?>
        style="background-image: url(asset/image/banner/<?=$data[12]?>);background-size: cover; margin-bottom: 12rem;">
        <div class="container px-1 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start animation-x" style="margin-top: 8rem;">
                    <h1 class="display-4 fw-bold lh-1 mb-3 permanent-marker-regular"
                        style="font-size: 90px;color: #FFC436;text-shadow: 7px 4px 3px #0C356A;"><?=$data[1]?> </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding: 0 11rem; margin-bottom: 12rem;">
        <h6 class="permanent-marker-regular animation-x" style="color: wheat;text-shadow: 7px 4px 3px #242930;"><?=$data['type']?>
        </h6>
        <h1 class="permanent-marker-regular animation-x"
            style="color: #FFC436;text-shadow: 7px 4px 3px #242930;font-size: 80px;"><?=$data[1]?></h1>
        <p class="text-justify animation-x" style="color: wheat;"><?=$data['description']?></p>
        <div>
            <div class="row align-items-end animation" style="margin-top: 30px;">
                <div class="col"
                    style="margin: 0px 20px; padding: 20px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); border-radius: 10px;">
                    <h5 style="color: wheat;font-weight: 700;">INTENSITY</h5>
                    <h3 class="permanent-marker-regular" style="color: #FFC436;"><?=$data['intensity']?></h3>
                </div>
                <div class="col"
                    style="margin: 0px 20px; padding: 20px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); border-radius: 10px;">
                    <h5 style="color: wheat;font-weight: 700;">COMPLEXITY</h5>
                    <h3 class="permanent-marker-regular" style="color: #FFC436;"><?=$data['complexity']?></h3>
                </div>
                <div class="col"
                    style="margin: 0px 20px; padding: 20px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); border-radius: 10px;">
                    <h5 style="color: wheat;font-weight: 700;">DURATION</h5>
                    <h3 class="permanent-marker-regular" style="color: #FFC436;"><?=$data['duration']?></h3>
                </div>
            </div>
        </div>
        <a class="nav-link d-sm-flex align-items-sm-center justify-content-center animation" href="join.php">
            <strong class="d-none d-sm-block ms-1 join" style="border: 1px solid #FFC436; margin-top: 20px;">
                Join Us Now
                <i class="fa fa-location-arrow"></i>
            </strong>
        </a>
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