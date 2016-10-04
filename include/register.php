<?php
/*
Project: Job Site
Author: Victor Alagwu(victoralagwu@gmail.com)
Date:

 */
session_start();
if (isset($_SESSION['userSession']) != "") {
	header("Location: home.php");
}
include_once 'dbconnect.php';
include "navbar.php";

if (isset($_POST['btn-signup'])) {
	$uname = $MySQLi_CON->real_escape_string(trim($_POST['user_name']));
	$skill = $MySQLi_CON->real_escape_string(trim($_POST['user_skill']));
	$email = $MySQLi_CON->real_escape_string(trim($_POST['user_email']));
	$upass = $MySQLi_CON->real_escape_string(trim($_POST['password']));

	$new_password = password_hash($upass, PASSWORD_DEFAULT);

	$check_email = $MySQLi_CON->query("SELECT user_email FROM users WHERE user_email='$email'");
	$count = $check_email->num_rows;

	if ($count == 0) {

		$query = "INSERT INTO users(user_name,user_skill,user_email,user_pass) VALUES('$uname','$skill','$email','$new_password')";

		if ($MySQLi_CON->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Thanks for registering !
					</div>";
		} else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Sorry,an error occured when registering !
					</div>";
		}
	} else {

		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Sorry this email have already been taken !
				</div>";

	}

	$MySQLi_CON->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Page</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<div class="signin-form">

	<div class="container">


       <form class="form-signin" method="post" id="register-form">

        <h2 class="form-signin-heading">Sign Up</h2><hr />

        <?php
if (isset($msg)) {
	echo $msg;
} else {
	?>
            <div class='alert alert-info'>
				<span class='glyphicon glyphicon-asterisk'></span> &nbsp; All Fields are important,Please complete all !
			</div>
            <?php
}
?>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" name="user_name" required  />
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter your Skill" name="user_skill" required  />
        </div>


        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="user_email" required  />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required  />
        </div>

     	<hr />

        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button>

            <a href="index.php" class="btn btn-default" style="float:right;">Log In Here</a>

        </div>

      </form>

    </div>

</div>
<?php
include "footer.php";
?>
</body>
</html>