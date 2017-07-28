<?php
include("include/config.php");
$id = $_GET['id'];
$sql = "SELECT * from files WHERE id='$id'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc())
			{
				$path = $row['path'];
				header('content-disposition: inline; filename = '.$path.'');
				header('content-type:application/pdf');
				header('content-length='.filesize($path));
				readfile($path);
			}
		}
		else
		{
			?>
			<h1 style="color:red; font-family: 'Pathway Gothic One', sans-serif;">cv not uploaded...</h1>
			<?php
		}
		?>