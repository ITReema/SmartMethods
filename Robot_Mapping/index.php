
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
  <div class="container">
    <h1 class="page-title"><span>Robot</span> Control Panel</h1>
    <div class="wrapper">
      <div class="direction">
        <h3>Robot Mapping</h3>
        <form action="draw_map.php" method="post">
          <input type="text" name="forward" placeholder="Forward">
          <input type="text" name="right" placeholder="Right">
          <input type="text" name="left" placeholder="Left">
          <button formaction="db_insert.php">Save</button>
          <button type="submit" name="submit" value="submit">Start</button>
          <button formaction="db_delete.php">Delete</button>
        </form>
      </div>
      <div class="db_table" style="background: orange;">
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
          while($row = $result ->fetch_assoc()) {
          echo "<tr><td>" . $row["forward"]. "</td><td>" . $row["move_right"] . "</td><td>"
          . $row["move_left"]. "</td></tr>";
          }
          echo "</table>";
          } 
          $link->close();
          ?>
        </table>
      </div>
    </div>
  </div>
  <script src="map.js"></script> 
</body>
</html>
