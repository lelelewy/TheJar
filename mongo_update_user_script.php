<?php

$connection = new MongoClient();
$users = $connection->TheJar->Users;
$users->update(array('Population.user' => 'user'), $inc => array('Population.$.votes' => 1));

?>