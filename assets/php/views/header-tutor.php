<!doctype html>
<html class="fixed">
<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    <title><?php echo $title; ?> - Portal | R.E.A.CH - Monash South Africa</title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>" />

    <?php
    echo $views->addScript(Array("/assets/vendor/jquery/jquery.js"));
    ?>
    <script>
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <?php
    //$security->refreshUser($_SESSION['user']->getUserID());
    $views = new View();
    echo $views->addMeta(Array("width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"));
    echo $views->addStyle(Array("/assets/vendor/bootstrap/css/bootstrap.css",
        "/assets/vendor/font-awesome/css/font-awesome.css",
        "/assets/stylesheets/theme.css",
        "/assets/stylesheets/theme-admin-extension.css",
        "/assets/vendor/morris/morris.css",
        "/assets/stylesheets/colours/default.css"));
    ?>
    <link rel="shortcut icon" href="/assets/img/favicon.ico">

</head>
<body>
<div class="se-pre-con"></div>

<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="/" class="logo">
                <img src="/assets/img/logo.png" height="35" alt="Monash South Africa" />
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">
            <span class="separator"></span>
            <div id="userbox" class="userbox">

                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="/bin/user-profile/<?php echo $_SESSION['user']->getPicUrl(); ?>" alt="<?php echo htmlentities($_SESSION['user']->getUserfirstname()) .' ' . htmlentities($_SESSION['user']->getUserlastname());?>" class="img-circle" data-lock-picture="/bin/user-profile/<?php echo $_SESSION['user']->getPicUrl();?>" />
                    </figure>
                    <div class="profile-info">
                        <span class="name"><?php echo htmlentities($_SESSION['user']->getUserfirstname()) .' ' . htmlentities($_SESSION['user']->getUserlastname());?></span>
                        <span class="role"><?php echo htmlentities($_SESSION['user']->getPermissionName()); ?></span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="/portal/userprofile/"><i class="fa fa-user"></i>Profile</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="/assets/includes/logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">