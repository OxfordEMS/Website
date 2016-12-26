<?php

include_once('lib/config.php');
include_once('lib/AuthFunctions.php');
include_once('lib/Functions.php');
include_once('lib/DBConnect.php');

sec_session_start();

if (login_check($mysqli) == true) {
    $user = $_SESSION['username'];
    $title = "Edit " . $user;

    include_once('lib/Include/Base.php');
    include_once('lib/PageInclude/Admin/EditMember.php');
    include_once('lib/Include/End.php');
} else {
    header("Location:/403");
}