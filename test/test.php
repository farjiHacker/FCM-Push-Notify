<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use FirebaseNotify\Firebase;
use FirebaseNotify\Push;

$firebase = new Firebase("AAAAzJaQKJE:APA91bFTGESkh9T8zREtpIMiLsN9wdJ7IckqNgk1K4CM2lHuD0-sJVhzJuc-rWetspf1HEniT0f8H6v5Nvex6Guk4iNYsHMKcqMlhYNBvFm5K0Y40KmpN1lk9-B9BttcUE2_hBk7bwak");



// optional payload
$payload = array();
$payload['team'] = 'India';
$payload['score'] = '5.6';

// notification title
$title = "Test";

// notification message
$message = "Maulik";

// push type - single user / topic
$push_type = "individual";

// whether to include to image or not
$include_image = "";


$push = new Push();
$push->setTitle($title);
$push->setMessage($message);

if ($include_image) {
    $push->setImage('http://api.androidhive.info/images/minion.jpg');
} else {
    $push->setImage('');
}
$push->setIsBackground(FALSE);
$push->setPayload($payload);


$json = '';
$response = '';
//echo "1231231";
if ($push_type == 'topic') {
    //$json = $push->getPush();
    //$response = $firebase->sendToTopic('global', $json);
} else if ($push_type == 'individual') {
    //echo "1";
    $json = $push->getPush();
    echo "<pre>";
    print_r($json);
    $regId = "e5SodgFDfCA:APA91bH7u3BKlbcrXK-TB83ktnl5G1qP-CMJKnGZP-EojQr8HW9bMuCGW28UfiluZTwkKH62GUdzKnM2RzX6BFa3gAarZeGi9seAxwe0UGJeHzYyYiy9S-mhFS3ysihMuwLJicWlt_Rbk3MoLUYfN4DnDgXqsJ0pCwls
    ";
    $response = $firebase->send($regId, $json);
    print_r($response);
}