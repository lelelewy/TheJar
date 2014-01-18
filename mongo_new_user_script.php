<?php


$connection = new MongoClient();

$doc = array(
    "Username" => "example",
    "Password" => "pass",
    "Email" => "example@tcnj.edu",
    "Token" => "",
    "Profilepic" => "link",
    "AdminCommunities" => array(),
    "GuestCommunities" => array()
);

$collection = $connection->TheJar->Users;

$collection->insert( $doc );

?>
