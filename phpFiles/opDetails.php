<?php
session_start();
include 'connection.php';
$conn = OpenCon();
$oppIDVar = (int)$_GET['oppIDVar'];
echo $oppIDVar;
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
  </div>
</div>
</nav>
<div class="container-fluid text-center">
<div class="row content">
  <div class="col-sm-2 sidenav">
  </div>
  <div class="col-sm-8 text-left">
    <h1>Opportunity Details</h1>
    <?php
      $u_var = (int)$_SESSION['uId'];
      $sql = "SELECT * FROM opportunity WHERE opportunity.opp_ID = '$oppIDVar';";
      $results = mysqli_query($conn, $sql);
      echo "<table border='1'>
	    <tr>
	    <th> Opportunity ID </th>
	    <th> Name</th>
	    <th> Description</th>
      <th> Physical Activity </th>
      <th> Social Activity </th>
      <th> Tech Ability Needed </th>
      <th> City </th>
      <th> State </th>
      <th> Day </th>
      <th> Time of Day <th>
	    </tr>";
      $result_check = mysqli_num_rows($results);
      while($row = mysqli_fetch_assoc($results)){
        echo "<tr>";
	      echo "<td>" .$row['opp_ID'] . "</td>";
	      echo "<td>" .$row['name'] . "</td>";
        echo "<td>" .$row['description']. "</td>";
        echo "<td>" .$row['lift_ability']. "</td>";
        echo "<td>" .$row['tech_ability']. "</td>";
        echo "<td>" .$row['comm_ability']. "</td>";
        echo "<td>" .$row['spots_availabe']. "</td>";
        echo "<td>" .$row['City'] . "</td>";
        echo "<td>" .$row['State'] . "</td>";
        echo "<td>" .$row['Day'] . "</td>";
        echo "<td>" .$row['opTime'] . "</td>";
	      echo "</tr>";
      }
      echo "</table>";
      mysqli_close($con);
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

