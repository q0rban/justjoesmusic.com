<?php
  $path_to_root = "../../";
  $page = "rental_reservation";
  $title = "Rental Reservation Form";
?>

<!DOCTYPE html>
<html lang="en" class="">

<?php require $path_to_root . 'head.php'; ?>

<body>
  <!-- TO-DO: do something with thissie here script: -->
<script>
    function phoneFormat(input) {
      // Strip all characters from the input except digits
      input = input.replace(/\D/g, '');

      // Trim the remaining input to ten characters, to preserve phone number format
      input = input.substring(0, 10);

      // Based upon the length of the string, we add formatting as necessary
      var size = input.length;
      if (size == 0) {
        input = input;
      } else if (size < 4) {
        input = '(' + input;
      } else if (size < 7) {
        input = '(' + input.substring(0, 3) + ') ' + input.substring(3, 6);
      } else {
        input = '(' + input.substring(0, 3) + ') ' + input.substring(3, 6) + ' - ' + input.substring(6, 10);
      }
      return input;
    }
  </script>

  <div class="container-fullwidth">
    <?php include '../../header.php' ?>
    <div class="width-container">
      <div class="row">
        <div class="col eb-garamond center blue">
          <h2 class="eb-garamond mobile-heading" style="padding-top: 25px; padding-bottom: 15px; font-size: 42px;">Rental Reservation</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="paragraph-top muli esurance-font-color">
            Please complete (all) the following required information. There will be additional information needed at the time you receive your rental instrument and fill out the rental contract. (It's short and easy). Critical requirements are employment and that payments will be made on an auto debit or credit card charge each month.
          </p>
          <p class="paragraph-top muli esurance-font-color">
            Your reservation is a commitment to rent the instrument for a 10 month school year. (September through June) Payments are made through automatic credit or debit card billing.
          </p>
          <p class="paragraph-top muli esurance-font-color">
            Reserved Instruments must be picked up by September 5th or the instrument will be made available to the next customer in line.
          </p>
          <p class="paragraph-top muli esurance-font-color">
            When picking up your rental instrument before August 31st, we will credit the first payment as if it were September. Your next payment will be due in October.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div style="padding: 0 20px 0 20px;">
            <form class="muli esurance-font-color background-esurance" id="reservation_form" style="padding: 10px 10px 10px 10px !important; max-width: 600px; margin: 0 auto;" action="../../php/form.php" method="POST">
              <p class="center">* indicates a required field</p>
              <h3 style="text-align: center;">Parent Information</h3>
              <div class="form-group">
                <label for="firstName">Parent First Name *</label>
                <input required type="text" class="form-control" id="firstName" name="firstName" placeholder="">
              </div>
              <div class="form-group">
                <label for="lastName">Parent Last Name *</label>
                <input required type="text" class="form-control" id="lastName" name="lastName" placeholder="">
              </div>
              <div class="form-group">
                <label for="inputAddress">Address *</label>
                <input required type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City *</label>
                  <input required type="text" class="form-control" id="inputCity" name="inputCity" placeholder="">
                </div>
                <!-- <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div> -->
                <div class="form-group col-md-2">
                  <label for="inputZip">Zip *</label>
                  <input required type="text" class="form-control" id="inputZip" name="inputZip" placeholder="" style="min-width: 75px;" maxlength="5">
                </div>
              </div>
              <h3 style="text-align: center;">Contact Information</h3>
              <div class="form-group">
                <label for="inputEmail4">Email *</label>
                <input required type="email" class="form-control" id="inputEmail4" name="inputEmail" placeholder="">
              </div>
              <div class="form-group">
                <label for="tel1">Phone 1 *</label>
                <input required type="tel" class="form-control" id="phoneNumber" name="telephone1" placeholder="">
              </div>
              <div class="form-group">
                <label for="tel1">Phone 2</label>
                <input type="tel" class="form-control" id="phoneNumber2" name="telephone2" placeholder="">
              </div>
              <h3 style="text-align: center;">Student Name and School</h3>
              <div class="form-group">
                <label for="studentName">Student Name *</label>
                <input required type="text" class="form-control" id="studentName" name="studentName" placeholder="">
              </div>
              <div class="form-group">
                <label for="studentSchool">School *</label>
                <input required type="text" class="form-control" id="school" name="school" placeholder="">
              </div>
              <div class="form-group">
                <label for="inputState">Desired Instrument Model *</label><br />
                <small>Prices reflect monthly rate</small>
                <select required id="instrument" name="instrument" class="form-control">
                  <?php
                  include '../../../.connects';
                  $sql = "SELECT * FROM instrument_availability ORDER BY display_id ASC;";
                  $result = $link->query($sql) or die("Query failed. Call Aaron immediately.");
                  while($row = $result->fetch_assoc()) {
                    if (nl2br($row["enable_reservation"]) == 1) {
                      if ( nl2br($row["new_price"]) > 0 ) {
                        echo "<option value= 'New " . nl2br($row["instrument_name"]) . " $" . nl2br($row["new_price"]); 
                        if ( nl2br($row["new_availability"]) == 3 ) {
                          echo " - NOTE: INSTRUMENT IS OUT OF STOCK, POPS!";
                        }

                        echo "'>" . "New " . nl2br($row["instrument_name"]) . " $" . nl2br($row["new_price"]);
                        if ( nl2br($row["new_availability"]) == 3 ) {
                          echo " - Out of Stock";
                        }
                        echo "</option>";
                      }
                      if ( nl2br($row["used_price"]) > 0 ) {
                        echo "<option value= 'Used " . nl2br($row["instrument_name"]) . " $" . nl2br($row["used_price"]);
                        if ( nl2br($row["used_availability"]) == 3 ) {
                          echo " - NOTE: INSTRUMENT IS OUT OF STOCK, POPS!";
                        }
 
                        echo "'>" . "Used " . nl2br($row["instrument_name"]) . " $" . nl2br($row["used_price"]);
                        if ( nl2br($row["used_availability"]) == 3 ) {
                          echo " - Out of Stock";
                        }
                        echo "</option>";
                      }
                    }
                  }
      
                  ?>
                  <!-- <option value="">Choose an Instrument</option>
                  <option value="New fdFlute">New Flute $29</option>
                  <option value="Used Flute">Used Flute $23</option>
                  <option value="New Clarinet">New Clarinet $29</option>
                  <option value="Used Clarinet">Used Clarinet $23</option>
                  <option value="New Alto Sax">New Alto Sax $49</option>
                  <option value="Used Alto Sax">Used Alto Sax $39</option>
                  <option value="New Trumpet">New Trumpet $35</option>
                  <option value="Used Trumpet">Used Trumpet $28</option>
                  <option value="Used Trumpet">Used Trumpet $23</option>
                  <option value="New Trombone">New Trombone $35</option>
                  <option value="Used Trombone">Used Trombone $28</option>
                  <option value="New Violin">New Violin $25</option>
                  <option value="Used Violin">Used Violin $20</option>
                  <option value="New Viola">New Viola $25</option>
                  <option value="Used Viola">Used Viola $20</option>
                  <option value="New Cello">New Cello $44</option>
                  <option value="Used Cello">Used Cello $35</option>
                  <option value="New Snare Kit">New Snare Kit $20</option>
                  <option value="Used Snare Kit">Used Snare Kit $16</option>
                  <option value="New Bell Kit">New Bell Kit $20</option>
                  <option value="Used Bell Kit">Used Bell Kit $16</option> -->
                </select>
              </div>
              <h3 style="text-align: center;">Other Information</h3>
              <small>If you are selecting a string instrument, please let us know what size you are looking for. (If you know)</small>
              <div class="form-group">
                <textarea class="form-control" id="other" name="other" rows="3"></textarea>
              </div>
              <div class="form-check center" style="padding-bottom: 15px;">
                <input required type="checkbox" class="form-check-input" id="agreeToTerms" name="agreeToTerms">
                <label class="form-check-label" for="agreeToTerms">I agree to the terms of the Just Joe’s Music rental instrument reservation.</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <script>
              $('#reservation_form').submit(function(event) {
                event.preventDefault();
                var email = $('#email').val();

                grecaptcha.ready(function() {
                  grecaptcha.execute('6LfHZMwUAAAAAGpuX4ZQPteXUsZQGXsloJil6uvB', {
                    action: 'reservation_submission'
                  }).then(function(token) {
                    $('#reservation_form').prepend('<input type="hidden" name="token" value="' + token + '">');
                    $('#reservation_form').prepend('<input type="hidden" name="action" value="reservation_submission">');
                    $('#reservation_form').unbind('submit').submit();
                  });;
                });
              });
            </script>

          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col center">
          <div style="margin-top: 10px;">
            <?php include '../links.php' ?>
          </div>
        </div>
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
    <div style="height: 300px; display: table; min-height: 10px; margin-left: 0px; left: 0px; width: 100%; overflow: hidden;" data-is-screen-width="true" class="StrpShwcs0-127y_hrj44qc0" id="StrpShwcs0-127y"><iframe allowfullscreen="" frameborder="0" scrolling="no" allowtransparency="true" style="height: 300px; position: relative; min-height: 10px; width: 100%; overflow:hidden;" class="tpa-gallery-StripShowcase StrpShwcs0-127y_hrj44qc0iframe override-height" id="StrpShwcs0-127yiframe" src="../../iframes/rental_slider.html"></iframe></div>
    <div data-svg-id="26a3821c7e9018db3b97bfeb246509a7_svgshape.v1.Rhombus.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="-21.021 -54.88 377 377" data-preserve-viewbox="ignore" style="top:;bottom:;left:;right:;width:350px;height:300px;position:" class="SvgShp1-2k8_hrluhn56 no-mobile override-height" id="SvgShp1-2k8">
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
  <script>
    document.getElementById('phoneNumber').addEventListener('keyup', function(evt) {
      var phoneNumber = document.getElementById('phoneNumber');
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      phoneNumber.value = phoneFormat(phoneNumber.value);
    });

    document.getElementById('phoneNumber2').addEventListener('keyup', function(evt) {
      var phoneNumber = document.getElementById('phoneNumber2');
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      phoneNumber.value = phoneFormat(phoneNumber.value);
    });
  </script>

</body>

</html>