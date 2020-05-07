<?php
/*
 * Title: surveyPage.php
 * Purpose:This page is just the setup for the survey
 * Inputs (or Imports): None
 * Outputs (or Exports): None
 * Subroutines Used (or Defined):
 * Author: Paul-Hugo Dlugy-Hegwer
 * Date: Unknown
 * Modifications (when & what): Modifications made on 05/06/2020.
 * Justification: After losing access to survey monkey we had to create our own. 
 * */
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
      <h1>Take the survey! Find volunteering opportunities near you!</h1>
      <script>(function(t,e,s,n){var o,a,c;t.SMCX=t.SMCX||[],e.getElementById(n)||(o=e.getElementsByTagName(s),a=o[o.length-1],c=e.createElement(s),c.type="text/javascript",c.async=!0,c.id=n,c.src=["https:"===location.protocol?"https://":"http://","widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgd6vQJo7_2Fj0XayZcrwEU4pGIYK3csG_2FH2Gt1hxvk1SsRZ.js"].join(""),a.parentNode.insertBefore(c,a))})(window,document,"script","smcx-sdk");</script><a style="font: 12px Helvetica, sans-serif; color: #999; text-decoration: none;" href=https://www.surveymonkey.com> Create your own user feedback survey </a>
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

