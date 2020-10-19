<div class="row header center asyncImage" data-src="/img/top_background3.jpg" id="header">
  <div class="col scroll-4" style="text-align: center;">
    <img src="<?php echo $S3_BUCKET; ?>img/logo.png" id="header-logo" style="text-align:center; width: 237px;" />
    <div class="header-transparent" id="header-transparent-width" style="margin-bottom: 20px;">
      <h1 class="eb-garamond mobile-heading" style="color:#FFFFFF ; font-size:42px; text-align:center; padding-bottom: 0; padding-top: 5px;">
        <span id="header-large-text">"Central Oregon's Favorite</span>
      </h1>
      <h5 class="mobile-subheading" style="padding-top: 0; font-size:22px; text-align:center;">
        <span style="color:#FFFFFF ;">
          <span style="font-weight:bold;">
            <span style="font-family:eb-garamond-bold,serif;">
              <span style="letter-spacing:0.1em;" class="mobile-subheading" id="">
                &nbsp;School Band and Orchestral Music Store!"
              </span>
            </span>
          </span>
        </span>
      </h5>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light nav-column center justify-content-center">
      <div class="social-links-header position-absolute vertical-center">
        <a class="float-left" href="https://www.facebook.com/Just-Joes-Music-337544735135/" target="_blank"><i class="icofont-facebook" style="color:#A8F6D8;"></i></a>
        <a class="float-right" href="https://www.instagram.com/justjoesmusic/" target="_blank"><i class="icofont-instagram" style="color:#A8F6D8; padding-right: 5px;"></i></a>
      </div>

      <button class="navbar-toggler" style="z-index:2;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto" style="z-index: 2;">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo $path_to_root ?>">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Rental Information
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo $path_to_root . "rental_information/" ?>">Visit Rental Information Page</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Or select a category:</h6>
              <a class="dropdown-item" href="<?php echo $path_to_root . "rental_information/" ?>">Joe Talks Rentals</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "rental_information/our_contract/" ?>">A Little More About our Contract</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "rental_information/choosing_an_instrument/" ?>">Choosing an Instrument</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "rental_information/rental_prices/" ?>">Rental Prices</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "rental_information/instrument_availability/" ?>">Instrument Availability</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "rental_information/rental_contract/" ?>">View a Copy of our Contract</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "rental_information/rental_reservation/" ?>">Rental Reservation</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "rental_information/purchase_options/" ?>">Purchase Options</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "about/omea_award/" ?>">Award Winning Service</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "rental_information/faq/" ?>">FAQ</a>
            </div>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Step Up and Professional Instruments
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo $path_to_root . "instruments/" ?>">Browse Instruments</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "price_match_guarantee/" ?>">Price Match Guarantee</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              About
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo $path_to_root . "location_and_hours" ?>"><strong>Location and Hours</strong></a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "contact_us/" ?>"><strong>Contact Us</strong></a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "about/omea_award/" ?>">OMEA Award</a>
              <a class="dropdown-item" href="http://www.jazzatjoes.com/" target="_blank">Jazz at Joe's</a>
              <a class="dropdown-item" href="http://www.jazzatjoes.com/Sponsors.html" target="_blank">Local Jazz Sponsors</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "about/private_teachers_list/" ?>">Private Teachers List</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "about/do_we_buy/" ?>">Do We Buy?</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "about/demo/" ?>">Demo</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "about/links/" ?>">Commuity Links</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Specials
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo $path_to_root . "specials/giveaway/" ?>"><b>Yamaha Electric Violin Giveaway!</b></a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "specials/" ?>">In Store</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "specials/1953_selmer_sba_alto_sax/" ?>">1953 Selmer Super Balanced Alto Sax</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Contact Us
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo $path_to_root . "location_and_hours" ?>">Location and Hours</a>
              <a class="dropdown-item" href="<?php echo $path_to_root . "contact_us/" ?>">Contact Us</a>
            </div>
          </li>

          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.justjoessaxgelstrap.com/" target="_blank">Just Joe's Sax Gel Strap</a>
          </li>

        </ul>

      </div>


    </nav>
    <?php
    if ($_GET['contact-success'] == "true") {
      echo ("<div class='alert alert-success center'>Your rental reservation has been submitted. Thank you.</div>");
    }
    if ($_GET['contact-form-success'] == "true") {
      echo ("<div class='alert alert-success center'>Your e-mail has been sent. Thanks for being in touch!</div>");
    }
    ?>
    <div class='alert alert-primary center' style="margin:0;">Custom Showroom Hours Starting June 9th<br />Tuesday – Wednesday – Thursday<br />1:00-5:00<br />Or any other time happily by appointment.<br />Please, one family member per visit when possible.</div>
    <div class="temp-link">
      <a href="<?php echo $path_to_root ?>covid-19">
        <div class='alert center background-esurance temp-link' style="margin:0;">Keeping it Safe! Our outside pickup option will also remain in place. It’s been working great! Click this alert for details.</div>
      </a>
    </div>
  </div>
</div>
<script>
  (() => {
    'use strict';
    // Page is loaded
    const objects = document.getElementsByClassName('asyncImage');
    Array.from(objects).map((item) => {
      // Start loading image
      const img = new Image();
      img.src = item.dataset.src;
      // Once image is loaded replace the src of the HTML element
      img.onload = () => {
        item.classList.remove('asyncImage');
        return item.nodeName === 'IMG' ?
          item.src = item.dataset.src :
          item.style.backgroundImage = `url(${item.dataset.src})`;
      };
    });
  })();
</script>
