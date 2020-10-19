<?php
include '../../.connects';
$sql = "SELECT * FROM instrument_availability ORDER BY display_id ASC;";
$result = $link->query($sql) or die("Query failed. Call Aaron immediately.");
mysqli_close($link);

while ($row = $result->fetch_assoc()) {
  include '../../.connects';
  $availability_new = $_GET[nl2br($row["id"]) . "_new"];
  $availability_used = $_GET[nl2br($row["id"]) . "_used"];
  if (isset($_GET[nl2br($row["id"]) . "_enable_availability"])) {
    $enable_availability = 1;
  } else {
    $enable_availability = 0;
  }
  if (isset($_GET[nl2br($row["id"]) . "_enable_reservation"])) {
    $enable_reservation = 1;
  } else {
    $enable_reservation = 0;
  }
  $new_price = $_GET[nl2br($row["id"]) . "_new_price"];
  $used_price = $_GET[nl2br($row["id"]) . "_used_price"];

  $id = nl2br($row["id"]);
  $sql2 = "UPDATE instrument_availability 
          SET new_availability = " . $availability_new . ",
              used_availability = " . $availability_used . ",
              enable_availability = " . $enable_availability . ",
              enable_reservation = " . $enable_reservation . ",
              new_price = " . $new_price . ",
              used_price = " . $used_price . "
          WHERE id = " . $id . ";";
  $result2 = $link->query($sql2) or die(mysqli_error($link));
}
mysqli_close($link);

echo "Hey Dad, allow three seconds for my brilliance...";

header("refresh: 3; url = ../portal/instrument_availability.php?update-success=true"); 

// header("Location: ../portal/instrument_availability.php?update-success=true");
