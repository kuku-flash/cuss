
<?php
include'config.php';

$id=$_GET['id'];
echo $id ;
$sql ="delete from teacher where id ='$id'";

$result=mysql_query($sql);
	
if($result){
echo"<script>
		alert('Delete successfully');
        window.location.href='admin_lecturer_list.php?success';
        </script>";
}

else {
die ('ERROR!!!' .mysql_error());

}

?> 	

