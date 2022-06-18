<?php

$host = 'localhost';  
$user = 'root';  
$pass = '12345678';  
$dbname = 'cuss';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
else{
	  
}
?>