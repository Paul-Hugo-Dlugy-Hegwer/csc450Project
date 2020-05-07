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
      <h1>Take the survey! Find volunteering opportunities near you!</h1>
      <form method="POST" action="login.php">
              <h3>First name</h3>
              <input name = "fName"/>
              <h3>Last name</h3>
              <input name = "lName"/>
              <h3>Physical Activity</h3>
               True <input type="Radio" name="phyAc" value="1"/>
	       False <input type="Radio" name="phyAc" value="0"/>
              <h3>Tech Skills Required</h3>
               True <input type="Radio" name="techSkls" value="1"/>
	       False  <input type="Radio" name="techSkls" value="0"/>
              <h3>Social Activity</h3>
               True <input type="Radio" name="socAc" value="1"/>
	       False <input type="Radio" name="socAc" value="0"/>
              <h3>zipCode</h3>
              <input name = "zipCode"/>
              <h3>City</h3>
              <input name = "city"/>
              <h3>State</h3>
              <input name = "state"/>
              <h3>Day</h3>
              <input name = "day"/>
              <h3>Earliest time you can start?</h3>
              <input name = "earlyTime"/>
              <h3>Latest you want to finish?</h3>
              <input name = "endTime"/>
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
