<?php


$connection = new MongoClient();
$users = $connection->TheJar->Users;
$user = $users->findOne(array('Username' => 'example'));

$doc = array(
    "CommunityName" => "example",
    "CommunityPass" => "pass",
    "AdminName" => $user["Username"],
    "Mastertoken" => "",
    "cost" => "2.00",
    "cap" => 0,
    "Population" => (object)array("user" => $user["Username"], "votes" => 0, "paid" => 0)
);

$collection = $connection->TheJar->Communities;

$collection->insert( $doc );



?>


