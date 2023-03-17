<?php

include_once "includes/functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo getSettings("title") ?></title>
</head>

<body>
<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand navbar-light ">
            <div class="w-100">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                    <ul class="navbar-nav w-100 justify-content-around  mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($active) && $active == 'home' ? 'active-link' : '' ?>" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($active) && $active == 'products' ? 'active-link' : '' ?>" href="product.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($active) && $active == 'about' ? 'active-link' : '' ?>" href="about-us.php">About</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?php echo isset($active) && $active == 'story' ? 'active-link' : '' ?>" href="our-story.php">Our Story</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</header>