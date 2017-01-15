<?php

include_once('lib/config.php');
include_once('lib/AuthFunctions.php');
include_once('lib/Functions.php');
include_once('lib/DBConnect.php');

sec_session_start();

if (login_check($mysqli) == true) {
    $user = $_SESSION['username'];

    if (isset($_GET['calls'])) {
        $title = "Calls";
    } else {
        $title = "Squad Panel";
    }

    include_once('lib/Include/Base.php');
    if (isset($_GET['calls'])) {
        include_once('lib/PageInclude/Squad/Calls.php');
    } else {
        include_once('lib/PageInclude/Squad/Index.php');
    }
    include_once('lib/Include/End.php');
} else {
    header("Location:/403");
}