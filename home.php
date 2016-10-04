

<?php
/*
Project: Job Site
Author: Victor Alagwu(victoralagwu@gmail.com)
Date:

 */
session_start();
require_once 'include/dbconnect.php';

if (!isset($_SESSION['userSession'])) {

	header("Location: index.php");
	exit;
}

$query = $MySQLi_CON->query("SELECT * FROM users WHERE user_id=" . $_SESSION['userSession']);
$userRow = $query->fetch_array();
$MySQLi_CON->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['user_name'] ?></title>

<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <script src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
    <hr />


<!-- Start Slider BODY section --> <!-- add to the <body> of your page-->
    <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
    <li><img src="data1/images/eq54w9myfn6xfd28p92g.jpg" alt="IT & NETWORKING" title="IT & NETWORKING" id="wows1_0"/></li>
    <li><img src="data1/images/wersm_digital_skills657x360.png" alt="PROGRAMMING" title="PROGRAMMING" id="wows1_1"/></li>
    <li><img src="data1/images/1727ff8.jpg" alt="FREELANCER" title="FREELANCER" id="wows1_2"/></li>
    <li><img src="data1/images/wordpress.jpg" alt="WEB DESIGNER" title="WEB DESIGNER" id="wows1_3"/></li>
    <li><img src="data1/images/writersblock1.jpg" alt="WRITER" title="WRITER" id="wows1_4"/></li>
    <li><a href="http://wowslider.net"><img src="data1/images/completewebsitedesign.jpg" alt="http://wowslider.net/" title="GRAPHIC DESIGN" id="wows1_5"/></a></li>
    <li><img src="data1/images/webdesignsmallbusinessmichigan.jpg" alt="VIRTUAL ASSITANT" title="VIRTUAL ASSITANT" id="wows1_6"/></li>
  </ul></div>
  <div class="ws_bullets"><div>
    <a href="#" title="IT & NETWORKING"><span><img src="data1/tooltips/eq54w9myfn6xfd28p92g.jpg" alt="IT & NETWORKING"/>1</span></a>
    <a href="#" title="PROGRAMMING"><span><img src="data1/tooltips/wersm_digital_skills657x360.png" alt="PROGRAMMING"/>2</span></a>
    <a href="#" title="FREELANCER"><span><img src="data1/tooltips/1727ff8.jpg" alt="FREELANCER"/>3</span></a>
    <a href="#" title="WEB DESIGNER"><span><img src="data1/tooltips/wordpress.jpg" alt="WEB DESIGNER"/>4</span></a>
    <a href="#" title="WRITER"><span><img src="data1/tooltips/writersblock1.jpg" alt="WRITER"/>5</span></a>
    <a href="#" title="GRAPHIC DESIGN"><span><img src="data1/tooltips/completewebsitedesign.jpg" alt="GRAPHIC DESIGN"/>6</span></a>
    <a href="#" title="VIRTUAL ASSITANT"><span><img src="data1/tooltips/webdesignsmallbusinessmichigan.jpg" alt="VIRTUAL ASSITANT"/>7</span></a>
  </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">http://wowslider.com/</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End SLIDER BODY section -->



      <!--Main Page Containing All Skills-->
      <div class="container" style="background-color:blank">
        <div class="row">
          <div class="col-sm-4">
       <p style="text-align: center; font-family: Monotype Corsiva; font-size: 21px;" >
        <b>Web Development</b></p>
        <ul  class="list-group-item-heading" style="font-family: Bernard MT Condensed;">
      <?php
$db['DB_HOST'] = 'localhost';
$db['DB_USER'] = 'root';
$db['DB_PASSWORD'] = '';
$db['DB_NAME'] = 'users_details';
foreach ($db as $key => $value) {
	define($key, $value);
}
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "SELECT * FROM users";
$run_query = mysqli_query($con, $query);
$num_query = mysqli_num_rows($run_query);
while ($row = mysqli_fetch_array($run_query)) {
	$user_name = $row['user_name'];
	$user_skill = $row['user_skill'];
	$user_email = $row['user_email'];

	echo '<li class="list-group-item list-group-item">' . $user_name . '</li>';
	echo '<li class="list-group-item list-group-item">' . $user_email . '</li>';
	echo '<li class="list-group-item list-group-item">' . $user_skill . '</li>';
	echo '<hr>';
}
?>


        </ul>
        </div>
          <div class="col-sm-4">
            <p style="text-align: center; font-family: Monotype Corsiva; font-size: 21px;" >
              <b>Design & Creative</b></p>
              <ul class="list-group-item-heading" style="font-family: Bernard MT Condensed;">
              <?php

$query = "SELECT * FROM users";
$run_query = mysqli_query($con, $query);
$num_query = mysqli_num_rows($run_query);
while ($row = mysqli_fetch_array($run_query)) {
	$user_name = $row['user_name'];
	$user_skill = $row['user_skill'];
	$user_email = $row['user_email'];

	echo '<li class="list-group-item list-group-item">' . $user_name . '</li>';
	echo '<li class="list-group-item list-group-item">' . $user_email . '</li>';
	echo '<li class="list-group-item list-group-item">' . $user_skill . '</li>';
	echo '<hr>';
}

?>
              </ul>
            </div>
            <div class="col-sm-4">
             <p style="text-align: center; font-family: Monotype Corsiva; font-size: 21px;" >
             <b>IT & Networking</b> </p>
             <ul  class="list-group-item-heading" style="font-family: Bernard MT Condensed;">
               <?php

