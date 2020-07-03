<!DOCTYPE html>
<html>
<head>
  <title>Robot Mapping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script type="text/javascript" src="map.js"></script> 
</head>

<body>
  <div class="container">
    <h1 class="page-title"><span>Robot</span> Control Panel</h1>
    <div class="wrapper">
      
      <div class="direction">
        <h3>Robot Mapping</h3>
        <form action="db_insert.php" method="post">
          <input type="text" name="forward" placeholder="Forward">
          <input type="text" name="right" placeholder="Right">
          <input type="text" name="left" placeholder="Left">
          <button type="submit">Save</button>
        </form>

        <form action="db_delete.php" method="post">
          <button>Delete</button>
        </form>

        <button id="start">Start</button>

        <table>
          <tr>
            <th>Forward</th>
            <th>Right</th>
            <th>Left</th>
          </tr>
          <?php
          $link = mysqli_connect("localhost", "admin", "", "robot_mapping");
          if ($link->connect_error) {
          die("Connection failed: " . $link->connect_error);
          }
          
          $sql = "SELECT forward, move_right, move_left FROM directions";
          $result = $link->query($sql);
          if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["forward"]. "</td><td>" . $row["move_right"] . "</td><td>"
          . $row["move_left"]. "</td></tr>";
          }
          echo "</table>";
          } 
          $link->close();
          ?>
        </table>
      </div>

      <div class="draw">
        <canvas id="DemoCanvas" width="600" height="300" style="border:1px solid #000000;"></canvas>
      </div>
    </div>
  </div>
<script type="text/javascript" src="map.js"></script> 

</body>
</html>