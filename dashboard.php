<?php

require 'init.php';

if (!isset($_SESSION['id'])) {
    $user->redirect();
}

$title = 'Dashboard';
$admin_name = $_SESSION['name'];
$role = $_SESSION['role'];

// * STUDENTS
$students = $qb->getStudents();

// * PAYMENTS
$payments = $qb->getPayments();

// * TOTALS
$totalStudents = $qb->getTotalStudents();
$totalPayments = $qb->getTotalPayments();

// * set css styles according user role
if ($_SESSION['role'] === 'admin') {
    $width = 'width: 100%';
    $text_align = '';
} else {
    $width = 'width: 100px';
    $text_align = 'text-align: center';
}

require 'views/dashboard.view.php';
