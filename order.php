<?php

//my cart
//starting session
session_start();
if(!isset($_SESSION['user']))
{
  header('Location: login.html');
}
require 'vendor/autoload.php'; // include Composer's autoloader

//getting user id and product details in the cart to display 
$userid=(string)$_SESSION['id'];
$conn = new mysqli('localhost','root','', 'farmerstore');
  // Check connection
  if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Farmer Store</title>
  <link rel="icon" href="images/iconpage.jpg" type="image/jpeg" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="dropdown.css"></link>
	<link rel="stylesheet" type="text/css" href="css/nav.css"></link>
	<link  rel="Stylesheet" type="text/css" href="css/basic.css" ></link>
	<link rel="stylesheet" type="text/css" href="css/forForms.css"></link>
		<!--<link rel="stylesheet" type="text/css" href="css/description.css"></link> -->
	
  <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css"></link>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
  <script type="text/javascript" src="js/responsiveNav.js"></script>

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/typeahead.bundle.js"></script>
</head>
<body>


<header>
<img src="images/iconFarm.png" alt="icon" width="3%" height="10%">
<h2 >Farmer Store</h2>
<input placeholder="Search" style="width:30%;margin-bottom:5px;margin-left:20px;padding:1%;background-color: #f9fbe7;border-radius: 5px;height:40px;" name="search">

<div id="google_translate_element" style="float:right"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</header>


<div class="navbar" id="mynav">

<a href="Home.php" class="active">Home </a>
<div class="dropdown1">
    <button class="dropbtn">Store 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">

      <div class="row1" style="width:600px;background-color:white"> &nbsp
    <br>
        <div class="column1">
          <div style="font-size:26px"><b>Fruits<i class="fa fa-angle-double-right" style="font-size:24px"></i></b></div>
          <a href='store.php?temp=apple' style="font-size:24px">Apple</a>
          <a href='store.php?temp=pomegrante' style="font-size:24px">Pomegrante</a>
      <a href="#" style="font-size:24px">Banana</a>
     <a href="#" style="font-size:24px">Orange</a>
     <a href="#" style="font-size:24px">Strawberry</a>
     <a href="#" style="font-size:24px">Cherry</a>
     <a href="#" style="font-size:24px">Kiwi</a>
    <a href="#" style="font-size:24px">Apricot</a>
    <a href="#" style="font-size:24px">Papaya</a>
     <a href="#" style="font-size:24px">Fig</a>
    <a href="#" style="font-size:24px">Pineapple</a>
     
        </div> 
        <div class="column1">
          <div style="font-size:26px"><b>Vegitables<i class="fa fa-angle-double-right" style="font-size:24px"></i></b></div>
          <a href="store.php?temp=onion" style="font-size:24px">Onion</a>
          <a href="store.php?temp=potato" style="font-size:24px">Potato</a>
      <a href="store.php?temp=pumpkin" style="font-size:24px">Pumpkin</a>
     <a href="store.php?temp=cauliflower" style="font-size:24px">Cauliflower</a>
     <a href="#" style="font-size:24px">Cucumber</a>
     <a href="store.php?temp=Tomato" style="font-size:24px">Tomato</a>
     <a href="store.php?temp=cabbage" style="font-size:24px">Cabbage</a>
    <a href="#" style="font-size:24px">Broccoli</a>
    <a href="#" style="font-size:24px">Beetroot</a>
     <a href="#" style="font-size:24px">Bean</a>
    <a href="#" style="font-size:24px">Lettuce</a>
     
        </div> 
        <div class="column1">
          <div style="font-size:26px"><b>Grain<i class="fa fa-angle-double-right" style="font-size:24px"></i></b></div>
          <a href="#" style="font-size:24px">Toor dal gold</a>
          <a href="#" style="font-size:22px">'Basmati Rice-Feast</a>
      <a href="#" style="font-size:24px">Original Rajma</a>
     <a href="#" style="font-size:24px">Bajra Pearl</a>
     <a href="#" style="font-size:24px">Wheat</a>
     <a href="#" style="font-size:24px">Green Gram</a>
     <a href="#" style="font-size:24px">Urad Bean</a>
    <a href="#" style="font-size:24px">Chick Peas</a>
    <a href="#" style="font-size:24px">Chickpeas,brown</a>
     <a href="#" style="font-size:24px">Common Bean</a>
    <a href="#" style="font-size:24px">Lentil</a>
     
        </div> 
      </div>
    </div>
  </div>
    
      

  <div class="dropdown1">
    <button class="dropbtn">E-learn <i class="fa fa-caret-down"></i> 
    </button>
    <div class="dropdown-content">
      <a href="#">Videos</a>
      <a href="#">Guidelines</a>
    </div>
</div>  
<a href="about_us.html"> About us</a>
<a href="contact_us.html">Contact us </a>
<a href="login.html" id="log" style="float: right;display: none;">Login/SignUp</a>
<div class="dropdown" id="myacc" >
    <button class="dropbtn"><i class="fa fa-user"></i> My Account 
    </button>
    <div class="dropdown-content">
      <a href="order.php">My Cart</a>
      <a href="MyProfile.php">My Profile</a>
      <a href="Myorders.php">Orders</a>
      <a href="php/logout.php">Logout <i class="fa fa-power-off" style="margin-left: 5%"></i></a>
    </div>
  </div> 

<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="row">
  <div class="col-6 form" id="cen">
  <h1>Order Now</h1>
  <?php 
    $q = mysqli_query($conn,"select user_id,prod_id,total_price,sum(quantity) as quantity from cart where user_id='$userid' group by prod_id" ) or die("empty cart");
    $total=0;
    while($sql = mysqli_fetch_assoc($q))
      { 
        $price=$sql['total_price']*$sql['quantity'];
        $total=$price+$total;
        $collection = (new MongoDB\Client)->farmerstore->product;    
        $query = array('_id' => new MongoDB\BSON\ObjectID($sql["prod_id"]));//product id
        $result = $collection->find($query);
      foreach($result as $mongo) { ; ?>    
    <div class="profile_box" style="border-style: solid;border-color: grey;padding: 3px;">
    <div>
    <img src="<?php echo $mongo['image']; ?>" style="float:left; margin-right:37px;border-radius: 2px;width:100px;height:100px">
    </div>
    <table>
    <tr>
    <td><h3> Product Name:</h3></td>
    <td><h3><label  for="product_name"><?php echo $mongo['product_name']; ?></label></h3></td>
  </tr>
  <tr><td><h3>Quantity:</h3></td>
    <td><h3><label  for="quantity_text"><?php echo $sql["quantity"];//quantity ?>
  </label></h3></td>
</tr>
  <tr>
  <td><h3>price:</h3></td>
    <td><h3><label  for="price__text"><?php echo $price ?></label></h3></td>
  </tr> 
    </table>
  </div>
   <?php } } ?>

   <div style="float: right;"><div><h3>Total Price: <?php echo $total; ?></h3></div>
  <div>
   <input type="submit"  value="Place Order" style=" width:auto" onclick="location.href='Confirm_Address.php'" ></div>
 </div>
    </div>
</div>
  </div>
</body>
</html>