<?php

//start the session here
session_start();

// $SITE_URL= "http://localhost/food_delivery_website/";
$servername = "localhost";
$username ="root";
$password ="";
$database = "cosmolearning";

$con = mysqli_connect($servername , $username, $password, $database);

if(!$con){
    die("connection failed" . mysqli_connect_error());
}