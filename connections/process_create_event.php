<?php
require('./connections/user_login_status.php');
echo 'okay';
// if (isset($_POST['create_event'])) {
// 	//the path to store the uploaded images.
// 	$target = "event_images/" . basename($_FILES['image']['name']);
// 	//Get all submitted data from the form
// 	$event_name = $conn->real_escape_string($_POST['event_name']);
// 	$description = $conn->real_escape_string($_POST['description']);
// 	$image = $_FILES['image']['name'];
// 	$fileSize = $_FILES['image']['size'];
// 	$location = $conn->real_escape_string($_POST['location']);
// 	$city = $conn->real_escape_string($_POST['city']);
// 	$country = $conn->real_escape_string($_POST['country']);
// 	$state = $conn->real_escape_string($_POST['state']);
// 	$ticket_price = $conn->real_escape_string($_POST['ticket_price']);
// 	$ticket_limit = $conn->real_escape_string($_POST['ticket_limit']);
// 	$category = $conn->real_escape_string($_POST['category']);
// 	$event_package = $conn->real_escape_string($_POST['event_package']);
// 	if ($event_name != "" && $description != "" && $image != "" && $location != "" && $city != "" && $country != "" && $state != "" && $ticket_price != "" && $ticket_limit != "" && $category != "" && $event_package != "") {
// 		$conn->query("INSERT INTO events(event_name,description,location,city,country,state,ticket_price,ticket_limit,category,event_package,image)VALUES('$event_name', '$description', '$location', '$city', '$country', '$state', '$ticket_price', '$ticket_limit', '$category', '$event_package', '$image')");
// 		header('location:events.php');
// 		//lets move the uploaded image to a folder.
// 		if (move_uploaded_file($_FILES['image']['tmp_name'], $target) && $fileSize < 1000000) {
// 		} else {
// 			echo "There was a problem uploading image, The image didnt go to the folder or low quality image";
// 		}
// 	} else {

// 		echo "<script>alert('Fields are empty')<script>";
// 	}
// }
//Generate pages for the view button or readmore details...
