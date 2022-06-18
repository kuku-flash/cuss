<?php

include 'config.php';

if(isset($_POST['submitt']))
{    
     
	
	
    $faculty_name = $_POST['faculty_name'];	

	
	
	

		$sql="INSERT INTO faculty (name) VALUES ('$faculty_name')";
		$result = mysqli_query($conn, $sql);
	}		
	if($result){
		?>
		<script>
		alert(' Added successfully');
        window.location.href='admin_faculty_list.php?success';
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