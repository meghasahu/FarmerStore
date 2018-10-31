<!DOCTYPE html>
<html>
<head>
	<title>Farmer Store</title>
	<link rel="icon" href="images/iconpage.jpg" type="image/jpeg" sizes="16x16">
	<link  rel="Stylesheet" type="text/css" href="css/basic.css" ></link>
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css"></link>
  <link rel="stylesheet" type="text/css" href="css/addProduct.css"></link>
    <link rel="stylesheet" type="text/css" href="css/request.css"></link>
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
  <a href="complaint">Complaint</a>
  <a href="myProfile.php">My Profile</a>
  <a href="logout.php">Log Out</a>
</div>

<!--changed part -->

  <div class="col-13 form" id="cen">
  <h1>Order</h1>
<div class="w3-container">
	<ul class="w3-ul w3-card-4">
	
	
	   <div class="row">
			<div class="col-25">
			<b> <label for="buyer-name">Buyer Name</label>
			</div>
			<div class="col-75">
			<b> <label for="buyer-text">Mik</label>
			</div>
	    </div>
	
		<div class="row">
			<div class="col-25">
			<label for="product-name">Product Name</label>
			</div>
			<div class="col-75">
			<label for="product-text">onion</label>
			</div>
	    </div>
		
		<div class="row">
			<div class="col-25">
			<label for="quantity">Quantity</label>
			</div>
			<div class="col-75">
			<label for="product-text">100</label>
			</div>
	    </div>
			<div class="row">
			<div class="col-25">
			<label for="product-name">Address</label>
			</div>
			<div class="col-25">
			<textarea id="description" name="descriptiontext" style="height:100px ;width:400px;border:none;font-family:arial" disabled="true">bk bkkk bkk bk </textarea>
			</div>

	    </div>
		<div class="row">
		<button id="accept"  style="width:80px;height:60px;margin-right:50px; margin-left:150px" onclick="location.href='order.html'"><img src="images/correct.png" style="width:55px" /></button>
			
			<button id="reject"  style="width:80px;height:60px" onclick="location.href='order.html'"><img src="images/reject.png" style="width:55px" /></button>
	</div>
	<br>
	
	</ul>
	</div>
	</div>
	

	</body>
	</html>