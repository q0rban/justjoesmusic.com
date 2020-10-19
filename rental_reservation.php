<?php
// Create map with request parameters
$params = array('secret' => getenv('CAPTCHA_V3_SECRET'), 'response' => $_POST['token']);

// Build Http query using params
$query = http_build_query($params);

// Create Http context details
$contextData = array(
  'method' => 'POST',
  'header' => "Connection: close\r\n" .
    "Content-Length: " . strlen($query) . "\r\n",
  'content' => $query
);

// Create context resource for our request
$context = stream_context_create(array('http' => $contextData));

// Read page rendered as result of your POST request
$result =  file_get_contents(
  'https://www.google.com/recaptcha/api/siteverify',  // page url
  false,
  $context
);

echo $result;


$json = json_decode($result);

if ($json->success === true && $json->action == "reservation_submission" && $json->score >= 0.5) {
  $to = "justjoe@bendbroadband.com";
  $subject = "Rental Reservation Submitted";
  $txt .= 
    "Parent Name: " . $_POST['firstName'] . " " . $_POST['lastName']
    . "\r\n \r\n" 
    . "Address and contact info: "
    . "\r\n" 
    . $_POST['inputAddress'] 
    . "\r\n" 
    . $_POST['inputAddress2']
    . "\r\n" 
    . $_POST['inputCity']
    . "\r\n" 
    . $_POST['inputZip']
    . "\r\n \r\n" 
    . $_POST['inputEmail']
    . "\r\n \r\n" 
    . $_POST['telephone1']
    . "\r\n"
    . $_POST['telephone2']
    . "\r\n \r\n" 
    . "Student Name: "
    . "\r\n" 
    . $_POST['studentName']
    . "\r\n \r\n"
    . "School: "
    . "\r\n" 
    . $_POST['school']
    . "\r\n \r\n" 
    ."Selected Instrument: "
    . "\r\n" 
    . $_POST['instrument']
    . "\r\n \r\n" 
    . "Other Information: "
    . "\r\n" 
    . $_POST['other'];

  $headers = "From: no-reply@justjoesmusic.com" . "\r\n" .
  "Reply-To:" . $_POST['inputEmail'];
  
  mail($to,$subject,$txt,$headers);
  header("Location: ../?contact-success=true");
} else {
  echo "We could not verify you as a non-robot. If you're pretty sure that you're not a robot: <button onclick='history.go(-1);'>Try Again</button>";
}
  // Server response is now stored in $result variable so you can process it
?>