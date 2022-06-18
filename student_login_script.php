<?php
session_start();
include 'config.php';

$email = $_POST['email']; 
$password = $_POST['password']; 




$sql="SELECT  `first_name`, `department_name`  FROM students WHERE email= '$email' AND password= '$password' ";
$result=mysqli_query($conn, $sql);



$row = mysqli_fetch_array($result);


$count=mysqli_num_rows($result);

if($count==1){


$_SESSION['first_name'] = $row['first_name'];
$_SESSION['department_name'] = $row['department_name'];


	echo"	<script>
		alert('successfully');
        window.location.href='student_semester.php?success';
        </script>";


}
else {
echo"<script> alert('Wrong email or password!!!');  history.back();  </script>";

}




mysqli_close($sonn);

?>