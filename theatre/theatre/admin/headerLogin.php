<!doctype html>
<html lang="en">
<head>
    <?php

    const ROOT_DIR = 'C:\Users\User\PhpstormProjects\theatrecompleted\theatre\theatre';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#000">
    <script src="https://kit.fontawesome.com/18398d078f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= ROOT_DIR ?>css/nav.css">
    <link rel="stylesheet" type="text/css" href="<?= ROOT_DIR ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= ROOT_DIR ?>css/style1.css">

    <!-- external links for the JS slider -->
    <link href="<?= ROOT_DIR ?>thumbnailSlider/1/thumbs2.css" rel="stylesheet"/>
    <link href="<?= ROOT_DIR ?>thumbnailSlider/1/thumbnail-slider.css" rel="stylesheet" type="text/css"/>
    <script src="<?= ROOT_DIR ?>thumbnailSlider/1/thumbnail-slider.js" type="text/javascript"></script>
    <title>Movie Theatre</title>
</head>
<body>
<nav id="navbar">
    <span class="nav-toggle" id="js-nav-toggle">
        <i class="fas fa-bars"></i>
    </span>
    <a href="<?=ROOT_DIR?>welcome">
        <div class="logo">
        <span class="icon circle-1"></span>
        <span class="icon circle-2"></span>
        <span class="icon circle-3"></span>
        <p>Movie Theatre</p>
    </div>
    </a>

    <?php
    /** @var $hn array */
    /** @var $un array */
    /** @var $pw array */
    /** @var $db array */
    /** @var $admin array */
    include_once "C:\Users\User\PhpstormProjects\theatrecompleted\theatre\theatre\connection\conn.php";

    //cookie to save name for 24hours

    $conn = mysqli_connect($hn, $un, $pw, $db);

    $stmt = $conn->prepare('SELECT usr.id, usr.is_admin
    FROM theatre.user usr');
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $admin);
    $stmt->fetch();


    if (!isset($_SESSION['loggedin'])) {
        echo '<ul class="js-menu">
        <li><a href="' . ROOT_DIR . 'welcome">Home</a></li>
     <li><a href="' . ROOT_DIR . 'movies/">Movies Page</a></li>
    <li><a href="' . ROOT_DIR . 'blog/">blog</a></li>
    <li><a href="' . ROOT_DIR . 'reviews/">reviews</a></li>
    <li><a href="' . ROOT_DIR . 'contact/">Contact US</a></li>
     <li><a href="' . ROOT_DIR . 'login"><i class="far fa-user" title="LOGIN/REGISTER"></i></a></li>

    </ul>';
    } else {
        echo '<ul class="js-menu">';
        if ($_SESSION['is_admin'] == 1) {
            echo '<li><a href="' . ROOT_DIR . 'admin/">administrator</a></li>';
            echo '<li><a href="' . ROOT_DIR . 'admin/users.php">review users</a></li>';
            echo '<li><a href="' . ROOT_DIR . 'admin/addBlog.php">Add blogs</a></li>';
        } elseif ($_SESSION['is_admin'] == 0) {
            echo '<li><a href="' . ROOT_DIR . 'user/">user Home</a></li>';
        }
        echo '<li><a href="' . ROOT_DIR . 'movies/">movies</a></li>
                <li><a href="' . ROOT_DIR . 'blog/">blogs</a></li>
                <li><a href="' . ROOT_DIR . 'reviews/">reviews</a></li>
                    <li><a href="' . ROOT_DIR . 'contact/">Contact</a></li>
                <li><a href="' . ROOT_DIR . 'logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
        </ul>';

    }


    ?>
</nav>

<script src="<?= ROOT_DIR ?>js/nav.js"></script>
