<?php
session_start();
require_once './common/model/User.php';

if (isset($_POST['btnLogin']) && ($_POST['btnLogin'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = User::login($username, $password);
    }

    if ($user) {
        $_SESSION['role'] = $user['role'];
        header('Location: index.php');
        exit();
    } else {
        echo "Invalid username or password!";
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="groupBtn d-flex align-items-center justify-content-center">

                <a href="#" type="button" class="text-decoration-none text-uppercase btn activeBtn ">login</a>

                <a href="#" type="button" class="text-decoration-none text-uppercase btn">register</a>

            </div>

            <div class="loginWithSocial d-flex flex-column justify-content-center align-items-center">
                <div class="title text-white">
                    <p>Sign in with </p>
                </div>
                <div class="socialIcon">
                    <a href="#" class="text-decoration-none text-white">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-decoration-none text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-decoration-none text-white">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-decoration-none text-white">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <span class="text-white">or</span>
            </div>

            <form method="post" action="./login.php" class="d-flex flex-column justify-content-center align-items-center">
                <div class="input-group position-relative">
                    <input type="text" name="username" id="username" class="form-control" placeholder="">
                    <label class="position-absolute" for="username">Username</label>
                </div>
                <div class="input-group position-relative">
                    <input type="password" name="password" id="password" class="form-control" placeholder="">
                    <label class="position-absolute" for="password">Password</label>
                </div>
                <div class="feature row text-center">
                    <div class="d-lg-flex d-xxl-flex w-100">
                        <div class="saveInfor me-5">
                            <input type="checkbox" name="checkedSaveInfor" id="checkedSaveInfor" class="form-check-input">
                            <label for="checkedSaveInfor" class="text-white text-center">Remember me</label>
                        </div>
                        <div class="forgotPass">
                            <a href="#" class="text-decoration-none">Forgot password?</a>
                        </div>
                    </div>
                </div>
                <div class="btnLogin mt-5 ">
                    <input type="submit" class="btn btn-success" value="Login" name="btnLogin">
                </div>
            </form>
        </div>
    </div>



    <script src="./assets/jquery-3.7.1/jquery-3.7.1.js"></script>
    <script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>