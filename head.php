<?php
  $S3_BUCKET = "https://elasticbeanstalk-us-west-2-544012685056.s3-us-west-2.amazonaws.com/";
?>
<head>
  <!-- TO-DO: Make sure that custom styles are overriding bootstrap, currently breaks everything. -->
  <link rel="stylesheet" href="<?php echo $S3_BUCKET; ?>css/styles.css">
  <link rel="stylesheet" href="<?php echo $S3_BUCKET; ?>bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $S3_BUCKET; ?>css/icofont/icofont.min.css">
  <?php
    if ($page == "rental_reservation" || $title == "Contact Us") {
      echo "<script src='https://www.google.com/recaptcha/api.js?render=6LfHZMwUAAAAAGpuX4ZQPteXUsZQGXsloJil6uvB'></script>";
    }
  ?>
  <script src="<?php echo $S3_BUCKET; ?>jquery/jquery-3.4.1.min.js"></script>
  <script src="<?php echo $S3_BUCKET; ?>js/mobile.js"></script>
  <script src="<?php echo $S3_BUCKET; ?>js/animateOnLoad.js"></script>
  <script src="<?php echo $S3_BUCKET; ?>bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo $S3_BUCKET; ?>popper/popper.min.js"></script>
  <script src="<?php echo $S3_BUCKET; ?>js/jquery.visible.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.7.0/intersection-observer.js"></script>
  <script src="<?php echo $S3_BUCKET; ?>js/lazyload.min.js"></script>


  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $S3_BUCKET; ?>favicons.ico/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $S3_BUCKET; ?>favicons.ico/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $S3_BUCKET; ?>favicons.ico/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $S3_BUCKET; ?>favicons.ico/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $S3_BUCKET; ?>favicons.ico/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $S3_BUCKET; ?>favicons.ico/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $S3_BUCKET; ?>favicons.ico/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $S3_BUCKET; ?>favicons.ico/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $S3_BUCKET; ?>favicons.ico/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $S3_BUCKET; ?>favicons.ico/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $S3_BUCKET; ?>favicons.ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $S3_BUCKET; ?>favicons.ico/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $S3_BUCKET; ?>favicons.ico/favicon-16x16.png">
  <link rel="manifest" href="<?php echo $S3_BUCKET; ?>/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo $S3_BUCKET; ?>favicons.ico/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>Just Joe's Music | <?php echo $title; ?></title>
  <!-- <link rel="canonical" href="https://www.justjoesmusic.com/"> -->
  <meta property="og:title" content="<?php echo $title; ?>| Just Joe's Music">
  <!-- <meta property="og:url" content="https://www.justjoesmusic.com/"> -->
  <meta property="og:site_name" content="Just Joe's Music">
  <meta property="og:type" content="website">
  <?php
    if ($page == "covid-19"){
      echo "<meta property='og:image' content='" . $S3_BUCKET . "img/safe.jpg'>";
    }
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>