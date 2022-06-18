<?php

include 'config.php';

if(isset($_POST['submitt']))
{    
     
	
	
    $day = $_POST['day'];	
    $timeStart = $_POST['timeStart'];	
    $timeEnd = $_POST['timeEnd'];	
    $year = $_POST['year'];	
   	$sem = $_POST['sem'];
    
    $department_name = $_POST['department_name'];	
    $unit_code = $_POST['unit_code'];	
    $unit_name = $_POST['unit_name'];	
    $venue = $_POST['venue'];	
    $lecturer = $_POST['lecturer'];	
	$lecturer_id = $_POST['lecturer_id'];	
	

	
	
	
	

		$sql="INSERT INTO timetable (lecName,unitCode,unitName,teacher_id,department_name,room,ClassDay,timeStart,timeEnd, year, sem)
		VALUES ('$lecturer','$unit_code','$unit_name','$lecturer_id','$department_name','$venue','$day','$timeStart','$timeEnd', '$year', '$sem')";
		$result=mysqli_query($conn,$sql);
	}		
	if($result){
		?>
		<script>
		alert(' Added successfully');
        window.location.href='department_timetable_list.php?success';
        </script>
		<?php
	}

	else
	{
		?>
		<script>
		alert('Failed to add a new timetable');
        history.back();
        </script>
		<?php


}
mysqli_close();
?>