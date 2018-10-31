<?php
require 'vendor/autoload.php'; // include Composer's autoloader
//starting session
session_start();
if(!isset($_SESSION['user']))
{
  header('Location: login.html');
}

$q = $_POST['quantity'];
echo $q;
$id=$_POST['temp'];

$conn = new mysqli('localhost','root','', 'farmerstore');
  // Check connection
  if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }

//product to be added and quantity
$userid=(string)$_SESSION['id'];
//$id=$_GET['temp'];
//$quantity=$_GET['quantity'];
$collection = (new MongoDB\Client)->farmerstore->product;
$query = array('_id' => new MongoDB\BSON\ObjectID($id));
$result = $collection->find($query);


foreach($result as $row){
if($row['quantity_avail']>0){
  $prod=(string)$id;
  $price=(int)$row['price'];
  $sqlquery = "insert into cart values('$userid','$prod',$q,$price)";
  $sqlresult = mysqli_query($conn,$sqlquery) or alert("cannot add into cart");
  header('Location: order.php');

}
else{
  alert("Product Out of Stock");
}
}
?>