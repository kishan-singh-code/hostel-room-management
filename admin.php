<?php

include('config/db_connect.php');

$email = $password = '';
$errors = array('email' => '', 'password' => '',);

if (isset($_POST['submit'])) {

	if (array_filter($errors)) {
		//echo 'errors in form';
	} else {
		// escape sql chars

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		// create sql
		$sql = "SELECT email,password FROM admin WHERE email='$email' AND password='$password'";

		$result = mysqli_query($conn, $sql);
		$final = mysqli_fetch_all($result, MYSQLI_ASSOC);
		// print_r($final);
		// echo $result;
		//save to db and check









		if (isset($final[0])) {
			// success
			if (($email == $final[0]['email']) && ($password == $final[0]['password'])) {
				session_start();
				$_SESSION['email1'] = $email;
				header('Location: admin_info.php');
				exit();
			}
		} else {


			echo "<script type='text/javascript'>alert('Invalid Email or Password');window.location ='admin.php';</script>";

			exit();
		}
	}
} // end POST check





mysqli_close($conn);




?>












<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" href="static/img/icons/icon.png" type="image/gif" sizes="16x16">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>

	<script type="text/javascript">
		function validation() {
			var email = document.getElementById("email").value;
			var password = document.getElementById("password").value;

			if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value))) {
				document.getElementById("email_x").innerHTML = "** please fill valid email **";
				return false;
			}

			if (password == "") {
				document.getElementById("password_x").innerHTML = "** please fill password **";
				return false;
			}
			if ((password.length < 4) && (password.length > 19)) {
				document.getElementById("password_x").innerHTML = "** password is btw 3 and 20 **";
				return false;
			}
		}
	</script>



	<div class="header">
		<h2 class="text_style">Hostel Managemant System</h2>
	</div>

	<div class="main">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>

			<div class="carousel-indicators a">
				<div class="login-box">
					<img src="avatar1.png" class="avatar">
					<h1>Admin Here</h1>
					<form id="user" action="admin.php" method="POST" onsubmit="return validation()">
						<p>Admin email</p>
						<input type="text" id="email" name="email" placeholder="Enter Admin email" value="<?php echo htmlspecialchars($email) ?>" />
						<div class="pop" id="email_x"> </div>
						<p>Password</p>
						<input type="password" id="password" name="password" placeholder="Enter Password" value="<?php echo htmlspecialchars($password) ?>" />
						<div class="pop" id="password_x"></div>
						<input type="submit" class="logbtn" name="submit" value="Login">

						<!-- <a class="logbtn" id="signup" href="rigistration.php" role="button">Sign Up</a> -->
						<!-- <button class="logbtn" type="signup" href="rigistration.html">Button</button> -->

						<!-- <button id="signup" href="rigistration.html" class="logbtn">Sign Up</button>    -->
					</form>
				</div>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active" data-interval="4000">
					<img src="1.jpg" class="d-block w-100" alt="..." width=1366px height=590px;>
				</div>
				<div class="carousel-item" data-interval="4000">
					<img src="2.jpg" class="d-block w-100" alt="..." width=1366px height=590px;>
				</div>
				<div class="carousel-item" data-interval="4000">
					<img src="3.jpg" class="d-block w-100" alt="..." width=1366px height=590px;>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="static/js/bootstrap_jquery.js"></script>
	<script src="static/js/bootstrap.min.js"></script>
	<script src="static/js/popper.js"></script>
</body>

</html>