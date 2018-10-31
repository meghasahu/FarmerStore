<?php

$table = $_GET['tab'];
$id = $_GET['i'];

$conn = new mysqli('localhost','root','', 'farmerstore');
  // Check connection
  if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }

$tab = $table."verification";
echo $id;
 $query = "update $tab set aadhar_status='rejected',user_verified='rejected' where id= $id";
 $result = mysqli_query($conn,$query) or die("cannot execute");

header('Location: reference.php')
?>