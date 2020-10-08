<?php
session_start();
include_once('config.php');


if (isset($_GET['code']))
{
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
	$_SESSION['access_token']=$token;
  
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
	 $picture =  $google_account_info->picture;
	$_SESSION['username']=$name;
	header('location:index.php');
}
else
{
	header('location:adminlogin.php');
}

?>