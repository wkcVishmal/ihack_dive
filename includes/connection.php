<?php
	require("constants.php");
	//1.create a database connection
	$connection= mysql_connect(DB_SERVER,DB_USER,DB_PASS);
	if(!$connection){
		//die = quit and display error msg
		die("Database connetion failed: ". mysql_error());
	}
	//2.selecting database
	$db_select=mysql_select_db(DB_NAME,$connection);
	if(!$db_select){
		die("Database selection failed: ". mysql_error());
	}
?>