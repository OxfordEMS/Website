<?php

include_once('../../config.php');
include_once('../../Functions.php');

$id = $_POST['id'];
$email = $_POST['email'];
$address = $_POST['address'];
$cellPhone = $_POST['cellPhone'];
$homePhone = $_POST['homePhone'];

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "UPDATE e39.members SET `email` = '" . $email . "', `address` = '" . $address . "',`cellPhone` = '" . $cellPhone . "', `homePhone` = '" . $homePhone . "' WHERE id = " . $id . ";";
if ($con->query($sql) == true) {
    header('Location: /profile?up');
} else {
    echo "Error: " . $sql . "<br /><br />" . $con->error;
}
