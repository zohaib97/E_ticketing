<?php

require_once 'GoogleApi/vendor/autoload.php';
 
// init configuration
$clientID = '749827955401-j2i7k1lneqnctpic4gefr41ip4oao668.apps.googleusercontent.com';
$clientSecret = 'drCbkVPEgRG8XE1J1wneajJH';
$redirectUri = 'http://localhost/e-ticketing/E_ticketing/Admin/G_callback.php';
  
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

?>