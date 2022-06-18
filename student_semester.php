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
          <div class="templatemo-flex-row flex-content-row">
 
<div class="templatemo-content-widget white-bg col-1">
              <i class="fa fa-times"></i>
              <h2 class="text-uppercase margin-bottom-30">Year 1</h2>
              <h3 class="text-uppercase"><a href="student_profile.php?year=1 & sem=1" >Sem1</a></h3><hr>
			  <h3 class="text-uppercase"><a href="student_profile.php?year=1 & sem=2" >Sem2</a></h3><hr>
                                    
</div>  
<div class="templatemo-content-widget white-bg col-1">
              <i class="fa fa-times"></i>
              <h2 class="text-uppercase margin-bottom-30">Year 2</h2>
              <h3 class="text-uppercase"><a href="student_profile.php?year=2 & sem=1" >Sem1</a></h3><hr>
			  <h3 class="text-uppercase"><a href="student_profile.php?year=2 & sem=2" >Sem2</a></h3><hr>
                                    
</div>
<div class="templatemo-content-widget white-bg col-1">
              <i class="fa fa-times"></i>
              <h2 class="text-uppercase margin-bottom-30">Year 3</h2>
              <h3 class="text-uppercase"><a href="student_profile.php?year=3 & sem=1" >Sem1</a></h3><hr>
			  <h3 class="text-uppercase"><a href="student_profile.php?year=3 & sem=2" >Sem2</a></h3><hr>
                                    
</div>
<div class="templatemo-content-widget white-bg col-1">
              <i class="fa fa-times margin-bottom-30"></i>
              <h2 class="text-uppercase margin-bottom-30">Year 4</h2>
              <h3 class="text-uppercase"><a href="student_profile.php?year=4 & sem=1" >Sem1</a></h3><hr>
			  <h3 class="text-uppercase"><a href="student_profile.php?year=4 & sem=2" >Sem2</a></h3><hr>
                                    
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
