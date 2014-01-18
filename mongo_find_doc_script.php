<?php

$connection = new MongoClient();
$users = $connection->TheJar->Users;
$user = $users->findOne(array('Username' => 'example'));
print_r($user);

?>