<!DOCTYPE html>
<?php
include'session_open.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Timetable</title>
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
          <h1>Hi,<?php echo $_SESSION['name']; ?> </h1>
        </header>
        
        
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
         <ul>
            
            <li><a href="department_unit_list.php"><i class="fa fa-bar-chart fa-fw"></i>Units</a></li>
			<li><a href="department_timetable_list.php"  class="active"><i class="fa fa-bar-chart fa-fw"></i>Timetable</a></li>
            <li><a href="department_logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
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
            <h2 class="margin-bottom-10">Add Timetable</h2>
			
            <form action="department_add_timetable_script.php" class="templatemo-login-form" method="post">
              <div class="row form-group">
                <div class="col-lg-3 col-md-3 form-group">                  
                    <label for="inputFirstName">Day</label>
                   <select class="form-control" name="day">
				   <option>Monday</option>
				   <option>Tuesday</option>
				   <option>Wednesday</option>
				   <option>Thursday</option>
				   <option>Friday</option>
				   <option>Saturday</option>
				   <option>Sunday</option>
		
					</select>
                </div>
				<div class="col-lg-3 col-md-3 form-group">                  
                    <label for="inputFirstName">Time Start</label>
                    <input type="text" class="form-control"  name="timeStart" required="">                  
                </div>
				<div class="col-lg-3 col-md-3 form-group">                  
                    <label for="inputFirstName">Time End</label>
                    <input type="text" class="form-control"  name="timeEnd" required="">                  
                </div>
				
 	
				<div class="col-lg-6 col-md-6 form-group"> 
                  <label class="control-label templatemo-block" >Department</label>  
				<?php
					include 'config.php';
					$sql = "SELECT * FROM departments WHERE name = '{$_SESSION['department_name']}'";
					$result=mysqli_query($conn,$sql);
				
				?>
                  <select class="form-control" name="department_name">
                <?php
				while($rows=mysqli_fetch_array($result)) {
				?>
                    <option><?php echo $rows['name']; ?></option>
					
				
                <?php 
				}
				?>                    
                  </select>
                </div>
				<div class="col-lg-3 col-md-3 form-group"> 
                  <label class="control-label templatemo-block" >Unit Code</label>  
				<?php
					include 'config.php';
					$sql = "SELECT * FROM unit WHERE department_name = '{$_SESSION['department_name']}'";
					$result=mysqli_query($conn,$sql);
				
				?>
                  <select class="form-control" name="unit_code">
                <?php
				while($rows=mysqli_fetch_array($result)) {
				?>
                    <option><?php echo $rows['unit_code']; ?></option>
					
				
                <?php 
				}
				?>                    
                  </select>
                </div>
				
				<div class="col-lg-6 col-md-6 form-group"> 
                  <label class="control-label templatemo-block" >Unit Name</label>  
				<?php
					include 'config.php';
					$sql = "SELECT * FROM unit WHERE department_name = '{$_SESSION['department_name']}'";
					$result=mysqli_query($conn,$sql);
				
				?>
                  <select class="form-control" name="unit_name">
                <?php
				while($rows=mysqli_fetch_array($result)) {
				?>
                    <option><?php echo $rows['unit_name']; ?></option>
					
				
                <?php 
				}
				?>                    
                  </select>
                </div>
				<div class="col-lg-2 col-md-2 form-group"> 
                  <label class="control-label templatemo-block" >year</label>  
				<?php
					include 'config.php';
					$sql = "SELECT * FROM unit WHERE department_name = '{$_SESSION['department_name']}'";
					$result=mysqli_query($conn,$sql);
				
				?>
                  <select class="form-control" name="year">
                <?php
				while($rows=mysqli_fetch_array($result)) {
				?>
                    <option><?php echo $rows['year']; ?></option>
					
				
                <?php 
				}
				?>                    
                  </select>
                </div>
				<div class="col-lg-2 col-md-2 form-group"> 
                  <label class="control-label templatemo-block" >semester</label>  
				<?php
					include 'config.php';
					$sql = "SELECT * FROM unit WHERE department_name = '{$_SESSION['department_name']}'";
					$result=mysqli_query($conn,$sql);
				
				?>
                  <select class="form-control" name="sem">
                <?php
				while($rows=mysqli_fetch_array($result)) {
				?>
                    <option><?php echo $rows['sem']; ?></option>
					
				
                <?php 
				}
				?>                    
                  </select>
                </div>
               
				<div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Venue</label>
                    <input type="text" class="form-control"  name="venue" required="">                  
                </div>
				
				<div class="col-lg-3 col-md-3 form-group"> 
                  <label class="control-label templatemo-block" >Lecturer Name</label>  
				<?php
					include 'config.php';
					$sql = "SELECT * FROM teacher WHERE department_name = '{$_SESSION['department_name']}' ";
					$result=mysqli_query($conn,$sql);
				
				?>
                  <select class="form-control" name="lecturer">
                <?php
				while($rows=mysqli_fetch_array($result)) {
				?>
                    <option ><?php echo $rows['name']; ?></option>
					
				
                <?php 
				}
				?>                    
                  </select>
                </div>
				<div class="col-lg-2 col-md-2 form-group"> 
                  <label class="control-label templatemo-block" >Lecturer ID</label>  
				<?php
					include 'config.php';
					$sql = "SELECT * FROM teacher WHERE department_name = '{$_SESSION['department_name']}' ";
					$result=mysqli_query($conn,$sql);
				
				?>
                  <select class="form-control" name="lecturer_id">
                <?php
				while($rows=mysqli_fetch_array($result)) {
				?>
                    <option ><?php echo $rows['id']; ?></option>
					
				
                <?php 
				}
				?>                    
                  </select>
                </div>
				
              </div>
              
            
              
              
              
              <div class="form-group text-right">
                <input type="submit" class="templatemo-blue-button" name="submitt" value="Add">
				</form>
               <a href="department_timetable_list.php" ><input type="button" class="templatemo-white-button" value="Back"></a>
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
