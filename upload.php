<?php

require 'firebaseLib.php';

const DEFAULT_URL = 'https://camerafirebase-e653d-default-rtdb.firebaseio.com/';
const DEFAULT_TOKEN = '6WvQ2hFtfjUGLfvVHTw9iiezXMid6pqs571eX3a6';
$DEFAULT_PATH = 'esp32-cam';

$a = $_POST["a"];

date_default_timezone_set('Asia/Vietnam');

// $a = array_map('floatval', $a); // if you want to send an array of data points

$_devicestatus= array(
    'a' => $a 
);
        
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

$firebase->push($DEFAULT_PATH, $_devicestatus); // for a new entry everytime 

// To update the same field, use "update" instead of push

print("POST_SUCCESSFUL");

?>