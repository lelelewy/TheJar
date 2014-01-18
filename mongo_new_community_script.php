<?php


$connection = new MongoClient();

$doc = array(
    "CommunityName" => "example",
    "CommunityPass" => "pass",
    "AdminName" => "name",
    "Mastertoken" => "",
    "Population" => (object)array("user" => "name", "votes" => 0)
);

$collection = $connection->TheJar->Communities;

$collection->insert( $doc );

?>