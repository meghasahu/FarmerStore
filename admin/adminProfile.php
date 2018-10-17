<!DOCTYPE html>
<html>
<head>
	<title>Farmer Store</title>
  <link rel="icon" href="images/iconpage.jpg" type="image/jpeg" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="css/nav.css"></link>
  <link  rel="Stylesheet" type="text/css" href="css/basic.css" ></link>
  <link rel="stylesheet" type="text/css" href="css/forForms.css"></link>
  <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css"></link>
  <link rel="stylesheet" type="text/css" href="css/farmer.css"></link>
  <link rel="stylesheet" type="text/css" href="css/request.css"></link>
  <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
  <script type="text/javascript" src="js/responsiveNav.js"></script>
</head>
<body>
<header>
<img src="images/iconFarm.png" alt="icon" width="3%" height="10%">
<h2 >Famer Store</h2>

<div id="google_translate_element" style="float:right"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</header>
</div>

<div class="sidenav" >
  <a href="reference.php">Approve Buyer</a>
  <a href="referencefarm.php">Approve Farmer</a>
  <a href="adminProfile.php">My Profile</a>
   <a href="php/logout.php">Logout <i class="fa fa-power-off" style="margin-left: 5%"></i></a>
</div>

<!--changed part -->

<div class="row">
  <div class="col-6 form" id="cen">

    <h1>Admin Profile </h1>
    
    <div class="profile_box">
    <h3>Name  : <input type="submit" id="save_name" value="Save" style="float: right;display: none"> <a id="a_name" style="color:blue;float:right;margin-right: 10%" onclick="update_name()">edit</a></h3>
    <input type="name" name="" disabled="true" value="data"></input> 
      
      <h3>  Email Id : <input type="submit" value="Save" style="float: right;display: none;margin-right: 10%"><a style="color:blue;float:right;margin-right: 10%" onclick="update_email()">edit</a></h3>
   <input type="email" name="" disabled="true" value="data"></input> 
      
    <h3>Phone Number : <input type="submit" value="Save" style="float: right;display: none"><a style="color:blue;float:right;margin-right: 10%" onclick="update_phone()">edit</a><h3><input type="number" name="" disabled="true" value="data"></input> 
  
    <h3>Address : <input type="submit" value="Save" style="float: right;display: none"><a style="color:blue;float:right;margin-right: 10%" onclick="update_address()">edit</a> </h3><textarea rows="4" disabled="true"></textarea>
  </div>
  </div>
</div>
<script type="text/javascript">
  function update_name(){

    //document.getElementById("farmer").style.background="#558b2f";

    document.getElementById("save_name").style.display="block";

    document.getElementById("a_name").style.display="none";


  }
  function update_email(){

  }
  function update_phone(){

  }
  function update_address(){

  }
</script>
</body>
</html>