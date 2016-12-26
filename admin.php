<?php

include_once('lib/config.php');
include_once('lib/AuthFunctions.php');
include_once('lib/Functions.php');
include_once('lib/DBConnect.php');

sec_session_start();
$title = "Admin Panel";
$user = $_SESSION['username'];

if (login_check($mysqli) == true) {
    if (isAdmin($user)) {
        include_once('lib/Include/Base.php');
        include_once('lib/PageInclude/Admin/Index.php');
        include_once('lib/Include/End.php');
    } else {
        header("Location:/403");
    }
} else {
    header("Location:/403");
}