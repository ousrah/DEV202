<?php

require_once __DIR__ . '/vendor/autoload.php';

$collection = (new MongoDB\Client)->mydb->users;
$collection->drop();

$collection->insertOne(['name' => 'Bob', 'state' => 'ny']);
$collection->insertOne(['name' => 'Alice', 'state' => 'ny']);
$deleteResult = $collection->deleteMany(['state' => 'ny']);

printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());

header("Location:index.php");
?>