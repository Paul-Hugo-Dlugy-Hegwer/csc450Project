<?php
/*
 * Title: viewOps.php
 * Purpose: This page shows the user their matches.
 * ------- However, matches are being manually entered right now.
 * Inputs (or Imports): Takes input from the session to be used by sql.
 * -------------------  Retrieves data from the database regarding user matches.
 * Outputs (or Exports): Sends an opportunity id to Details when view is clicked.
 * Subroutines Used (or Defined): session_start(), conncection.php functions, mysqli calls
 * Author: Paul-Hugo Dlugy-Hegwer
 * Date: 05/06/2020
 * Modifications (when & what): None
 * Justification: None
 * */

session_start();
include 'connection.php';
$conn = OpenCon();
echo $_SESSION['uId'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>VolunteerOps</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
  /* Remove the navbar's default margin-bottom and rounded borders */
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }
  /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
  .row.content {height: 450px}
  /* Set gray background color and 100% height */
  .sidenav {
    padding-top: 20px;
    background-color: #f1f1f1;
    height: 100%;
  }
  /* Set black background color, white text and some padding */
  footer {
    background-color: #555;
    color: white;
    padding: 15px;
  }
  /* On small screens, set height to 'auto' for sidenav and grid */
  @media screen and (max-width: 767px) {
    .sidenav {
      height: auto;
      padding: 15px;
    }
    .row.content {height:auto;}
  }
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">VolunteerOps</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"> Logout</a></li>
    </ul>
  </div>
</div>
</nav>
<div class="container-fluid text-center">
<div class="row content">
  <div class="col-sm-2 sidenav">
  </div>
  <div class="col-sm-8 text-left">
    <h1>Your Matches</h1>
<?php
      //Session varaible is retrieved.
      $u_var = (int)$_SESSION['uId'];
      //Retrieves user data regarding matches with opportunities
      $sql = "SELECT * FROM match_u WHERE match_u.user_ID = '$u_var';";
      $results = mysqli_query($conn, $sql);
      echo "<table border='1'>
	<tr>
	<th> Opportunity ID </th>
	<th> user ID </th>
	<th> Details </th>
	</tr>";
      $result_check = mysqli_num_rows($results);
      //Fills in a table with the data.
      while($row = mysqli_fetch_assoc($results)){
      	echo "<tr>";
	echo "<td>" .$row['opp_ID'] . "</td>";
	echo "<td>" .$row['user_ID'] . "</td>";
	echo "<td>"."<a href='opDetails.php?oppIDVar=".$row['opp_ID']."'>View</a>" . "</td>";
	echo "</tr>";
      } 
      echo "</table>";
      mysqli_close($conn);
?>

  </div>
  <div class="col-sm-2 sidenav">
  </div>
</div>
</div>
<footer class="container-fluid text-center">
<p>Footer Text</p>
</footer>
</body>
</html>
