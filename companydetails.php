<?php 
session_start();
if(!isset($_SESSION['ssemail']))
		{
			header("location:slogin.php?oklogin=1");
		}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
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
		
			$cname = $_GET['cname'];
		include("include/config.php");
		$sql = "SELECT cname,hrname,email,website,phone FROM companyname WHERE companyname.cname = '$cname'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) 
		{
			$cname = $row['cname'];
			$_SESSION['scname'] = $cname;
			$hrname = $row['hrname'];
			$website = $row['website'];
			$phone = $row['phone'];
			$email = $row['email'];
		}
		?>
		
		<div class="row stylingcp" style="background-color:#292c30;margin-top:150px; font-family: 'Open Sans Condensed', sans-serif; ">
		<div class = "well" style="background-color:#344560; border-color:#344560; margin-top:-19px;">
			<div class = "row" style="margin-left:60px;">
				<div class = "col-md-4" style="color:rgba(236, 240, 241,1.0);">
					<h1 class = "white" style="text-transform: uppercase;"><?php echo strtoupper($cname); ?></h1>
					<h5>HR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;<?php echo $hrname; ?></h5>
					<h5>EMAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;<?php echo $email; ?></h5>
					<h5>WEBSITE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;<?php echo $website; ?></h5>
					<h5>CONTACT NO.&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;<?php echo $phone; ?></h5>
				</div>
				<div class = "col-md-6">
				</div>
				<div class = "col-md-2">
					
				</div>
			</div>
		</div>
		</div>
<div class="well" style="margin-top:-19px;margin-bottom:1px;">
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-10">
<h2 class="cpstyling" style="text-align:left; font-size:37px;font-family: 'Maven Pro', sans-serif;color:#1A237E;">Jobs Available</h2>
	
	<?php
		$flag = 0;
		include("include/config.php");
		$sql = "SELECT * FROM jobs WHERE jobs.cname = '$cname'";
		$result = $conn->query($sql);
		
			$flag=0;
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
			$flag = 0;
			
			$cname = $row['cname'];
			$pname = $row['pname'];
			$package = $row['package'];
			$location = $row['location'];
			$criteria = $row['criteria'];
			$requirements = $row['requirements'];
			
			$sql1 = "SELECT * FROM applied";
			$result1 = $conn->query($sql1);
			if ($result1->num_rows > 0)
			{
			while($row1 = $result1->fetch_assoc())
			{
				$acname = $row1['cname'];	
				$apname = $row1['pname'];
				$asemail = $row1['semail'];
				
				if(($acname == $cname) && ($apname == $pname) && ($asemail == $_SESSION['ssemail']))
				{
					$flag=1;
					break;
				}
			}
			}
	?>	
	
	<tbody style=" font-family: 'Bellefair', serif;font-size:20px;">
      <tr>
        <td style="font-weight:bold; font-size:20px;color:#1B5E20;font-family: 'Fresca', sans-serif;"><?php echo $pname; ?></td>
        <td><?php echo $package; ?></td>
        <td><?php echo $location; ?></td>
        <td><?php echo $criteria; ?></td>
		 <td><?php echo $requirements; ?></td>
		<?php if($criteria <= $_GET['cgpa'] && $flag==0){ ?>
		<td><p><a href="appliedinsert.php?cname=<?php echo $cname; ?>&pname=<?php echo $pname; ?>&cgpa=<?php echo $_GET['cgpa']; ?>"><button type="button" class="btn btn-primary"><span style="color:white;">Apply</span></button></a>
		<?php }else if($flag==1){
		?><td style="color:green;"><?php echo "Applied  "; ?><span class="glyphicon glyphicon-check" style="font-size:20px;"></span></td> <?php } else{
			?>
			 <td style="color:red;"><?php echo "not eligible"; ?></td>
			 <?php
		} ?>
		
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
<div class="col-md-2">
</div>
</div>
</div>
<?php
			include("footer.php");
?>
	</body>
	</html>