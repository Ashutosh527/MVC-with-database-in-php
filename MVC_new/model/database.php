<?php
$dsn = 'mysql:host=localhost;dbname=world';
$username = 'root';
$password = '';

try {
    // $db = new PDO($dsn, $username);
    $db = new PDO($dsn, $username, $password);
  
} catch (PDOException $e) {
//  die($e);
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    include('view/error.php');
    exit();
}
// die("bjrojhkj");