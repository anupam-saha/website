<?php
session_start();
if(!isset($_SESSION['ssemail']))
		{
			header("location:studentlogin.php?oklogin=1");
		}
	else{

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
$semail = $_SESSION['ssemail'];
$cname = $_GET['cname'];
$pname = $_GET['pname'];
$sql = "INSERT INTO applied (cname,pname,semail)
VALUES ('$cname', '$pname', '$semail')";

if ($conn->query($sql) === TRUE) {
	header("location:companydetails.php?cname=".$cname."&cgpa=".$_GET['cgpa']);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	}
?>