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
$sql = "CREATE TABLE studentname (
id INT NOT NULL AUTO_INCREMENT, 
sname VARCHAR(30) NOT NULL,
regno VARCHAR(30) NOT NULL,
email VARCHAR(50),
stream VARCHAR(50),
phone VARCHAR(50),
dob VARCHAR(20),
cgpa FLOAT,
address VARCHAR(100),
password VARCHAR(50),
PRIMARY KEY(id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table studentname created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>