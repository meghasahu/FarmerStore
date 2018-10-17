<?php
    $key=$_GET['key'];
    $array = array();

    require 'vendor/autoload.php'; // include Composer's autoloader

    $collection = (new MongoDB\Client)->farmerstore->product;

    $result = find({"keyword": /onion/});
    foreach($result as $row)
    {
      $array[] = $row['_id'];
    }
    echo json_encode($array);
?>