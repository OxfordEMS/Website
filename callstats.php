<?php

include_once('lib/config.php');
include_once('lib/AuthFunctions.php');
include_once('lib/Functions.php');
include_once('lib/DBConnect.php');

sec_session_start();

$title = "Call Stats";
$user = $_SESSION['username'];

include_once('lib/Include/Base.php');
include_once('lib/PageInclude/About/CallStats.php');
include_once('lib/Include/End.php');