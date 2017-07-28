<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<?php
			if(isset($_GET['okedits']))
			{	
				
				$_SESSION['oldsname']=$_GET['sname'];
			}
			if(isset($_SESSION['oldsname']))
			{
				if(!isset($_SESSION['ssemail']))
		{
			header("location:studentlogin.php?soklogin=1");
		}
				include("sindex4login.php");
			}
			else
			{
			include("index.php");
			}
		?>
	
	</head>
	<style>
		.error {color: #FF0000;
		font-size:auto;}
		.stylingcscs{
			font-size:auto;
			letter-spacing: .1em;
			color:black;
    font-style: normal;
    line-height: 2em;
	text-transform: uppercase;
	font-family: 'Oswald', sans-serif;
	
		}
	</style>
	<body>
	
<div class="row" style="background-color:#bdc3c7; margin-top:140px;">
	<div class = "col-md-2">
	</div>
	<div class = "col-md-8" style="">
		
		<div class = "well stylingcs" style="background-color:white; border-color:none; margin-top:30px;font-family: 'Maven Pro', sans-serif;">
		
		<h2 style = "text-align:center;font-family: 'Oswald', sans-serif">Student <?php if(isset($_SESSION['oldsname']))echo "Edit"; else echo "Registration" ?></h2><hr>
		<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="green">You are successfully Registered. Click <a href="studentlogin.php">here</a> for login</font>';
												echo '<br><br>';
											}
											
											
											if (isset($_GET['sname']))
											{
												$vsname = $_GET['sname'];
											}
											else
											{
												$vsname = "";
											}
											if (isset($_GET['regno']))
											{
												$vregno = $_GET['regno'];
											}
											else
											{
												$vregno = "";
											}
											if (isset($_GET['email']))
											{
												$vemail = $_GET['email'];
											}
											else
											{
												$vemail = "";
											}
											if (isset($_GET['PhoneNumber']))
											{
												$vPhoneNumber = $_GET['PhoneNumber'];
											}
											else
											{
												$vPhoneNumber = "";
											}
											if (isset($_GET['stream']))
											{
												$vstream = $_GET['stream'];
											}
											else
											{
												$vstream = "";
											}
											if (isset($_GET['cgpa']))
											{
												$vcgpa = $_GET['cgpa'];
											}
											else
											{
												$vcgpa = "";
											}
											if (isset($_GET['address']))
											{
												$vaddress = $_GET['address'];
											}
											else
											{
												$vaddress = "";
											}
											if (isset($_GET['dob']))
											{
												$vdob = $_GET['dob'];
											}
											else
											{
												$vdob = "";
											}
										?>
			<form method="post"  class="form-inline" enctype="multipart/form-data" action ="insertstudent.php">
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>Student Name:</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="name" placeholder="Enter Name here" name="sname" value="<?php echo $vsname; ?>" size="50">
						
						</div>
						</div>
					</div>
				</div>
					<br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>Registration No.</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="cname" placeholder="Enter reg. here" name="regno" value="<?php echo $vregno; ?>"  size="50">
						
						</div>
						</div>
					</div>
				</div>
				<br>
				<div  style="text-align:left; margin-left:250px;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>DOB:</label>
						</div>
						<div class="col-md-8">
						<input type="date" class="form-control" id="dob" placeholder="dd-mm-yyyy" name="dob" value="<?php echo $vdob; ?>">
						
						</div>
						</div>
					</div>
				</div>
				<br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>Stream:</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="name" placeholder="Enter stream here" name="stream" value="<?php echo $vstream; ?>" size="50">
						
						</div>
						</div>
					</div>
				</div>
				<br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>CGPA:</label>
						</div>
						<div class="col-md-8">
						<input type="integer" class="form-control" id="name" placeholder="Enter cgpa here" name="cgpa" value="<?php echo $vcgpa; ?>" size="50">
						
						</div>
						</div>
					</div>
				</div>
				<br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>Email:</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="hrname" placeholder="Enter Email here" name="email" value="<?php echo $vemail; ?>"  size="50">
						
						</div>
						</div>
					</div>
				</div>
				<br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>Phone Number:</label>
						</div>
						<div class="col-md-8">
							<input type="integer" class="form-control" id="hrname" placeholder="Enter Phone no. here" name="PhoneNumber" value="<?php echo $vPhoneNumber; ?>"  size="50">
						</div>
						</div>
					</div>
				</div>
				<br>
				<div  style="text-align:left; margin-left:240px;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label>Address:</label>
						</div>
						<div class="col-md-8">
						<textarea class="form-control" rows="5" id="comment" placeholder="Enter Address here" name="address"><?php echo $vaddress; ?></textarea>
						</div>
						</div>
					</div>
				</div>
				<br>
<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-5" style="margin-left:-60px;">
						<label><span class="error">(only pdf) </span>upload cv:</label>
						
						</div>
						<div class="col-md-7">
						<input type="file" name = "f">
						
						</div>
						</div>
					</div>
				</div>
				<br>
				<?php if(!isset($_SESSION['oldsname'])){ ?>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text">Password:</label>
						</div>
						<div class="col-md-8">
						<input type="password" class="form-control" id="name" placeholder="Enter password here" name="password" size="50">
						</div>
						</div>
					</div>
				</div><?php } ?>
				<br>
				<div class="row">
				<div class ="col-md-3">
				</div>
				<div class ="col-md-4" style = "text-align:center;">
					<button type="submit" class="btn btn-default" style="color:black;background-color:white;border-color:#529b45;" name="submit" value="SUBMIT">Submit</button>
				</div>
				<div class ="col-md-4">
				</div>
				</div>
			</form>
		</div>
	</div>
	<div class = "col-md-2">
	</div>
</div>
	<?php
			include("footer.php");
		?>

	</body>
</html>
upload file:<input type="file" name = "f"><br>
	name:<input type="text" name = "t">