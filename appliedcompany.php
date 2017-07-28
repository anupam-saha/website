<?php
session_start();
if(!isset($_SESSION['ssemail']))
		{
			header("location:studentlogin.php?oklogin=1");
		}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
	
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	
	<script>
		$(document).ready(function(){
    $('#example').DataTable();
});
	</script>
	
		<?php
			include("sindex4login.php")
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
<div class="row stylingcp" style="margin-top:164px;">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<div class="well" style="background-color:white; margin-top:0px;">
		<div class="row">
		<div class="col-md-10">
		<br>
			<h2 style="text-transform: uppercase; text-align:left;margin-left:7px;font-size:30px;font-family: 'Cabin', sans-serif;letter-spacing:3px;color:#1A237E;"> Applied Jobs</h2>
			<br>
		</div>
		<div class="col-md-1">
	</div>
	
		<div class="col-md-1">
		</div>
		</div>
			<?php
			$email = $_GET['email'];
			include("include/config.php");
		$sql = "SELECT cname,pname FROM applied WHERE semail='$email'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			?>
			<div class="table-responsive">          
						<table id="example" class="table">
						<thead style="font-family: 'Cabin', sans-serif;font-size:20px;">
						<tr style="font-size:20px;color:#BF360C;">
							<th>Company</th>
							<th>post</th>
							<th>salary</th>
							<th>location</th>
							<th>criteria</th>
						</tr>
						</thead>
			<?php
			while($row = $result->fetch_assoc())
			{
				$cname = $row['cname'];
				$pname = $row['pname'];
				
				$sql1 = "SELECT cname,pname,package,location,criteria FROM jobs WHERE cname='$cname' AND pname='$pname'";
				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0)
				{
					while($row1 = $result1->fetch_assoc())
					{
						?>
						<tbody style=" font-family: 'Bellefair', serif;font-size:20px;">
						<tr>
							<td  style="font-weight:bold; font-size:20px;color:#1B5E20;font-family: 'Fresca', sans-serif;"><?php echo $row1['cname']; ?></td>
							<td><?php echo $row1['pname']; ?></td>
							<td><?php echo $row1['package']; ?></td>
							<td><?php echo $row1['location']; ?></td>
							<td><?php echo $row1['criteria']; ?></td>
							<td><p><a href="undojob.php?cname=<?php echo $cname; ?>&pname=<?php echo $pname; ?>"><span style="color:white;"><button type="button" class="btn btn-danger"  onClick="return confirm('do you really want to delete!!!')">Undo</span></button></a>
						</tr>
						</tbody>
						<?php
					}		
				}
				?>
				
				<?php
			}
			?>
			</table>
			</div>
			<?php
		}else{
			?>
				<h2 style="color:red; font-family: 'Pathway Gothic One', sans-serif;margin-left:10px;"> No job applied</h2>
			<?php
		}
		?>		
			
</div>
</div>
<div class="col-md-2">
	</div>
</div>
<?php
			include("footer.php");
?>

</body>
</html>