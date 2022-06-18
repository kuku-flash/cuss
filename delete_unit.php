
<?php
include'config.php';

$id=$_GET['id'];
echo $id ;
$sql ="delete from unit where id ='$id'";

$result=mysqli_query($conn,$sql);
	
if($result){
echo"<script>
		alert('Delete successfully');
        window.location.href='department_unit_list.php?success';
        </script>";
}

else {
die ('ERROR!!!' .mysql_error());

}

?> 	

