<?php
	// error_reporting(0);
	// session_start();
	$DB_Server = "localhost";

	$DB_Username ="root";

	$DB_Password = "";

	$DB_DBName = "lifeshield";



	// Create connection

	$conn = mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName);



	// Check connection

	if (!$conn) {

	    die("Connection failed: " . mysqli_connect_error());

	}

	

	$strPath = "";

	$dTimeOffset = -36000;		// offset time 10 hrs reverse



	// login script relative path -- security is not checked on this page

	$strLoginScriptPath = "/lifeshield/admin/index.php";

	

	// Gender 

	$gender[] = "Girl";

	$gender[] = "Boy";

	

	$arrDesignation[] = "Computer Operator";

	$arrDesignation[] = "Guard";

	

	$records[] = "Employee";

	$records[] = "Visitor";

	$records[] = "School Children";

	

	//visitor relation

	$relation[] = "Mother";

	$relation[] = "Father";

	$relation[] = "Sister";

	$relation[] = "Brother";

	$relation[] = "Friend";

?>