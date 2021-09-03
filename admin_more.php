 <?php

	include('config/db_connect.php');

	if (isset($_POST['submit'])) {


		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$input = mysqli_real_escape_string($conn, $_POST['input']);

		if ($gender == 0) {
			$sql = "SELECT email FROM user_signup WHERE email='$input'";

			$result = mysqli_query($conn, $sql);
			$final = mysqli_fetch_all($result, MYSQLI_ASSOC);

			if (isset($final[0])) {
				// success
				if ($input == $final[0]['email']) {
					session_start();
					$_SESSION['email'] = $input;
					header('Location: 2update1.php');
					exit();
				}
			} else {
				echo "<script type='text/javascript'>alert('Invalid Email or Password');window.location = 'admin_more.php';</script>";
				exit();
			}
		}


		if ($gender == 1) {
			$pieces = explode(" ", $input);
			$size = sizeof($pieces);
			if ($size == 1) {
				$first_name = $pieces[0];
				$middle_name = "";
				$last_name = "";
			}
			if ($size == 2) {
				$first_name = $pieces[0];
				$middle_name = "";
				$last_name = $pieces[1];
			}
			if ($size == 3) {
				$first_name = $pieces[0];
				$middle_name = $pieces[1];
				$last_name = $pieces[2];
			}

			$sql = "SELECT first_name,middle_name,last_name FROM user_signup WHERE first_name='$first_name' AND middle_name='$middle_name' AND last_name='$last_name'";

			$result = mysqli_query($conn, $sql);
			$final = mysqli_fetch_all($result, MYSQLI_ASSOC);

			if (isset($final[0])) {
				// success

				session_start();
				$_SESSION['name'] = $input;
				header('Location: 2update2.php');
				exit();
			} else {
				echo "<script type='text/javascript'>alert('Invalid Email or Password');window.location = 'admin_more.php';</script>";
				exit();
			}
		}
	}
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
 	<link rel="stylesheet" href="style2.css">

 	<style type="text/css">
 		.mmm {
 			margin-right: 0%;
 			margin-left: 20%;
 		}

 		.nnn {
 			margin-right: 20%;
 			margin-left: 0%;
 		}
 	</style>

 </head>


 <body>


 	<div class="all">
 		<nav class="navbar fixed-top">
 			<div class="header">
 				<h2 class="text_style">Hostel Managemant System</h2>
 				<a href="admin_info.php"><button id="button" class="logbtn">Hostel info</button> </a>
 			</div>

 		</nav>


 		<div class="vishal">
 			<h2 class="page-title">All Student profile </h2>
 		</div>


 		<form action="admin_more.php" method="POST">
 			<div class="input-group mb-3">
 				<div class="input-group-prepend mmm">
 					<select class="custom-select" name="gender" id="gender">
 						<option value="0" selected>Email</option>
 						<option value="1">Name</option>
 					</select>
 				</div>
 				<input type="text" name="input" id="input" class="form-control" />
 				<div class="input-group-append nnn">
 					<!--  <button class="btn btn-primary" type="button">Search</button> -->
 					<button type="submit" name="submit" value="submit" class="btn btn-primary">Search</button>
 				</div>
 			</div>
 		</form>


 		<div class="">
 			<div class="">

 				<div class="table-responsive">
 					<table class="table table-striped table-dark table-bordered">
 						<thead>
 							<tr class="text-center">
 								<th scope="col">Delete</th>
 								<th scope="col">Edit</th>
 								<th scope="col">First_name</th>
 								<th scope="col">Middle_name</th>
 								<th scope="col">Last_name</th>
 								<th scope="col">Gender</th>
 								<th scope="col">Contact</th>
 								<th scope="col">Email</th>
 								<th scope="col">Password</th>
 							</tr>
 							<?php

								include('config/db_connect.php');
								$q = "select * from user_signup ";

								$query = mysqli_query($conn, $q);


								while ($res = mysqli_fetch_array($query)) {
								?>
 								<tr class="text-center">
 									<td> <button class="btn-danger btn"> <a href="2delete.php?email=<?php echo $res['email']; ?>" class="text-white"> Delete </a> </button> </td>
 									<td> <button class="btn-primary btn"> <a href="2update.php?email=<?php echo $res['email']; ?>" class="text-white"> Update </a></button> </td>

 									<td> <?php echo $res['first_name'];  ?> </td>
 									<td> <?php echo $res['middle_name'];  ?> </td>
 									<td> <?php echo $res['last_name'];  ?> </td>
 									<td> <?php echo $res['gender'];  ?> </td>
 									<td> <?php echo $res['contact'];  ?> </td>
 									<td> <?php echo $res['email'];  ?> </td>
 									<td> <?php echo $res['password'];  ?> </td>
 								</tr>

 							<?php
								}
								?>
 					</table>










 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- <script scr="test.js"></script> -->



 	<!-- Optional JavaScript -->
 	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
 	<script src="static/js/bootstrap_jquery.js"></script>
 	<script src="static/js/bootstrap.min.js"></script>
 	<script src="static/js/popper.js"></script>
 </body>

 </html>