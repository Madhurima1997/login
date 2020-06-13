<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('155559792721-slcuovg7o41ek2tc2s7u3tfi5itroae6.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('NYaADk7Vjo0qGMYEQs62GFGF');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:88/text-editor/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>