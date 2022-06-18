<?php

include 'config.php';

if(isset($_POST['submitt']))
{    
     
	
	
    $unit_code = $_POST['unit_code'];	
	$unit_name = $_POST['unit_name'];
	$department_id = $_POST['deparment_name'];
	$year = $_POST['year'];
	$semester = $_POST['semester'];
	
	
	

		$sql="INSERT INTO unit (unit_code, unit_name, department_id, year, sem) VALUES ('$unit_code', '$unit_name', '$department_id', '$year', '$semester')";
		$result=mysqli_query($conn, $sql);
	}		
	if($result){
		?>
		<script>
		alert(' Added successfully');
        window.location.href='admin_unit_list.php?success';
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