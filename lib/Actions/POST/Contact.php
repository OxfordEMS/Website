<?php

include_once('../../config.php');

$now = strtotime("now");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$ip = $_POST['ip'];
$ptime = $now;

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "INSERT INTO e39.contact (name, email, phone, message, ip, ptime) VALUES 
('$name', '$email', '$phone', '$message', '$ip', '$ptime')";

if ($con->query($sql) == true) {
    #EMAIL HERE
    $to = "cwilson15205@gmail.com";
    $subject = "Oxford EMS: New Contact Us Message";
    $msg = '<h1 align="center">New Message From: <small>' . $name . '</small></h1>';
    $msg .= '<h3 align="center">Sent On: <small>' . date("m/d/y h:i A", $ptime) . '</small></h3>';
    $msg .= '<h3 align="center">Contact Email: <small>' . $email . '</small></h3>';
    $msg .= '<h3 align="center">Contact Phone: <small>' . $phone . '</small></h3>';
    $msg .= '<p align="center">' . $message . '</p>';
    $msg .= '<hr/>';
    $msg .= '<p align="center">User IP: <small>' . $ip . '</small></p>';
    $msg .= '<hr/>';
    $msg .= '<div align="center"><a href="http://39rescue.cf/admin">Click to go to the admin panel</a></div>';
    $headers = "From: contact@39rescue.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail($to, $subject, $msg, $headers);
    header('Location: /contact?sp');
} else {
    echo "Error: " . $sql . "<br /><br />" . $con->error;
}