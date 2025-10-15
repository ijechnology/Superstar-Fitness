<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join: Superstar Fitness</title>
    <link rel="icon" href="asset/image/favicon.png" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/public.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
                        <strong class="d-none d-sm-block ms-1 join" style="background-color: #FFC436; color: #0C356A;">
                            Join Online
                            <i class="fa fa-location-arrow" style="background-color: #0C356A; color: #FFC436; margin-left: 5px; margin-right: 0px;"></i>
                        </strong>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 3rem;">
        <div class="d-flex flex-row">
            <div style="width: 20rem;align-content: center;margin-right: 3rem;">
                <p class="permanent-marker-regular animation-x" style="color: #FFC436;text-shadow: 7px 4px 3px #242930; font-size: 70px;">JOIN US</p>
                <p class="animation-x" style="color: wheat;">We are not about just fitness. Walk out looking, feeling
                    like a star. Sign up. Try us. Tour our clubs, meet our StarMakers. Get on the A-list today!</p>

            </div>
            <div class="animation" style="padding: 20px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); border-radius: 10px;background-color: #1a4377;width: 70%;">

                <form method="POST" action="addMembership.php">
                    <div class="col-md form-floating mb-3">
                        <input required type="text" class="form-control" id="first" name="firstname" placeholder="Type Membership First Name" style="background-color: transparent; border: 1px solid #FFC436;color: wheat;">
                        <label for="first" style="color: #FFC436;background-color: transparent;">First Name</label>
                    </div>
                    <div class="col-md form-floating mb-3">
                        <input required type="text" class="form-control" id="last" name="lastname" placeholder="Type Membership Last Name" style="background-color: transparent; border: 1px solid #FFC436;color: wheat;">
                        <label for="last" style="color: #FFC436;background-color: transparent;">Last Name</label>
                    </div>
                    <div class="col-md form-floating mb-3">
                        <input required type="email" class="form-control" id="Email" name="email" placeholder="Type Membership Email" style="background-color: transparent; border: 1px solid #FFC436;color: wheat;">
                        <label for="Email" style="color: #FFC436;background-color: transparent;">Active Email</label>
                    </div>
                    <div class="col-md form-floating mb-3">
                        <input required type="number" class="form-control" id="Number" name="phone" placeholder="Type Membership Number" style="background-color: transparent; border: 1px solid #FFC436;color: wheat;">
                        <label for="Number" style="color: #FFC436;background-color: transparent;">Phone Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="Package" name="package" aria-label="Floating label select example" style="background-color: #1a4377; border: 1px solid #FFC436;color: wheat;">
                            <option disabled default>Package</option>
                            <option value="1 Month">1 Month</option>
                            <option value="4 Month">4 Month</option>
                            <option value="1 Year">1 Year</option>
                        </select>
                        <label for="Package" style="color: #FFC436;background-color: transparent;">Package</label>
                    </div>
                    <button type="submit" class="nav-link d-sm-flex align-items-sm-center justify-content-center" style="width: -webkit-fill-available;" name="add">
                        <strong class="d-none d-sm-block ms-1 join" style="border: 1px solid #FFC436; width: 100%;">
                            Submit
                            <i class="fa fa-location-arrow"></i>
                        </strong>
                    </button>
                </form>
            </div>
        </div>
    </div>
    </form>
    <?php
    if (isset($_GET['successAdd']) && $_GET['successAdd'] === 'true') { ?>
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: #0C356A;">
                    <div class="modal-body" style="color: wheat;">
                    <span class="permanent-marker-regular" style="color: #FFC436;text-shadow: 7px 4px 3px #242930; font-size: 25px; text-align: center;">Your membership successfully added! </span><br>Your membership will be active after you do the payment on our Superstar Fitness offline place. 
                        <br>
                        <div class="text-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myModal').modal('show');
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <?php } ?>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myModal').modal('show');
        });
    </script>
</body>

</html>