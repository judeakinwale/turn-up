<?php
	require_once("../config/db.php");
	require_once("register.inc.php");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Patge</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../public/imgs/logo.png">

	<!--font used-->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!--Above is the google CDN-->
	<!--BOOTSTRAP-->
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<!--BOOTSTRAP GRID-->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/styles/styles.css">
	<link rel="stylesheet" type="text/css" href="../public/css/styles/styles.scss">
	<link rel="stylesheet" type="text/css" href="../public/css/styles/media.scss">
    <link rel="stylesheet" type="text/css" href="../public/css/styles/media.css">
	
	


</head>
<body>
	<nav class=" navbar navbar-expand-md shadow-lg  p-0 mb-0 sticky-top">
		<h4 class="mt-2 ml-5" style="font-weight: bold;" id="h4"><span class="mr-3"><img src="../public/imgs/tu Logo 2.png" class="img-fluid" width="35" height="35"/></span>Turn Up</h4>
		  <!-- Navbar links -->
		  <div class="resp-nav" id="nav-span" onclick="toggleClick()">
              <span id="togle-btn"></span>
              <span id="togle-btn"></span>
              <span id="togle-btn"></span>
      	  </div>
		<div class="nav-bg" id="nav"></div>
		<b id="cancel" onclick="cancel()">&times;</b>
		  <div class="" id="demo">
				<ul class="navbar-nav" id="ul">
						<li class="nav-item">
							<a class="nav-link" href="#">Browse Event</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Organize</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Help</a>
						</li> 
						<li class="nav-item">
							<a class="nav-link" href="#">Create Event</a>
						</li> 
						<li class="nav-item">
							<a id="nav-btn" class="nav-link btn btn-light" href="login.php">Login</a>
						</li> 
				</ul>
		   </div> 
	</nav>
	<div class="form container">
	<form action="" method="post" class="signup-form container">
		<h3 class="mt-4 mb-4 ml-4 pl-5" id="h3">Sign Up</h3>
			<div class="form-group">
				<input id="input" class="form-control" type="text" name="name" placeholder="Name" required/>
			</div>
			<div class="form-group">
	          	<input id="input" class="form-control" type="text" name="username" placeholder="Username" required/>
	        </div>
	        <div class="form-group">
	           	<input id="input" class="form-control" type="email" name="email" placeholder="Email" required/>     
	        </div>
	        <div class="form-group">
	           	<input id="input" class="form-control" type="password" name="password" placeholder="Password" required/>     
			</div>
			<div class="form-group">
				<select id="input"  class="form-control" name="location">
					<option value="">Location</option>
					<option value="Surulere">Surulere</option>
					<option value="Akoka">Akoka</option>
					<option value="Victoria Island">Victoria Island</option>
					<option value="Lekki">Lekki</option>
					<option value="Main Land">Main Land</option>
					<option value="Festac">Festac</option>
					<option value="Ojuelegba">Ojuelegba</option>
				</select>
			</div>
			<div class="form-group">
				<select id="input"  class="form-control" name="category">
					<option value="">Category</option>
					<option value="Religious">Religious</option>
					<option value="Shows">Shows</option>
					<option value="Parties">Parties</option>
					<option value="Seminars">Seminars</option>
					<option value="Meetups">Meetups</option>
					<option value="Exhibiton">Exhibiton</option>
				</select>
		    </div>
					<button id="signup-btn" class="btn btn-primary mt-1" name="submit">Sign Up</button></br>
					<hr class="hr1 "><b class="mt-1 ">OR</b><hr class="hr2">
					<a href="fb-redirect.php" role="button" id="fb-btn" class="btn btn-primary ml-3.5" name="sign">
						<span> <i class="fa fa-facebook-square mr-2" style="font-size:17px;"></i></span>Sign in with Facebook
					</a>
			
				<div class="acctQuest mb-5">
						<ul class="text-white text-center">
							<li>Do you have an account?</li>
							<li><a href="login.php">Login</a></li>
						</ul>
				</div>
		</form>	
	</div>
	<div class="form-img"></div>
	<footer class="container-fluid">
		<p class="text-white mt-4 ml-4 pt-1 pl-4">&copy All Right Reserved 2019</p>
	</footer>	


</body>
   <!--jQUERY-->
<script src="../../js/jquery.min.js"></script>
<!--bootstrap script-->
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/popper.min.js"></script>
</html>
<!--responsive navbar js-->
<script src="../public/js/nav.js">
</script>
