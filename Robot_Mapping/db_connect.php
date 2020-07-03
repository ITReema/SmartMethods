<?php
$link = mysqli_connect("localhost", "admin", "", "robot_mapping");
// Check connection
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);
}

$sql = "SELECT forward, move_right, move_left FROM directions";

$link->close();
?>




    