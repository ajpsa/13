<?php

require 'vendor/autoload.php';

$m = new MongoDB\Client("mongodb://localhost:27017");
	echo "connection established";

	$db = $m->test1;
	echo "database selected";

	$collection = $db->sample;
	echo "collection selected";

	$document1 = array(
	"dept"=>"cs",
	"name"=>"psa"
	);
	$document2 = array(
	"dept"=>"ba",
	"name"=>"aj"
	);
	$collection -> insertOne([$document1]);
	$collection -> insertOne([$document2]);
	echo "inserted";
?>

