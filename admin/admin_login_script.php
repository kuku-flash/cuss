<?php
session_start();
include 'config.php';

$email = $_POST['email']; 
$password = $_POST['password']; 




$sql="SELECT  `name`  FROM admin WHERE email= '$email' AND password= '$password' ";
$result=mysqli_query($conn, $sql);



$row = mysqli_fetch_array($result);


$count=mysqli_num_rows($result);

if($count==1){


$_SESSION['name'] = $row['name'];


	echo"	<script>
		alert('successfully');
        window.location.href='admin_lecturer_list.php?success';
        </script>";


}
else {
echo"<script> alert('Wrong email or password!!!');  history.back();  </script>";

}




mysql_close();

?>