<?php

include_once('../../config.php');

$id = $_GET['id'];

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "UPDATE e39.contact SET status = 1 WHERE id = $id";
if ($con->query($sql) == true) {
    header('Location: /admin?ctc');
} else {
    echo "Error: " . $sql . "<br /><br />" . $con->error;
}
