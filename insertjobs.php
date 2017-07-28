<?php
session_start();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (!empty($_POST)) {
	$msg = "";
	$pname= test_input($_POST["pname"]);
	$package= test_input($_POST["package"]);
	$location= test_input($_POST["location"]);
	$criteria= test_input($_POST["criteria"]);
	
	
	
	if (empty($_POST["pname"]) || empty($_POST["package"]) || empty($_POST["location"]) || empty($_POST["criteria"])){
		$msg.="<li>Please full fill all requirement";
	} 
  
	if($msg!="")
		{
			header("location:postjobs.php?error=".$msg."&pname=".$pname."&package=".$package."&location=".$location."&criteria=".$criteria."&requirements=".$requirements);
		}
		else
		{	$cname=$_SESSION['scname'];
			$pname=$_POST['pname'];
			$package=$_POST['package'];
			$location=$_POST['location'];
			$criteria=$_POST['criteria'];
			$requirements = $_POST['requirements'];
					
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
if(isset($_SESSION['editing']))
{	
	$post = $_SESSION['editing'];
	 $sql = "UPDATE jobs SET 
       cname = '$cname', 
       pname = '$pname', 
       package = '$package', 
       location = '$location', 
       criteria = '$criteria',
		requirements = '$requirements'
  WHERE pname = '$post' AND cname = '$cname' ";
	
}
else
{
$sql = "INSERT INTO jobs (cname,pname,package,location,criteria,requirements)
VALUES ('$cname', '$pname', '$package','$location','$criteria','$requirements')";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
			
			 if(isset($_SESSION['editing'])){
				 unset($_SESSION['editing']);
			 header("location:companypage.php");
			 }
			 else{
			header("location:postjobs.php?okg=1");
			 }
			
			
		}
}
else
	{
		header("location:home.php");
	}		
?>