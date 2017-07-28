<?php
session_start();
include("include/config.php");
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (!empty($_POST)) {
	$flag = 0;
	
	$email= test_input($_POST["email"]);
	$password= test_input($_POST["password"]);
	
	$sql = "SELECT email,password FROM companyname";
	$result = $conn->query($sql);
	
	while($row = $result->fetch_assoc())
	{
        if ($row["email"] == $email && $row["password"] == $password)
		{
			$flag = 1;
			$_SESSION['semail'] = $email;
			header("location:companypage.php");
		}
    }
	if($flag == 0)
		header("location:companylogin.php?ok=1");
}
else
	{
		header("location:companylogin.php");
	}		
