<?php

$link = mysqli_connect("localhost", "admin", "", "robot_mapping");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "DELETE FROM directions";

if(mysqli_query($link, $sql)){
    echo "Record was deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. ";
}

header("Location: index.php");

mysqli_close($link);
?>