$query = "SELECT * FROM users";
$run_query = mysqli_query($con, $query);
$num_query = mysqli_num_rows($run_query);
if ($userRow['user_name'] == "vICTORaLagwu") {
	while ($row = mysqli_fetch_array($run_query)) {
		$user_name = $row['user_name'];
		$user_skill = $row['user_skill'];
		$user_email = $row['user_email'];

		echo '<li class="list-group-item list-group-item">' . $user_name . '</li>';
		echo '<li class="list-group-item list-group-item">' . $user_email . '</li>';
		echo '<li class="list-group-item list-group-item">' . $user_skill . '</li>';
		echo '<hr>';

	}
} else {
	echo "No IT Workers";
}
?>
              </ul>
          </div>
          </div>
          </div>


    <!--Second Container-->
          <div class="container" style="background-color:blank">
            <div class="row">
              <div class="col-sm-4">
                <p style="text-align: center; font-family: Monotype Corsiva; font-size: 21px;" >
                  <b>Writing</b> </p>
                  <ul  class="list-group-item-heading" style="font-family: Bernard MT Condensed;">
                    <?php

$query = "SELECT * FROM users";
$run_query = mysqli_query($con, $query);
$num_query = mysqli_num_rows($run_query);
while ($row = mysqli_fetch_array($run_query)) {
	$user_name = $row['user_name'];
	$user_skill = $row['user_skill'];
	$user_email = $row['user_email'];

	echo '<li class="list-group-item list-group-item">' . $user_name . '</li>';
	echo '<li class="list-group-item list-group-item">' . $user_email . '</li>';
	echo '<li class="list-group-item list-group-item">' . $user_skill . '</li>';
	echo '<hr>';
}

?>
                  </ul>
                </div>

        <div class="col-sm-4">
         <p style="text-align: center; font-family: Monotype Corsiva; font-size: 21px;" >
             <b>Virtual Assistants</b> </p>
             <ul  class="list-group" style="font-family: Bernard MT Condensed;">
               <?php

$query = "SELECT * FROM users";
$run_query = mysqli_query($con, $query);
$num_query = mysqli_num_rows($run_query);
while ($row = mysqli_fetch_array($run_query)) {
	$user_name = $row['user_name'];
	$user_skill = $row['user_skill'];
	$user_email = $row['user_email'];

	echo '<li class="list-group-item list-group-item">' . $user_name . '</li>';
	echo '<li class="list-group-item list-group-item">' . $user_email . '</li>';
	echo '<li class="list-group-item list-group-item">' . $user_skill . '</li>';
	echo '<hr>';
}

?>
              </ul>
          </div>

          <div class="col-sm-4">
         <p style="text-align: center; font-family: Monotype Corsiva; font-size: 21px;" >
             <b>Engineering and Architecture</b> </p>
             <ul  class="list-group-item-heading" style="font-family: Bernard MT Condensed;">
               <?php

$query = "SELECT * FROM users";
$run_query = mysqli_query($con, $query);
$num_query = mysqli_num_rows($run_query);
while ($row = mysqli_fetch_array($run_query)) {
	$user_name = $row['user_name'];
	$user_skill = $row['user_skill'];
	$user_email = $row['user_email'];

	echo '<li class="list-group-item list-group-item">' . $user_name . '</li>';
	echo '<li class="list-group-item list-group-item">' . $user_email . '</li>';
	echo '<li class="list-group-item list-group-item">' . $user_skill . '</li>';
	echo '<hr>';
}

?>

              </ul>
          </div>
  </div>
   </div>

<!--Third Container with users ranking-->
<div class="conatiner" style="background-color:#C0C0C0;" >
<div class="row">
<div class="col-sm-4">
<p style="text-align: center;"><b>Ranking of Users</b></p>
<div class="progress">
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
40% Ranking (Amateur)
</div>
</div>
<div class="progress">
<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
50% Ranking (Beginner)
</div>
</div>
<div class="progress">
<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
60% Ranking (Trusted)
</div>
</div>
<div class="progress">
<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%">
    90% Ranking (Expert)
</div>
</div>
</div>


<div class="col-sm-4">
<div class="form-group">

<br><p></p><span class="glyphicon glyphicon-envelope"></span>
 <input type="search" placeholder="Subscribe" class="form-control" name="Subscribe" style="float: center;">

      </div>
</div>
<div class="col-sm-4">
<ul >
<li ><a href="about.php" style=" text-decoration: none; font-color:#FFFFFF;">About Us</a></li>
<li ><a href="contact.php" style=" text-decoration: none; font-color:#FFFFFF;">Write a Complaint</a></li>
<li ><a href="#" style=" text-decoration: none; font-color:#FFFFFF;">Our Blog</a></li>
<li ><a href="#" style=" text-decoration: none; font-color:#FFFFFF;">Terms of Service</a></li>
<li ><a href="#" style=" text-decoration: none; font-color:#FFFFFF;">Subscribe to Our Email List</a></li>
</ul>
</div>
</div>
</div>
<div class="row" >
<div class="col-sm-12">
<p style=" text-align: center; font-color:#FFFFFF;">&copy; <i>Powered by VictorAlagwu</i></p>
</div>
</div>


</body>
</html>