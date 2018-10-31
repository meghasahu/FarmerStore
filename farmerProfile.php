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

$query = "select * from farmer where id='$userid'";
$result = mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Farmer Store</title>
	<link rel="icon" href="images/iconpage.jpg" type="image/jpeg" sizes="16x16">
	<link  rel="Stylesheet" type="text/css" href="css/basic.css" ></link>
  <link rel="stylesheet" type="text/css" href="css/forForms.css"></link>
	<link rel="stylesheet" type="text/css" href="css/newForm.css"></link>
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css"></link>

	
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

  