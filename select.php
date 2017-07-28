<?php
include("include/config.php");

$sql = "drop table files";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["cname"]." ". $row["pname"]." ".$row["location"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>