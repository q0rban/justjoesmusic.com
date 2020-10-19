<?php header( "Cache-Control: no-cache, must-revalidate" ); ?>
<html>

<head>
  <link rel="stylesheet" href="https://elasticbeanstalk-us-west-2-544012685056.s3-us-west-2.amazonaws.com/bootstrap/bootstrap.min.css">
  <script src="https://elasticbeanstalk-us-west-2-544012685056.s3-us-west-2.amazonaws.com/bootstrap/bootstrap.min.js"></script>
  <script src="https://elasticbeanstalk-us-west-2-544012685056.s3-us-west-2.amazonaws.com/popper/popper.min.js"></script>

</head>

<body>
  <?php
  if ($_GET["update-success"] == "true") {
    echo "<div class='alert alert-success center'>Nice Pops! Availability successfully updated, and is live on site. <a href='../rental_information/instrument_availability'>Go to live site</a></div>";
  }
  ?>
  <ul>
    <li>Want to exclude ONLY a new or ONLY a used item from the reservation form? Simply set the new or used price to 0.</li>
  </ul>
  <table class="table table-center" style="width: 50%">
    <thead>
      <tr>
        <th scope="col">Instrument</th>
        <th scope="col">Availability - New</th>
        <th scope="col">Availability - Used</th>
        <th scope="col">Enable for Availability</th>
        <th scope="col">Enable for Reservation</th>
        <th scope="col">New Price</th>
        <th scope="col">Used Price</th>
      </tr>
    </thead>
    <tbody>
      <form action="./update_availability.php">
        <?php
        include '../../.connects';
        $sql = "SELECT * FROM instrument_availability ORDER BY display_id ASC;";
        $result = $link->query($sql) or die("Query failed. Call Aaron immediately.");
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo '<td>' . nl2br($row["instrument_name"]) . '</td>';

          // New
          echo '<td>';
          echo "<select id='" . nl2br($row["id"]) . "' name='" . nl2br($row["id"]) . "_new'>";
          echo "<option value ='1' ";
          if (nl2br($row["new_availability"]) == 1) {
            echo "selected";
          }
          echo ">Avalable</option>";
          echo "<option value ='2' ";
          if (nl2br($row["new_availability"]) == 2) {
            echo "selected";
          }
          echo ">Running Low</option>";
          echo "<option value ='3' ";
          if (nl2br($row["new_availability"]) == 3) {
            echo "selected";
          }
          echo ">Not available</option>";

          echo "</select>";
          echo "</td>";

          //Used
          echo '<td>';
          echo "<select id='" . nl2br($row["id"]) . "' name='" . nl2br($row["id"]) . "_used'>";
          echo "<option value ='1' ";
          if (nl2br($row["used_availability"]) == 1) {
            echo "selected";
          }
          echo ">Avalable</option>";
          echo "<option value ='2' ";
          if (nl2br($row["used_availability"]) == 2) {
            echo "selected";
          }
          echo ">Running Low</option>";
          echo "<option value ='3' ";
          if (nl2br($row["used_availability"]) == 3) {
            echo "selected";
          }
          echo ">Not available</option>";

          echo "</select>";
          echo "</td>";

          echo "<td>";
          if (nl2br($row["enable_availability"]) == 1) {
            echo "<input type='checkbox' name='" . nl2br($row["id"]) . "_enable_availability' checked>";
          } else if (nl2br($row["enable_availability"]) == 0) {
            echo "<input type='checkbox' name='" . nl2br($row["id"]) . "_enable_availability'>";
          }
          echo "</td>";
          echo "<td>";
          if (nl2br($row["enable_reservation"]) == 1) {
            echo "<input type='checkbox' name='" . nl2br($row["id"]) . "_enable_reservation' checked>";
          } else if (nl2br($row["enable_reservation"]) == 0) {
            echo "<input type='checkbox' name='" . nl2br($row["id"]) . "_enable_reservation'>";
          }
          echo "</td>";

          echo "<td>";
          echo "<input type='text' name='" . nl2br($row["id"]) . "_new_price' value='" . nl2br($row["new_price"]) . "' />";
          echo "</td>";

          echo "<td>";
          echo "<input type='text' name='" . nl2br($row["id"]) . "_used_price' value='" . nl2br($row["used_price"]) . "' />";
          echo "</td>";





          echo "</tr>";
        }
        mysqli_close($link);
        ?>
        <button type="submit" class="btn btn-primary">Save and Make Live</button>
      </form>
    </tbody>
  </table>
</body>

</html>