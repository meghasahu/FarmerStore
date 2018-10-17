<?php

$id = $_SESSION['id'];
$email = $_POST['email'];

$conn = new mysqli('localhost','root','', 'farmerstore');
  // Check connection
  if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }

$query = "update buyer set email='' where id='$id'";
$result = mysqli_query($conn,$query) or die("cannot");

?>