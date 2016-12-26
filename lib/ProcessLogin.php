<?php
include_once 'DBConnect.php';
include_once 'AuthFunctions.php';

sec_session_start(); // Our custom secure way of starting a GET session.
if (isset($_POST['email'], $_POST['p'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['p']; // The hashed password.

    if (login($email, $password, $mysqli) == true) {
        // Login success
        header("Location: /index");
        exit();
    } else {
        // Login failed
        header('Location: /error?err=8');
        exit();
    }
} else {
    // The correct POST variables were not sent to this page.
    header('Location: /error?err=8');
    exit();
}
