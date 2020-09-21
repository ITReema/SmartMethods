<?php
$connection = new mysqli("localhost", "admin", "", "robot_mapping");
if ($connection->connect_errno) {
	exit("Database connection failed. reason: " . $connection->connect_error);
}
 
$query = "DELETE FROM directions";

if(mysqli_query($link, $query)){
    echo "Record was deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. ";
}

$connection->query($query);
header("Location: index.php");
$connection->close();
?>
