<html>
<?php
include("include/config.php");
?>
<head>
<link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
</head>
<body>
<?php
include("index.php");
?>
<div class="row"style = "margin-top:200px;">
<div class = "col-md-2">
</div>
<div class = "col-md-8">
	<?php
	$sql = "SELECT sname,regno FROM studentname";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			?>
			<div class="table-responsive">          
						<table class="table">
						<thead style="font-family: 'Cabin', sans-serif;font-size:20px;">
						<tr style="font-size:20px;color:#BF360C;">
							<th>Reg. No.</th>
							<th>Student Name</th>
							<th>Resume</th>
						</tr>
						</thead>
						<?php
						while($row = $result->fetch_assoc())
						{
							
							$regno = $row['regno'];
							$sname = $row['sname'];
							?>
							<tbody style=" font-family: 'Bellefair', serif;font-size:20px;">
						<tr>
							<td  style="font-weight:bold; font-size:20px;color:#1B5E20;font-family: 'Fresca', sans-serif;"><?php echo $regno; ?></td>
							<td><?php echo $sname; ?></td>
							<td><p><button type="button" class="btn btn-success"><a href="download.php?id=<?php echo $regno; ?>"><span style = "color:white;">View cv<span></a></button>
						</tr>
						</tbody>
						<?php
						}
						?>
						</table>
						</div>
						<?php
		}
		?>
</div>
<div class="col-md-2">
</div>
</div>
</body>
</html>