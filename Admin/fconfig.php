<?php
	

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '699166534007850',
		'app_secret' => 'd22aa00a09912666e03996d285aad52f',
		'default_graph_version' => 'v8.0'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>