<?php
session_start();
if(!isset($_SESSION['ssemail']))
		{
			header("location:studentlogin.php?oklogin=1");
		}
		else{
$del = $_SESSION['ssemail'];
		$cname = $_GET['cname'];
		$pname = $_GET['pname'];
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

$sql = "DELETE FROM applied WHERE cname='$cname' AND pname='$pname' AND semail='$del'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("location:appliedcompany.php?email=".$del);
		}
?>