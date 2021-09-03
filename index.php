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
		$sql = "SELECT email,password FROM user_signup WHERE email='$email' AND password='$password'";

		$result = mysqli_query($conn, $sql);
		$final = mysqli_fetch_all($result, MYSQLI_ASSOC);
		// print_r($final);
		// echo $result;
		//save to db and check









		if (isset($final[0])) {
			// success
			if (($email == $final[0]['email']) && ($password == $final[0]['password'])) {
				session_start();
				$_SESSION['email'] = $email;
				header('Location: user_dash.php');
				exit();
			}
		} else {


			echo "<script type='text/javascript'>alert('Invalid Email or Password');window.location = 'index.php';</script>";

			exit();
		}
	}
} // end POST check




// write query for all pizzas

// $sql = "SELECT email FROM user_signup WHERE email='$email'";



// // get the result set (set of rows)

// $result = mysqli_query($conn, $sql);








mysqli_close($conn);



//





?>






















<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" href="static/img/icons/icon.png" type="image/gif" sizes="16x16">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--     <script type="text/javascript">
window.open ("index.php",
"mywindow","status=1,toolbar=0");
</script> -->
	<!-- <SCRIPT type="text/javascript">
	window.history.forward();
	function noBack() { window.history.forward(); }
</SCRIPT>
  </head>
  
<BODY onload="noBack();" 
	onpageshow="if (event.persisted) noBack();" onunload=""> -->
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
		<a href="admin.php"><button id="button" class="logbtn">Admin Login</button></a>
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
					<img src="avatar.png" class="avatar">
					<h1>Login Here</h1>
					<form id="user" action="index.php" method="POST" onsubmit="return validation()">
						<p>User email</p>
						<input type="text" id="email" name="email" placeholder="Enter User email" value="<?php echo htmlspecialchars($email) ?>" />
						<div class="pop" id="email_x"> </div>
						<p>Password</p>
						<input type="password" id="password" name="password" placeholder="Enter Password" value="<?php echo htmlspecialchars($password) ?>" />
						<div class="pop" id="password_x"></div>
						<input type="submit" class="logbtn" name="submit" value="Login">

						<a class="logbtn" id="signup" href="rigistration.php" role="button">Sign Up</a>
						<!-- <button class="logbtn" type="signup" href="rigistration.html">Button</button> -->

						<!-- <button id="signup" href="rigistration.html" class="logbtn">Sign Up</button>    -->
					</form>
				</div>









			</div>

			<div class="carousel-inner">
				<div class="carousel-item active" data-interval="3000">
					<img src="1.jpg" class="d-block w-100" alt="..." width=1366px height=590px;>
				</div>
				<div class="carousel-item" data-interval="3000">
					<img src="2.jpg" class="d-block w-100" alt="..." width=1366px height=590px;>
				</div>
				<div class="carousel-item" data-interval="3000">
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

<!--   <script>

    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });

</script> -->

</html>