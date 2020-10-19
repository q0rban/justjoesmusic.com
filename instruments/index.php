<?php 
  $path_to_root = "../";
  $title = "Step Up and Professional Instruments";
?>
<!DOCTYPE html>
<html lang="en" class="">

<?php require $path_to_root . 'head.php'; ?>

<body>
  <div class="container-fullwidth">
    <?php include '../header.php' ?>
    <div class="row muli">
      <div class="width-container" style="max-width: 1440px;">
        <div class="col eb-garamond center blue">
          <h2 class="eb-garamond mobile-heading" style="padding-top: 25px; padding-bottom: 15px; font-size: 42px;">Step Up and Professional Instruments</h2>
        </div>
        <p class="muli center">The below listed instruments are what I aim to have in stock at all times. If you don’t see what you’re looking for, please <a href="../contact_us" target="_blank">send us an email.</a> Thanks</h4><br /><br />
        <?php
        include '../../.connects';
        $sql = "SELECT * FROM instruments ORDER BY display_id ASC;";
        $result = $link->query($sql) or die("Query failed. Call Aaron immediately.");
        $index = 0;
        echo "<div class='row'>";
        while ($row = $result->fetch_assoc()) {
          if ($row["enabled"] == true) {
            echo "<div class='col-md-3 center instrument-item' id='click" . $row["id"] . "'>";
            echo "<img class = 'lazy' data-src='" . "https://elasticbeanstalk-us-west-2-544012685056.s3-us-west-2.amazonaws.com/" .  $row["image_url"] . "' alt='" . nl2br($row["instrument_name"]) . "' style='height: 200px; max-width: 80%; max-height: 300px;'/>";
            if ($row["availability"] == 1) {
              echo "<p style= 'margin-bottom: 0;'><span class='badge badge-success instrument-badge'>In Stock</span></p>";
            } else if ($row["availability"] == 2) {
              echo "<p style= 'margin-bottom: 0;'><span class='badge badge-warning instrument-badge'>On the Way</span></p>";
            } else if ($row["availability"] == 3) {
              echo "<p style= 'margin-bottom: 0;'><span class='badge badge-danger instrument-badge'>Just Sold</span></p>";
            }
            echo "<p>" . nl2br($row["instrument_name"]) . "<br />";
            echo "<span class='esurance-font-color'>" . nl2br($row["model_number"]) . "</span></p>";
            echo "</div>";  
          }
        }
        echo "</div>";
        ?>
      </div>
    </div>
  </div>
  <?php
  $sql = "SELECT * FROM instruments ORDER BY display_id ASC;";
  $result = $link->query($sql) or die("Query failed. Call Aaron immediately.");
  $index = 0;

  while ($row = $result->fetch_assoc()) {
    // include '../../.connects';
    // $sql2 = "SELECT * FROM instruments_points WHERE instrument_id = " . $row["id"] . " ORDER BY pointId ASC;";
    // $result2 = $link->query($sql2) or die("Query failed. Call Aaron immediately.");

    echo "<div class='instrument-modal muli' id='" . $row["id"] . "' style='display:none; padding: 25px;'>";
    echo "<div class='close-button'><i class='icofont-close close-button'></i></div>";
      echo "<div class='row'>";
        echo "<div class='col-md-5'>";
          echo "<h3>" . $row["instrument_name"] . "</h3>";
          echo "<p class='esurance-font-color' style='margin-bottom: 0'>" . $row["model_number"] . "</p>";
          echo "<div class='center-image' style='width:100%;'>";
          echo "<img class='lazy' data-src='" . "https://elasticbeanstalk-us-west-2-544012685056.s3-us-west-2.amazonaws.com/" . $row["image_url"] . "' alt='" . $row["instrument_name"] . "' style='max-width:80%; max-height: 400px;'/>";
          echo "</div>";
        echo "</div>";
        echo "<div class='col-md-7'>";
        echo "<p>" . nl2br($row["description"]) . "</p>";
        echo "<div class='row'>";
          echo "<div class='col-md-6 absolute-boxes' id=''>";
          echo "<p style='text-align: center;'><span class='badge badge-primary align-middle'>Just Joe's Price: </span> $" . $row["price"] . "</p>";
            echo "<div class='center-boxes'>";
              echo "<a href = '../price_match_guarantee/' target='_blank'><div class='teal-box'><div class='blue-box'><div class='vertical-center'><p style='font-family: deccan;'><small>Backed by the</small><br />JUST JOE'S MUSIC</p><h5 style='letter-spacing: 8px; padding-left: 5px; font-family: deccan;'>PRICE MATCH GUARANTEE</h4></div></div></div>";
            echo "</div>";
            echo "<p style='margin-top: 230px; margin-bottom: 30px; text-align: center;'>Click for Details</p></a>";

          echo "</div>";
          echo "<div class='col-md-6' style='min-height:200px;'>";
            echo "<ul style='list-style-type: disc !important; padding-left:1em !important; margin-left:1em;'>";
            // TO-DO: Delete the next line, uncomment while loop.

            echo $row["bullet_points"];

            // while ($row2 = $result2->fetch_assoc()) {
            //   echo "<li>" . $row2["point"] . "</li>";
            // }
            echo "</ul>";

          echo "</div>";
        echo "</div>";
        echo "</div>";
      echo "</div>";
    echo "</div>";
    echo "<script>";
    echo "$('#click" . $row["id"] . "').click(function() {";
      echo "$('#" . $row["id"] . "').slideDown();";
      echo "$('.disable-background').show();";
      echo "$('body').css('overflow', 'hidden');";
    echo "});";
    echo "</script>";
  }
  ?>
  <div class="disable-background"></div>
  
  <script>
    $('.close-button, .disable-background').click(function() {
      $('.instrument-modal').slideUp();
      $('.disable-background').hide();
      $('body').css('overflow', 'auto');
    });
    $(document).ready(function () {
      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) || $(window).width() < 970 ) {
        $('.absolute-boxes').height('300px');
      }
      $(window).resize(function () {
        if ($(window).width() < 970) {
          $('.absolute-boxes').height('280px');
        } else {
          $('.absolute-boxes').height('auto');
        }
      });
    });

  </script>
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
    <div style="height: 300px; display: table; min-height: 10px; margin-left: 0px; left: 0px; width: 100%; overflow: hidden;" data-is-screen-width="true" class="StrpShwcs0-127y_hrj44qc0" id="StrpShwcs0-127y"><iframe allowfullscreen="" frameborder="0" scrolling="no" allowtransparency="true" style="height: 300px; position: relative; min-height: 10px; width: 100%; overflow:hidden;" class="tpa-gallery-StripShowcase StrpShwcs0-127y_hrj44qc0iframe" id="StrpShwcs0-127yiframe" src="../../iframes/price_match_slider.html"></iframe></div>
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
    <div data-packed="true" style="width: 192px; pointer-events: none; margin-bottom:10px;" class="txtNew no-mobile scroll-3" id="WRchTxt1f-p9o">
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

</html>