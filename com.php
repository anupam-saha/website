<!DOCTYPE HTML>
<html>
	<head>
		<?php
			include("include/index.php")
		?>
	
	</head>
	<style>
		.error {color: #FF0000;}
	</style>
	<body>
		<?php
// define variables and set to empty values
$cnameErr = $hrnameErr = $emailErr = $PhoneNumberErr = $commentErr = $websiteErr = $passwordErr = "";
$cname = $hrname = $email = $comment = $PhoneNumber = $website = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["PhoneNumber"])) {
    $PhoneNumberErr= "Fill";
  } else {
    $PhoneNumber= test_input($_POST["PhoneNumber"]);
  // check if phone number is valid or not
    if (!preg_match("'/^0\d{9}$/'",$PhoneNumber)) {
      $PhoneNumberErr = "Invalid"; 
    }
  }
  if (empty($_POST["cname"])) {
    $cnameErr = "Fill";
  } else {
    $cname = test_input($_POST["cname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$cname)) {
      $cnameErr = "Only letters and white space allowed"; 
    }
  }
	if (empty($_POST["hrname"])) {
    $hrnameErr = "Fill";
  } else {
    $hrname = test_input($_POST["hrname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$hrname)) {
      $hrnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Fill";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $emailErr = "Invalid format"; 
    }
  }
    
 
  if (empty($_POST["website"])) {
    $websiteErr= "Fill";
  } else {
    $website= test_input($_POST["website"]);
  // check if phone number is valid or not
    if (!filter_var($website, FILTER_VALIDATE_URL)){
    $websiteErr = "Invalid URL";
} 
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="row" style="background-color:#292c30;;">
	<div class = "col-md-2">
	</div>
	<div class = "col-md-8">
		<div class="well" style="background-color: #43637c; border-color:#43637c; margin-top:20px;">
			<h1 style = "text-align:center; color:white;">Company Registration</h1>
		</div>
		<div class = "well" style="background-color:#344560; border-color:#344560; margin-top:-20px;">
			<form method="post"  class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<p><span class="error">* required field.</span></p>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text" style="color:white;">Company Name:</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="name" placeholder="Name" name="cname" value="<?php echo $cname;?>" size="50"><span class="error"><?php echo $cnameErr;?></span>
						
						</div>
						</div>
					</div>
				</div>
					<br><br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text" style="color:white;">HR Name:</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="cname" placeholder="Name" name="hrname" value="<?php echo $hrname;?>" size="50">
						<span class="error"><?php echo $hrnameErr;?></span>
						</div>
						</div>
					</div>
				</div>
				<br><br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text" style="color:white;">Email:</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="hrname" placeholder="Enter Email here" name="email" value="<?php echo $email;?>" size="50">
						<span class="error"><?php echo $emailErr;?></span>
						</div>
						</div>
					</div>
				</div>
				<br><br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text" style="color:white;">Phone Number:</label>
						</div>
						<div class="col-md-8">
							<input type="integer" class="form-control" id="hrname" placeholder="Enter Phone no. here" name="PhoneNumber" value="<?php echo $PhoneNumber;?>" size="50">
						</div>
						</div>
					</div>
				</div>
				<br><br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text" style="color:white;">Website:</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="name" placeholder="Enter Website here" name="website" value="<?php echo $website;?>" size="50">
						<span class="error"><?php echo $websiteErr;?></span>
						</div>
						</div>
					</div>
				</div>
				<br><br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text" style="color:white;">Password:</label>
						</div>
						<div class="col-md-8">
						<input type="password" class="form-control" id="name" placeholder="Enter password here" name="password" value="<?php echo $password;?>" size="50">
						<span class="error"><?php echo $passwordErr;?></span>
						</div>
						</div>
					</div>
				</div>
				<br><br
				<div style="text-align:center;">
					<button type="submit" class="btn btn-default" style="color:#529b45;background-color:#344560;border-color:#529b45;" name="submit" value="SUBMIT">Submit</button>
				</div>
			</form>
		</div>
	</div>
	<div class = "col-md-2">
	</div>
</div>

	</body>
</html>