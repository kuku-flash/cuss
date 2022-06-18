<?php

include 'config.php';

if(isset($_POST['submitt']))
{    
     
	
	
    $unit_code = $_POST['unit_code'];	
	$unit_name = $_POST['unit_name'];
	$department_name = $_POST['department_name'];
	$year = $_POST['year'];
	$semester = $_POST['semester'];
	
	
	

		$sql="INSERT INTO unit (unit_code, unit_name, department_name, year, sem) VALUES ('$unit_code', '$unit_name', '$department_name', '$year', '$semester')";
		$result = mysqli_query($conn,$sql);
	}		
	if($result){
		?>
		<script>
		alert(' Added successfully');
        window.location.href='department_unit_list.php?success';
        </script>
		<?php
	}

	else
	{
		?>
		<script>
		alert('Failed to add a new Unit');
        history.back();
        </script>
		<?php


}
mysqli_close();
?>