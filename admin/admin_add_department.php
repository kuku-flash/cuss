<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faculty</title>
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
            <i class="fa fa-bars"> </i>
			<img src="images/profile-photo1.jpg">
          </div>
       <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="admin_lecturer_list.php" ><i class="fa fa-bar-chart fa-fw"></i>Lecturers</a></li>
            <li><a href="admin_faculty_list.php" ><i class="fa fa-bar-chart fa-fw"></i>Faculty</a></li>
			<li><a href="admin_department_list.php" class="active"><i class="fa fa-bar-chart fa-fw"></i>Department</a></li>
            <li><a href="admin_unit_list.php" ><i class="fa fa-bar-chart fa-fw"></i>Units</a></li>
            <li><a href="admin_semester_list.php" ><i class="fa fa-bar-chart fa-fw"></i>Semester</a></li>
			<li><a href="admin_timetable_list.php"><i class="fa fa-bar-chart fa-fw"></i>Timetable</a></li>
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
            <h2 class="margin-bottom-10">Add New Department</h2>
			
            <form action="admin_add_department_script.php" class="templatemo-login-form" method="post">
              <div class="row form-group">

                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Department Name</label>
                    <input type="text" class="form-control"  placeholder="Department Name" name="department_name" required="">                  
                </div>
				
				<div class="col-lg-2 col-md-2 form-group">                  
                    <label class="control-label templatemo-block" >Faculty</label> 
				<?php
					include 'config.php';
					$sql = "SELECT * FROM faculty";
					$result = mysqli_query($conn, $sql);
				
				?>
                  <select class="form-control" name="faculty_id" >
                <?php
				while($rows=mysqli_fetch_array($result)) {
				?>
                    <option > <?php echo $rows['id']; ?>  </option> 
					
				
         <?php 
				}
				?>
                  </select>               
                </div>
				
                
               
				
				
				
              </div>
              
            
              
              
              
              <div class="form-group text-right">
                <input type="submit" class="templatemo-blue-button" name="submitt" value="Add">
				</form>
               <a href="admin_department_list.php" ><input type="button" class="templatemo-white-button" value="Back"></a>
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
