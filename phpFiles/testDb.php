<?php
/*
 * Title: testDb.php
 * Purpose: The page responsible for testing connection to the database.
 * Inputs (or Imports): connection.php
 * Outputs (or Exports): None
 * Subroutines Used (or Defined): mysqli,openCon()
 * ---------------SQL Queries
 * ---------------SELECT user_ID FROM user WHERE username = '$username';
 * ---------------INSERT INTO organization(username, password, email, phone, address) VALUES ('satan', 'beezle', 'lucifer@fallenAngel.com', '666.666.666', 'hell')
 * Author: Paul-Hugo Dlugy-Hegwer
 * Date: 05/07/2020
 * Modifications (when & what): None
 * Justification: None
 * */

include 'connection.php';
$conn = OpenCon();
echo "Connected Succesfully";
$username = 'bobTheBuilder';
$sql = "SELECT user_ID FROM user WHERE username = '$username';";
$results = mysqli_query($conn, $sql);
$result_check = mysqli_num_rows($results);
if($result_check > 0){
	echo "HELLO";
	while ($row=mysqli_fetch_assoc($results)){
		echo $row['user_ID'];
		echo "YES";
        }
}
$sql = "INSERT INTO organization(username, password, email, phone, address) VALUES ('satan', 'beezle', 'lucifer@fallenAngel.com', '666.666.666', 'hell')";
$results = mysqli_query($conn, $sql);
?>
