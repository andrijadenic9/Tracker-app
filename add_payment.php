<?php

require 'init.php';

if (isset($_POST['add-payment'])) {
    $id = $_POST['id'];
    $payment = $_POST['payment'];

    $query = $db->prepare("INSERT INTO payments (student_id, amount) VALUES ('$id', '$payment')");
    $query->execute();
}

header('Location: dashboard.php');