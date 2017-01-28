
<?php
session_start();
require_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {

	header("Location: index.php");
	exit;
}

$query = $MySQLi_CON->query("SELECT * FROM users WHERE user_id=" . $_SESSION['userSession']);
$userRow = $query->fetch_array();
$MySQLi_CON->close();
?>
<!DOCTYPE html>
<html>
<head>
<?php

include "navbar.php";
?>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="css/font-awesome.min.css" rel="stylesheet" >
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <script src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
<title>About Us
</title>

</head>
<body>
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
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['user_name']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
          </ul>
          <form role="search" class="navbar-form navbar-left">
              <div class="form-group">
                  <input type="text" placeholder="Search" class="form-control">
              </div>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<style type="text/css">
	.glyphicon.glyphicon-home{
		font-size: 75px; text-align:center;
	}
	.glyphicon.glyphicon-pencil{
		font-size: 75px; font-align:center;
	}
	.glyphicon.glyphicon-envelope{
		font-size: 75px;
	}
</style>
<hr />
<hr />
<div class="container">
<div class="row">
<h1 style="text-align:center;">ABOUT US</h1>
</div>
<hr />
<hr />
<br>
<br>

<br>
		<div class="row">
			<div class="col-sm-4 text-center">
				<!--Who we are-->

				<span class="glyphicon glyphicon-home" ></span> <br>
				<h2>Who we are</h2>
				<i>We are a group of computer scientists who believes in making the world an open place, and giving opportunities to those who have various skills and need a platform to showcase it.</i>



				</div>
			<div class="col-sm-4 text-center">
			<!--What we -->
			<span class="glyphicon glyphicon-pencil"></span> <br>
			<h2>What we do</h2>
			<ul>
			<li>
				<i>We Program</i>
			</li>
			<li>
			<i>We Code</i>
			</li>
			<li>
			<i>We Network</i>
			</li>
			<li>
			<i>We let the world see you</i>
			</li>
			<li>
			<i>We are alancers</i>
			</li>
			</ul>
				</div>
			<div class="col-sm-4 text-center">
			<!--Our Contact-->

			<span class="glyphicon glyphicon-envelope"></span><br>
			<h2>Our Contact</h2>
		<i>
Do you need our services
contact us via the following platforms<br>
<a href="https://twitter.com/i_jv_learner"><i class="fa fa-twitter"></i></a> <br>
<a href="https://facebook.com/victor.alagwu"><i class="fa fa-facebook"></i></a> <br>
<a href="https://github.com/victoralagwu"><i class="fa fa-github"></i> </a><br>
<a href="https://linkedIn.com/victoralagwu"><i class="fa fa-linkedin" ></i> </a><br>
<i class="fa fa-mobile"></i> Contact Numbers:- 08170449567
</i>


</div>


				</div>
				</div>

				<?php
include "footer.php";
?>
</body>
</html>