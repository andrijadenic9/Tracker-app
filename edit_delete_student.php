<?php

require 'init.php';

if (isset($_POST['edit_student'])) {

    $edit_data = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'info' => $_POST['info']
    ];

    $query = $db->prepare("UPDATE students SET name = :name, email = :email, info = :info WHERE id = :id");
    $query->execute($edit_data);
}

if (isset($_POST['delete_student'])) {
    $email = $_POST['email'];

    $query = $db->prepare("DELETE students, payments
                            FROM students
                            INNER JOIN payments
                            ON students.id = payments.student_id
                            AND students.email = '$email'");
    $query->execute();

    $query = $db->prepare("DELETE FROM students WHERE email = '$email'");
    $query->execute();
}

header('Location: dashboard.php');
