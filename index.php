<?php

require 'init.php';

$title = 'Login';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = false;

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email_error = 'Email is required';
        $errors = true;
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $password_error = 'Password is required';
        $errors = true;
    }

    if (!$errors) {
        $user->login($email, $password);
    }
}

require 'views/index.view.php';
