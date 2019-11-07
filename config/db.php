<?php
$con = mysqli_connect("localhost", "root", "");
		if(!$con){
			die("Unable to connect".mysqli_error());
		}
		else{
			echo "";
		}
	mysqli_select_db($con, "turnup");
?>