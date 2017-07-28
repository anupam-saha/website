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
		}
		
	</style>
	<body>
	<?php
		if(!isset($_SESSION['semail']))
		{
			header("location:companylogin.php?oklogin=1");
		}
		$email = $_SESSION['semail'];
		
		
		
		include("include/config.php");
		$sql = "SELECT cname,hrname,email,website,phone FROM companyname WHERE companyname.email = '$email'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) 
		{
			$cname = $row['cname'];
			$_SESSION['scname'] = $cname;
			$hrname = $row['hrname'];
			$website = $row['website'];
			$phone = $row['phone'];
			
		}
	?>
<div class="row stylingcp" style="background-color:#292c30;margin-top:150px; font-family: 'Open Sans Condensed', sans-serif; ">
	
	<div class = "col-md-12" style="margin-top:-20px;">
		
		<div class = "well" style="background-color:#344560; border-color:#344560; margin-top:18px;">
			<div class = "row" style="margin-left:50px;">
				<div class = "col-md-6" style="color:rgba(236, 240, 241,1.0); font-family: 'Bellefair', serif;">
					<h1 style="text-transform: uppercase;font-weight:bold;"><?php echo strtoupper($cname); ?></h1>
					<h4>HR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  <?php echo $hrname; ?></h5>
					<h4>EMAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $email; ?></h5>
					<h4>WEBSITE &nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $website; ?></h5>
					<h4>CONTACT NO &nbsp;: <?php echo $phone; ?></h5>
				</div>
				<div class = "col-md-4">
				</div>
				<div class = "col-md-2">
				<br>
					<a href="postjobs.php" style="color:black;font-size:15px;font-family: 'Cabin', sans-serif;"> <button  type="button" class="btn btn-success"><span style="color:black;">Post Jobs</span></button></a>
					<br><br>
					<a href="companysignup.php?okeditc=1&cname=<?php echo $cname; ?>&hrname=<?php echo $hrname; ?>&email=<?php echo $email; ?>&website=<?php echo $website; ?>&PhoneNumber=<?php echo $phone; ?>" style="color:black;font-size:15px;font-family: 'Cabin', sans-serif;"><button  type="button" class="btn btn-success"><span style="color:black;">Edit Details</span></button></a>
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
<h2 class="cpstyling" style="text-align:left; font-size:40px;font-family: 'Cabin', sans-serif;letter-spacing:2px;color:#1A237E;">Job Registered</h2>
	
	<?php
		include("include/config.php");
		$sql = "SELECT * FROM jobs WHERE jobs.cname = '$cname'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
			?>
			<div class="table-responsive">          
  <table class="table">
    <thead style="font-family: 'Cabin', sans-serif;font-size:20px;color:#BF360C;">
      <tr>
        <th>post</th>
        <th>salary</th>
        <th>location</th>
        <th>criteria</th>
		<th>requirements</th>
      </tr>
    </thead>
	<?php
		// output data of each row
		while($row = $result->fetch_assoc())
		{
			$cname = $row['cname'];
			$pname = $row['pname'];
			$package = $row['package'];
			$location = $row['location'];
			$criteria = $row['criteria'];
			$requirements = $row['requirements'];
			
			
			
	?>	
	
	<tbody style=" font-family: 'Bellefair', serif;font-size:20px;">
      <tr>
	 
        <td style="font-weight:bold; font-size:20px;color:#1B5E20;font-family: 'Fresca', sans-serif;"><?php echo $pname; ?></td>
        <td><?php echo $package; ?> p.a</td>
        <td><?php echo $location; ?></td>
        <td><?php echo $criteria; ?></td>
		 <td><a href="requirements.php?additional=<?php echo $requirements; ?>"  target="_blank"><button type="button" class="btn btn-info"><span style="color:black; font-size:12px;font-family: 'Cabin', sans-serif;">click here</span></span></button></a></td>
		<td><p><a href="jobeditordel.php?okedit=1&pname=<?php echo $pname; ?>&cname=<?php echo $cname; ?>&package=<?php echo $package; ?>&location=<?php echo $location; ?>&criteria=<?php echo $criteria; ?>&requirements=<?php echo $requirements; ?>"><span style="color:black;font-size:15px;"><button type="button" class="btn"><span style="color:black;">Edit</span></span></button></a>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="jobeditordel.php?pname=<?php echo $pname; ?>&cname=<?php echo $cname; ?>"><span style="color:white;font-size:15px;"><button  type="button" class="btn btn-danger" onClick="return confirm('do you really want to delete!!!')">Delete</span></button></a></p></td>
		
		<td><a href="appliedstudents.php?cname=<?php echo $cname; ?>&pname=<?php echo $pname; ?>&package=<?php echo $package; ?>&location=<?php echo $location; ?>&criteria=<?php echo $criteria; ?>&requirements=<?php echo $requirements; ?>" target="_blank"><span style="color:black;font-size:15px;"><button type="button" class="btn btn-info"><span style="color:black;">Applied Students</span></span></button></a></td>
      </tr>
    </tbody>
			
	
	<?php
		}
	?>
	</table>
	</div>
	<?php
		}
	else
		{
	?>
	
			<h1 style="color:red; font-family: 'Pathway Gothic One', sans-serif;">No jobs posted yet</h1>
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