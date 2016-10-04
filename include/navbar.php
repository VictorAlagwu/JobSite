<?php
/*
Project: Job Site
Author: Victor Alagwu(victoralagwu@gmail.com)
Date:

 */
?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <script src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <title> Welcome to AchieversLance Site </title>
  <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
  <style type="text/css">
  .list-group li:nth-child(1){
  border-top: 0 none;
  }
  </style>
   <!--Navigation Bar====================================--><!-- Brand and toggle get grouped for better mobile display -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">Achievers Lancer</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">HOME</a></li>
              <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">SKILLS <b class="caret"></b></a>
                  <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Web Development</a></li>
                      <li><a href="#">Design and Graphics</a></li>
                      <li><a href="#">IT & Networking</a></li>
                      <li><a href="#">Writing</a></li>
                      <li><a href="#">Virtual Assistant</a></li>
                      <li><a href="#">Engineering</a></li>
                  </ul>
              </li>
              <li><a href="contact.php">CONTACT US</a></li>
              <li><a href="about.php">ABOUT US</a></li>

          </ul>
          <form role="search" class="navbar-form navbar-left">
              <div class="form-group">
                  <input type="text" placeholder="Search" class="form-control">
              </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="register.php"><span class="glyphicon glyphicon-sign-up"></span> Sign-Up</a></li>
              <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
          </ul>
      </div>
  </nav>

  </body>
  </html>
