<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lecturer</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"><img src="images/profile-photo.png" alt="Profile Photo" class="img-responsive"></div>
          <h1>Admin CU of SS</h1>
        </header>
        
        
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
         <ul>
            <li><a href="admin_lecturer_list.php" class="active"><i class="fa fa-bar-chart fa-fw"></i>Lecturers</a></li>
            <li><a href="admin_faculty_list.php" ><i class="fa fa-bar-chart fa-fw"></i>Faculty</a></li>
			<li><a href="admin_department_list.php" ><i class="fa fa-bar-chart fa-fw"></i>Department</a></li>
            <li><a href="admin_unit_list.php" ><i class="fa fa-bar-chart fa-fw"></i>Units</a></li>
            <li><a href="admin_semester_list.php" ><i class="fa fa-bar-chart fa-fw"></i>Semester</a></li>
            <li><a href="admin_logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <img src="images/main-slider1.jpg" height="50" class="img-responsive" >
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Add Lecturer</h2>
<?php
include 'config.php';
if(count($_POST)>0) {
mysqli_query($conn, "UPDATE teacher set id='" . $_POST["id"] . "', name= '" . $_POST["lecturer_name"] . "', 
			 department_name= '" . $_POST["department_name"] . "', specialization= '" . $_POST["specialization"] . "',
			 accesslevel= '" . $_POST["accesslevel"] . "'
	WHERE id='" . $_POST["id"] . "'");
	
	
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn, "SELECT * FROM teacher WHERE id='" . $_GET["id"] . "'");
$rows= mysqli_fetch_array($result);
?>			
            <form action="" class="templatemo-login-form" method="post">
			<div  style="color:red"><?php if(isset($message)) { echo $message; } ?></div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Full Name</label>
					<input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                    <input type="text" class="form-control"  placeholder="<?php echo $rows['name']; ?>"
					value="<?php echo $rows['name']; ?>" name="lecturer_name"> 
					
                </div>
				
                
				
				<div class="col-lg-6 col-md-6 form-group"> 
                  <label class="control-label templatemo-block" >Department</label>  
				<input type="text" class="form-control"  placeholder="<?php echo $rows['department_name']; ?>"
					value="<?php echo $rows['department_name']; ?>" name="department_name"> 
                </div>
				
				<div class="col-lg-6 col-md-6 form-group"> 
                  <label class="control-label templatemo-block" >Specialization</label>  
				<input type="text" class="form-control"  placeholder="<?php echo $rows['specialization']; ?>"
					value="<?php echo $rows['specialization']; ?>" name="specialization"> 
                </div>
				<div class="col-lg-6 col-md-6 form-group"> 
                  <label class="control-label templatemo-block" >Access level</label>  
				<input type="text" class="form-control"  placeholder="<?php echo $rows['accesslevel']; ?>"
					value="<?php echo $rows['accesslevel']; ?>" name="accesslevel"> 
                </div>
               
				
              </div>
              
            
              
              
              
              <div class="form-group text-right">
                <input type="submit" class="templatemo-blue-button" name="submitt" value="update">
				</form>
              <a href="admin_lecturer_list.php" ><input type="button" class="templatemo-white-button" value="Back"></a>
              </div>                           
            
          </div>
          <footer class="text-right">
            <p>Copyright &copy; 2019 - All rights reserved. The Catholic University of South Sudan</p>
          </footer>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
  </body>
</html>
