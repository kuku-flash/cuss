<?php

include 'config.php';

if(isset($_POST['submitt']))
{    
     
	
	
    $department_name = $_POST['department_name'];	
	$faculty_id = $_POST['faculty_id'];
	
	
	

		$sql="INSERT INTO departments (name, faculty_id) VALUES ('$department_name', '$faculty_id')";
		$result = mysqli_query($conn, $sql);
	}		
	if($result){
		?>
		<script>
		alert(' Added successfully');
        window.location.href='admin_department_list.php?success';
        </script>
		<?php
	}

	else
	{
		?>
		<script>
		alert('Failed to add a new faculty');
        history.back();
        </script>
		<?php


}
mysqli_close();
?>