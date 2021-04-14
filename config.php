<?php
	//Local Development Connection requirement
	$servername = "localhost";
	$username = "id16586095_root";
	$password = "Mudit@230100";
	$dbname = "id16586095_sparks_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
