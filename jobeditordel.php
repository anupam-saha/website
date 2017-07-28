<?php
session_start();
if(!isset($_SESSION['semail']))
		{
			header("location:companylogin.php?oklogin=1");
		}
else
{

	if(isset($_GET['okedit']))
	{
		header("location:postjobs.php?okedit=1&pname=".$_GET['pname']."&cname=".$_GET['cname']."&package=".$_GET['package']."&location=".$_GET['location']."&criteria=".$_GET['criteria']."&requirements=".$_GET['requirements']);
	}
	else
	{
		$del = $_GET['pname'];
		$cname = $_GET['cname'];
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

$sql = "DELETE FROM jobs WHERE pname='$del' AND cname='$cname'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("location:companypage.php");
	}
}
?>