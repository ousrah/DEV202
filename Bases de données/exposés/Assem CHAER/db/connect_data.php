<?php
	
	require_once __DIR__ . '/vendor/autoload.php';
    $users = (new MongoDB\Client)->mydb->users; 
	
?>