<?php
	$server = "localhost";
	$user = "root";
	$pass = "vertrigo";
	$dbname = "omegainfo";
	
	//Connection
	$conn = mysqli_connect($server, $user, $pass, $dbname);
	
	if(!$conn){
		die("Connection failed!".mysqli_connect_error());
	}else{
		//echo "Online Connection!";
	}
?>