<!DOCTYPE html>
<?php  
/*
 * Title: signUp.php
 * Purpose: The page responsible for signing up users or organizations for an account.
 * Sample Call (or Use): include 'connection.php';
 * Inputs (or Imports): Takes information from user to create a username and password for the account. 
 * Outputs (or Exports): When the creation is successful, the username, password, email, phone, and address are entered into the database.
 * Subroutines Used (or Defined): session_start, OpenCon(), mysqli
 *--------------------SQL Queries
 *--------------------INSERT INTO user(username, password, email, phone, address) VALUES ('$un_var', '$pw_var', '$e_var', '$pn_var', '$ad_var');
 *--------------------INSERT INTO organization(username, password, email, phone, address) VALUES ('$un_var', '$pw_var', '$e_var', '$pn_var', '$ad_var');
 * Author: Paul-Hugo Dlugy-Hegwer
 * Date: Unknown
 * Modifications (when & what): Modifications made on 05/07/2020.
 * */

session_start();
include 'connection.php';
$conn=OpenCon();
echo "Connected";
?>
<?php
  $un_var=$_POST['un'];
  $pw_var=$_POST['pw'];
  $e_var=$_POST['email'];
  $ad_var=$_POST['adrs'];
  $pn_var=$_POST['pn'];
  $loginType=$_POST['loginType'];
  if(isset($_POST['Signup']))
  {
    echo $un_var;
    if($un_var != "" && $pw_var != "" &&  $e_var != "" && $ad_var != "" && $pn_var != "")
    {
      echo " HERE I AM AS WELL";
      $count_un = strlen($un_var);
      $count_pw = strlen($pw_var);
      $count_e = strlen($e_var);
      $count_ad = strlen($ad_var);
      $count_pn = strlen($pn_var);
      echo $_POST['loginType'];
      if($count_un > 3 && $count_pw > 3 && $count_e > 9 && $count_ad > 5 && $count_pn == 11)
      {
        if($_POST['loginType']=='user')
        {
          if(isset($_POST['Signup']))
          {
              $sql = "INSERT INTO user(username, password, email, phone, address) VALUES ('$un_var', '$pw_var', '$e_var', '$pn_var', '$ad_var');";
              $results = mysqli_query($conn, $sql);
              echo "ACCOUNT CREATED";
              header('Location: login.php');
          }
        }
        elseif($_POST['loginType']=='org') {
          if(isset($_POST['Signup']))
	  {
	      echo "BATMAAAAN";
              $sql = "INSERT INTO organization(username, password, email, phone, address) VALUES ('$un_var', '$pw_var', '$e_var', '$pn_var', '$ad_var');";
              $results = mysqli_query($conn, $sql);
              echo "ACCOUNT CREATED";
              header('Location: login.php');
          }
        }
      }
    }
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
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left">
      <h1>Signup</h1>
      <hr>
      <form method="POST" action="signUp.php">
        <P>
        <?PHP print "Are you looking to volunteer or find volunteers?"?>
        <P>
	<?PHP print "volunteer"; ?>
        <input type="Radio" name="loginType" value="user"/>
        <P>
        <?PHP print "find volunteers"; ?>
        <input type="Radio" name="loginType" value="org"/>
        <P>
        <h3>username </h3>
        <input name = "un"/>
        <h3>password </h3>
	      <input name = "pw"/>
        <h3>email </h3>
	      <input name = "email"/>
        <h3>phone number </h3>
	      <input name = "pn"/>
        <h3>address </h3>
	<input name = "adrs"/>
	<P>
	<input type="submit" name="Signup" value="Submit"/>
      </form>
      <p>
      </p>
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

