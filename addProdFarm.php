<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('Location: login.html');
}
require 'vendor/autoload.php'; // include Composer's autoloader

$collection = (new MongoDB\Client)->farmerstore->product;


$date = date("Y/m/d");

$farm_id = $_SESSION['id'];

$name = $_POST['pname'];
$price = $_POST['price'];
$quan = $_POST['quantity'];
$typ = $_POST['typ'];

$state = $_POST['state'];
$city = $_POST['city'];

$des = $_POST['description'];

echo $_FILES['image_file'];

move_uploaded_file($_FILES["image_file"]["tmp_name"],"farmer_image/" . $_FILES["image_file"]["name"]);
$image = "farmer_image/".$_FILES["image_file"]["name"];

echo $image;
   
$insertResult = $collection->insertOne([
    'farmer_id'=>$farm_id, 'product_name'=>$name,
    'date'=>$date,
    'description'=>$des,
    'keyword'=>[$typ,$city,$state],
    'price'=>$price,
    'quantity_avail'=>$quan,
    'image'=>$image] );

printf("Inserted %d document(s)\n", $insertResult->getInsertedCount());

var_dump($insertResult->getInsertedId());

//echo "<script> alert('added successfully'); </script>";
header('Location addProductFarmer.php');
?>
