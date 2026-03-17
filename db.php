<?php
$servername = "127.0.0.1"; 
$username = "root";
$password = "";
$database = "festival_calendar";
$port = 3306; 

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
