<?php header( "Cache-Control: no-cache, must-revalidate" ); ?>

<head>
  <link rel="stylesheet" href="https://elasticbeanstalk-us-west-2-544012685056.s3-us-west-2.amazonaws.com/bootstrap/bootstrap.min.css">
  <script src="https://elasticbeanstalk-us-west-2-544012685056.s3-us-west-2.amazonaws.com/bootstrap/bootstrap.min.js"></script>
  <script src="https://elasticbeanstalk-us-west-2-544012685056.s3-us-west-2.amazonaws.com/popper/popper.min.js"></script>
</head>

<?php
  echo "<form action = 'update_instrument.php?id=" . $_GET["id"] . "'>";

  echo "<input type='hidden' name='id' value='". $_GET["id"] . "' />";

  require_once '../../../.connects';

  $sql = "SELECT * FROM instruments WHERE id = " . $_GET["id"] . ";";
  $result = $link->query($sql) or die("Query failed. Call Aaron immediately.");

  $row = mysqli_fetch_array($result);

  echo "<h1>Editing " . $row["model_number"] . "</h1>";
  echo "Enabled?";
  if (nl2br($row["enabled"]) == 1) {
    echo "<input type='checkbox' name='enabled' checked>";
  } else if (nl2br($row["enabled"]) == 0) {
    echo "<input type='checkbox' name='enabled'>";
  }
  echo "<br /><br />";
echo "Name <input type='text' name='name' value='" . $row["instrument_name"] . "' size='100' /><br /><br />";
  echo "Model Number <input type='text' name='model_number' value='" . $row["model_number"] . "' size='20' /><br /><br />";
  echo "Price (just numbers) <input type='text' name='price' value='" . $row["price"] . "' size='10' /><br /><br />";
  echo "Availability: <select name='availability'>";
  echo "<option value ='1' ";
  if (nl2br($row["availability"]) == 1) {
    echo "selected";
  }
  echo ">In Stock</option>";
  echo "<option value ='2' ";
  if (nl2br($row["availability"]) == 2) {
    echo "selected";
  }
  echo ">On the Way</option>";
  echo "<option value ='3' ";
  if (nl2br($row["availability"]) == 3) {
    echo "selected";
  }
  echo ">Just Sold</option>";
  echo "</select><br /><br />";
  echo "Description<br />";
  echo "<textarea name='description' rows='10' cols='150'>" . $row["description"] . "</textarea><br /><br />";
  echo "Bullet Points<br />";
  echo "Must be in the format shown. Example: " . htmlspecialchars("<li>Really shitty instrument</li>");
  echo "<textarea name='bullet_points' rows='10' cols='150'>" . $row["bullet_points"] . "</textarea><br />";


?>
  <input type="submit" class="btn btn-primary" value='Save' />
</form>