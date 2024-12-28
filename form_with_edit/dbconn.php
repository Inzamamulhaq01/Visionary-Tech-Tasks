<?php

$hostname = 'localhost';
$username = 'root';
$pass = 'root'; 
$dbname = 'new';



$conn = new mysqli($hostname, $username, $pass, $dbname, '3307'); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>