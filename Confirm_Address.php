<?php
session_start();

$id=$_SESSION['id'];


if(!isset($_SESSION['user'])){
  header('Location: login.html');
}

$conn = new mysqli('localhost','root','', 'farmerstore');
  // Check connection
  if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }

$query = "select address from buyer where id='$id'";

$fetch = mysqli_query($conn,$query) or die("Error");

$add = mysqli_fetch_assoc($fetch);

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
  <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css"></link>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
  <script type="text/javascript" src="js/responsiveNav.js"></script>
</head>
<body>


<header>
<img src="images/iconFarm.png" alt="icon" width="3%" height="10%">
<h2 >Famer Store</h2>
<input placeholder="Search" style="width:30%;margin-bottom:5px;margin-left:20px;padding:1%;background-color: #f9fbe7;border-radius: 5px;height:40px;">
</header>


<div class="navbar" id="mynav">

<a href="Home.html">Home </a>
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
       <a href="video.html">Videos</a>
      <a href="guideline.html">Guidelines</a>
    </div>
</div>  
<a href="about_us.html"> About us</a>
<a href="contact_us.html">Contact us </a>
<div class="dropdown">
    <button class="dropbtn"><i class="fa fa-user"></i> My Account 
    </button>
    <div class="dropdown-content">
      <a href="#">My Cart</a>
      <a href="#">My Profile</a>
      <a href="#">Orders</a>
      <a href="#">Logout <i class="fa fa-power-off" style="margin-left: 5%"></i></a>
    </div>
  </div> 
<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<!--<form method="post" action="paypal/confirmation.php?flag=1">-->

<form method="post" action="verifyOTP.html">


<div class="row">
  <div class="col-6 form" id="cen" style="margin-top:2%;" >

    <input type="radio" name="database" checked="true" onclick="oldadd()">Address :</input>
    <textarea rows="4" id="old" disabled="true"><?php echo $add["address"] ?></textarea>

    <input type="radio" name="database" onclick="newadd()" >New Address :</input>
    <textarea rows="4" id="new" disabled="true"></textarea>
    
    <div class="button_cen">
    <input type="submit"  name="confirm_add" value="Confirm" ></input>
    </div>
     
  </div>
</div>
</form>
</body>
<script type="text/javascript">
  
  function newadd(){
    document.getElementById('new').disabled=false;
    console.log("hello");
  }
  function oldadd(){
    document.getElementById('new').value=" ";
    document.getElementById('new').disabled="true";

  }

</script>
</html>