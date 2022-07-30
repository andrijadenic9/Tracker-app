<?php

require 'init.php';

if (isset($_SESSION['id'])) {
    $email = $_POST['email'];

    $query = $db->prepare("SELECT * FROM students WHERE email = '$email'");
    $query->execute();

    echo json_encode($query->fetch(PDO::FETCH_OBJ));
} else {
    header('Location: dashboard.php');
}
