<?php

require '../../../.connects';


  $name = $link -> real_escape_string($_GET["name"]);
  $model_number = $link -> real_escape_string($_GET["model_number"]);
  $price = $link -> real_escape_string($_GET["price"]);
  $availability = $link -> real_escape_string($_GET["availability"]);
  $description = $link -> real_escape_string($_GET["description"]);
  $bullet_points = $link -> real_escape_string($_GET["bullet_points"]);
  $id = $link -> real_escape_string($_GET["id"]);
  if (isset($_GET["enabled"])) {
    $enabled = 1;
  } else {
    $enabled = 0;
  }

  $sql = "UPDATE instruments 
          SET instrument_name = '" . $name . "',
              model_number = '" . $model_number . "',
              price = " . $price . ",
              availability = " . $availability . ",
              description = '" . $description . "',
              bullet_points = '" . $bullet_points . "',
              enabled = " . $enabled . "
          WHERE id = " . $id . ";";

          echo $sql;
  $result = $link->query($sql) or die(mysqli_error($link));

  mysqli_close($link);

echo "Hey Dad, allow three seconds for my brilliance...";

header("Location: ../instruments?update_success=true"); 

?>