<?php
	require_once("../config/db.php");
	require_once("login.inc.php");
	$msg = "";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Patge</title>
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
    <link rel="stylesheet" type="text/css" href="../public/css/styles/medias.scss">
    <link rel="stylesheet" type="text/css" href="../public/css/styles/medias.css">

</head>
<body>
	<nav class=" navbar navbar-expand-md shadow-sm p-0 mb-0 sticky-top">
		<h4 class="mt-2 ml-5" style="font-weight: bold;" id="h4"><span class="mr-3"><img src="../public/imgs/tu Logo 2.png" class="img-fluid" width="35" height="35"/></span>Turn Up</h4>
		  <div class="resp-nav" id="nav-span" onclick="toggleClick()">
              <span id="togle-btn"></span>
              <span id="togle-btn"></span>
              <span id="togle-btn"></span>
      	  </div>
		<div class="nav-bg" id="nav"></div>
		<b id="cancel" onclick="cancel()">&times;</b>
		  <!-- Navbar links -->

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
		        <a id="nav-btn" class="nav-link btn btn-light" href="register.php">Signup</a>
		      </li> 
		    </ul>
		  </div> 
	</nav>
		<div class="form">
			<form action="" class="login-form container" method="post">
				<h2 class="mt-4 mb-4 ml-4 pl-5 pt-1" id="h3">Login</h2>
					<div class="form-group">
						<input id="input" class="form-control" type="text" name="username" placeholder="Username" required/>
					</div>
						<div class="form-group">
							<input id="input" class="form-control" type="email" name="email" placeholder="Email" required/>     
						</div>
							<div class="form-group">
								<input id="input" class="form-control" type="password" name="password" placeholder="Password" required/>     
							</div>
								<button id="signup-btn" name="login" class="btn btn-primary mt-1">Login</button>
									<div class="acctQuest log">
										<ul class="text-light text-center">
											<li>Don't have an account?</li><br>
											<li><a href="register.php">Create an account with Turn Up</a></li>
										</ul>
										<?php if($msg != ""){ echo $msg;}  ?>    
									</div>
				
			</form>		
		</div>
	<div class="form-img"></div>
	<footer>
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
