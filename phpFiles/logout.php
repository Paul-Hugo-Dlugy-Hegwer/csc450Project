<?php
/*
 * Title: logout.php
 * Purpose: The page responsible for handling the loogging out anc clearing the session.
 * Inputs (or Imports): None 
 * Outputs (or Exports): None
 * Subroutines Used (or Defined): session_start(), unset(x), session_destroy
 * Author: Paul-Hugo Dlugy-Hegwer
 * Date: 05/07/2020
 * Modifications (when & what): None
 * Justification: None
 * */
	session_start();
	unset($_SESSION["uId"]);
	unset($_SESSION["orgId"]);
	session_destroy();
	header('Location: startupPage.php');
?>
