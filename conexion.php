<?php
$host = 'sql105.infinityfree.com'; 
$dbname = 'if0_42597283_dblibreria'; 
$username = 'if0_42597283'; 
$password = 'D4iUk6dh5wQXXm'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>