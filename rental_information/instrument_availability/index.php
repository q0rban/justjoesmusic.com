<?php
  $path_to_root = "../../";
  $page = "instrument_availability";
  $title = "Instrument Availability"
?>
<!DOCTYPE html>
<html lang="en" class="">

<?php require $path_to_root . 'head.php'; ?>

<body>
  <div class="container-fullwidth">
    <?php include $path_to_root . 'header.php' ?>
    <div class="row">
      <div class="col eb-garamond center blue">
        <h2 class="eb-garamond mobile-heading" style="padding-top: 25px; padding-bottom: 15px; font-size: 42px;">Instrument Availability</h2>
      </div>
    </div>
    <div class="row">
      <div class="col center">


        <table class="table table-center" style="width: 50%">
          <thead>
            <tr>
              <th scope="col">Instrument</th>
              <th scope="col">Availability - New</th>
              <th scope="col">Availability - Used</th>
            </tr>
          </thead>
          <tbody>

            <?php

            include '../../../.connects';
            $sql = "SELECT * FROM instrument_availability ORDER BY display_id ASC;";
            $result = $link->query($sql) or die("Query failed. Call Aaron immediately.");
            while ($row = $result->fetch_assoc()) {
              if (nl2br($row["enable_availability"]) == 1){
                echo "<tr>";
                echo '<td>' . nl2br($row["instrument_name"]) . '</td>';
                if (nl2br($row["new_availability"]) == 1) {
                  echo '<td><span class="badge badge-success">Available</span></td>';
                } else if (nl2br($row["new_availability"]) == 2) {
                  echo '<td><span class="badge badge-warning">Running Low</span></td>';
                } else if (nl2br($row["new_availability"]) == 3) {
                  echo '<td><span class="badge badge-danger">Not Available</span></td>';
                }
                if (nl2br($row["used_availability"]) == 1) {
                  echo '<td><span class="badge badge-success">Available</span></td>';
                } else if (nl2br($row["used_availability"]) == 2) {
                  echo '<td><span class="badge badge-warning">Running Low</span></td>';
                } else if (nl2br($row["used_availability"]) == 3) {
                  echo '<td><span class="badge badge-danger">Not Available</span></td>';
                }
                echo "</tr>";
              }
            }

            mysqli_close($link);
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div style="padding-bottom: 3px;">
      <?php include "../links.php" ?>
    </div>

    <div id="mainPageinlineContent-gridContainer" data-mesh-internal="true">

      <div class="row  background-esurance eb-garamond yes-mobile">
        <div class="col yes-mobile">
          <div class="row">
            <div class="col pink-border-right">
              <h5 class="yes-mobile eb-garamond blue remove-margin-bottom align-middle green-bar-text" style="text-align: center;">Price Match<br />Guarantee</h5>
            </div>
            <div class="col pink-border-right align-middle">
              <h5 class="yes-mobile eb-garamond blue remove-margin-bottom align-middle green-bar-text" style="text-align: center;">Locally<br />Owned</h5>
            </div>
            <div class="col">
              <h5 class="yes-mobile eb-garamond blue remove-margin-bottom align-middle green-bar-text" style="text-align: center;">Educator<br />Approved</h5>
            </div>
          </div>
        </div>
      </div>
      <div style="height: 300px; display: table; min-height: 10px; margin-left: 0px; left: 0px; width: 100%; overflow: hidden;" data-is-screen-width="true" class="StrpShwcs0-127y_hrj44qc0" id="StrpShwcs0-127y"><iframe allowfullscreen="" frameborder="0" scrolling="no" allowtransparency="true" style="height: 300px; position: relative; min-height: 10px; width: 100%; overflow:hidden;" class="tpa-gallery-StripShowcase StrpShwcs0-127y_hrj44qc0iframe" id="StrpShwcs0-127yiframe" src="../../iframes/rental_slider.html"></iframe></div>
      <div data-svg-id="26a3821c7e9018db3b97bfeb246509a7_svgshape.v1.Rhombus.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="-21.021 -54.88 377 377" data-preserve-viewbox="ignore" style="top:;bottom:;left:;right:;width:350px;height:300px;position:" class="SvgShp1-2k8_hrluhn56 no-mobile" id="SvgShp1-2k8">
        <div id="SvgShp1-2k8link" class="SvgShp1-2k8_hrluhn56link" style="overflow:hidden;">
          <div style="overflow: hidden; stroke-width:0;fill-opacity:1;stroke:rgba(48, 48, 48, 1);stroke-opacity:1;fill:#A8F6D8" class="SvgShp1-2k8_hrluhn56_SvgShp1-2k8 SvgShp1-2k8_hrluhn56_non-scaling-stroke SvgShp1-2k8_hrluhn56svg no-mobile" id="SvgShp1-2k8svg"><svg preserveAspectRatio="none" data-bbox="0 0 334.611 266.893" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 334.611 266.893" role="img">
              <g>
                <path class="no-mobile" style="overflow: hidden;" d="M226.09 266.893H0L108.521 0h226.09L226.09 266.893z">
                </path>
              </g>
            </svg>
          </div>
        </div>
      </div>
      <div data-packed="true" style="width: 192px; pointer-events: none; margin-bottom:10px;" class="txtNew no-mobile scroll-2" id="WRchTxt1f-p9o">
        <h5 class="font_5" style="font-size:20;"><span style="font-weight:bold;"><span style="font-size:20;"><span style="font-family:eb-garamond-bold,serif;"><span style="color:#2F5B94;">Price
                  Match</span></span></span></span></h5>

        <h5 class="font_5" style="font-size:20;"><span style="font-weight:bold;"><span style="font-size:20;"><span style="font-family:eb-garamond-bold,serif;"><span style="color:#2F5B94;">Guarantee</span></span></span></span></h5>
      </div>
      <div data-packed="true" style="width: 199px; pointer-events: none; margin-bottom: 10px;" class="txtNew no-mobile scroll-3" id="WRchTxt1i-9yc">
        <h5 class="font_5" style="font-size:20;"><span style="font-size:20;"><span style="color:#2F5B94;"><span style="font-weight:bold;"><span style="font-family:eb-garamond-bold,serif;">Locally</span></span></span></span>
        </h5>

        <h5 class="font_5" style="font-size:20;"><span style="font-size:20;"><span style="color:#2F5B94;"><span style="font-weight:bold;"><span style="font-family:eb-garamond-bold,serif;">Owned</span></span></span></span></h5>
      </div>
      <div data-packed="true" style="width: 183px; pointer-events: none; margin-bottom: 10px;" class="txtNew no-mobile scroll-3" id="WRchTxt1h-15xy">
        <h5 class="font_5" style="font-size:20;"><span style="font-size:20;"><span style="font-weight:bold;"><span style="color:#2F5B94;"><span style="font-family:eb-garamond-bold,serif;">Educator</span></span></span></span>
        </h5>

        <h5 class="font_5" style="font-size:20;"><span style="font-size:20;"><span style="font-weight:bold;"><span style="color:#2F5B94;"><span style="font-family:eb-garamond-bold,serif;">Approved</span></span></span></span>
        </h5>
      </div>
      <div data-border-width="8" style="transform-origin:center 4px;top:;bottom:;left:;right:;width:107px;height:8px;position:; margin-bottom: 10px;" class="style-k2v6ga71 no-mobile" id="FvGrdLn0-1c8q"></div>
      <div data-border-width="8px" style="transform-origin:center 4px;top:;bottom:;left:;right:;width:105px;height:8px;position:; margin-bottom: 10px;" class="style-k2v6heqy no-mobile" id="FvGrdLn1-g5l"></div>
    </div>
  </div>

  <?php include $path_to_root . 'widget.php'; ?>
  <?php include $path_to_root . 'footer.php'; ?>

</body>

</html>