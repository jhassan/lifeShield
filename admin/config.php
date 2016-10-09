<?php

	$DB_Server = "localhost";

	$DB_Username ="root";

	$DB_Password = "";

	$DB_DBName = "pakcappe_lifeShield";

	

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

	

	// Officers

	$Officers[] = "Officer DayShift";

	$Officers[] = "Officer NoonShift";

	$Officers[] = "Officer NightShift";

	// Officers employee

	$arrDesignation[] = "Computer Operator";

	$arrDesignation[] = "Security Guard";

	

	

	// Sectors

	$sector[] = "Sector A";

	$sector[] = "Sector B";

	$sector[] = "Sector C";	

	

	// Marital Status

	$marital_status[] = "Single";

	$marital_status[] = "Married";

	$marital_status[] = "Divorce";	

	$marital_status[] = "Widower";	

	

	//User type

	$UserType[] = "Officer";

	$UserType[] = "Client";	



?>