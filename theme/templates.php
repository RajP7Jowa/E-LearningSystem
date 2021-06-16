<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="<?php echo web_root; ?>assets/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link type="text/css" href="<?php echo web_root; ?>assets/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .body {
            font-family: 'Gothic A1', sans-serif;
            font-size: 16px;
        }

        p {
            color: #6c6c6f;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #323233;
        }

        h1 {
            margin-bottom: 50px;
        }

        .navbar-brand span {
            color: #fed136;
            font-size: 25px;
            font-weight: 700;
            letter-spacing: 0.1em;
            font-family: 'Lobster', cursive;
        }

        .navbar-brand img {
            height: 70px;
            width: auto;
            margin-top: -30px
        }

        .navbar-nav .nav-item .nav-link {
            padding: 1.1em 1em !important;
            font-size: 120%;
            font-weight: 500;
            letter-spacing: 1px;
            color: #fff;
            font-family: 'Gothic A1', sans-serif;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #fed136;
        }

        .navbar-expand-md .navbar-nav .dropdown-menu {
            border-top: 3px solid #fed136;
        }

        .dropdown-item:hover {
            background-color: #fed136;
            color: #fff;
        }

        nav {
            -webkit-transition: padding-top .3s, padding-bottom .3s;
            -moz-transition: padding-top .3s, padding-bottom .3s;
            transition: padding-top .3s, padding-bottom .3s;
            border: none;
        }


        .banner {
            background-image: url('./assets/images/abstract-website-backgrounds.jpg');
            text-align: center;
            color: #fff;

            background-repeat: no-repeat;
            background-attachment: scroll;
            background-position: center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .banner-heading {
            font-family: 'Lobster',
                cursive;
            font-size: 75px;
            font-weight: 500;
            color: #fff;
        }

        .banner-sub-heading {
            font-family: 'Libre Baskerville', serif;
            font-size: 30px;
            font-weight: 300;
            color: #fff;
        }

        .text-intro {
            width: 90%;
            margin: auto;
            text-align: center;
            padding-top: 30px;
        }

        .bnr-img {
            width: 100%;
            height: auto;
            margin-top: -60px;
        }

        /* mobile view */
        @media (max-width:500px) {
            .navbar-nav {
                background-color: #000;
                border-top: 3px solid #fed136;
                color: #fff;
                z-index: 1;
                margin-top: 5px;
            }

            .navbar-nav .nav-item .nav-link {
                padding: 0.7em 1em !important;
                font-size: 100%;
                font-weight: 500;
            }

            .banner-text {
                padding: 25px 0 20px 0;
            }

            .banner-heading {
                font-size: 30px;
            }

            .banner-sub-heading {
                font-size: 10px;
                font-weight: 200;
                line-height: 10px;
                margin-bottom: 40px;
            }

        }

        @media (max-width:768px) {
            .banner-text {
                padding: 10px 0 10px 0;
            }

            .bnr-img,
            .navbar-brand img {
                height: 40px;
                width: auto;
            }
        }

        .wrap,
        .wrap1 {
            display: flex;
            background: white;
            padding: 0.8rem;
            border-radius: 0.5rem;
            box-shadow: 7px 7px 30px -5px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            width: 100%;

        }

        .wrap1:hover {
            background-image: linear-gradient(to left top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
            color: white;
            text-decoration: none;
        }

        .wrap:hover {
            background-color: #f8f9d2;
            background-image: linear-gradient(315deg, #f8f9d2 0%, #e8dbfc 74%);
            color: white;
            text-decoration: none;
        }

        .ico-wrap {
            margin: auto;
        }

        .mbr-iconfont {
            font-size: 4.5rem !important;
            color: #313131;
            margin: 1rem;
            padding-right: 1rem;
        }

        .vcenter {
            margin: auto;
        }

        .mbr-section-title3 {
            text-align: left;
        }

        h2 {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .display-5 {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: medium;
        }

        .mbr-bold {
            font-weight: 500;
        }

        .display-6 {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: small
        }

        section {
            padding-top: 2rem;
            padding-bottom: 1rem;
            background-color: #f1f4fa;
        }

        section h1 {
            border-bottom: 1px solid #dddddd;
            padding-bottom: 5px;
            font-size: xx-large;
        }
    </style>
    <script>
        $(document).on("scroll", function() {
            if ($(document).scrollTop() > 86) {
                $("#banner").addClass("shrink");
            } else {
                $("#banner").removeClass("shrink");
            }
        });
    </script>
</head>

<body>
    <div class="banner">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="#"> <img src="<?php echo web_root; ?>assets/images/mobile.png" alt="IMG"> <span> e-Learning</span></a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php"><i class="icon-home"></i> Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo web_root; ?>index.php?q=lesson"><i class="icon-list-alt"></i> Lesson</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo web_root; ?>index.php?q=exercises"><i class="icon-list-alt"></i> Exercises</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo web_root; ?>index.php?q=download"><i class="icon-download"></i> Downloads</a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                <?php echo $_SESSION['USERNAME']; ?>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="banner-text">
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?php echo web_root; ?>assets/images/mobile.png" alt="IMG" class="bnr-img">
                    </div>
                    <div class="col-md-8">
                        <div class="banner-heading">
                            Online e-Learning System
                        </div>
                        <div class="banner-sub-heading">
                            Glad to see you here !
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="bg-dark" style="width: 100%;">
        <div class="p-0 m-0">
            <ol class="breadcrumb red bg-dark text-white m-0">
                <li class="breadcrumb-item"><i class="fa fa-home mr-2 white-text" aria-hidden="true"></i>Dashboard</li>
                <li class="breadcrumb-item active"><i class="fa fa-circle mx-2 white-text" aria-hidden="true"></i><?php echo $title; ?></li>
            </ol>
        </div>

    </nav>

    <section>
        <div class="container">
            <?php check_message(); ?>
            <?php require_once $content; ?>
        </div>
    </section>
    <footer class="text-center p-3" style="border-top: 1px solid #dddddd">
        <div class="mb-2">
            <small>
                &copy; 2021 e-learning system. All rights reserved.
            </small>
        </div>
    </footer>

    <script src="<?php echo web_root; ?>assets/jquery3.3.1.min.js" type="text/javascript"></script>
    <script src="<?php echo web_root; ?>assets/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo web_root; ?>assets/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>