<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('629768920076-5jpv13dah5nst2qjh65fvi7s4jlnid78.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('XUH2DI0sX9SoVlSVfY1gyeNR');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/web_hackathon/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>