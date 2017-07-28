<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE files (
id INT,
filename VARCHAR(500) NOT NULL,
name VARCHAR(500) NOT NULL,
path VARCHAR(500) NOT NULL,
PRIMARY KEY(id)
);";

if ($conn->query($sql) === TRUE) {
    echo "Table files created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>