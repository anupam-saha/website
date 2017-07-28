<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
		<?php
			include("aindex4login.php")
		?>
	
	</head>
	
	<style>
		.error {color: #FF0000;
		font-size:auto;}
		.stylingcp{
			font-size:auto;
			letter-spacing: .1em;
			color:black;
    font-style: normal;
    line-height: 2em;
	
	
		}

		
	</style>
	<body>
	<?php
		if(!isset($_SESSION['sudeep7410']))
		{
			header("location:adminlogin.php?aoklogin=1");
		}
		
	?>
<div class="row stylingcp" style="background-color:#292c30;margin-top:150px; font-family: 'Open Sans Condensed', sans-serif; ">
	
	<div class = "col-md-12" style="margin-top:-20px;">
		
		<div class = "well" style="background-color:#344560; border-color:#344560; margin-top:18px;">
			<div class = "row" style="margin-left:50px;">
				<div class = "col-md-6" style="color:rgba(236, 240, 241,1.0); font-family: 'Bellefair', serif;">
					<h1 style="text-transform: uppercase;font-weight:bold;">Admin</h1>
					<h3><a href="#" style="color:white;">post messages</a></h3>
				</div>
				<div class = "col-md-4">
				
				</div>
				<div class = "col-md-2">
				<br>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="well" style="margin-top:-19px;margin-bottom:1px;">
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-9">
<h2 class="cpstyling" style="text-align:left; font-size:40px;font-family: 'Cabin', sans-serif;letter-spacing:2px;color:#1A237E;">Messages Posted</h2>
	
	<?php
		
			?>
			
	<?php
		{
	?>
	
			<h1 style="color:red; font-family: 'Pathway Gothic One', sans-serif;">No messages posted yet</h1>
			<?php
		}
	?>
		
	


</div>
<div class="col-md-1">
</div>
</div>
</div>
<?php
			include("footer.php");
?>

</body>
</html>