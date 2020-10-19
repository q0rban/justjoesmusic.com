<?php
  require_once '../../../.connects';

  if ($_GET["update_success"] == true){
    echo "INSTRUMENT UPDATED SUCCESSFULLY";
  }

  $sql = "SELECT * FROM instruments ORDER BY display_id ASC;";
  $result = $link->query($sql) or die("Query failed. Call Aaron immediately.");

  while ($row = $result->fetch_assoc()) {
    echo "<p>" . $row["instrument_name"] . " - " . $row["model_number"] . " <a href='edit.php?id=" . $row["id"] . "'>Edit</a></p>";
  }

?>