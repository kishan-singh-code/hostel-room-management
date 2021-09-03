<?php

include('config/db_connect.php');

session_start();

if (isset($_SESSION['email'])) {

	$email = $_SESSION['email'];
	$sql = "SELECT first_name,middle_name,last_name FROM user_signup WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	$final = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$first_name = $final[0]['first_name'];
	$middle_name = $final[0]['middle_name'];
	$last_name = $final[0]['last_name'];
} else {
	header('Location: index.php');
}

// print_r($final);

if (isset($_POST['submit'])) {

	unset($_SESSION['email']);
	header('Location: index.php');
}

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
	<link rel="stylesheet" href="static/css/bootstrap.min.css"><!--   <link rel="stylesheet" href="style3.css"> -->

	<style type="text/css">
		.login-box {
			width: 900px;
			height: 400px;
			background: rgba(0, 0, 0, 0.5);
			color: #fff;
			border-radius: 5px;


			margin-left: 18%;
			/*margin-right:10%;*/

		}

		.header {
			background-color: rgba(0, 0, 0, 0.8);
			width: 1368px;
			height: 65px;
			text-decoration: white;
			overflow: hidden;
			position: fixed;
			top: 0;
			margin-left: -18px;


		}

		.kishan {
			margin-right: -200px;
			margin-left: 90px;
			padding-top: 48px;
			/*	padding: 16px;
			margin-top: 48px;
			margin-left:350px;*/

			/*	overflow: hidden;*/

		}

		.vishal {
			margin-top: 65px;
			padding-top: 30px;
			/*padding-bottom: 0px;*/

		}

		.page-title {
			text-align: center;
			font-family: sans-serif;
			letter-spacing: 4px;

		}

		body {
			margin: 0px;
			padding: 0px;
			font-family: sans-serif;
			/*letter-spacing: 2.6px;*/

			/* background-image: url(1.jpg);*/

		}

		.logbtn {
			display: block;
			width: 180px;
			height: 44px;
			border: none;
			background: linear-gradient(120deg, #3498db, #8e44ad, #3498db);
			background-size: 200%;
			color: #fff;
			outline: none;
			cursor: pointer;
			transition: .5s;
			border-radius: 5px;
			text-align: center;


		}

		.logbtn:hover {
			background-position: right;
		}

		#button {
			float: left;
			background-color: white;
			border: none;
			color: white;
			text-align: center;
			font-size: 17px;
			letter-spacing: 2.5px;
			display: inline-block;
			padding-top: 8px;
			margin-left: 5%;
			margin-top: -3%;


		}

		.text_style {


			color: white;
			font-family: sans-serif;

			padding: 14px 0px 0px 20px;
			width: 500px;


			letter-spacing: 2.6px;

		}

		#signup {

			text-align: center;
			width: auto;
			height: auto;
			margin-top: 7%;
			margin-left: 92%;
			font-family: sans-serif;


		}



		.all {
			width: 1365px;
			height: 590px;
			background-repeat: no-repeat;
			background-image: url(1111.jpg);
			background-size: 1365px 590px;
		}



		.margin_card {
			margin-top: 4%;
			margin-right: 20%;
			margin-left: -5%;
		}

		.logbtn1 {
			display: block;
			width: 140px;
			height: 34px;
			border: none;
			background: linear-gradient(120deg, #3498db, #8e44ad, #3498db);
			background-size: 200%;
			color: #fff;
			outline: none;
			cursor: pointer;
			transition: .5s;
			border-radius: 5px;



		}

		.logbtn1:hover {
			background-position: right;
		}

		#button1 {
			float: left;
			background-color: white;
			/* Green */
			border: none;
			color: white;
			text-align: center;
			display: inline-block;
			/*margin: 14px 8px 0px 1180px;*/
			margin: -46px 0px 0px 1180px;

		}
	</style>

	<!-- <SCRIPT type="text/javascript">
	window.history.forward();
	function noBack() { window.history.forward(); }
</SCRIPT> -->
</head>

<BODY onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">

	<div class="all">
		<nav class="navbar fixed-top">
			<div class="header">
				<h2 class="text_style">Hostel Managemant System</h2>
				<!--  <a href="index.php"> -->
				<form action="user_dash.php" method="POST">
					<!-- 	<button id="button1" name="submit" value="submit" class="logbtn1">Log Out</button>  -->
					<button type="submit" id="button1" name="submit" value="submit" class="logbtn1">Log Out</button>
				</form>
				<!--  </a> -->

			</div>
		</nav>

		<div class="vishal">
			<h1 style="color: white" class="page-title">WELCOME </h1>
			<h5 class="page-title"><?php echo htmlspecialchars($first_name) ?>&nbsp;&nbsp;<?php echo htmlspecialchars($middle_name) ?>&nbsp;&nbsp;<?php echo htmlspecialchars($last_name) ?></h5>
		</div>

		<div class="login-box">
			<div class="kishan">

				<form class="margin_card">

					<div class="form-row">
						<div class="form-group col-md-4">
							<div class="card" style="width: 15rem; height: 13rem;">
								<img src="user.jpg" class="card-img-top" alt="...">




								<div class="card-body">
									<!-- 			  	               <div class="card-img-overlay">
			    <p style="color: black" class="card-text">This</p>
			  </div> -->


									<a href="profile.php" id="button" class="btn logbtn">My Profile</a>
								</div>
							</div>
						</div>
						<div class="form-group col-md-4">
							<div class="card" style="width: 15rem; height: 13rem;">
								<img src="1.gif" class="card-img-top" alt="...">
								<div class="card-body">

									<a href="hostel_info.php" id="button" class="btn logbtn">My Room</a>
								</div>
							</div>
						</div>



						<div class="form-group col-md-4">
							<div class="card" style="width: 15rem; height: 13rem;">
								<img src="11111.jpg" class="card-img-top" alt="...">
								<div class="card-body">

									<!-- <a href="book_hostel.php"><button id="button" class="logbtn">Book Room</button></a>  -->
									<!--  <a href="book_hostel.php"><button id="button" class="logbtn">Admin Login</button></a>  -->
									<a href="book_hostel.php" id="button" class="btn logbtn">Book Room</a>
								</div>
							</div>
						</div>
					</div>



				</form>

				<!-- 		<div class="col-sm-4 col-sm-offset-4">
					<button id="signup" type="submit" name="submit" value="submit" class="btn btn-light">Submit</button>
					</div> -->


			</div>
		</div>
	</div>




</body>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="static/js/bootstrap_jquery.js"></script>
<script src="static/js/bootstrap.min.js"></script>
<script src="static/js/popper.js"></script>
</body>

</html>