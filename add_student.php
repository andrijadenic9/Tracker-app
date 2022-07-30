<?php

require 'connection.php';

// * VALIDATION ADD STUDENT FORM
if (isset($_POST['add_student'])) {
    $add_error = [];
    $add_student = [];

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $add_student['name'] = $_POST['name'];
    } else {
        $add_error['name'] = 'Required';
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $add_student['email'] = $_POST['email'];
    } else {
        $add_error['email'] = 'Required';
    }

    if (count($add_error) === 0) {
        $add_student['info'] = $_POST['info'];

        $query = $db->prepare("INSERT INTO students (name, email, info) VALUES (:name, :email, :info)");
        $query->execute($add_student);
    }
}

header('Location: dashboard.php');
