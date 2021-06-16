<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo web_root; ?>assets/bootstrap.min.css">
    <link type="text/css" href="<?php echo web_root; ?>assets/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo web_root; ?>assets/style.css">

</head>

<body>

    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-d-ark" href="#" style="z-index: 222;">
            <i class="fa fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Administrator Panel</a>
                    <div id="close-sidebar">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="<?php echo web_root; ?>assets/images/user.png" alt="User picture">
                    </div>
                    <div class="user-info">
                        
                        <span class="user-name"><?php echo $_SESSION['UEMAIL'];?></span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li>
                            <a href="<?php echo web_root; ?>admin/">
                                <i class="fa fa-dashboard"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-list"></i>
                                <span>Lesson</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?php echo web_root; ?>admin/modules/lesson/index.php?view=add"> Add </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo web_root; ?>admin/modules/lesson/index.php"> List<span class="badge badge-pill badge-success">3</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-edit "></i>
                                <span>Exercises</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?php echo web_root; ?>admin/modules/exercises/index.php?view=add"> Add </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo web_root; ?>admin/modules/exercises/index.php"> List <span class="badge badge-pill badge-success">3</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="<?php echo web_root; ?>admin/modules/galery/index.php">
                                <i class="fa fa-table"></i>
                                <span> Gallery </span>
                                <span class="badge badge-pill badge-primary">2</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-mortar-board "></i>
                                <span>Manage Students</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?php echo web_root; ?>admin/modules/modstudent/index.php?view=add"> Add </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo web_root; ?>admin/modules/modstudent/index.php"> List <span class="badge badge-pill badge-success">5</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-users "></i>
                                <span>Manage Users</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?php echo web_root; ?>admin/modules/user/index.php?view=add"> Add </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo web_root; ?>admin/modules/user/index.php"> List <span class="badge badge-pill badge-success">3</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="<?php echo web_root; ?>admin/logout.php">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>

        <!-- sidebar-wrapper  -->
        <?php require_once $content; ?>

        <br><br> <br>
        <hr>
        <footer class="text-center">
            <div class="mb-2">
                <small>
                    &copy; 2021 e-learning system. All rights reserved.
                </small>
            </div>
        </footer>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <script src="<?php echo web_root; ?>assets/jquery3.3.1.min.js" type="text/javascript"></script>
    <script src="<?php echo web_root; ?>assets/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo web_root; ?>assets/bootstrap.min.js" type="text/javascript"></script>
    <script>
        jQuery(function($) {

            $(".sidebar-dropdown > a").click(function() {
                $(".sidebar-submenu").slideUp(200);
                if (
                    $(this)
                    .parent()
                    .hasClass("active")
                ) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .parent()
                        .removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .next(".sidebar-submenu")
                        .slideDown(200);
                    $(this)
                        .parent()
                        .addClass("active");
                }
            });

            $("#close-sidebar").click(function() {
                $(".page-wrapper").removeClass("toggled");
            });
            $("#show-sidebar").click(function() {
                $(".page-wrapper").addClass("toggled");
            });




        });
    </script>
</body>

</html>