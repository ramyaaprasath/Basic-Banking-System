<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ramyaa_bank";

	$conn = mysqli_connect('localhost','root','','ramyaa_bank');

	if(!$conn){
		die("Could not connect to the database - Error:  ".mysqli_connect_error());
	}

?>