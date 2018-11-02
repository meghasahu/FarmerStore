<?php

require 'dbcredential.php';

echo "done";

$query = "CREATE TABLE admin (admin_id varchar(50) NOT NULL primary key,password varchar(100) NOT NULL);";
$result = mysqli_query($conn,$query) or die("cannot create execute");

$pass = md5("megha");
$query = "insert into admin values("2016.megha.sahu@ves.ac.in",$pass);";

$result = mysqli_query($conn,$query) or die("cannot insert execute");


?>