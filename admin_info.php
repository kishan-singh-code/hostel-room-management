<?php

include('config/db_connect.php');

session_start();

if (isset($_SESSION['email1'])) {

	if (isset($_POST['submit'])) {


		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$input = mysqli_real_escape_string($conn, $_POST['input']);

		if ($gender == 0) {
			$sql = "SELECT email FROM book_hostel WHERE email='$input'";

			$result = mysqli_query($conn, $sql);
			$final = mysqli_fetch_all($result, MYSQLI_ASSOC);

			if (isset($final[0])) {
				// success
				if ($input == $final[0]['email']) {
					session_start();
					$_SESSION['email'] = $input;
					header('Location: update1.php');
					exit();
				}
			} else {
				echo "<script type='text/javascript'>alert('Invalid Email or Password');window.location = 'admin_info.php';</script>";
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
				header('Location: update2.php');
				exit();
			} else {
				echo "<script type='text/javascript'>alert('Invalid Email or Password');window.location = 'admin_info.php';</script>";
				exit();
			}
		}
	}
} else {
	header('Location: index.php');
}


if (isset($_POST['submit1'])) {

	unset($_SESSION['email1']);
	header('Location: index.php');
}

mysqli_close($conn);
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
	<link rel="stylesheet" href="style5.css">

	<style type="text/css">
		.mmm {
			margin-right: 0%;
			margin-left: 20%;
		}

		.nnn {
			margin-right: 20%;
			margin-left: 0%;
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
			margin: -46px 0px 0px 1030px;

		}

		#button2 {
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
</SCRIPT>
  </head>
  
<BODY onload="noBack();" 
	onpageshow="if (event.persisted) noBack();" onunload=""> -->

</head>

<body>
	<div class="all">
		<nav class="navbar fixed-top">
			<div class="header">
				<h2 class="text_style">Hostel Managemant System</h2>
				<!-- <a href="admin_more.php"><button  class="btn btn-primary">Student profile</button> </a> -->
				<a href="admin_more.php"><button id="button1" class="logbtn">Student profile</button> </a>

				<form action="admin_info.php" method="POST">
					<!-- 	<button id="button1" name="submit" value="submit" class="logbtn1">Log Out</button>  -->
					<button type="submit" id="button2" name="submit1" value="submit1" class="logbtn">Log Out</button>
				</form>
				<!-- <a href="index.php"><button id="button2" class="logbtn">Log Out</button> </a> -->
			</div>

		</nav>


		<div class="vishal">
			<h2 class="page-title">All Student Hostel Info. </h2>
		</div>


		<form action="admin_info.php" method="POST">

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
								<th scope="col">Email</th>
								<th scope="col">Delete</th>
								<th scope="col">Edit</th>
								<th scope="col">Seater</th>
								<th scope="col">Fees</th>
								<th scope="col">Stay</th>
								<th scope="col">Duration</th>
								<th scope="col">Total amount</th>
								<th scope="col">Course</th>
								<th scope="col">Registration no.</th>
								<th scope="col">Contact</th>
								<th scope="col">Gender name</th>
								<th scope="col">Gender relation</th>
								<th scope="col">Gender contact</th>
								<th scope="col">Correspondense Address</th>
								<th scope="col">C. city</th>
								<th scope="col">C. state</th>
								<th scope="col">C. pin</th>
								<th scope="col">Permanent Address</th>
								<th scope="col">P. city</th>
								<th scope="col">P. state</th>
								<th scope="col">P. pin</th>



							</tr>
							<?php

							include('config/db_connect.php');
							$q = "select * from book_hostel ";

							$query = mysqli_query($conn, $q);


							while ($res = mysqli_fetch_array($query)) {
							?>
								<tr class="text-center">
									<td> <button class="btn-danger btn"> <a href="delete.php?email=<?php echo $res['email']; ?>" class="text-white"> Delete </a> </button> </td>
									<td> <button class="btn-primary btn"> <a href="update.php?email=<?php echo $res['email']; ?>" class="text-white"> Update </a></button> </td>

									<td> <?php echo $res['email'];  ?> </td>
									<td> <?php echo $res['seater'];  ?> </td>
									<td> <?php echo $res['fees'];  ?> </td>
									<td> <?php echo $res['stay'];  ?> </td>
									<td> <?php echo $res['duration'];  ?> </td>
									<td> <?php echo $res['total_amount'];  ?> </td>
									<td> <?php echo $res['course'];  ?> </td>
									<td> <?php echo $res['reg_no'];  ?> </td>
									<td> <?php echo $res['e_contact'];  ?> </td>
									<td> <?php echo $res['gar_name'];  ?> </td>
									<td> <?php echo $res['gar_relation'];  ?> </td>
									<td> <?php echo $res['gar_contact'];  ?> </td>
									<td> <?php echo $res['c_add'];  ?> </td>
									<td> <?php echo $res['c_city'];  ?> </td>
									<td> <?php echo $res['c_state'];  ?> </td>
									<td> <?php echo $res['c_pin'];  ?> </td>
									<td> <?php echo $res['p_add'];  ?> </td>
									<td> <?php echo $res['p_city'];  ?> </td>
									<td> <?php echo $res['p_state'];  ?> </td>
									<td> <?php echo $res['p_pin'];  ?> </td>




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