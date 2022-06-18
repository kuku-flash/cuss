<!DOCTYPE html>
<?php
include'session_open.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student</title>
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
		  <h1>Hi,<?php echo $_SESSION['first_name']; ?> </h1>
        </header>
        
        
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="student_semester.php"><i class="fa fa-bar-chart fa-fw"></i>Timetable</a></li>
            
            <li><a href="student_logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
			  <img src="images/main-slider1.jpg" height="50" class="img-responsive" >
               
               
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
           <div class="panel-heading border-radius-10">
		   		
                <h2>Class Timetable</h2>
              </div>
				<div class="form-group text-left">
				<a href="student_semester.php" ><input type="button" class="templatemo-white-button" value="Back"></a>
				</div>
		
		<div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
 <?php
include 'config.php';

$year = $_GET['year'];
$sem = $_GET['sem'];

$sql="SELECT * FROM timetable where department_name = '{$_SESSION['department_name']}' AND year='$year' AND sem='$sem' ";
$result=mysqli_query($conn, $sql);
?>
                <thead>
                  <tr>
					<td><a href="" class="white-text templatemo-sort-by">UnitCode<span class="caret"></span></a></td>
					<td><a href="" class="white-text templatemo-sort-by">unitName <span class="caret"></span></a></td>
					<td><a href="" class="white-text templatemo-sort-by">ClassDay <span class="caret"></span></a></td>
					<td><a href="" class="white-text templatemo-sort-by">Lecturer Name<span class="caret"></span></a></td>
					<td><a href="" class="white-text templatemo-sort-by">timeStart <span class="caret"></span></a></td>
					<td><a href="" class="white-text templatemo-sort-by">timeEnd <span class="caret"></span></a></td>
					<td><a href="" class="white-text templatemo-sort-by">room <span class="caret"></span></a></td>
                  </tr>
                </thead>
<?php
while($rows=mysqli_fetch_array($result)) {
?>				
                <tbody>
                  <tr>
                    <td><?php echo $rows['unitCode']; ?></td>
                    <td><?php echo $rows['unitName']; ?></td>
                    <td><?php echo $rows['ClassDay']; ?></td>
					<td><?php echo $rows['lecName']; ?></td>
                    <td><?php echo $rows['timeStart']; ?></td>
                    <td><?php echo $rows['timeEnd']; ?></td>
                    <td><?php echo $rows['room']; ?></td>
                  </tr>
<?php 
}
?>              
                </tbody>
              </table>    
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
