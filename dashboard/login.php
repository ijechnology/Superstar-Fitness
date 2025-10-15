<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dasboard Superstar Fitness</title>
    <link rel="icon" href="../asset/image/favicon.png" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../asset/css/dashboard.css" />
</head>

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="../asset/image/dasboard/logo.svg" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form action="signin.php" method="POST">
                        <?php
                        if (isset($_GET['successLogin']) && $_GET['successLogin'] === 'false') { ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Wrong username or password!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                        } 
                        if (isset($_GET['success']) && $_GET['success'] === 'logout') { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            You have successfully logged out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa fa-user" aria-hidden="true" style="color: white;"></i>
                            </span>
                            <div class="form-floating">
                                <input type="text" class="form-control input_user" id="username" name="username" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>" placeholder="Username">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa fa-unlock-alt" style="color: white;" aria-hidden="true"></i>
                            </span>
                            <div class="form-floating">
                                <input type="password" class="form-control input_pass" id="password" name="password" value="<?php echo isset($password) ? htmlspecialchars($password) : ''; ?>" placeholder="Password">
                                <label for="floatingInputGroup1">Password</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" name="login" class="btn login_btn">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>