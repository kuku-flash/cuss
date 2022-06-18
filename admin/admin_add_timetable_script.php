<?php

include 'config.php';

if(isset($_POST['submitt']))
{    
     
	
	
    $day = $_POST['day'];	
    $timeStart = $_POST['timeStart'];	
    $timeEnd = $_POST['timeEnd'];	
    $yearOfstudy = $_POST['yearOfstudy'];	
    $semester_no = $_POST['semester_no'];	
    $faculty = $_POST['faculty'];	
    $department = $_POST['department'];	
    $unit_code = $_POST['unit_code'];	
    $unit_name = $_POST['unit_name'];	
    $venue = $_POST['venue'];	
    $lecturer = $_POST['lecturer'];	
	

	
	
	
	

		$sql="INSERT INTO timetable (semID,lecName,unitCode,unitName,faculty,department,room,ClassDay,timeStart,timeEnd,yearOfstudy)
		VALUES ('$semester_no','$lecturer','$unit_code','$unit_name','$faculty','$department','$venue','$day','$timeStart','$timeEnd','$yearOfstudy')";
		$result = mysqli_query($conn,$sql);
	}		
	if($result){
		?>
		<script>
		alert(' Added successfully');
        window.location.href='admin_timetable_list.php?success';
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