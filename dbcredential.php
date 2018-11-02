<?php 

define ('DB_USER','meghasahu');
define ('DB_PASSWORD','megha@1710');
define ('DB_HOST','us-cdbr-iron-east-05.cleardb.net');
define ('DB_NAME','gcp_dc6441c29cece88cb2a6');

$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
  // Check connection
  if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }
?>