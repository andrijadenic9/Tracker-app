<?php

class User
{
    public $qb;

    public function __construct($qb)
    {
        $this->qb = $qb;
    }


    public function login($email, $password)
    {
        if ($user = $this->qb->findUser($email, $password)) {
            $_SESSION['id'] = $user->id;
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;
            $_SESSION['role'] = $user->role;
            $this->redirect();
        } else {
            $this->redirect();
        }
    }


    public function redirect()
    {
        if (isset($_SESSION['id'])) {
            header('Location: dashboard.php');
        } else {
            header('Location: index.php?user=not_exist');
        }
    }


    public function isAdmin()
    {
        return $_SESSION['role'] === 'admin';
    }
}

$user = new User($qb);
