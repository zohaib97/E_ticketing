<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<title>Untitled Document</title>
</head>

<body>

</body>
</html>
<?php
require_once '../../GoogleApi/vendor/autoload.php';
 
// init configuration
$clientID = '749827955401-j2i7k1lneqnctpic4gefr41ip4oao668.apps.googleusercontent.com';
$clientSecret = 'drCbkVPEgRG8XE1J1wneajJH';
$redirectUri = 'http://localhost/e-ticketing/E_ticketing/GoogleApi/googleApi.php';
  
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
 
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
  
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
	 $picture =  $google_account_info->picture;
	
//	echo "Email:".$email;
//	echo "Name:".$name;
//	echo "Pic:".$picture;
	
 
  // now you can use this profile info to create account in your website and make user logged in.
} else {
  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}
?>