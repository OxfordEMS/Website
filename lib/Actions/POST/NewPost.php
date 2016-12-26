<?php

include_once('../../config.php');

$now = strtotime("now");

$uep = $_POST['post'];
$substr="'";
$attachment="\\";
$strPost = str_replace($substr, $attachment.$substr, $uep);

$title = $_POST['title'];
$post = $strPost;
$postedBy = $_POST['postedBy'];
$postedOn = $now;

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "INSERT INTO e39.news (title, post, postedBy, postedOn) VALUES 
('$title', '$post', '$postedBy', '$postedOn')";

if ($con->query($sql) == true) {
    header('Location: /admin?nnp=' . $title);
} else {
    echo "Error: " . $sql . "<br /><br />" . $con->error;
}