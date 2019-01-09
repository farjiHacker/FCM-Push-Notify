# FCM-PUSH-NOTIFY

This is the library for sent push notification using Google Firebase(FCM) Push Notification.

## Installation

Use the ```Composer``` to install FCM-PUSH-Notify Library.

```bash
composer require farjihacker/fcm-push-notify
```
## Usage

####Step 1: Install using above command.
####Step 2: Import/Use this Namespace.

```bash
use FirebaseNotify\Firebase; // Firebase Utility
use FirebaseNotify\Push; // Create Message with JSON Formate
```
####Step 3: Create Two Object.

```php
$firebase = new Firebase("FIREBASE_API_KEY"); // Pass Your API Key as Param
$push = new Push();
```

####Step 4: Create JSON Data Object Using ```$push``` Object.

```php
// optional payload
$payload = array();
$payload['team'] = 'India';
$payload['score'] = '5.6';

// notification title
$title = "Test Title";

// notification message
$message = "MSG";

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
```

####Step 5: Sent Push Notification using ```$firebase``` object.

```php
//Get JSON Object
$json = $push->getPush();
//echo "<pre>";
//print_r($json);

// User Token
$regId = "USER_TOKEN";
$response = $firebase->send($regId, $json);

// Enable this line to check firebase success/error response.
//print_r($response);
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
