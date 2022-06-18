<?php

session_start();
$con = mysqli_connect("localhost" , "root" , "12345678","cuss" ) or die('could not connect :' );


mysqli_close($con);

?>