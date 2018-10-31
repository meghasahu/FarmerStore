<?php
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

$query = "select * from buyer where id='$userid'";
$result = mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Famer Store</title>
	<link rel="icon" href="images/iconpage.jpg" type="image/jpeg" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="dropdown.css"></link>
	<link rel="stylesheet" type="text/css" href="css/nav.css"></link>
	<link  rel="Stylesheet" type="text/css" href="css/basic.css" ></link>
	<link rel="stylesheet" type="text/css" href="css/forForms.css"></link>
  <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css"></link>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
  <script type="text/javascript" src="js/responsiveNav.js"></script>


     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
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
       <a href="video.html">Videos</a>
      <a href="guideline.html">Guidelines</a>
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
<!--changed part -->

<div class="row">
  <div class="col-6 form" id="cen">

    <h1>My Profile </h1>
    
    <div class="profile_box">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <h3>Name  : <input type="submit" id="save_name" value="Save" style="float: right;display: none">
     <a id="a_name" style="color:blue;float:right;margin-right: 10%" onclick="update_name()">edit</a></h3>
    <input type="name" id="fname" disabled="true" value="<?php echo $row['title'].$row['firstName'].$row['lastName']; ?>"></input> 
    <br>
    <br>
      
      <h3>  Email Id : <input type="submit" id="save_email" onclick="update_email()" value="Save" style="float: right;display: none;"><a id="a_email" style="color:blue;float:right;margin-right: 10%" >edit</a></h3>
   <input type="email" id="eid" disabled="true" value="<?php echo $row['email']; ?>"></input> 
       <br>
    <br>
      
    <!--<h3>Aadhar Number : <small style="color: red">To update contact to customer care</small><input type="submit" value="Save" style="float: right;display: none"></h3><input type="number" name="<?php echo $row['aadhar']; ?>" disabled="true" value="data"></input> -->
    
    <h3>Phone Number : <input type="submit" id="save_phone" onclick="update_phone()" value="Save" style="float: right;display: none"><a id="a_phone" style="color:blue;float:right;margin-right: 10%">edit</a><h3><input type="number" id="phone" disabled="true" value="<?php echo $row['phone']; ?>"></input> 
          <br>
    <br>
  
    <h3>Address : <input type="submit" value="Save" id="save_address" onclick="update_address()" style="float: right;display: none"><a id="a_address" style="color:blue;float:right;margin-right: 10%">edit</a> </h3><textarea rows="4" disabled="true" id="add"><?php echo $row['address'];?></textarea><br>
    <br>
  </div>
  </div>
</div>
<?php } ?>
<script type="text/javascript">

  $('#a_name').on('click',function(){
    document.getElementById("save_name").style.display="block";
    document.getElementById("a_name").style.display="none";
  });

  $('#a_phone').on('click',function(){
    document.getElementById("save_phone").style.display="block";
    document.getElementById("a_phone").style.display="none";
  });
  $('#a_email').on('click',function(){
    document.getElementById("save_email").style.display="block";
    document.getElementById("a_email").style.display="none";
  });
  $('#a_address').on('click',function(){
    document.getElementById("save_address").style.display="block";
    document.getElementById("a_address").style.display="none";
  });

  function update_name(){
    document.getElementById("save_name").style.display="none";
    document.getElementById("a_name").style.display="block";

  }

  function update_email() 
        {

          document.getElementById("save_email").style.display="none";
          document.getElementById("a_email").style.display="block";

          var eid= document.getElementById('eid').value;
            $.ajax(
                url: "update.php",type: "POST",data: { 'email': eid},success: function(){ alert("ok"); }
            );
        }

  function (){

  }

  function update_phone(){

  }
  function update_address(){

  }


</script>
</body>
</html>