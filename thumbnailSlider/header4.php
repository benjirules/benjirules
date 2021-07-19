<!doctype html>
<html lang="en">
<head>
    <?php

    const ROOT_DIR = 'https://127.0.0.1/htdocs/willytheatre/';
    ?>    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/18398d078f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= ROOT_DIR ?>css/nav.css">
    <link rel="stylesheet" type="text/css" href="<?= ROOT_DIR ?>css/style.css">
    <!--slider -->
    <link href="<?= ROOT_DIR ?>thumbnailSlider/4/thumbs2.css" rel="stylesheet" />
    <link href="<?= ROOT_DIR ?>thumbnailSlider/4/thumbnail-slider.css" rel="stylesheet" />
    <script src="<?= ROOT_DIR ?>thumbnailSlider/4/thumbnail-slider.js" type="text/javascript"></script>



    <title></title>
</head>
<body>
<header>

</header>
<nav id="navbar">
    <span class="nav-toggle" id="js-nav-toggle">
        <i class="fas fa-bars"></i>
    </span>

    <div class="logo">
        <span class="icon circle-1"></span>
        <span class="icon circle-2"></span>
        <span class="icon circle-3"></span>
    </div>
    <ul id="js-menu">
        <li><a href="<?= ROOT_DIR ?>">Home Page</a></li>
        <li><a href="<?= ROOT_DIR ?>register/">Registration Page</a></li>
        <li><a href="<?= ROOT_DIR ?>login/">Login Page</a></li>
        <li><a href="<?= ROOT_DIR ?>movies/">Movies</a></li>
        <li><a href="<?= ROOT_DIR ?>blog/">Blogs</a></li>
        <li><a href="<?= ROOT_DIR ?>reviews/">Reviews</a></li>
    </ul>
</nav>