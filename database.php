<?php
    $user = 'root';
    $password = 'hello world';
    $database = 'mysql:host=localhost; dbname=StudentManagementSystem';

    try{
        $pdo = new PDO($database, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        die("Connection failed: " . $e->getMessage());
    }
?>