<?php
session_start();

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

$cname = $_GET['cname'];
$pname = $_GET['pname'];
$semail = $_SESSION['ssemail'];

$sql = "INSERT INTO applied (cname,pname,semail)
VALUES ('$cname', '$pname', '$semail')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();	
?>