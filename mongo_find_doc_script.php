<?php

$users = $mongo->TheJar->Users;
$user = $users->findOne(array('name' => 'MongoDB'));
print_r($user);

?>