<?php

class QueryBuilder
{
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }



    public function findUser($email, $password)
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $query->execute();

        if ($query->rowCount() === 1) {
            return $query->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }



    public function getStudents()
    {
        $query = $this->db->prepare("SELECT * FROM students");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }



    public function getPayments()
    {
        $query = $this->db->prepare("SELECT p.amount, p.created_at, s.email, s.name
                                     FROM payments as p
                                     JOIN students as s ON s.id = p.student_id");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }



    public function getTotalStudents()
    {
        $query = $this->db->prepare("SELECT COUNT(id) as id FROM students");
        $query->execute();

        return $query->fetch(PDO::FETCH_OBJ);
    }



    public function getTotalPayments()
    {
        $query = $this->db->prepare("SELECT SUM(amount) as totalAmount FROM payments");
        $query->execute();

        return $query->fetch(PDO::FETCH_OBJ);
    }
}

$qb = new QueryBuilder($db);