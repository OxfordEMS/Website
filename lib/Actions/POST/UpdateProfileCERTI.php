<?php

include_once('../../config.php');
include_once('../../Functions.php');

$id = $_POST['id'];
$oems = $_POST['oems'];

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "UPDATE e39.members SET `oems` = '" . $oems . "' WHERE id = " . $id . ";";
if ($con->query($sql) == true) {
    header('Location: /profile?up');
} else {
    echo "Error: " . $sql . "<br /><br />" . $con->error;
}
