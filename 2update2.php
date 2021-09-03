				  <?php

					include('config/db_connect.php');
					session_start();
					$input = $_SESSION['name'];

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

					$sql = "SELECT email FROM user_signup WHERE first_name='$first_name' AND middle_name='$middle_name' AND last_name='$last_name'";
					$result = mysqli_query($conn, $sql);
					$final = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
				  				<!-- 		              <a href="admin.html"><button id="button" class="logbtn">Admin Login</button> </a> -->
				  			</div>

				  		</nav>


				  		<div class="vishal">
				  			<h2 class="page-title">All Student Info. </h2>
				  		</div>



				  		<div class="">
				  			<div class="">

				  				<div class="table-responsive">
				  					<table class="table table-striped table-dark table-bordered">
				  						<thead>
				  							<tr>
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
												for ($i = sizeof($final); $i > 0; $i--) {

													$email = $final[$i - 1]['email'];


													$q = "SELECT * FROM user_signup WHERE email='$email'";

													$query = mysqli_query($conn, $q);


													while ($res = mysqli_fetch_array($query)) { ?>
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

				  								<?php } ?>
				  							<?php } ?>



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