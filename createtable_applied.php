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
$sql = "CREATE TABLE applied (
id INT NOT NULL AUTO_INCREMENT, 
cname VARCHAR(30) NOT NULL,
pname VARCHAR(30) NOT NULL,
semail VARCHAR(50),
PRIMARY KEY(id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table applied created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>