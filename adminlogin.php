<!DOCTYPE HTML>
<html>
	<head>
		<?php
			include("index.php")
		?>
	
	</head>
	<style>
		.error {color: #FF0000;}
		.stylingclcl{
			
			letter-spacing: .1em;
			color:black;
    font-style: normal;
    line-height: 2em;
	text-transform: uppercase;
	font-family: 'Oswald', sans-serif;
	
		}
	</style>
	<body>
	<div class="row" style="background-color:#bdc3c7; margin-top:147px; font-family: 'Open Sans Condensed', sans-serif;">
	<div class = "col-md-2">
	</div>
	<div class = "col-md-8">
		
		<div class = "well stylingcl" style="background-color:white; border-color:none; margin-top:30px;font-family: 'Open Sans Condensed', sans-serif;">
		<h2 style = "text-align:center;font-family: 'Oswald', sans-serif">Admin Login</h2><hr>
		<?php
			if(isset($_GET['aoklogin']))
											{
												echo '<font class="error">perform login...</font>';
												echo '<br><br>';
											}
			if(isset($_GET['aok']))
											{
												echo '<font class="error">Invalid Username or password. Try Again...</font>';
												echo '<br><br>';
											}
		?>
		<form method="post"  class="form-inline" action ="admincheck.php">
			<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text">Username:</label>
						</div>
						<div class="col-md-8">
						<input type="text" class="form-control"  placeholder="Enter username here" name="user"  size="50">
						
						</div>
						</div>
					</div>
				</div>
				<br>
			<div  style="text-align:center;">
					<div class="form-group">
						<div class="row">
						<div class = "col-md-4">
						<label for="text">Password:</label>
						</div>
						<div class="col-md-8">
						<input type="password" class="form-control"  placeholder="Enter password here" name="password" size="50">
						</div>
						</div>
					</div>
			</div>
			<br>
			<div class="row">
				<div class ="col-md-4">
				</div>
				<div class ="col-md-4" style = "text-align:center;">
					<button type="submit" class="btn btn-default" style="background-color:white;border-color:#529b45;" name="submit" value="SUBMIT">Submit</button>
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