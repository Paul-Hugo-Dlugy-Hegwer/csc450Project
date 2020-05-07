<!DOCTYPE html>
<?php
/*
 * Title: login.php
 * Purpose: The page responsible for handling the login of users as either as organizations
 * -------- or volunteers.
 * Inputs (or Imports): Takes input from the user. The user enters a username and a password,
 * -------------------- and selects between loging in as a user or an organization. 
 * Outputs (or Exports): When login is succesful the user_ID and org_ID from the database are
 * --------------------- in the session.
 * Subroutines Used (or Defined):session_start, OpenCon(), mysqli 
 * -----------------------------SQL Queries
 * -----------------------------SELECT user_ID FROM user WHERE username = '$un_sub' AND password = '$pw_sub';
 * -----------------------------SELECT org_ID FROM organization WHERE username = '$un_sub' AND password = '$pw_sub';
 * Author: Paul-Hugo Dlugy-Hegwer
 * Date: Unknown
 * Modifications (when & what): Modifications made on 05/06/2020.
 * Justification: Moved user_ID and org_ID into session.
 * */

//Activation of session
	session_start();
	include 'connection.php';
	$conn = OpenCon();
	echo "Succesful Connection";
?>
<?php
	//Checks to see if user has opted to signup rather than login.
	if(isset($_POST['signup'])){
		echo "HERE I AM";
		header('Location: signUp.php');
	}
	//Check if user has hit submit button for login.
	if(isset($_POST['submit'])){
		//Basic validation to ensure neither username or passwors is empty.
		if($_POST['un'] != "" && $_POST['pw']!= "")
		{
			$count_un = strlen($_POST['un']);
			$count_pw = strlen($_POST['pw']);
			$un_sub = $_POST['un'];
			$pw_sub = $_POST['pw'];
			//Store information in session to be used on startupPage.php
			$_SESSION['check']=$_POST['submit'];
			$_SESSION['loginType']=$_POST['loginType'];
			if ($count_un > '3' && $count_pw > '3'){
				//Login as volunteer
				if($_POST['loginType'] == 'user'){
					if(isset($_POST["submit"])){
                                        	$sql = "SELECT user_ID FROM user WHERE username = '$un_sub' AND password = '$pw_sub';";
                                        	$results = mysqli_query($conn, $sql);
                                        	$result_check = mysqli_num_rows($results);
                                        	if($result_check > 0){
                                                	while ($row=mysqli_fetch_assoc($results)){
                                                        	$_SESSION['uId'] = $row['user_ID'];
                                                        	header('Location: startupPage.php');
                                                	}
                                        	}	

                                	}
				}
				//Login as a organization.
			       	elseif($_POST['loginType'] == 'org') {
					if(isset($_POST["submit"])){
                                                $sql = "SELECT org_ID FROM organization WHERE username = '$un_sub' AND password = '$pw_sub';";
                                                $results = mysqli_query($conn, $sql);
                                                $result_check = mysqli_num_rows($results);
                                                if($result_check > 0){
                                                        while ($row=mysqli_fetch_assoc($results)){
                                                                $_SESSION['orgId'] = $row['org_ID'];
                                                                header('Location: startupPage.php');
                                                        }
                                                }

                                        }
				}else{}	
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
      <h1>Welcome</h1>
      <hr>
      <?php
	//login in for below.
      ?>
      <form method="POST" action="login.php">
              <h2>username: </h2>
              <input name = "un"/>
              <h3>password: </h3>
	      <input name = "pw"/>
              <P>
	      <?PHP print "User"; ?>
              <input type="Radio" name="loginType" value="user"/>
              <?PHP print "Org"; ?>
	      <input type="Radio" name="loginType" value="org"/>
	      <P>
	      <input type="submit" name="submit" value="Submit"/>
	      <P>
              <input type="submit" name="signup" value="Sign up"/>
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
