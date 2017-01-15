<!DOCTYPE html>
<html xmlns:http="http://www.w3.org/1999/xhtml">
<head profile="http://www.w3.org/2005/10/profile">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?> - Oxford Emergency Squad</title>

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">

    <link rel="apple-touch-icon" sizes="57x57" href="../../assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../../assets/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon-16x16.png">
    <link rel="manifest" href="../../assets/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background-image: url("../../assets/img/njstar.png");
        }
    </style>
</head>
<body style="background-color: #cecece; padding: 10px">
<div class="container" style="background-color: #ffffff; border-top: 8px solid #110498; border-bottom: 4px solid #110498;">

    <div  style="padding: 15px" class="text-lg-center" id="topLogo"><img src="../../assets/img/39Rescue-92.png"></div>

    <nav class="navbar navbar navbar-dark bg-inverse">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/"><b>Home</b></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/" id="aboutUsDT" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>About Us</b></a>
                <div class="dropdown-menu" aria-labelledby="aboutUsDT">
                    <a class="dropdown-item" href="/whatwedo">What We Do</a>
                    <a class="dropdown-item" href="/history">History</a>
                    <a class="dropdown-item" href="/Equipment.php">Rigs</a>
                    <a class="dropdown-item" href="/callstats">Call Stats</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/join"><b>Join</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/events"><b>Events</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/donate"><b>Donate</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/members"><b>Members</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/photos"><b>Photos</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/links"><b>Links</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact"><b>Contact</b></a>
            </li>


            <?php

            if (login_check($mysqli) == true) {
                echo('
                <li class="nav-item float-lg-right">
                    <a class="nav-link" href="/lib/ProcessLogout.php"><b>Logout</b></a>
                </li>
                ');
                if (isAdmin($user)) {
                    echo('
                    <li class="nav-item float-lg-right">
                        <a class="nav-link" href="/admin"><b>Admin</b></a>
                    </li>
                    ');
                }
                echo('
                <li class="nav-item dropdown float-lg-right">
                <a class="nav-link dropdown-toggle" href="/" id="squadDT" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Squad Panel</b></a>
                <div class="dropdown-menu" aria-labelledby="squadDT">
                    <a class="dropdown-item" href="/squad">Main Panel</a>
                    <a class="dropdown-item" href="/squad?calls">Call Management</a>
                </div>
            </li>
                <li class="nav-item float-lg-right">
                        <a class="nav-link" href="/profile"><b>User: </b> ' . $user . '</a>
                </li>
                ');
            } else {
                echo('
                    <li class="nav-item float-lg-right">
                        <a class="nav-link" href="/login"><b>Login</b></a>
                    </li>
                    <span class="navbar-text float-xs-right text-danger">
                        <b>EMERGENCY DIAL 9-1-1</b>
                    </span>
                ');
            }

            ?>
        </ul>
    </nav>
    <div style="padding-bottom: 15px"></div>