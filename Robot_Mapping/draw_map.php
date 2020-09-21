<?php
$connection = new mysqli("localhost", "admin", "", "robot_mapping");
if ($connection->connect_errno) {
    exit("Database connection failed. reason: " . $connection->connect_error);
}

$forward = $_POST['forward'];
$left = $_POST['left'];
$right = $_POST['right'];


    $query = "INSERT INTO `directions`(`forward`, `left`, `right`) VALUES ($forward,$left,$right)";

$connection->query($query);
$connection->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Robot Mapping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <canvas id="myCanvas" width="600px" height="300px" style="border:2px solid black"></canvas>
    <script>
        var canvas = document.getElementById('myCanvas');
        var c = canvas.getContext("2d");
        var forward = parseInt(<?php echo $forward?>);
        var left = parseInt(<?php echo $left?>);
        var right = parseInt(<?php echo $right?>);
        var startX = 300;
        var startY = 300;
        
        c.moveTo(startX, startY);
        
        if (typeof forward != 'undefined') {
            startY = startY - forward;
            c.lineTo(startX, startY);
            c.stroke();
        }
        if (typeof left != 'undefined') {
            startX = startX - left;
            c.lineTo(startX, startY);
            c.stroke();
        }
        if (typeof right != 'undefined') {
            startX = startX + right;
            c.lineTo(startX, startY);
            c.stroke();
        }
    </script>  
    <form>
        <input style="background-color: #FCA311; margin-top: 10px;" type="button" value="Go back!" onclick="history.back()">
    </form>
</body>
