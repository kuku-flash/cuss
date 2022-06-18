<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Student - Login</title>
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
		<script>
		var = a;
		a= window.open('localhost/cuofss/index.php','_self');
		
		</script>
	</head>
	<body class="light-gray-bg">
	
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
		
			<header class="text-center">
			
	          <div class="square"><a href="index.php"><img src="images/profile-photo.png" alt="Profile Photo" class="img-responsive" width="50" height="50"></a></div>
	          
			  <h1>Student Login</h1>
	        </header>
	        <form  class="templatemo-login-form" action="student_login_script.php" method="post">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="email"  name="email" class="form-control" required="">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" name="password" class="form-control" required="">           
		          	</div>	
	        	</div>	          	
	          	
				<div class="form-group">
				<button type="submit" class="templatemo-blue-button width-100" name="submit">Login</button>
				
			
				
				</div>
	        </form>
		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Not a registered user yet? <strong><a href="student_register.php" class="blue-text">Sign up now!</a></strong></p>
		</div>
	</body>
</html>