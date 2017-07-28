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
			if(isset($_GET['okeditc']))
			{	
				
				$_SESSION['oldcname']=$_GET['cname'];
			}
			if(isset($_SESSION['oldcname']))
			{
				if(!isset($_SESSION['semail']))
		{
			header("location:companylogin.php?oklogin=1");
		}
				include("index4login.php");
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
		
		<h2 style = "text-align:center;font-family: 'Oswald', sans-serif">Company <?php if(isset($_SESSION['oldcname']))echo "Edit"; else echo "Registration" ?></h2><hr>
		<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="green">You are successfully Registered. Click <a href="companylogin.php">here</a> for login</font>';
												echo '<br><br>';
											}
											
											
											if (isset($_GET['cname']))
											{
												$vcname = $_GET['cname'];
											}
											else
											{
												$vcname = "";
											}
											if (isset($_GET['hrname']))
											{
												$vhrname = $_GET['hrname'];
											}
											else
											{
												$vhrname = "";
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
											if (isset($_GET['website']))
											{
												$vwebsite = $_GET['website'];
											}
											else
											{
												$vwebsite = "";
											}
										?>
			<form method="post"  class="form-inline" action ="insertcompany.php">
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>Company Name:</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="name" placeholder="Enter Name here" name="cname" value="<?php echo $vcname; ?>" size="50">
						
						</div>
						</div>
					</div>
				</div>
					<br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>HR Name:</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="cname" placeholder="Enter Name here" name="hrname" value="<?php echo $vhrname; ?>"  size="50">
						
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
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text">Website:</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="name" placeholder="Enter Website here" name="website" value="<?php echo $vwebsite; ?>" size="50">
						</div>
						</div>
					</div>
				</div>
				<br>
				<?php if(!isset($_SESSION['oldcname'])){ ?>
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