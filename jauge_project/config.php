<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id18793831_steel');
define('DB_PASSWORD', 'BSSF8T{G~J#aX#WK');
define('DB_NAME', 'id18793831_users');
 
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>