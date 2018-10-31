<?php
if(isset($_POST['submit'])){
    


  //getting values in variables
	$userType =(string)$_POST['user'];

	$user_text=$_POST['user_text'];
	echo $user_text;

	$title = $_POST['title'];
	$title_text = $_POST['title_text'];

    echo "\n".$title_text;
    echo "hh";
	$first = (string)$_POST['firstname'];

	$middle = (string)$_POST['middlename'];
	$last = (string)$_POST['lastname'];

	$gender = $_POST['gender'];
	$gender_text = $_POST['gender_text'];

	$date = (string)$_POST['date'];

	$address = (string)$_POST['address'];

	echo "$address";

	$city = (string)$_POST['city'];
	$pincode = (int)$_POST['pin'];

	$phone = (int)$_POST['phone'];

	$email = (string)$_POST['email'];

	$p = (string)$_POST['password'];

	echo "\n pass \n".$p."\n";
	$pass = md5($p);

	//may be farmer doesnt have email hence email can be null

	if($email == "")
	{
		$email = "null";
		echo $email;
	}

	$holder_name = (string)$_POST['holder'];

	$bank_name = (string)$_POST['bankname'];

	$account = (int)$_POST['acc_no'];

	$ifsc = (int)$_POST['ifsc'];

	//getting aadhar file

	//$aadhar_file = (string)$_POST['aadhar'];
	$conn = new mysqli('localhost','root','', 'farmerstore');
	// Check connection
	if ($conn->connect_error) {
    	die('Connection failed: ' . $conn->connect_error);
    } 


echo $email;
	$checkEmail=mysqli_query($conn,"select email from $userType where email=\"$email\"");
	$checkPhone=mysqli_query($conn,"select email from $userType where email=\"$email\"");
if(mysqli_fetch_assoc($checkEmail)>0 || mysqli_fetch_assoc($checkPhone)>0)
	{
		echo "<script type='text/javascript'>alert('email id or phone already exists','fail');</script>";
		die("Already exists");
	}
else{

	if (!file_exists("teecom/upload"))
	{
    	mkdir("teecom/upload", 0777, true);
	}
	if (file_exists("teecom/upload/" . $_FILES["aadhar"]["name"]))
	{
   move_uploaded_file($_FILES["aadhar"]["tmp_name"],"teecom/upload/" . $_FILES["aadhar"]["name"] . "1");
   $aadhar_file = "teecom/upload/" . $_FILES["aadhar"]["name"] . "1";
	}
	else
	{
    move_uploaded_file($_FILES["aadhar"]["tmp_name"],"teecom/upload/" . $_FILES["aadhar"]["name"]);
    $aadhar_file = "teecom/upload/" . $_FILES["aadhar"]["name"];
	}

// Create connection

	echo "hello ".$user_text;

$query= "insert into $user_text (title,firstName,middleName,lastName,Gender,dateOfBirth,address,city,pincode,phone,email,password,account_holder_name,bank_name,bank_account_no,ifsc,aadhar_file) values(\"$title_text \",\" $first \",\"$middle\" , \"$last\" , \"$gender_text\" ,$date,\"$address\" ,\"$city\",$pincode ,$phone , \"$email\" ,\"$pass\", \"$holder_name\" , \"$bank_name\" ,$account, $ifsc , \"$aadhar_file\");";

$res=mysqli_query($conn,$query);

if(!$res){
	die("couldnt execute");
}

$row=mysqli_query($conn,"select id from $user_text where email=\"$email\"");

$ide = mysqli_fetch_assoc($row);
echo "hh";
$id=$ide['id'];

$type= $user_text."verification";

echo $type;
$verify = "insert into $type(id,aadhar_status,user_verified) values($id,\"pending\",\"pending\");";

if(mysqli_query($conn,$verify)){

echo 'done';
}
else{

echo 'fail';
}

$conn->close();
}
}
header('Location: ../login.html');
?>