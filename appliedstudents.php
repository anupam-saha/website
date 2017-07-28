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
	<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
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
<div class="row stylingcp" style="margin-top:136px;">
	
		<div class="well" style="background-color:white; margin-top:10px;">
			<h2 style="text-transform: uppercase; text-align:left;margin-left:17%;font-size:30px;font-family: 'Cabin', sans-serif;letter-spacing:3px;color:#1A237E;">Job</h2>
			
			<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
			<?php
		$cname = $_GET['cname'];
		$pname = $_GET['pname'];
		$package = $_GET['package'];
		$location = $_GET['location'];
		$criteria = $_GET['criteria'];
			?>
			<div class="table-responsive">          
  <table class="table">
    <thead  style="font-family: 'Cabin', sans-serif;font-size:20px;color:#BF360C;">
      <tr>
        <th>post</th>
        <th>salary</th>
        <th>location</th>
        <th>criteria</th>
      </tr>
    </thead>
	<tbody   style=" font-family: 'Bellefair', serif;font-size:20px;">
      <tr>
        <td style="font-weight:bold; font-size:20px;color:#1B5E20;font-family: 'Fresca', sans-serif;"><?php echo $pname; ?></td>
        <td><?php echo $package; ?></td>
        <td><?php echo $location; ?></td>
        <td><?php echo $criteria; ?></td>
      </tr>
    </tbody>
	
	</table>
		</div>
		</div>
		<div class="col-md-2">
			</div>
	</div>
	</div>
</div>

	<div class="row stylingcp" style="margin-top:-35px; ">
	
		<div class="well" style="background-color:#FAFAFA; border-top-color:green; margin-top:10px;margin-bottom:0px;">
			<h2 style="text-align:left; font-size:40px;font-family: 'Cabin', sans-serif;letter-spacing:2px;color:#1A237E;margin-left:17%">Applied Students &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#collapsestudents" style="font-size:20px;">Click Here</button></h2></h2>
			<br>
			<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
			<?php
				include("include/config.php");
		$sql = "SELECT semail FROM applied WHERE pname='$pname' AND cname = '$cname'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
			?>
			<div id="collapsestudents" class="collapse">
			<div class="table-responsive"> 
			 <table class="table">
    <thead  style="font-family: 'Cabin', sans-serif;font-size:20px;color:#BF360C;">
      <tr>
        <th>Student Name</th>
        <th>Reg. No.</th>
		<th>Stream</th>
        <th>Email</th>
        <th>Phone</th>
		<th>CGPA</th>
      </tr>
    </thead>
		<?php
			while($row = $result->fetch_assoc()) {
			$semail = $row['semail'];
				$sql1 = "SELECT * FROM studentname WHERE email ='$semail' ";
		$result1 = $conn->query($sql1);
		if ($result1->num_rows > 0) 
		{
			while($row1 = $result1->fetch_assoc()) {
			$sname = $row1['sname'];
			$regno = $row1['regno'];
			$stream = $row1['stream'];
			$phone = $row1['phone'];
			$cgpa = $row1['cgpa'];
			?>
			
    <tbody  style=" font-family: 'Bellefair', serif;font-size:20px;">
      <tr>
			<td style="font-weight:bold; font-size:20px;color:#1B5E20;font-family: 'Fresca', sans-serif;"><?php echo $sname; ?></td>
			<td><?php echo $regno; ?></td>
			<td><?php echo $stream; ?></td>
			<td><?php echo $semail; ?></td>
			<td><?php echo $phone; ?></td>
			<td><?php echo $cgpa; ?></td>
			<td><a href="download.php?id=<?php echo $regno; ?>">CV</a></td>
	  </tr>
	  </tbody>
		<?php
			}
		}
			}
		}
		else
			?>
			<h2 style="color:red;">No students Applied</h2>
		<?php
		?>
	  </table>
	  </div>
	  </div>
		</div>
		
		<div class="col-md-2">
			</div>
			</div>
		</div>
	</div>
	
<?php
			include("footer.php");
?>

</body>
</html>