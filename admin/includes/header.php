<?php

include "../includes/functions.php";

if(!isset($_SESSION['user'])) {
    redirect("login.php");
}

$user = findById("users", $_SESSION['user']);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo getSettings("title") ?> | Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reponsive.css">

</head>

<body>

<div class="layout has-sidebar fixed-sidebar fixed-header">
    <!-- ---------------------Side bar-------------- -->
    <aside id="sidebar" class="sidebar break-point-lg has-bg-image">
        <!-- <div class="image-wrapper">
            <img src="assets/images/2.jpg" />
        </div> -->
        <div class="sidebar-layout">
            <div class="sidebar-header d-flex justify-content-center">

                <a id="btn-toggle2" href="#" class="sidebar-toggler break-point-lg">
                    <!-- <i class="bi bi-list f-22 text-white"></i> -->
                </a>
                <div class="d-flex justify-content-center align-items-center">
                     <img width="70" src="assets/images/<?php echo getSettings('logo') ?>" alt="" class="img-fluid logo">
                </div>
            </div>
            <div class="sidebar-content">
                <nav class="menu open-current-submenu">
                    <ul>
                        <li class="menu-item">
                            <a href="#">
                                    <span class="menu-icon">
                                        <i class="bi bi-ui-checks-grid"></i>
                                    </span>
                                <span class="menu-title text-dark-blue mt-1">Dashboard</span>
                            </a>
                        </li>

                    </ul>
                    <div class="menu-item py-3">
                        <span class="ps-4 f-14 w-500 text-light-white ls-3 menu-heading ">Manage</span>
                    </div>
                    <ul>
                        <li class="menu-item sub-menu">
                            <a href="#">
                                    <span class="menu-icon">
                                        <i class="bi bi-files"></i>
                                    </span>
                                <span class="menu-title">Pages</span>

                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="about.php">
                                            <span class="menu-title">-&nbsp;&nbsp;&nbsp;About</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="edit-section.php?id=3">
                                            <span class="menu-title">-&nbsp;&nbsp;&nbsp;Our Story</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="products.php">
                                    <span class="menu-icon">
                                        <i class="bi bi-basket"></i>
                                    </span>
                                <span class="menu-title">Products</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="words.php">
                                    <span class="menu-icon">
                                        <i class="bi bi-card-text"></i>
                                    </span>
                                <span class="menu-title">Words</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="settings.php">
                                    <span class="menu-icon">
                                        <i class="bi bi-gear"></i>
                                    </span>
                                <span class="menu-title">Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </aside>

    <!-- --------------------Main Side-------------- -->
    <div id="overlay" class="overlay"></div>
    <div class="layout">
        <!-- ----------------Header--------------- -->
        <header class="header">
            <a id="btn-collapse" href="#" class="align-self-center ">
                <i class="bi bi-filter-left f-28 btn-head"></i>
            </a>
            <a id="btn-toggle" href="#" class="sidebar-toggler break-point-lg align-self-center">
                <i class="bi bi-filter-left f-28  btn-head"></i>
            </a>
            <div class="d-flex ms-auto user-account px-2">

                <div class="user-icon">
                    <i class="bi bi-person "></i>
                </div>
                <div class="dropdown profile-dropdown">
                    <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $user->username ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profile</a>
                        </li>
                        <li><a class="dropdown-item" href="?a=logout"><i class="bi bi-box-arrow-left me-2"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>