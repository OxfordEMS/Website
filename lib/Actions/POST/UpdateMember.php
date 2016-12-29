<?php

include_once('../../config.php');

$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$address = $_POST['address'];
$cellPhone = $_POST['cellPhone'];
$homePhone = $_POST['homePhone'];
$rank = $_POST['rank'];
$emt = $_POST['EMT'];
$tType = $_POST['tType'];
$oems = $_POST['oems'];

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "UPDATE e39.members SET `firstName` = '" . $firstName . "', `lastName` = '" . $lastName . "',`username` = '" . $username . "',`email` = '" . $email . "',
 `dob` = '" . $DOB . "',`address` = '" . $address . "',`cellPhone` = '" . $cellPhone . "',`homePhone` = '" . $homePhone . "',
 `rank` = '" . $rank . "',`isEMT` = '" . $emt . "',`tType` = '" . $tType . "', `oems` = '" . $oems . "' WHERE id = " . $id . ";";
if ($con->query($sql) == true) {
    header('Location: /admin?ud=' . $username);
} else {
    echo "Error: " . $sql . "<br /><br />" . $con->error;
}
