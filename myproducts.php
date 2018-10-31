<?php
session_start();

if(!isset($_SESSION['user']))
{
  header('Location: login.html');
}

$id = $_SESSION['id'];
require 'vendor/autoload.php'; // include Composer's autoloader

$collection = (new MongoDB\Client)->farmerstore->product;

$query = array("farmer_id"=>$id);
$cursor = $collection->find($query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Farmer Store</title>
	<link rel="icon" href="images/iconpage.jpg" type="image/jpeg" sizes="16x16">
	<link  rel="Stylesheet" type="text/css" href="css/basic.css" ></link>
	<link rel="stylesheet" type="text/css" href="css/newForm.css"></link>
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css"></link>
  <link rel="stylesheet" type="text/css" href="css/outofstock.css"></link>
<link rel="stylesheet" type="text/css" href="css/des.css"></link>
	
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">

 </head>
<header>
     <div>
     <img class="icon" src="images/iconFarm.png" alt="icon" width="5%" height="5%">
     <h2 >Farmer Store</h2>
     </div>
</header>

<body>
<div class="sidenav">
  <a href="addProductFarmer.php">Add Product</a>
  <a href="myproducts.php">My Products</a>
  <a href="farmerorder.php">Order</a>
  <a href="complaint.html">Complaint</a>
  <a href="farmerProfile.php">My Profile</a>
  <a href="logout.php">Log Out</a>
</div>
<form>
<div class="row">
  <div class="col-6 form" id="cen">
  <h1>My Products</h1>
<div class="w3-container">
	<ul class="w3-ul w3-card-4">
    <?php foreach($cursor as $d) { ?>
	<li class="w3-bar" style="list-style-type: none;">
    <div>
		<b>
      <label for="product-name" style="font-family:Arial; font-size:25px ; padding:35px;"><?php echo $d['product_name'] ?></label>
		<b>
      <label for="quantity" style="font-family:Arial; font-size:25px ; padding:20px">Available Stock:<label><?php echo $d['quantity_avail'] ?></label> &nbsp &nbsp &nbsp
		<input type="submit" style="width=auto ;" value="Out Of Stock">
		</div>
	</li>
<?php } ?>
  </ul>
</div>
</div>
</div>
</form>
</body>
</html>

  