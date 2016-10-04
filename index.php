


<?php
/*
Project: Job Site
Author: Victor Alagwu(victoralagwu@gmail.com)
Date:

 */
session_start();
require_once 'include/dbconnect.php';
include "include/navbar.php";

if (isset($_SESSION['userSession']) && !strstr($_SESSION['PHP_SELF'], "home.php")) {
	header("Location: home.php");
	exit;
}

if (isset($_POST['btn-login'])) {
	$email = $MySQLi_CON->real_escape_string(trim($_POST['user_email']));
	$upass = $MySQLi_CON->real_escape_string(trim($_POST['password']));

	$query = $MySQLi_CON->query("SELECT user_id, user_email, user_pass FROM users WHERE user_email='$email'");
	$row = $query->fetch_array();

	if (password_verify($upass, $row['user_pass'])) {
		$_SESSION['userSession'] = $row['user_id'];
		header("Location: home.php");
		exit;
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; email or password does not exists !
				</div>";
	}

	$MySQLi_CON->close();

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <script src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="signin-form">

	<div class="container">


       <form class="form-signin" method="post" id="login-form">

        <h2 class="form-signin-heading">Sign In.</h2><hr />

        <?php
if (isset($msg)) {
	echo $msg;
}
?>

        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="user_email" required />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>

     	<hr />

        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button>

            <a href="register.php" class="btn btn-default" style="float:right;">Sign Up</a>

        </div>



      </form>

    </div>

</div>
<?php
include "include/footer.php";
?>
</body>
</html>