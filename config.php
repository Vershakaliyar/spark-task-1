<?php

	$servername = "localhost";
	$username = "id17530289_username";
	$password = "data-Pass1word";
	$dbname = "id17530289_bankingsystem";

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>