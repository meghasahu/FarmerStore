<?php 
require 'vendor/autoload.php'; // include Composer's autoloader

$collection = (new MongoDB\Client)->farmerstore->product;
$query = array('keyword' => 'onion');

$cursor = $collection->find($query);


 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Farmer Store</title>
  <link rel="icon" href="images/iconpage.jpg" type="image/jpeg" sizes="16x16">
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
<a href="store.php"> Store </a>
<a href="e-learn.html">E-learn</a>
<a href="about_us.html"> About us</a>
<a href="contact_us.html">Contact us </a>
<a href="login.html" id="log" style="float: right;display: none;">Login/SignUp</a>
<div class="dropdown" id="myacc" >
    <button class="dropbtn"><i class="fa fa-user"></i> My Account 
    </button>
    <div class="dropdown-content">
      <a href="order.html">My Cart</a>
      <a href="MyProfile.html">My Profile</a>
      <a href="">Orders</a>
      <a href="php/logout.php">Logout <i class="fa fa-power-off" style="margin-left: 5%"></i></a>
    </div>
  </div> 
<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<div class="row sidenav">
<div class="col-6 ">

 <div class="row">
  <label for="Sort">Sort</label>
  <select  style= "width:200px; font-size:14x ;font-family:arial" > </style>
  <option value="volvo">Recently Updated</option>
  <option value="saab">Low To High</option>
  <option value="opel">High To Low</option>
</select>

<label for="Location">Location</label>
<select style= "width:200px; font-size:14px ;font-family:arial" ></style>
<option value="" disabled selected>State</option>
<option value="andhra_pradesh">Andhra Pradesh</option>
<option value="arunachal_pradesh">Arunachal Pradesh</option>
<option value="assam">Assam</option>
<option value="bihar">Bihar</option>
<option value="chhattisgarh">-Chhattisgarh-</option>
<option value="goa">Goa</option>
<option value="gujrat">Gujarat</option>
<option value="haryana">Haryana</option>
<option value="himachal_pradesg">Himachal Pradesh</option>
<option value="jammu_and_kashmir">Jammu and Kashmir</option>
<option value="jharkhand">Jharkhand</option>
<option value="karnataka">Karnataka</option>
<option value="kerala">Kerala</option>
<option value="madhya_pradesh">Madhya Pradesh</option>
<option value="maharashtra">Maharashtra</option>
<option value="manipur">Manipur</option>
<option value="meghalaya">Meghalaya</option>
<option value="mizoram">Mizoram</option>
<option value="nagaland">Nagaland</option>
<option value="orissa">Orissa</option>
<option value="punjab">Punjab</option>
<option value="rajasthan">Rajasthan</option>
<option value="sikkim">Sikkim</option>
<option value="tamil_nadu">Tamil Nadu</option>
<option value="tripura">Tripura</option>
<option value="uttar_pradesh">Uttar Pradesh</option>
<option value="uttaranchal">Uttaranchal</option>
<option value="west_bangal">West Bengal</i></font></option>
<option value="other">Other</option>
</select>
      
