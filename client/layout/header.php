<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sown Fashion Shop</title>
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  bootstrap css -->
    <link rel="stylesheet" href="../../assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../../assets/css/main.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.html">
                <img src="../../assets/images/shopping-bag-icon.png" alt="site icon">
                <span class="text-uppercase fw-lighter ms-2">SOWN ATTIRE</span>
            </a>

            <div class="order-lg-2 nav-btns">
                <button type="button" class="btn position-relative">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
                </button>
                <button type="button" class="btn position-relative">
                    <i class="fa fa-heart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
                </button>
                <button type="button" class="btn position-relative">
                    <i class="fa fa-search"></i>
                </button>
            </div>

            <button
                type="button"
                class="navbar-toggler border-0"
                data-bs-toggle="collapse"
                data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2 text-uppercase text-dark">
                        <a href="#header" class="nav-link">home</a>
                    </li>
                    <li class="nav-item px-2 py-2 text-uppercase text-dark">
                        <a href="#collection" class="nav-link">collection</a>
                    </li>
                    <li class="nav-item px-2 py-2 text-uppercase text-dark">
                        <a href="#special" class="nav-link">specials</a>
                    </li>
                    <li class="nav-item px-2 py-2 text-uppercase text-dark">
                        <a href="#blog" class="nav-link">blogs</a>
                    </li>
                    <li class="nav-item px-2 py-2 text-uppercase text-dark">
                        <a href="#about" class="nav-link">about us</a>
                    </li>
                    <li class="nav-item px-2 py-2 text-uppercase text-dark">
                        <a href="#popular" class="nav-link">popular</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- header -->
    <header id="header" class="vh-100 carousel slide" data-bs-ride="carousel">
        <div class="container h-100 d-flex align-items-center carousel-inner">
            <div class="text-center carousel-item active">
                <h2 class="text-capitalize text-white">best colection</h2>
                <h1 class="text-uppercase text-white fw-bold py-4">new arrivals</h1>
                <a href="" class="btn mt-3 text-uppercase">shop now</a>
            </div>
            <div class="text-center carousel-item">
                <h2 class="text-capitalize text-white">best price & offer</h2>
                <h1 class="text-uppercase text-white fw-bold py-4">new season</h1>
                <a href="" class="btn mt-3 text-uppercase">buy now</a>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide>
            <span class="carousel-control-next-icon"></span>
        </button>
    </header>
    <!-- end header -->