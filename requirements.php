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
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" type="text/javascript"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

		<?php
			include("index4login.php")
		?>
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
		}
		
	</style>
	</head>
	<body>
		<div class="container" style="margin-top:150px;">
		<div class="row">
			<div class="col-md-12">
				<h2 style="font-family: 'Cabin', sans-serif;color:#BF360C;">Requirements</h2>
				<h4 style="font-family: 'Cabin', sans-serif;"><?php echo $_GET['additional'] ; ?><h4>
			</div>
		</div>
	</div>
	</body>
	</html>