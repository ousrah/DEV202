<?php

require_once __DIR__ . '/vendor/autoload.php';

$usuario= $_POST["user"];
$pass= $_POST["pwd"];

$collection = (new MongoDB\Client)->mydb->users;

$insertOneResult = $collection->insertOne([
    'username' => $usuario,
    'password' => $pass,
    
]);

header("Location:index.php");
//printf("Se insertó %d documento(s)\n", $insertOneResult->getInsertedCount());



var_dump($insertOneResult->getInsertedId());

?>