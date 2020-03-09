<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once './vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "ACb6c7f7ac0d0f2746036da52a1b144bcf";
$token  = "905e26813dfab5c36ed3ef5cdf37d26f";
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("+13368800967", // to
                           [
                               "body" => "This is the ship that made the Kessel Run in fourteen parsecs?",
                               "from" => "+14692085882",
															 "mediaUrl" => ["https://ebizcard.netlify.com/dan/dan_h.vcf"]
                           ]
                  );

print($message->sid);
