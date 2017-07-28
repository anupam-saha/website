<?php 
session_start();
if(!isset($_SESSION['semail']))
		{
			header("location:companylogin.php?oklogin=1");
		}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php
			include("index4login.php")
		?>
	
	</head>
	<style>
		.error {color: #FF0000;
		font-size:auto;}
		.stylingpj{
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
	<?php
	if(!isset($_SESSION['semail']))
	{
		header("location:companypage.php");;
	}
	?>
	
	<?php

		if(isset($_GET['okedit'])){
			$heading = 'Edit Job';
		$_SESSION['editing'] = $_GET['pname'];}
		else{
			$heading = 'Post Job';
		}
	?>
	
<div class="row" style="background-color:#bdc3c7; margin-top:150px;">
	<div class = "col-md-2">
	</div>
	<div class = "col-md-8" style="">
		<div class = "well" style="background-color:; border-color:#344560; margin-top:0px;font-family: 'Maven Pro', sans-serif;">
		<h1 style = "text-align:center;font-family: 'Oswald', sans-serif"><?php echo $heading; ?></h1>
		<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											if(isset($_GET['okg']))
											{
												echo '<font color="green">Job post successfull..</font>';
												echo '<br><br>';
											}
											
											if (isset($_GET['pname']))
											{
												$vpname = $_GET['pname'];
											}
											else
											{
												$vpname = "";
											}
											if (isset($_GET['package']))
											{
												$vpackage = $_GET['package'];
											}
											else
											{
												$vpackage = "";
											}
											if (isset($_GET['location']))
											{
												$vlocation = $_GET['location'];
											}
											else
											{
												$vlocation = "";
											}
											if (isset($_GET['criteria']))
											{
												$vcriteria = $_GET['criteria'];
											}
											else
											{
												$vcriteria = "";
											}
											if (isset($_GET['requirements']))
											{
												$vrequirements = $_GET['requirements'];
											}
											else
											{
												$vrequirements = "";
											}
										?>
			<form method="post"  class="form-inline" action ="insertjobs.php">
			<p><span class="error">* required field.</span></p>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>Post Name:</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="name" placeholder="Enter Name here" name="pname" value="<?php echo $vpname; ?>" size="50">
						
						</div>
						</div>
					</div>
				</div>
					<br><br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>Package (in lakhs)</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="cname" placeholder="Enter package here" name="package" value="<?php echo $vpackage; ?>"  size="50">
						
						</div>
						</div>
					</div>
				</div>
				<br><br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>Location</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control" id="hrname" placeholder="Enter city here" name="location" value="<?php echo $vlocation; ?>"  size="50">
						
						</div>
						</div>
					</div>
				</div>
				<br><br>
				<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text"><span class="error">*</span>Criteria (cgpa)</label>
						</div>
						<div class="col-md-8">
							<input type="integer" class="form-control" id="hrname" placeholder="Enter criteria here" name="criteria" value="<?php echo $vcriteria; ?>"  size="50">
						</div>
						</div>
					</div>
				</div>
				<br><br>
				<div  style="text-align:left; margin-left:210px;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label>Requriements</label>
						</div>
						<div class="col-md-8">
						<textarea class="form-control" rows="5" id="comment" placeholder="Enter requirements here" name="requirements"><?php echo $vrequirements; ?></textarea>
						</div>
						</div>
					</div>
				</div>
				<br><br>
				<div class="row">
				<div class ="col-md-4">
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