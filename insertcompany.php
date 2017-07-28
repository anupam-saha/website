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
	$cname= test_input($_POST["cname"]);
	$hrname= test_input($_POST["hrname"]);
	$email= test_input($_POST["email"]);
	$PhoneNumber= test_input($_POST["PhoneNumber"]);
	$website= test_input($_POST["website"]);
	$password= test_input($_POST["password"]);
	
	if (empty($_POST["PhoneNumber"]) || empty($_POST["cname"]) || empty($_POST["hrname"]) || empty($_POST["email"]) || empty($_POST["website"]) || (empty($_POST["password"]) && !isset($_SESSION['oldcname']))) {
		$msg.="<li>Please full fill all requirement";
	} 
	if (!preg_match("/^[a-zA-Z ]*$/",$cname) &&!empty($_POST["cname"])) 
	{
      $msg.="<li>Only spaces and letters are allowed in company name";
    }
	if (!preg_match("/^[a-zA-Z ]*$/",$hrname) && !empty($_POST["hrname"])) 
	{
      $msg.="<li>Only spaces and letters are allowed in hrname";
    }
  
  if(!ereg("^[a-z0-9_]+[a-z0-9_.]*@[a-z0-9_-]+[a-z0-9_.-]*\.[a-z]{2,5}$",$_POST['email']) && !empty($_POST["email"]) )
		{
			$msg.="<li>Please Enter Your Valid Email Address...";
	
	 if (!filter_var($website, FILTER_VALIDATE_URL) &&!empty($_POST["website"]))
	 {
    $msg.="<li>Invalid URL";
} 
		}
	if(strlen($_POST['PhoneNumber'])>10 && !empty($_POST["PhoneNumber"]))
		{
			$msg.="<li>Please Enter Your Phone Number in limited or valid Format....";
		}
	
		
		
	
	if($msg!="")
		{
			header("location:companysignup.php?error=".$msg."&cname=".$cname."&email=".$email."&hrname=".$hrname."&website=".$website."&PhoneNumber=".$PhoneNumber);
		}
		else
		{
			$cname=$_POST['cname'];
			$hrname=$_POST['hrname'];
			$PhoneNumber=$_POST['PhoneNumber'];
			$email=$_POST['email'];
			$website=$_POST['website'];
			$password=$_POST['password'];
	
		
			
			
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
if(isset($_SESSION['oldcname']))
{
	$oldname = $_SESSION['oldcname'];
	$sql = "UPDATE companyname SET 
       cname = '$cname', 
       hrname = '$hrname', 
       email = '$email', 
       website = '$website', 
       phone = '$PhoneNumber' 
  WHERE cname = '$oldname' ";
}
else
{
$sql = "INSERT INTO companyname (cname, hrname, email,website,password,phone)
VALUES ('$cname', '$hrname', '$email','$website','$password','$PhoneNumber')";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


if(isset($_SESSION['oldcname']))
{
	$_SESSION['semail'] = $email;
	unset($_SESSION['oldcname']);
	header("location:companypage.php");
}
else
			
			{
			header("location:companysignup.php?ok=1");
			}
			
			$conn->close();
		}
}
else
	{
		header("location:home.php");
	}		
?>