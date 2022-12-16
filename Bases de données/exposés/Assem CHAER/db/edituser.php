<?php

require_once __DIR__ . '/vendor/autoload.php';

$nuser= $_POST["newuser"];
$npass= $_POST["newpwd"];

$users = (new MongoDB\Client)->mydb->users;

$updateResult = $users->updateOne(
    [ 'username' => 'username' ],
    [ '$set' => [ 'username' => $nuser ]]
);

$updateResult = $users->updateOne(
    [ 'password' => 'username' ],
    [ '$set' => [ 'password' => $npass ]]
);
header("Location:index.php");
printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
?>