<select style= "width:200px; font-size:14px ;font-family:arial" ></style>
<option value="" disabled selected> City</option>
<option value="Abiramam ">Abiramam</option>
<option value=" Abohar">Abohar</option>
<option value=" Adampur">Adampur</option>
<option value="Agra ">Agra</option>
<option value="Ahmedabad ">Ahmedabad</option>
<option value="Ahmednagar ">Ahmednagar</option>
<option value=" Aizawal">Aizawal</option>
<option value=" Ajmer">Ajmer</option>
<option value="Ambala ">Ambala</option>
<option value="Amritsar ">Amritsar</option>
<option value=" Anand">Anand</option>
<option value="Ankleshwar ">Ankleshwar</option>
<option value="Asansol ">Asansol</option>
<option value=" Aurangabad">Aurangabad</option>
<option value="Bareilly ">Bareilly</option>
<option value=" Bathinda">Bathinda</option>
<option value=" Belgaum">Belgaum</option>
<option value=" Bellary">Bellary</option>
<option value="Bangalore ">Bangalore</option>
<option value="Bhagalpur ">Bhagalpur</option>
<option value=" Bharuch">Bharuch</option>
<option value="Bhavnagar ">Bhavnagar</option>
<option value=" Bhillai">Bhillai</option>
<option value=" Bhopal">Bhopal</option>
<option value="Bhubaneshwar ">Bhubaneshwar</option>
<option value=" Bhuj">Bhuj</option>
<option value=" Bidar">Bidar</option>
<option value="Bilaspur ">Bilaspur</option>
<option value=" Bokaro">Bokaro</option>
<option value=" Calicut">Calicut</option>
<option value=" Chandigarh">Chandigarh</option>
<option value="Chennai ">Chennai</option>
<option value="Cochin ">Cochin</option>
<option value=" Coimbatore">Coimbatore</option>
<option value=" Cuddalore">Cuddalore</option>
<option value=" Cuttak">Cuttak</option>
<option value=" Dadra">Dadra</option>
<option value=" Dalhousie">Dalhousie</option>
<option value=" Daman">Daman</option>
<option value=" Dehradun">Dehradun</option>
<option value="Delhi ">Delhi</option>
<option value=" Dhanbad">Dhanbad</option>
<option value="Dharmasala ">Dharmasala</option>
<option value="Dharwad ">Dharwad</option>
<option value=" Dimapur">Dimapur</option>
<option value="Durgapur ">Durgapur</option>
<option value="Ernakulam ">Ernakulam</option>
<option value="Erode ">Erode</option>
<option value=" Faizabad">Faizabad</option>
<option value=" Gandhinagar">Gandhinagar</option>
<option value="Gangtok ">Gangtok</option>
<option value=" Ghaziabad">Ghaziabad</option>
<option value=" Gir">Gir</option>
<option value=" Gorakhpur">Gorakhpur</option>
<option value=" Gulbarga">Gulbarga</option>
<option value=" Guntakal">Guntakal</option>
<option value="Guntur ">Guntur</option>
<option value="Gurgaon ">Gurgaon</option>
<option value="Guwahati ">Guwahati</option>
<option value=" Gwalior">Gwalior</option>
<option value="Haldia ">Haldia</option>
<option value=" Hisar">Hisar</option>
<option value=" Hosur">Hosur</option>
<option value="Hubli ">Hubli</option>
<option value=" Hyderabad">Hyderabad</option>
<option value=" Imphal">Imphal</option>
<option value="Indore ">Indore</option>
<option value=" Itanagar">Itanagar</option>
<option value=" Jabalpur">Jabalpur</option>
<option value="Jaipur ">Jaipur</option>
<option value=" Jaisalmer">Jaisalmer</option>
<option value=" Jalandhar">Jalandhar</option>
<option value=" Jalgaon">Jalgaon</option>
<option value="Jammu ">Jammu</option>
<option value="Jamnagar ">Jamnagar</option>
<option value="Jamshedpur ">Jamshedpur</option>
<option value=" Jodhpur">Jodhpur</option>
<option value=" kakinada">kakinada</option>
<option value=" Kandla">Kandla</option>
<option value="Kannur ">Kannur</option>
<option value="Kanpur ">Kanpur</option>
<option value=" Karnal">Karnal</option>
<option value=" Kharagpur">Kharagpur</option>
<option value=" Kochi">Kochi</option>
<option value=" Kolar">Kolar</option>
<option value=" Kolhapur">Kolhapur</option>
<option value="Kolkatta ">Kolkatta</option>
<option value=" Kollam">Kollam</option>
<option value="Kota ">Kota</option>
<option value="Kottayam ">Kottayam</option>
<option value=" Kozhikode">Kozhikode</option>
<option value="Kulu_Manali ">Kulu/Manali</option>
<option value="kurnool ">kurnool</option>
<option value="Kurukshetra ">Kurukshetra</option>
<option value="Lucknow ">Lucknow</option>
<option value=" Ludhiana">Ludhiana</option>
<option value="Madurai ">Madurai</option>
<option value="Mangalore ">Mangalore</option>
<option value=" Mathura">Mathura</option>
<option value=" Meerut">Meerut</option>
<option value=" Mohali">Mohali</option>
<option value=" Moradabad">Moradabad</option>
<option value=" Mumbai">Mumbai</option>
<option value="Mysore ">Mysore</option>
<option value=" Nagerkoil">Nagerkoil</option>
<option value="Nagpur ">Nagpur</option>
<option value="Nasik ">Nasik</option>
<option value="Navi_Mumbai ">Navi Mumbai</option>
<option value="Nellore ">Nellore</option>
<option value="Nizamabad ">Nizamabad</option>
<option value="Noida ">Noida</option>
<option value=" Ooty">Ooty</option>
<option value="Palakkad ">Palakkad</option>
<option value="Palghat ">Palghat</option>
<option value=" Panipat">Panipat</option>
<option value="Panipat ">Panjim</option>
<option value=" Paradeep">Paradeep</option>
<option value=" Pathankot">Pathankot</option>
<option value=" Patiala">Patiala</option>
<option value=" Patna">Patna</option>
<option value=" Pondichery">Pondichery</option>
<option value="Porbandar ">Porbandar</option>
<option value=" Pune">Pune</option>
<option value="Puri ">Puri</option>
<option value="Raipur ">Raipur</option>
<option value=" Rajahmundry">Rajahmundry</option>
<option value="Rajkot ">Rajkot</option>
<option value="Ranchi ">Ranchi</option>
<option value="Rohtak ">Rohtak</option>
<option value="Roorkee ">Roorkee</option>
<option value="Rourkela ">Rourkela</option>
<option value="Salem ">Salem</option>
<option value="Shillong ">Shillong</option>
<option value=" Shimla">Shimla</option>
<option value="Silchar ">Silchar</option>
<option value="Siliguri ">Siliguri</option>
<option value="Solapur ">Solapur</option>
<option value="Srinagar ">Srinagar</option>
<option value=" Surat">Surat</option>
<option value="Thanjavur ">Thanjavur</option>
<option value=" Thrissur">Thrissur</option>
<option value="Tirunalveli ">Tirunalveli</option>
<option value="Tirupati ">Tirupati</option>
<option value="Trichy ">Trichy</option>
<option value="Trivandrum ">Trivandrum</option>
<option value=" Tuticorin">Tuticorin</option>
<option value="Udaipur ">Udaipur</option>
<option value=" Ujjain">Ujjain</option>
<option value="Vadodara_Baroda ">Vadodara/Baroda</option>
<option value="Valsad ">Valsad</option>
<option value="Vapi ">Vapi</option>
<option value="Varanasi_Banaras ">Varanasi/Banaras</option>
<option value=" Vasco_Da_Gama">Vasco Da Gama</option>
<option value="Vellore ">Vellore</option>
<option value="Vijayawada ">Vijayawada</option>
<option value="Visakhapatnam ">Visakhapatnam</option>
<option value="Warangal ">Warangal</option>
</select>

<span style="margin-left:3%"><i class="fa fa-search" ></i></span>
</div>
</div>
</div>
<?php foreach($cursor as $document) { ?>
  <div class="card" style="padding:1em;">
  <img class="card_img" src="<?php echo $document['image']; ?>" onclick="location.href='description.php\?temp=<?php echo $document['_id'];?>'">
  <div><label><?php echo $document['product_name']; ?></label><label style="float: right;">&#x20b9 <?php echo $document['price']; ?></label></div>
    <input type="submit" value="Add to Cart" class="cart" onclick="location.href='cartinsert.php\?temp=<?php echo $document['_id'];?>\&quantity=10'">
  </div>
<?php } ?>

</body>
</html>