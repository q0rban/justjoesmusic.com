<?php
  $path_to_root = "../../";
  $title = "Yamaha Electric Violin Giveaway!";
?>

<!DOCTYPE html>
<html lang="en" class="">

<?php require $path_to_root . 'head.php'; ?>

<body>
  <div id="fb-root"></div>
  <div class="container-fullwidth">
    <?php include '../../header.php' ?>
    <div class="width-container" style="max-width: 1440px;">
      <div class="row">
        <div class="col eb-garamond center blue" style="width: 100%;">
          <h2 class="eb-garamond mobile-heading" style="padding-top: 25px; padding-bottom: 15px; font-size: 42px;">Yamaha Electric Violin Giveaway - Drawing Ended!</h2>
            <div class="col center muli blue">
              <h4>Congratulations</h4>
              <h2><b>Davis Dudley</b></h2>
              <!-- <p class="paragraph muli esurance-font-color center" style="width: 90%; margin: 0 auto;">
                <small>No purchase necessary</small>
              </p>
              <p class="paragraph muli esurance-font-color center" style="width: 90%; margin: 0 auto; padding-bottom: 15px;">These steps are required. Once your email is received and we have verified the Facebook activity we will print it and include it in the drawing on February 14th.<br />
                Note: these steps are easiest from your desktop or laptop computer.
              </p>
            </div>
          </div>
          <div class="row muli promotion">
            <div class="col-lg-3 center" id="1" style="padding-bottom: 20px; visibility:hidden;">
              <div class="number-icon" id="1-m">
                <h2 class="vertical-center">1</h2>
              </div>
              <h4>Like our Facebook Page</h4>
              <p>(If you haven't already!)</p>
              <iframe style="max-width:100%" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FJust-Joes-Music-337544735135%2F&tabs&width=340&height=130&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId=498648573989464" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="col-lg-3 center" id="2" style="padding-bottom: 20px; visibility:hidden;">
              <div class="number-icon" id="2-m">
                <h2 class="vertical-center">2</h2>
              </div>
              <h4>Like Our Post</h4>
              <iframe style="max-width: 90%; padding-bottom: 5px;" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D10162585730560136%26id%3D337544735135%26substory_index%3D0&width=350" width="350" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
            <div class="col-lg-3 center" id="3" style="padding-bottom: 20px; visibility:hidden;">
              <div class="number-icon" id="3-m">
                <h2 class="vertical-center">3</h2>
              </div>
              <h4 style="font-size:17px;">Tag a friend in a comment</h4>
              <iframe style="max-width: 90%; padding-bottom: 5px;" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D10162585730560136%26id%3D337544735135%26substory_index%3D0&width=350" width="350" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

            </div>
            <div class="col-lg-3 center" id="4" style="padding-bottom: 20px; visibility:hidden;">
              <div class="number-icon" id="4-m">
                <h2 class="vertical-center">4</h2>
              </div>
              <h4>Send us an e-mail</h4>
              <p>Please include:</p>
              <ul class="li-padding" style="font-size: 12px;">
                <li style="padding-top: 0;"><i class="icofont-music-alt"></i>What school you (if applicable) or your student attends or</li>
                <li><i class="icofont-music-alt"></i>What performance group or organization you’re involved with or</li>
                <li><i class="icofont-music-alt"></i>Who your private instructor is or</li>
                <li><i class="icofont-music-alt"></i>Whatever else you would like to tell us!</li>
              </ul>
              <p><a href="<?php echo $path_to_root . "contact_us/" ?>">Visit the contact page to get in touch</a></p>
            </div> -->
          <div class="row">
            <div class="col muli">
              <h4>You've won a Yamaha YEV-104 Electric Violin!</h4>
              <p><small>MSRP $899</small></p>
              <p><small>Click to view product details:</small></p>
              <a href="https://usa.yamaha.com/products/musical_instruments/strings/electric_strings/yev-104/index.html" target="_blank"><img src="<?php echo $S3_BUCKET . "img/electric_violin.png"; ?>" style="width: 80%; padding-bottom: 20px;" /></a>
              <div id="video" style="width: 500px; margin: 0 auto; padding-bottom: 20px;">
              <iframe class="youtube" width="560" height="315" src="https://www.youtube.com/embed/Bpfa4XLm4Wk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
    <script>
      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $(document).ready(function () {
          $("#video").width("275px");
          $(".youtube").height("150px");
        });
        var found1 = false;
        var found2 = false;
        var found3 = false;
        var found4 = false;
        if ($('#1-m:visible').visible() && found1 === false) {
          $('#1').hide();
          $('#1').css("visibility", "visible");
          $('#1').fadeIn();
          found1 = true;
        }
        $(window).scroll(function() {
          if ($('#1-m:visible').visible() && found1 === false) {
            $('#1').hide();
            $('#1').css("visibility", "visible");
            $('#1').fadeIn();
            found1 = true;
          }
          if ($('#2-m:visible').visible() && found2 === false) {
            $('#2').hide();
            $('#2').css("visibility", "visible")
            $('#2').fadeIn();
            found2 = true;
          }
          if ($('#3-m:visible').visible() && found3 === false) {
            $('#3').hide();
            $('#3').css("visibility", "visible");
            $('#3').fadeIn();
            found3 = true;
          }
          if ($('#4-m:visible').visible() && found4 === false) {
            $('#4').hide();
            $('#4').css("visibility", "visible");
            $('#4').fadeIn();
            found4 = true;
          }

        });
      } else {
        $(document).ready(function() {
          $("#2, #3, #4").hide();
          $("#1, #2, #3, #4").css("visibility", "visible");
          $("#1").hide();
          $("#1").delay(500).fadeIn(500);
          $("#2").delay(1500).fadeIn(500);
          $("#3").delay(2500).fadeIn(500);
          $("#4").delay(3500).fadeIn(500);
        });
      }
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
      <div style="height: 300px; display: table; min-height: 10px; margin-left: 0px; left: 0px; width: 100%; overflow: hidden;" data-is-screen-width="true" class="StrpShwcs0-127y_hrj44qc0" id="StrpShwcs0-127y"><iframe allowfullscreen="" frameborder="0" scrolling="no" allowtransparency="true" style="height: 300px; position: relative; min-height: 10px; width: 100%; overflow:hidden;" class="tpa-gallery-StripShowcase StrpShwcs0-127y_hrj44qc0iframe" id="StrpShwcs0-127yiframe" src="../../iframes/StripShowcase.html"></iframe></div>
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

    <?php include $path_to_root . 'widget.php'; ?>

    <footer class="row footer">
      <div class="col">
        <p style="padding-top: 15px;">© 2019 Just Joe's Music</p>
        <p>61400 S Hwy 97 #3<br />Bend, OR 97702<br />(541) 318-5646 or (541)-977-5637 (JOES)</p>
      </div>
    </footer>

</body>

</html>