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
	
	$sql = "SELECT email,password FROM studentname";
	$result = $conn->query($sql);
	
	while($row = $result->fetch_assoc())
	{
        if ($row["email"] == $email && $row["password"] == $password)
		{
			$flag = 1;
			$_SESSION['ssemail'] = $email;
			header("location:studentpage.php");
		}
    }
	if($flag == 0)
		header("location:studentlogin.php?sok=1");
}
else
	{
		header("location:studentlogin.php");
	}		
