<?php
require 'vendor/autoload.php'; // include Composer's autoloader

$collection = (new MongoDB\Client)->farmerstore->product;

$date = date("Y/m/d");



$insertResult = $collection->insertOne([
    'farmer_id'=>2, 'product_name'=>'Purple Fresh Onion',
    'date'=>$date,
    'description'=>"Onion is a vegetable which is almost like a staple in Indian food. This is also known to be one of the essential ingredients of raw salads. They come in different colours like white, red or yellow and are quite in demand in cold salads and hot soups. You can dice, slice or cut it in rings and put it in burgers and sandwiches. Onions emit a sharp flavour and fragrance once they are fried; it is due to the sulphur compound in the vegetable.
",
    'keyword'=>['vegetable','amritsar','punjab','onion'],
    'price'=>45,
    'quantity_avail'=>60,
    'image'=>'../farmerStore/images/products/purple_onion.jpg'] );


$insertResult = $collection->insertOne([
    'farmer_id'=>3, 'product_name'=>'White Natural Onion',
    'date'=>$date,
    'description'=>"Onion can fill your kitchen with a thick spicy aroma. It is a common base vegetable in most Indian dishes, thanks to the wonderful flavor that it adds to any dish.
",
    'keyword'=>['vegetable','ahmednagar','maharashtra','onion'],
    'price'=>62,
    'quantity_avail'=>40,
    'image'=>'../farmerStore/images/products/white_onion.jpg'] );


$insertResult = $collection->insertOne([
    'farmer_id'=>4, 'product_name'=>'Shallet Onion',
    'date'=>$date,
    'description'=>"Also known as button onions,Shallet onions are relatively smaller onions with a mild flavour and slightly sweet taste.
",
    'keyword'=>['vegetable','agra','uttar pradesh','onion'],
    'price'=>109,
    'quantity_avail'=>40,
    'image'=>'../farmerStore/images/products/shallet_onion.jpg'] );


$insertResult = $collection->insertOne([
    'farmer_id'=>2, 'product_name'=>'Spring Onion Natural',
    'date'=>$date,
    'description'=>"Spring onions come with a crisp texture and sweet flavour.They are moist with thin, white flesh and a green stem. The green stems are hollow, bitter and pungent.",
    'keyword'=>['vegetable','amritsar','punjab','onion'],
    'price'=>147,
    'quantity_avail'=>20,
    'image'=>'../farmerStore/images/products/spring_onion.jpg'] );


$insertResult = $collection->insertOne([
    'farmer_id'=>3, 'product_name'=>'Sweet,Large Onion',
    'date'=>$date,
    'description'=>"It is organically grown and handpicked from farm 
",
    'keyword'=>['vegetable','ahmednagar','maharashtra','onion'],
    'price'=>27,
    'quantity_avail'=>50,
    'image'=>'../farmerStore/images/products/sweet_onion.jpg'] );











/*insertOne([
    'farmer_id' => 1,
    'product_name' => 'potato',
    'date' => $date,
    'description' => 'grown in Uttar Paradesh',
    'keyword' => ['UP','lucknow'],
    'price' => 7,
    'quantity_avail' => 200,
    'image' => 'http://localhost:8080/farmerStore/images/potato.jpg'
]);
db.product.


/*$query = array('farmer_id'=> 1);
$cursor = $collection->find($query);

foreach ($cursor as $document) {
      echo $document["product_name"] . "\n";
   }
*/

printf("Inserted %d document(s)\n", $insertResult->getInsertedCount());

var_dump($insertResult->getInsertedId());

?>