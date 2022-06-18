<?php

include 'config.php';

if(isset($_POST['submitt']))
{    
     
	
	
    $firstname = $_POST['firstname'];	
    $lastname = $_POST['lastname'];	
    
    $email = $_POST['email'];	
    $password = $_POST['password'];	
    $department_name = $_POST['department_name'];	

	
	


		$sql="INSERT INTO students (first_name, last_name, email, password, department_name)
		VALUES ('$firstname', '$lastname', '$email', '$password', '$department_name')";
		$result = mysqli_query($conn, $sql);
	}		
	if($result){
		?>
		<script>
		alert(' Added successfully');
        window.location.href='student_login.php?success';
        </script>
		<?php
	}

	else
	{
		?>
		<script>
		alert('Failed to Register Try Again');
        history.back();
        </script>
		<?php


}
mysqli_close($conn);
?>