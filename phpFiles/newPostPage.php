<!DOCTYPE html>
<?php
/*
 * Title: newPostPage.php
 * Purpose: This page is essentially the form for organiations to setup opportunities.
 * Inputs (or Imports): Takes user input for the name, description, activity reuirements.
 * -------------------- and location.
 * Outputs (or Exports): Exports user data to my sql.
 * Subroutines Used (or Defined): session_start(), conncection.php functions, mysqli calls
 * Author: Paul-Hugo Dlugy-Hegwer
 * Date: 05/06/2020
 * Modifications (when & what): None
 * */


include 'connection.php';
$conn = OpenCon();
session_start();
echo $_SESSION['orgId'];
?>

<?php
//Handles submition of form, NO VALIDATION fixe late.
if(isset($_POST['submit']))
{
	$name = $_POST['opName'];
	$des = $_POST['descript'];
	$pAC = $_POST['phyAc'];
	$tSk = $_POST['techSkls'];
	$sAC = $_POST['socAc'];
	$zip = $_POST['zipCode'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$time = (float)$_POST['time'];
	//The organization ID required for the post.
	$or_val = (int)$_SESSION['orgId'];
	$sql = "  INSERT INTO opportunity(org_ID, name, description, lift_ability, tech_ability, comm_ability, spots_availabe, City, State, Day, opTime) VALUES ('$or_val', '$name', '$des', '$pAC', '$tSk', '$sAC', 10, '$city', '$state', '$day', '$time');";
	$results = mysqli_query($conn, $sql);
        header('Location: startupPage.php');
}
?>
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
      <h1>To setup a volunteering opportunity, fill out the details form.</h1>
      <form method="POST" action="newPostPage.php">
              <h2>Name of Opportunity </h2>
              <input name = "opName"/>
              <h3>description</h3>
              <input name = "descript"/>
              <h3>Physical Activity</h3>
              True <input type="Radio" name="phyAc" value="1"/>
	      False <input type="Radio" name="phyAc" value="0"/>
              <h3>Tech Skills Required</h3>
              True <input type="Radio" name="techSkls" value="1"/>
	      False <input type="Radio" name="techSkls" value="0"/>
              <h3>Social Activity</h3>
	      True <input type="Radio" name="socAc" value="1"/>

	      False <input type="Radio" name="socAc" value="0"/>
              <h3>Zipcode</h3>
	      <input name = "zipCode"/>
	      <h3>City</h3>
	      <input name = "city"/>
	      <h3>State</h3>
	      <input name = "state"/>
	      <h3>Time</h3>
	      <input name = "time"/>
	            <P>
              <input type="submit" name="submit" value="Submit"/>
      </form>
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
