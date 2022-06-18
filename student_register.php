<!DOCTYPE html>
<?php
include'session_open.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
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
      
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
			<img src="images/main-slider1.jpg" height="50" class="img-responsive" >
              <ul class="text-uppercase">
           
               
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10"></h2>
			
			  
           <div class="panel panel-default no-border">
              <div class="panel-heading border-radius-10">
                <h2>Student Registeration</h2>
              </div>
              <div class="panel-body">
                <div class="templatemo-flex-row flex-content-row margin-bottom-30">
                  <div class="col-1">
                    <form action="student_register_script.php" class="templatemo-login-form" method="post">
              <div class="row form-group">
			<div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Firstname</label>
                    <input type="text" class="form-control"  placeholder="" name="firstname" required="">                  
                </div>
			<div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Lastname</label>
                    <input type="text" class="form-control"  placeholder="" name="lastname" required="">                  
                </div>
			<div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">email</label>
                    <input type="text" class="form-control"  placeholder="" name="email" required="">                  
               </div>
			<div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Password</label>
                    <input type="password" class="form-control"  placeholder="" name="password" required="">                  
                </div>
			<div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Course</label>
				<?php
					include 'config.php';
					$sql = "SELECT * FROM departments";
					$result = mysqli_query($conn,$sql);
				
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
		          </div>
				  
				<div class="form-group text-right">
                <input type="submit" class="templatemo-blue-button" name="submitt" value="Sign Up">
				</form>
             
              </div> 
				
				
				</form>
                    
                    
					
                  </div>              
                </div>     
              </div>
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
