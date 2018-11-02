<?php
$conn = new mysqli('localhost','root','', 'farmerstore');
  // Check connection
  if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }

$query = "select * from farmerverification as bv inner join farmer as b on bv.id=b.id and bv.aadhar_status='pending'";
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
  <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css"></link>
  <link rel="stylesheet" type="text/css" href="css/addProduct.css"></link>
    <link rel="stylesheet" type="text/css" href="css/request.css"></link>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
  

</script>
	<link rel="stylesheet" type="text/css" href="my.css"></link>
</head>
<body>
<header>
<img src="images/iconFarm.png" alt="icon" width="3%" height="10%">
<h2 >Farmer Store</h2>

<div id="google_translate_element" style="float:right"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</header>

<body>
<div class="sidenav" >
  <a href="reference.php">Approve Buyer</a>
  <a href="referencefarm.php">Approve Farmer</a>
   <a href="php/logout.php">Logout <i class="fa fa-power-off" style="margin-left: 5%"></i></a>
</div>

<!--changed part -->
<form>
<div class="row">
  <div class="col-6 form" id="cen">
  <h1>Admin</h1>
<div class="w3-container">
	<?php 
	if(!$result){
	echo "No request";
}
else {
while($row = mysqli_fetch_assoc($result)){ ?>
	<ul class="w3-ul w3-card-4">
	<li class="w3-bar">
		<div>
			<img src="images/user.png" class="w3-bar-item w3-circle" onclick="location.href='adminuserdetail.php\?temp=farmer\&i='+<?php echo $row['id'] ?>" style="width:150px">
			
			<div class="w3-bar-item">
				<br>
				<br>
				<span class="w3-large"><b><label for="user" style="font-family:Arial; font-size:25px"><?php echo $row['title'].$row['firstName']." ".$row['middleName']." ".$row['lastName']; ?></label></b></span><br>
				<span><label for="request" style="font-family:Arial; font-size:22px">Request for buyer account</label></span>&nbsp &nbsp
			</div>
			<br>
			<br>
			<button id="accept"  style="width:55px;height:55px" onclick="location.href='approve.php\?tab=<?php echo $table ?>&i=<?php echo $id ?>'"><img src="images/correct.png" style="width:45px" /></button>&nbsp
			<button id="reject"  style="width:55px;height:55px" onclick="location.href='reject.php\?tab=<?php echo $table ?>&i=<?php echo $id ?>'"><img src="images/reject.png" style="width:45px" /></button>
		</div>
	</li>
  </ul>
<?php } } ?>
</div>
</div>
</form>
</body>
</html>