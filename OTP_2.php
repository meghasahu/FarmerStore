<?php
session_start();
$email = $_SESSION['user'];


require 'vendor/autoload.php'; // include Composer's autoloader
$collection = (new MongoDB\Client)->farmerstore->product;

if(!isset($_SESSION['user']))
{
  header('Location: login.html');
}

$conn= new mysqli('localhost','root','','farmerstore');
if($conn->connect_error)
{
	die('Connection failed: ' . $conn->connect_error);
}

$id=$_SESSION['id'];
$query = "select * from buyer where id='$id';";

$fetch = mysqli_query($conn,$query);

$value = mysqli_fetch_assoc($fetch);


		if(isset($_POST['confirm_add'])){
			require 'PHPMailer/PHPMailerAutoload.php';
			require 'credential.php';
				$mail=new PHPMailer();

				$mail->Host="smtp.gmail.com";

				$mail->isSMTP();

				$mail->SMTPAuth=true;

				$mail->Username=EMAIL;
				$mail->Password=PASS;

				$mail->SMTPSecure="ssl";

				$mail->Port=465;

				$mail->Subject="OTP";
				
				$otp=mt_rand(10000,99999);
				setcookie('otp',$otp);
				$mail->Body="Hello ".$value['title'].$value['firstName']." ".$value['lastName'].","."this is your OTP:".$otp;

				$mail->setFrom(EMAIL,'Farmer Store');

				$mail->addAddress($value['email'],"xyz");
				
				$mail->send();
				header('Location: verifyOTP.html');

		}
		
		if(isset($_POST['verify_otp'])){

			$otp=$_POST['otp'];
			if($_COOKIE['otp']==$otp){
				$random = mt_rand(0,1000);
				$date = date("Y/m/d");
				$order= (string)($id."_".$date.$random);

				$getting = mysqli_query($conn,"select prod_id,quantity,total_price,count(prod_id) from cart where user_id='$id' group by prod_id") or die("empty cart");
              
				while($sql = mysqli_fetch_assoc($getting))
				{

					$prod=$sql['prod_id'];
					$quan=$sql['quantity'];
					$price=$sql['total_price'];
 $adding = "insert into orderbuyer(order_id,dateOfTransaction,prod_id,quantity,price) values('$order','$date','$prod',$quan,$price)";
                $addresult = mysqli_query($conn,$adding) or die("failed add");

                if($addresult){
				$query="delete from cart where user_id=$id and prod_id='$prod'";
				$result=mysqli_query($conn,$query) or die("failed delete");

				$mongo = array('_id' => new MongoDB\BSON\ObjectID($prod));
				
				$find = $collection->findOne($mongo);
				
				$new = $find['quantity_avail']-$quan;

				$collection->updateOne($mongo,array('$set'=>array("quantity"=>$new)));
 

				//$mongores = $collection->update({$mongo},{$set: {"quantity":$new}});
				if($result){
				
				echo "<script type='text/javascript'>alert('Congratulations order placed'); window.location.href='Home.php';</script>";
				}
				
			}
		}
	}
}
		else{
			  alert("please enter correct otp");
			}

			?>
