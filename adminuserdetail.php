<?php

$table = $_GET['temp'];
$id = $_GET['i'];

$conn = new mysqli('localhost','root','', 'farmerstore');
  // Check connection
  if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }

 $query = "select * from $table where id = $id";
 $result = mysqli_query($conn,$query) or die("cannot execute");

 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Farmer Store</title>
	<link rel="icon" href="images/iconpage.jpg" type="image/jpeg" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/nav.css"></link>
	<link  rel="Stylesheet" type="text/css" href="css/basic.css" ></link>
	<link rel="stylesheet" type="text/css" href="css/forForms.css"></link>
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css"></link>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
  <script type="text/javascript" src="js/responsiveNav.js"></script>
</head>
<body>
<header>
<img src="images/iconFarm.png" alt="icon" width="3%" height="10%">
<h2 >Farmer Store</h2>
</header>


<!--changed part -->
<?php 
while($row = mysqli_fetch_assoc($result)){ ?>
<div class="row">
  <div class="form" style="margin-left:13%; width:80%">
  <h1>User Details</h1>
        
	  <div class="profile_box">
	  <div>
	  <img src="php/teecom/upload/aadhar.jpg" style=" height:800px;width:300px;float:left;">
	  </div>
	 
	  <table style="margin-left:320px ;margin-top:1px">
	  <tr>
	  <td>
   <h3 style="width:150px">First Name:</h3></td>
   <td><h3><label  for="first-name" style="margin-right:1px"><?php echo $row['firstName'] ?></label></h3></td></tr>
   
<tr>
 <td>
<h3 style="width:150px" > Middle Name:</h3></td><td><h3><label  for="middle-name" style="margin-right:1px"><?php echo $row['middleName'] ?></label></h3></td></tr>
   

   <tr>
	<td>
	<h3 style="width:150px">Last Name:</h3></td><td><h3><label  for="last-name" style="margin-right:1px"><?php echo $row['lastName'] ?></label></h3></td><tr>
	<tr>
	<td>
      <h3 style="width:150px">
	 Gender:</h3><td><h3><label  for="price__text" style="margin-right:1px"><?php echo $row['Gender'] ?></label></h3></td></tr>
	
	<tr>
	<td>
	<h3 style="width:150px">
	<label style="width:auto"> Date of Birth:</label></h3><td><h3><label  for="price__text" style="margin-right:1px"><?php echo $row['dateOfBirth'] ?></label></h3></td></tr>
	
	<tr rowspan="4">
	<td>
      <h3 style="width:150px">
	 Address:</h3><td><h3><label  for="price__text" style="margin-right:1px"><?php echo $row['address'] ?></label></h3></td></tr>
	<tr>
	<td>
      <h3 style="width:150px">
	 City/Village</h3><td><h3><label  for="city/village" style="margin-right:1px"><?php echo $row['city'] ?></label></h3></td></tr>
<tr>
	<td>
      <h3 style="width:150px">
	 Pin Code:</h3><td><h3><label  for="price__text" style="margin-right:1px"><?php echo $row['pincode'] ?></label></h3></td></tr>
	
	<tr>
	<td>
      <h3 style="width:150px">
	 Mobile Number:</h3><td><h3><label  for="price__text" style="margin-right:1px"><?php echo $row['phone'] ?></label></h3></td></tr>
	<tr>
	<td>
      <h3 style="width:150px">
	Email-Id:</h3><td><h3><label  for="price__text" style="margin-right:1px"><?php echo $row['email'] ?></label></h3></td></tr>
	
	<tr>
	<td>
      <h3 style="width:150px">
	Account Holder's Name:</h3><td><h3><label  for="price__text" style="margin-right:1px"><?php echo $row['account_holder_name'] ?></label></h3></td></tr>
	
	<tr>
	<td>
      <h3 style="width:150px">
	Bank Name:</h3><td><h3><label  for="price__text" style="margin-right:1px"><?php echo $row['bank_name'] ?></label></h3></td></tr>
	
	<tr>
	<td>
      <h3 style="width:150px">
	Bank Account No:</h3><td><h3><label  for="price__text" style="margin-right:1px"><?php echo $row['bank_account_no'] ?></label></h3></td></tr>
	
	<tr>
	<td>
      <h3 style="width:150px">
	IFSC Code:</h3><td><h3><label  for="price__text" style="margin-right:1px"><?php echo $row['ifsc'] ?></label></h3></td></tr>
	<tr>
	<br>
			<br>
			<td><button id="accept"  style="width:150px;height:150px;margin-right:50px" onclick="location.href='approve.php\?tab=<?php echo $table ?>&i=<?php echo $id ?>'"><img src="images/correct.png" style="width:120px" /></button>
			</td>
			<td><button id="reject"  style="width:150px;height:150px" onclick="location.href='reject.php\?tab=<?php echo $table ?>&i=<?php echo $id ?>'"><img src="images/reject.png" style="width:120px" /></button>
	</td>
	</tr>
	  </table>
	  <?php } ?>
  </div>