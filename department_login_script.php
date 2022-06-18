<?php
session_start();
include 'config.php';

$email = $_POST['email']; 
$password = $_POST['password']; 




$sql="SELECT  `name` , `department_name`  FROM teacher WHERE email= '$email' AND password= '$password' AND accesslevel='hod'  ";
$result=mysqli_query($conn,$sql);



$row = mysqli_fetch_array($result);


$count=mysqli_num_rows($result);

if($count==1){


$_SESSION['name'] = $row['name'];
$_SESSION['department_name'] = $row['department_name'];

	echo"	<script>
		alert('successfully');
        window.location.href='department_unit_list.php?success';
        </script>";


}
else {
echo"<script> alert('Wrong email or password!!!');  history.back();  </script>";

}




mysqli_close();

?>