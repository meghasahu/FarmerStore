<?php

echo "hello";
session_start();
session_destroy();

echo "done";
header('Location: ../Home.php'); 

?>