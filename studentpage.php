<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	<link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
		<?php
			include("sindex4login.php");
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
	font-family: 'Oswald', sans-serif;
	
		}
		
		
	</style>
	<body>
		<?php
		if(!isset($_SESSION['ssemail']))
		{
			header("location:studentlogin.php?oklogin=1");
		}
		$email = $_SESSION['ssemail'];
		
		
		
		include("include/config.php");
		$sql = "SELECT sname,regno,stream,phone,dob,cgpa,address FROM studentname WHERE studentname.email = '$email'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) 
		{
			$sname = $row['sname'];
			$_SESSION['ssname'] = $sname;
			$regno = $row['regno'];
			$stream = $row['stream'];
			$phone = $row['phone'];
			$dob = $row['dob'];
			$cgpa = $row['cgpa'];
			$address = $row['address'];
		}
		$sql = "SELECT name,path FROM files WHERE files.id = '$regno'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) 
		{
			$_SESSION['name'] = $row['name'];
			$_SESSION['path'] = $row['path'];
		}
	?>
<div class="row stylingcp" style="background-color:#292c30;margin-top:150px;margin-bottom:-19px;">
	
	<div class = "col-md-12" style="margin-top:-20px;">
		
		<div class = "well" style="background-color:#344560; border-color:#344560; margin-top:20px;">
			<div class = "row" style="margin-left:60px;">
				<div class = "col-md-6" style="color:rgba(236, 240, 241,1.0); font-family: 'Bellefair', serif;">
					<h1 class = "white" style="text-transform: uppercase; line-height:50px;font-weight:bold;"><?php echo strtoupper($sname); ?></h1>
					
					<h4><span class="h5-style">REG NO.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $regno; ?></h4>
					<h4><span class="h5-style">EMAIL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $email; ?></h4>
					<h4><span class="h5-style">DOB</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $dob; ?></h4>
					<h4><span class="h5-style">CONTACT</span>&nbsp;&nbsp;&nbsp; : <?php echo $phone; ?></h4>
					<h4><span class="h5-style">STREAM</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $stream; ?></h4>
					<h4><span class="h5-style">ADDRESS</span>&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $address; ?></h4>
					<h4><span class="h5-style">CGPA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $cgpa; ?></h4>
				</div>
				<div class = "col-md-4">
				</div>
				<div class = "col-md-2">
				<br><br>
					<a href="studentsignup.php?okedits=1&sname=<?php echo $sname; ?>&regno=<?php echo $regno; ?>&email=<?php echo $email; ?>&stream=<?php echo $stream; ?>&PhoneNumber=<?php echo $phone; ?>&cgpa=<?php echo $cgpa; ?>&dob=<?php echo $dob; ?>&address=<?php echo $address; ?>" style="color:black; font-family: 'Bellefair', serif;font-size:19px;font-weight"><button  type="button" class="btn btn-success"><span style="color:black;">Edit Details</span></button></a>
					<br><br>
					<a href="appliedcompany.php?email=<?php echo $email; ?>"  target="_blank" style="color:black; font-family: 'Bellefair', serif;font-size:19px;font-weight"><button  type="button" class="btn btn-success"><span style="color:black;">Applied Jobs</span></button></a>
					<br><br>
					<a href="download.php?id=<?php echo $regno; ?>"  target="_blank" style="color:black; font-family: 'Bellefair', serif;font-size:19px;font-weight"><button  type="button" class="btn btn-success"><span style="color:black;">View CV</span></button></a>
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="well" style="margin-top:-19px;margin-bottom:1px;">
<div class="row">
	<div class="col-md-1">
	</div>
	<div class="col-md-10">
<h2 class="cpstyling" style="text-align:left; font-size:40px;font-family: 'Cabin', sans-serif;letter-spacing:2px;color:#1A237E;">Companies Visiting &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#collapsecompany" style="font-size:20px;">Click Here</button></h2>
	<br>
	<?php
		include("include/config.php");
		$sql = "SELECT * FROM companyname";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
			?>
			<div id="collapsecompany" class="collapse">
			<div class="table-responsive">          
  <table class="table">
    <thead style="font-family: 'Cabin', sans-serif;font-size:20px;">
      <tr style="font-size:20px;">
        <th>Company</th>
		<th>Website</th>
		<th>Email</th>
		<th>Contact</th>
		
      </tr>
    </thead>
	<?php
		// output data of each row
		while($row = $result->fetch_assoc())
		{
			$cname = $row['cname'];
			$website = $row['website'];
			$email = $row['email'];
			$PhoneNumber = $row['phone'];
	?>	
	
	<tbody style=" font-family: 'Bellefair', serif;font-size:20px;">
      <tr>
        <td   style="font-weight:bold; font-size:20px;color:#1B5E20;font-family: 'Fresca', sans-serif;""><?php echo $cname; ?></td>
        <td><a href="<?php echo $website; ?>"><?php echo $website; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $PhoneNumber; ?></td>
		<td><p><a href="companydetails.php?cname=<?php echo $cname; ?>&cgpa=<?php echo $cgpa; ?>"><button type="button" class="btn-info btn"><span style="color:white;">See Details</span></button></a></p></td>
      </tr>
    </tbody>
			
	
	<?php
		}
	?>
	</table>
	</div>
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