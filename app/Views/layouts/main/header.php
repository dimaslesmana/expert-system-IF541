<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Expert System Sigma-4">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Font Bungee-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <!--Font Roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!--Style CSS-->
    <link rel="stylesheet" href="/assets/css/style.css">

    <?php
    if (!empty($custom_css)) {
        foreach ($custom_css as $css) {
            echo $css;
        }
    }
    ?>

    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img class="navbar-logo" src="/assets/images/Laptop guide.png" height="100%">
                Laptop Guide
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/#home" class="nav-link">Home &nbsp;&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a href="/#about" class="nav-link">About Us &nbsp;&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a href="/guide" class="nav-link">Guide &nbsp;&nbsp;</a>
                    </li>
                    <?php if (session()->get('logged_in')) : ?>
                        <li class="nav-item">
                            <a href="/favorites" class="nav-link">Favorites &nbsp;&nbsp;</a>
                        </li>
                    <?php endif; ?>
                    <?php if (session()->get('logged_in')) : ?>
                        <li class="nav-item">
                            <a href="/auth/logout" class="btn btn-logout">Logout</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="/auth/login" class="btn btn-login">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>