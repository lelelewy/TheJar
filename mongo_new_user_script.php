<?php

ini_set('display_errors', 1); 
error_reporting(E_ALL);

$email = $_POST['emailaddress'];
$name = $_POST['username'];
$pass = $_POST['password'];
$vname = $_POST['venmouser'];

$connection = new Mongo("mongodb://127.0.0.1:27017");

$doc = array(
    "Username" => $name,
    "Password" => $pass,
    "Email" => $email,
    "Token" => "",
    "Profilepic" => "link",
    "AdminCommunities" => array(),
    "GuestCommunities" => array()
);

$collection = $connection->TheJar->Users;

$collection->insert( $doc );

echo ("ok");
?>
