<?php

include_once('../../config.php');
include_once('../../Functions.php');

$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$DOB = $_POST['DOB'];

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "UPDATE e39.members SET `firstName` = '" . $firstName . "', `lastName` = '" . $lastName . "',`username` = '" . $username . "', `dob` = '" . $DOB . "' WHERE id = " . $id . ";";
if ($con->query($sql) == true) {
    header('Location: /admin?ud=' . $username);
} else {
    echo "Error: " . $sql . "<br /><br />" . $con->error;
}
