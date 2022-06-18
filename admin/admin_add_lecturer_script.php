<?php

include 'config.php';

if(isset($_POST['submitt']))
{    
     
	
	
    $lecturer_name = $_POST['lecturer_name'];	
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$specialization = $_POST['specialization'];
	$department = $_POST['department'];
	$accesslevel = $_POST['accesslevel'];
	


	
	

		$sql="INSERT INTO teacher (name, email, password, specialization, department_name, accesslevel) VALUES
		('$lecturer_name', '$email', '$password', '$specialization', '$department', '$accesslevel')";
		$result = mysqli_query($conn,$sql);
	}		
	if($result){
		?>
		<script>
		alert('User Added successfully');
        window.location.href='admin_lecturer_list.php?success';
        </script>
		<?php
	}

	else
	{
		?>
		<script>
		alert('Failed to add a new user');
        history.back();
        </script>
		<?php


}
mysqli_close();
?>