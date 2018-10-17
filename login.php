<?php

$con=mysqli_connect("localhost","root","","farmerstore");
mysqli_select_db($con,"farmerstore");

if(isset($_POST['buyer_log'])){	
$username=$_POST['email_buyer'];
$password=$_POST['pass_buyer'];

//$username= stripcslashes($username);
//$password= stripcslashes($password);

//$username= mysql_real_escape_string($username);
//$password= mysql_real_escape_string($password);
	
	$result=mysqli_query($con,"select b.id,b.email,b.password,d.user_verified from buyer as b,buyerverification as d where b.email='$username' and b.id=d.id")
				or die("Failed to query database".mysqli_error($con));
	$row=mysqli_fetch_array($result);
	if($row['email']==$username && $row['password']==$password && $row['user_verified']=='approved'){
		session_start();
		$_SESSION['user']=$username;
		$_SESSION['id']=$row['id'];
		echo $_SESSION['user'];
		header('Location: Home.php');
	}else{
		echo "Failed to login.";
}

}

if(isset($_POST['farmer_log'])){
	$username=$_POST['email_farmer'];
	$password=$_POST['pass_farmer'];

	//$username= stripcslashes($username);
	//$password= stripcslashes($password);

	//$username= mysql_real_escape_string($username);
	//$password= mysql_real_escape_string($password);

	$result=mysqli_query($con,"select b.id,b.email,b.password,d.user_verified from farmer as b,farmerverification as d where b.email='$username' and b.password='$password' and b.id=d.id")
				or die("Failed to query database".mysqli_error($con));

	$row=mysqli_fetch_array($result);
	if($row['email']==$username && $row['password']==$password && $row['user_verified']=='approved'){

		session_start();
		$_SESSION['user']=$username;
		$_SESSION['id']=$row['id'];
		echo $_SESSION['user'];
		header('Location: Home.php');
	}else{
		echo "Failed to login.";
	}
}

if(isset($_POST['admin_log'])){	
$username=$_POST['email_admin'];
$password=$_POST['pass_admin'];

//$username= stripcslashes($username);
//$password= stripcslashes($password);

//$username= mysql_real_escape_string($username);
//$password= mysql_real_escape_string($password);
	
	$result=mysqli_query($con,"select * from admin where admin_id='$username'")
				or die("Failed to query database".mysqli_error($con));

	$row=mysqli_fetch_array($result);
	if($row['admin_id']==$username && $row['password']==$password){
		session_start();
		$_SESSION['user']=$username;
		$_SESSION['id']=$row['id'];
		header('Location: reference.php');
	}else{
		echo "Failed to login.";
}
}
?>

