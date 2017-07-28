<?php
session_start();
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (!empty($_POST)) {
	$flag = 0;
	
	$user= test_input($_POST["user"]);
	$password= test_input($_POST["password"]);
        if ($user=='sudeep7410' && $password=='sudeep0147')
		{
			$flag = 1;
			$_SESSION[$user] = $user;
			header("location:adminpage.php?user=".$user);
		}
	if($flag == 0)
		header("location:adminlogin.php?aok=1");
}
else
	{
		header("location:adminlogin.php");
	}		
