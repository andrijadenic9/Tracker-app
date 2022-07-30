<?php 

try{
    $db = new PDO('mysql:host=localhost;dbname=tracker-practice-db','root','');
} catch(PDOException $error){
    $error->getMessage();
}
