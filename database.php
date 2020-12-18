<?php
$dsn = 'mysql:host=localhost;dbname=amartag';
$username = 'amartag';
$password = "IBmc4XaOPPmdVg==";
try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}
    
?>