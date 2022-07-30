<?php


require 'init.php';

if (isset($_SESSION['id'])) {
    $payments = $qb->getPayments();

    echo json_encode($payments);
} else {
    header('Location: dashboard.php');
}
