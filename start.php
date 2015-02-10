<?php
	echo "hello";
	// define the variables for the database

	$db_host = "localhost";
	$db_uname = "root";
	$db_pass = "";
	$db_name = "revel";
	
	// Other site related variables
	echo "start config";
	
	// functions to connect to the database 
	$db = @mysql_connect("$db_host", "$db_uname", "$db_pass");
	if (!$db) {
		echo "Not connected to the database";
	}
	else
	{
		echo "db connected";
	}
	
	$dbselect = @mysql_select_db("$db_name", "$db");
	
	
	
	@mysql_close($db);

?>
