<?php
$servername = "localhost";
$username = "root";
$password1 = "";
$dbname = "placement4";

// Create connection
$conn = new mysqli($servername, $username, $password1, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>