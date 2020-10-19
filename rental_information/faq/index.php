<?php
$path_to_root = "../../";
$page = "FAQ";
$title = "Frequently Asked Questions";
?>
<!DOCTYPE html>
<html lang="en" class="">

<?php require $path_to_root . 'head.php'; ?>

<body>
  <div class="container-fullwidth">
    <?php include $path_to_root . 'header.php' ?>
    <div class="width-container">
      <div class="row">
        <div class="col eb-garamond center blue">
          <h2 class="eb-garamond mobile-heading" style="padding-top: 25px; padding-bottom: 15px; font-size: 42px;">FAQ</h2>
        </div>
      </div>
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Can we trade instruments?
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Yes, subject to stock on hand. I cannot guarantee that I will have an alternate choice instrument after the first few weeks of the school year.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Can we buy the instrument we're renting?
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Yes, I will apply 100% of the rental portion money paid towards the cash value/purchase price.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFour">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                How many months before I own the instrument? ($) = Prior to 2019
              </button>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
              Flute - 35 (33), Clarinet - 35 (34), Alto Sax - 42 (39), Trumpet - 36 (35), Trombone - 36 (35)
              Violin - 35 (34), Viola - 39, Cello - 34 (33), Snare Kit - 20, Bell Kit - 22. </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFive">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                What is the cash value or purchase price of the different rental instruments? </button></h5>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body center">
              Click to see the <a href="./cash_value_of_rentals/">cash value</a>.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingSix">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Can we use our paid rental money towards a step up instrument? </button></h5>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body">
              Yes, I will allow up to 12 months worth of rental payments to be applied to the suggested retail price of a step up instrument.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingSeven">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Why the suggested retail price? </button></h5>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
              <div class="card-body">
                My <a href="../../price_guarantee">price match guarantee</a> on step up and professional instruments
                already represents a huge discount off the suggested retail price. You'll be charged whichever is lower;
                the suggested retail less your payments or my price match guarantee. You will never pay more
                than an on-line price for your step up instrument and you will have enjoyed an exceptionally fair value
                on your rental.
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingEight">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                Do I have to use the automatic payment process? </button></h5>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
              <div class="card-body">
                Yes, it's the most efficient and sure-footed way for me to offer rental instruments. In the long run it saves everyone time and money. </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingNine">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                Do you offer insurance? </button></h5>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
              <div class="card-body">
                No, when you rent an instrument you are responsible for loss or damage to the instrument.
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTen">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                What about the $4.00 a month I pay? </button></h5>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
              <div class="card-body">
                That's for normal maintenance I will do on the instrument and in most cases, repair of accidental damage. If you and your student take reasonable care of the instrument it will cost you nothing additional to have it kept in top playing condition.
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingEleven">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                How long can we rent the instrument? </button></h5>
            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
              <div class="card-body">
                After your initial 10 month term, you can continue to rent the instrument month to month for as long as you wish.
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwelve">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                What happens with the rental at the end of the school year? </button></h5>
            <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
              <div class="card-body">
                <ul style='list-style-type: disc !important; padding-left:1em !important; margin-left:1em;'>
                  <li>If your student is going to play next year it is best not to turn the instrument in over the summer. All of our contracts are rent-to-own and you are building equity as you go. You would loose any credit you have built up and there is no guarantee that you would get the same instrument back next season. Plus, we're sure they want to practice! :)</li><br />
                  <li>If your student is for sure not going to participate in music next year...by all means feel free to turn the instrument back in after your June (or 10th payment) payment.</li><br />
                  <li>Before returning the instrument please look it over with your student.</li><br />
                  <li>Please, only one family member in the store for the return.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>



        <div style="margin-top: 20px;">
          <?php include "../links.php" ?>
        </div>
      </div>
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

</html>