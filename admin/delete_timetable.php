
<?php
include'config.php';

$id=$_GET['ttid'];
echo $id ;
$sql ="delete from timetable where ttid ='$id'";

$result=mysqli_query($conn,$sql);
	
if($result){
echo"<script>
		alert('Delete successfully');
        window.location.href='admin_timetable_list.php?success';
        </script>";
}

else {
die ('ERROR!!!' .mysql_error());

}

?> 	

