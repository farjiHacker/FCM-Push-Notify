<?php
namespace FirebaseNotify;
/**
 * @author Ravi Tamada
 * @link URL Tutorial link
 */
class Config {

    // push message title
    private $FIREBASE_API_KEY;

    function __construct() {}

    public function setKey($key) {
        $this->FIREBASE_API_KEY = $key;
    }

    public function getKey() {
        return $this->FIREBASE_API_KEY;
    }

}
