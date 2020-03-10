<?php
require './vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console

// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+14692085882";

$data = base64_decode('CkJFR0lOOlZDQVJEClZFUlNJT046My4wCk46SG9mZm1hbjtEYW47OzsKRk46RGFuIEhvZmZtYW4KT1JHOkJlc3QgRGVhbCBJbiBUb3duOwpUSVRMRTpNYW5hZ2VyClRFTDtUWVBFPW1vYmlsZSx2b2ljZTtWQUxVRT10ZWw6NzIwLTIzNi04Nzk1ClRFTDtUWVBFPXdvcmssdm9pY2U7VkFMVUU9dGVsOjMwMy01OTMtMDU4MQpYLVNPQ0lBTFBST0ZJTEU7dHlwZT1mYWNlYm9vazpodHRwOi8vZmFjZWJvb2suY29tL0RlbnZlckhEVFYKWC1TT0NJQUxQUk9GSUxFO3R5cGU9Z29vZ2xlOmh0dHBzOi8vZy5wYWdlL2Jlc3REZWFsRGVudmVyClVSTDpodHRwOi8vd3d3LmJlc3RkZWFsZGVudmVyLmNvbQpBRFI7TEFCRUw7VFlQRT1XT1JLOjQzNzEgUy4gQnJvYWR3YXlcbkVuZ2xld29vZCwgQ08gODAxMTNcblVTQQpFTUFJTDpkYW5pZWxiZXN0ZGVhbEBnbWFpbC5jb20KUkVWOjIwMjAwMzA4VDE4MDAwMHoKVFo6LTA3MDAKRU5EOlZDQVJE');

$file = fopen('./dan/dan_h.vcf','r');
echo $file;
// $fp = @fopen('./dan/dan_h.vcf');
// $data =  fopen($list, 'r');
$fdata = fopen($data, 'r+');
// $bin = base64_decode($data);
// $img = imageCreateFromString($bin);
// $img_file = './dan/vImg.png';

$num = $_SERVER['REQUEST_URI'];

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+13368800967',
    array(
        'from' => $twilio_number,
        'body' => $num
    )
);

?>
