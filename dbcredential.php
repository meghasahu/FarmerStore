<?php 

define ('DB_USER','bc560b175ae86d');
define ('DB_PASSWORD','2ec24a27');
define ('DB_HOST','us-cdbr-gcp-east-01.cleardb.net');
define ('DB_NAME','gcp_dc6441c29cece88cb2a6');

$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
  // Check connection
  if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }
?>