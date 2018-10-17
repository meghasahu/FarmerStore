<?php

require 'vendor/autoload.php'; // include Composer's autoloader
$id = new MongoDB\BSON\ObjectID($_GET['temp']);
echo $id;

$collection = (new MongoDB\Client)->farmerstore->product;

echo "hello";
$query = array('_id' => new MongoDB\BSON\ObjectID($_GET['temp']));
$result = $collection->find($query);

foreach ($result as $doc){
echo $doc["price"];
echo "hello";
}
?>