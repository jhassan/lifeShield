<?php

	//session_start();

	

	$strNewLoginx = $_POST['strNewLoginx'];

	$strNewPassword = $_POST['strNewPassword'];



	// set login / password as session vars

	$_SESSION["strLogin"] = $strNewLoginx;

	$_SESSION["strPassword"] = md5($strNewPassword);



	header("Location: home");

?>