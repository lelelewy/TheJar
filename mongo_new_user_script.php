<?php


$connection = new MongoClient();

$doc = array(
    "Username" => "example",
    "Password" => "pass",
    "Email" => "example@tcnj.edu",
    "Token" => "",
    "AdminCommunities" => array(),
    "GuestCommunities" => array()
);

$collection = $connection->TheJar->Users;

$collection->insert( $doc );

?>
