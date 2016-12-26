<?php
include_once('config.php');

$mysqli = new mysqli(HOST, USER, PASS, DB);
if ($mysqli->connect_error) {
    header("Location: ../error?err=7");
    exit();
}