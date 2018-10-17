<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('Location: login.html');
}
require 'vendor/autoload.php'; // include Composer's autoloader

$collection = (new MongoDB\Client)->farmerstore->product;
?>

<!DOCTYPE html>
<html>
<head>

	<title>Famer Store</title>
  <link rel="icon" href="images/iconpage.jpg" type="image/jpeg" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/nav.css"></link>
	<link  rel="Stylesheet" type="text/css" href="css/basic.css" ></link>
	<link rel="stylesheet" type="text/css" href="css/forForms.css"></link>
  <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css"></link>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
  <script type="text/javascript" src="js/responsiveNav.js"></script>

  <!--for search -->
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
<a href="Store.php" class="">Store</a> 
<a href="e-learn.html">E-learn</a>
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
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="images/slider4.jpg" style="width:100%;height:300px">
  </div>

  <div class="mySlides fade">
    
    <img src="images/slider5.jpg" style="width:100%;height:300px">
  </div>

  <div class="mySlides fade">
    <img src="images/slider6.jpg" style="width:100%;height:300px">
  </div>

</div>
<br>

<?php 
$query = array('keyword'=>'vegetable');
$cursor = $collection->find($query,['limit' => 4]);
?>
<!--first product display -->
<label class="home_label">Vegetables </label>
 <div class="one_product">
<br>
<?php 
foreach($cursor as $document) { ?>
   
<div class="card" style="padding:1em;">
	<img class="card_img" src="<?php echo $document['image']; ?>">
  <div><label><?php echo $document['product_name']; ?></label><label style="float: right;">&#x20b9 <?php echo $document['price']; ?></label></div>
  	<input type="submit" value="Add to Cart" class="cart" onclick="location.href='cartinsert.php\?temp=<?php echo $document['_id'];?>\&quantity=10'">
	</div>

<?php } ?>
</div>
<?php 
$query = array('keyword'=> 'fruits');
$cursor = $collection->find($query,['limit' => 4]);
?>

<!--Fruits recently added -->
<label class="home_label">Fruits </label>
 <div class="one_product">
<br>
<?php 
foreach ($cursor as $document) { ?>
   
<div class="card" style="padding:1em;">
  <img class="card_img" src="<?php echo $document['image']; ?>">
  <div><label><?php echo $document['product_name']; ?></label><label style="float: right;">&#x20b9 <?php echo $document['price']; ?></label></div>
    <input type="submit" value="Add to Cart" class="cart" onclick="location.href='cartinsert.php\?temp=<?php echo $document['_id'];?>\&quantity=1'"></div>

<?php } ?>
</div>

<?php
$query = array('keyword'=> 'grains');
$cursor = $collection->find($query,['limit' => 4]);
?>

<!--first product display -->
<label class="home_label">Grains </label>
 <div class="one_product">
<br>
<?php 
foreach ($cursor as $document) { ?>
   
<div class="card" style="padding:1em;">
  <img class="card_img" src="<?php echo $document['image']; ?>">
  <div><label><?php echo $document['product_name']; ?></label><label style="float: right;">&#x20b9 <?php echo $document['price']; ?></label></div>
    <input type="submit" value="Add to Cart" class="cart" onclick="location.href='cartinsert.php\?temp=<?php echo $document['_id'];?>\&quantity=1'"></div>
  

<?php } ?>
</div>
<script type="text/javascript">


var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
/* Toggle between adding and removing the "responsive" class to the navbar when the user clicks on the icon */

</script>
<!-- script to get text from search and parse it to search.php file-->
<script>
    $(document).ready(function(){
    $('input.search').typeahead({
        name: 'search',
        remote:'php/search.php?key=%QUERY',
        limit : 10
    });
});
    </script>

</body>
</html>