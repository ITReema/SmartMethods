<?php
$link = mysqli_connect("localhost", "admin", "", "robot_mapping");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$forward = mysqli_real_escape_string($link, $_REQUEST['forward']);
$right = mysqli_real_escape_string($link, $_REQUEST['right']);
$left = mysqli_real_escape_string($link, $_REQUEST['left']);
 

$sql = "INSERT INTO directions (forward, move_right, move_left) VALUES ('$forward', '$right', '$left')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
header("Location: index.php");
mysqli_close($link);
?>