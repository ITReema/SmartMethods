<?php
$connection = new mysqli("localhost", "admin", "", "robot_mapping");
if ($connection->connect_errno) {
	exit("Database connection failed. reason: " . $connection->connect_error);
}

$forward = $_POST['forward'];
$left = $_POST['left'];
$right = $_POST['right'];

$query = "INSERT INTO `directions`(`forward`, `move_left`, `move_right`) VALUES ($forward,$left,$right)";

$connection->query($query);
header("Location: index.php");
$connection->close();
?>