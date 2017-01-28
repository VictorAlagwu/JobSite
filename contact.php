
<?php
session_start();
require_once 'dbconnect.php';

if(!isset($_SESSION['userSession']))
{

  header("Location: index.php");
  exit;
}

$query = $MySQLi_CON->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$MySQLi_CON->close();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
  	<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css"  />
<title> Contact Page </title>
<?php
	

	if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["comment"]))
	{
		 $name=$_POST["name"];
		 $email=$_POST["email"];
		 $comment=$_POST["comment"];
		 		if (!empty($name) && !empty($email) && !empty($comment)) {
		 				# code...
		 	
		 	$to ="victoralagwu@gmail.com";
		 	$subject="Contact Form Submitted";
		 	$body =$comment;
		 	$headers="From: ".$email;
		 	if (@mail($to,$subject, $body,$headers)){
		 		echo "Thanks for contacting us. We will be in touch soon.";
		 	}
		 	else{
		 		echo "Ohh,Sorry,an error occured with the network.Please try again later.";
		 	}
		 }else{
		 	echo "Please enter all the requested input";
		 }
	}
	
?>
</head>
<title> Contact Page </title>

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
         
          <form role="search" class="navbar-form navbar-left">
              <div class="form-group">
                  <input type="text" placeholder="Search" class="form-control">
              </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['user_name']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<hr />
<hr />
<div class="contact">
<div class =container>
<div class =row>
<div class =col-sm-4>

<form class="form-group" role="form" action="contact.php" method="POST">
 <label class="inputdefault" for="name">Name:</label>
<input  type="text" name="name" placeholder="Enter your Name" class="form-control" id="name" ></input><br>
 <label class="inputdefault" for="email">Email:</label>
<input type ="email" class ="form-control" name="email" placeholder="Enter your Email"></input><br>
<label for="comment">Comment:</label>
<textarea class="form-control" rows="5" id="comment" name="comment"></textarea> <br>
<input type="submit" class="btn btn-default" value="Submit"></input>
</form>
</div>
</div>
</div>
</div>

<?php

include "footer.php"
?>

</body>
</html>