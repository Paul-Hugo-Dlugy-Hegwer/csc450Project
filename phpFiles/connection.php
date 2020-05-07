<?php
/*
 * Title: connection.php
 * Purpose: Establishes the connection to the satoshi server mysql database.
 * Sample Call (or Use): include 'connection.php';
 * Inputs (or Imports): one function takes the connection to the database as a input. 
 * Outputs (or Exports): one function returns the database connection.
 * Subroutines Used (or Defined): OpenCoun(), CloseCone($conn)
 * Author: Paul-Hugo Dlugy-Hegwer
 * Date: Unknown
 * Modifications (when & what): Modifications made on 05/07/2020.
 * Justification: Had to remove the satoshi login info of developer.
 * */
function OpenCon()
{
  $dbhost = "localhost";
  $dbuser = "pd4235";
  $dbpass = "5Ok0PLqFi";
  $db = "vettercsc450group1";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);

  return $conn;
}

function CloseCon($conn)
{
  $conn -> close();
}
?>

