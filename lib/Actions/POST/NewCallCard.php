<?php

include_once('../../config.php');
include_once('../../Functions.php');

$scid = $_POST['scid'];
$wccid = date("y") . $_POST['wccid'];
$callType = $_POST['callType'];
$description = strtoupper($_POST['description']);
$location = strtoupper($_POST['location']);
$locTown = $_POST['locTown'];
$locAbout = strtoupper($_POST['locAbout']);
$cardTime = strtotime($_POST['cardTime']);

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "INSERT INTO e39.calls (scid, wccid, callType, description, location, locTown, locAbout, cardTime) VALUES 
('$scid', '$wccid', '$callType', '$description', '$location', '$locTown', '$locAbout', '$cardTime')";

if ($con->query($sql) == true) {
    header('Location: /squad?calls&nc');
} else {
    echo "Error: " . $sql . "<br /><br />" . $con->error;
}