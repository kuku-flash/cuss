
<?php
include'config.php';

$id=$_GET['id'];
$sql ="delete from faculty where id ='$id'";

$result=mysqli_query($conn, $sql);
	
if($result){
echo"<script>
		
        window.location.href='admin_faculty_list.php?Deletesuccess';
        </script>";
}

else {
die ('ERROR!!!' .mysql_error());

}

?> 	

