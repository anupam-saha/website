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
	$sname= test_input($_POST["sname"]);
	$regno= test_input($_POST["regno"]);
	$email= test_input($_POST["email"]);
	$PhoneNumber= test_input($_POST["PhoneNumber"]);
	$stream= test_input($_POST["stream"]);
	$cgpa= test_input($_POST["cgpa"]);
	$dob= test_input($_POST["dob"]);
	$address= test_input($_POST["address"]);
	$password= test_input($_POST["password"]);
	
	if (empty($_POST["PhoneNumber"]) || empty($_POST["sname"]) || empty($_POST["regno"]) || empty($_POST["email"]) || empty($_POST["stream"]) || (empty($_POST["password"]) && !isset($_SESSION['oldsname'])) || empty($_POST["cgpa"]) || empty($_POST["dob"]) || empty($_POST["address"])) {
		$msg.="<li>Please full fill all requirement";
	} 
	if (!preg_match("/^[a-zA-Z ]*$/",$sname) &&!empty($_POST["sname"])) 
	{
      $msg.="<li>Only spaces and letters are allowed in company name";
    }
	if (!preg_match("/^[a-zA-Z ]*$/",$stream) && !empty($_POST["stream"])) 
	{
      $msg.="<li>Only spaces and letters are allowed in Stream";
    }
  
  if(!ereg("^[a-z0-9_]+[a-z0-9_.]*@[a-z0-9_-]+[a-z0-9_.-]*\.[a-z]{2,5}$",$_POST['email']) && !empty($_POST["email"]) )
		{
			$msg.="<li>Please Enter Your Valid Email Address...";
		}
	if(strlen($_POST['PhoneNumber'])>10 && !empty($_POST["PhoneNumber"]))
		{
			$msg.="<li>Please Enter Your Phone Number in limited or valid Format....";
		}
	
		
		
	
	if($msg!="")
		{
			header("location:studentsignup.php?error=".$msg."&sname=".$sname."&email=".$email."&regno=".$regno."&cgpa=".$cgpa."&PhoneNumber=".$PhoneNumber."&dob=".$dob."&address=".$address."&stream=".$stream);
		}
		else
		{
		
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
if(isset($_SESSION['oldsname']))
{
	$oldsname = $_SESSION['oldsname'];
	$sql = "UPDATE studentname SET 
       sname = '$sname', 
       regno = '$regno', 
       email = '$email', 
       stream = '$stream', 
       phone = '$PhoneNumber',
	   dob = '$dob',
	   cgpa = '$cgpa',
	   address = '$address'
  WHERE sname = '$oldsname' ";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$filename = $_POST['t'];
	$fnm = $_FILES["f"]["name"];
	if($fnm =='')
	{
		$fnm = $_SESSION['name'];
		$dst = $_SESSION['path'];
		unset($_SESSION['name']);
		unset($_SESSION['path']);
	}
	else
	$dst = "./images/".$fnm;
	move_uploaded_file($_FILES["f"]["tmp_name"],$dst);
	
	$sql1 = "SELECT * FROM files WHERE id='$regno'";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0)
		{
			$sql = "UPDATE files SET 
       id = '$regno', 
       filename = '$filename',
		name = '$fnm',
		path = '$dst' WHERE id = '$regno'";
		}
		else
			$sql = "INSERT INTO files (id,filename, name, path ) VALUES ('$regno','$filename','$fnm','$dst')";
}

else
{
$sql = "INSERT INTO studentname (sname, regno, email,stream,phone,dob,cgpa,address,password)
VALUES ('$sname', '$regno', '$email','$stream','$PhoneNumber','$dob','$cgpa','$address','$password')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$filename = $_POST['t'];
	$fnm = $_FILES["f"]["name"];
	$dst = "./images/".$fnm;
	move_uploaded_file($_FILES["f"]["tmp_name"],$dst);
	if($fnm !='')
	$sql = "INSERT INTO files (id,filename, name, path ) VALUES ('$regno','$filename','$fnm','$dst')";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


if(isset($_SESSION['oldsname']))
{
	$_SESSION['ssemail'] = $email;
	unset($_SESSION['oldsname']);
	header("location:studentpage.php");
}
else
			
			{
			header("location:studentsignup.php?ok=1");
			}
			
			$conn->close();
		}
}
else
	{
		header("location:home.php");
	}		
?>