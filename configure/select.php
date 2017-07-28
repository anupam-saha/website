<?php
include("include/config.php");

$sql = "SELECT * FROM applied";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["stu_id"]." ". $row["images_path"]." ".$row["images_id"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>