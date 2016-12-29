<?php

include_once('../../config.php');
include_once('../../Functions.php');

$id = $_POST['id'];
$rank = $_POST['rank'];
$tType = $_POST['tType'];

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "UPDATE e39.members SET `rank` = '" . $rank . "', `tType` = '" . $tType . "' WHERE id = " . $id . ";";
if ($con->query($sql) == true) {
    header('Location: /admin?ud=' . getUserFromID($id));
} else {
    echo "Error: " . $sql . "<br /><br />" . $con->error;
}
