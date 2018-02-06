<?php
	$conn_error = "Can't Connect.";
	$mysqli_host = 'localhost';
	$mysqli_user = 'root';
	$mysqli_pass = '';
	
	$mysqli_db = 'cit358exam';
	
	$con = mysqli_connect($mysqli_host,$mysqli_user,$mysqli_pass) or die($conn_error);

	if ( !$con ){

		print "no database selected";
		exit();
	}

	 mysqli_select_db($con,$mysqli_db) or die(mysql_error());

	 // GLOBALS 

	// define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
	 //define('APPLICATION_PATH',$_SERVER['DOCUMENT_ROOT'].'/OpenSource');

    
	?>