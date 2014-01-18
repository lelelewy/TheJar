<?php


$connection = new MongoClient();
$users = $connection->TheJar->Users;
$user = $users->findOne(array('Username' => 'example'));

$doc = array(
    "CommunityName" => "example",
    "CommunityPass" => "pass",
    "AdminName" => $user["Username"],
    "Mastertoken" => "",
    "Population" => (object)array("user" => $user["Username"], "votes" => 0)
);

$collection = $connection->TheJar->Communities;

$collection->insert( $doc );

?>