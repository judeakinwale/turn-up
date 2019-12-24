
<?php
require('../connections/user_login_status.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/tu Logo 2.png">
	<title>More details</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<!--BOOTSTRAP GRID-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
		if(isset($_GET['event_page'])){
		$ID = $_GET['event_page'];
		$result = $conn->query("SELECT * FROM events WHERE ID=$ID") or die($conn->error);
			if(count($result)==1){
			$row = $result->fetch_array();
			$image = $row['image'];
			$event_name = $row['event_name'];
			$description = $row['description'];
			$location = $row['location'];	
			$city = $row['city'];
			$country = $row['country'];
			$state = $row['state'];		
			$ticket_price = $row['ticket_price'];
			$ticket_limit = $row['ticket_limit'];
			$category = $row['category'];
			$event_package= $row['event_package'];		





		}
	}
	?>
	<div class="container">
		<div class="row">
			<div class="col">
			 <?php echo "<img class='img-fluid mx-auto d-block' src='../event_images/".$row['image']."' width='65%;' height='200'>" ?>
				<h2 class="text-center pt-1"><?php echo $event_name;?></h2>
				<p style="font-size: 17px;"><?php echo $description;?></p>
                <b style="font-size: 19px;">Event Location: <span class="bg-light"> <?php echo $location;?></span></b></br>
                <b style="font-size: 19px;">City: <span class="bg-primary"> <?php echo $city;?></span></b></br>
                <b style="font-size: 19px;">Country: <span class="bg-danger"> <?php echo $country;?></span></b></br>
                <b style="font-size: 19px;">State: <span style="background-color:blueViolet;"> <?php echo $state;?></span></b></br>
                <b style="font-size: 19px;">Ticket price in USD: <span style="background-color: orange;">$ <?php echo $ticket_price;?></span></b></br>
                <b style="font-size: 19px;">Ticket Limit: <span class="bg-primary"> <?php echo $ticket_limit;?></span></b></br>
                <b style="font-size: 19px;">Category: <span style="background-color: silver" > <?php echo $category;?></span></b></br>
                <b style="font-size: 19px;">Event Package: <span style="background-color: purple;"> <?php echo $event_package;?> </span></b>








			</div>

		</div>
	</div>	



</body>
<!--jQUERY-->
<script src="../js/jquery.min.js"></script>
<!--bootstrap script-->
<script src="../js/bootstrap.min.js"></script>
</html>