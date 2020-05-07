<?php
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

