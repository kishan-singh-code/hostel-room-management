<?php



// $conn = mysqli_connect('localhost','root');

// mysqli_select_db($conn,'book_hostel');





include('config/db_connect.php');
$email = $_GET['email'];

$sql = "SELECT * FROM book_hostel WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$final = mysqli_fetch_all($result, MYSQLI_ASSOC);


$seater = $final[0]['seater'];
$fees = $final[0]['fees'];
$stay = $final[0]['stay'];
$duration = $final[0]['duration'];
$total_amount = $final[0]['total_amount'];
$course = $final[0]['course'];
$reg_no = $final[0]['reg_no'];
$e_contact = $final[0]['e_contact'];
$gar_name = $final[0]['gar_name'];
$gar_relation = $final[0]['gar_relation'];
$gar_contact = $final[0]['gar_contact'];
$c_add = $final[0]['c_add'];
$c_city = $final[0]['c_city'];
$c_state = $final[0]['c_state'];
$c_pin = $final[0]['c_pin'];
$p_add = $final[0]['p_add'];
$p_city = $final[0]['p_city'];
$p_state = $final[0]['p_state'];
$p_pin = $final[0]['p_pin'];
$foodstatus = $final[0]['foodstatus'];
// print_r($final);




if (isset($_POST['submit'])) {


	$seater = $_POST['seater'];
	$fees = $_POST['fees'];
	$stay = $_POST['stay'];
	$duration = $_POST['duration'];
	$total_amount = $_POST['total_amount'];
	$course = $_POST['course'];
	$reg_no = $_POST['reg_no'];
	$e_contact = $_POST['e_contact'];
	$gar_name = $_POST['gar_name'];
	$gar_relation = $_POST['gar_relation'];
	$gar_contact = $_POST['gar_contact'];
	$c_add = $_POST['c_add'];
	$c_city = $_POST['c_city'];
	$c_state = $_POST['c_state'];
	$c_pin = $_POST['c_pin'];
	$p_add = $_POST['p_add'];
	$p_city = $_POST['p_city'];
	$p_state = $_POST['p_state'];
	$p_pin = $_POST['p_pin'];
	$foodstatus = $_POST['foodstatus'];
	$email = $_POST['email'];

	// $q= "INSERT INTO book_hostel(seater,fees,stay,duration,total_amount,course,reg_no,e_contact,gar_name,gar_relation,gar_contact,c_add,c_city,c_state,c_pin,p_add,p_city,p_state,p_pin,email,foodstatus) VALUES('$seater','$fees','$stay','$duration','$total_amount','$course','$reg_no','$e_contact','$gar_name','$gar_relation','$gar_contact','$c_add','$c_city','$c_state','$c_pin','$p_add','$p_city','$p_state','$p_pin','$email','$foodstatus')";



	$q = "UPDATE book_hostel SET seater='$seater',fees= '$fees',stay='$stay',duration='$duration',total_amount='$total_amount',course='$course',reg_no='$reg_no',e_contact='$e_contact',gar_name='$gar_name',gar_relation='$gar_relation',gar_contact='$gar_contact',c_add='$c_add',c_city='$c_city',c_state='$c_state',c_pin='$c_pin',p_add='$p_add',p_city='$p_city',p_state='$p_state',p_pin='$p_pin',foodstatus='$foodstatus' WHERE email='$email'";

	$query = mysqli_query($conn, $q);
	// echo "<script type='text/javascript'>alert('Invalid Email or Password');</script>";
	header('location:admin_info.php');
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
	<link rel="stylesheet" href="style9.css">

</head>


<body>

	<script type="text/javascript">
		function validation() {
			// var email=document.getElementById("email").value;
			// var password= document.getElementById("password").value;
			// alert("eeee");
			var seater = document.getElementById("seater").value;
			if (seater == "") {
				document.getElementById("seater_x").innerHTML = "** please select one **";
				return false;
			}
			if (!(seater >= 1 && seater <= 3)) {
				document.getElementById("seater_x").innerHTML = "** please select one **";
				return false;
			} else {
				document.getElementById("seater_x").innerHTML = "";
			}


			var a = document.getElementById("reg_no").value;
			if (a == "") {
				document.getElementById("reg_no_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			if (isNaN(a)) {
				document.getElementById("reg_no_x").innerHTML = "** Only numbers allowed **";
				return false;
			}
			if ((a.length != 5)) {
				document.getElementById("reg_no_x").innerHTML = "** Enter valid numbers **";
				return false;
			} else {
				document.getElementById("reg_no_x").innerHTML = "";
			}


			a = document.getElementById("e_contact").value;
			if (a == "") {
				document.getElementById("e_contact_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			if (isNaN(a)) {
				document.getElementById("e_contact_x").innerHTML = "** Only numbers allowed **";
				return false;
			}
			if ((a.length != 10)) {
				document.getElementById("e_contact_x").innerHTML = "** Enter valid numbers **";
				return false;
			}
			if ((a.charAt(0) != 9) && (a.charAt(0) != 8) && (a.charAt(0) != 7)) {
				document.getElementById("e_contact_x").innerHTML = "** Starting from 9/8/7 **";
				return false;
			} else {
				document.getElementById("e_contact_x").innerHTML = "";
			}

			a = document.getElementById("gar_name").value;
			if (a == "") {
				document.getElementById("gar_name_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			var ck_name = /^[A-Za-z ]{3,20}$/;
			if (!ck_name.test(a)) {
				document.getElementById("gar_name_x").innerHTML = "** name must be valid **";
				return false;
			} else {
				document.getElementById("gar_name_x").innerHTML = "";
			}

			a = document.getElementById("gar_relation").value;
			if (a == "") {
				document.getElementById("gar_relation_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			ck_name = /^[A-Za-z ]{3,20}$/;
			if (!ck_name.test(a)) {
				document.getElementById("gar_relation_x").innerHTML = "** name must be valid **";
				return false;
			} else {
				document.getElementById("gar_relation_x").innerHTML = "";
			}

			a = document.getElementById("gar_contact").value;
			if (a == "") {
				document.getElementById("gar_contact_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			if (isNaN(a)) {
				document.getElementById("gar_contact_x").innerHTML = "** Only numbers allowed **";
				return false;
			}
			if ((a.length != 10)) {
				document.getElementById("gar_contact_x").innerHTML = "** Enter valid numbers **";
				return false;
			}
			if ((a.charAt(0) != 9) && (a.charAt(0) != 8) && (a.charAt(0) != 7)) {
				document.getElementById("gar_contact_x").innerHTML = "** Starting from 9/8/7 **";
				return false;
			} else {
				document.getElementById("gar_contact_x").innerHTML = "";
			}

			a = document.getElementById("c_add").value;
			if (a == "") {
				document.getElementById("c_add_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			ck_name = /^[a-zA-Z0-9\s\,\''\-]*$/;
			if (!ck_name.test(a)) {
				document.getElementById("c_add_x").innerHTML = "** name must be valid **";
				return false;
			} else {
				document.getElementById("c_add_x").innerHTML = "";
			}

			a = document.getElementById("c_city").value;
			if (a == "") {
				document.getElementById("c_city_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			ck_name = /^[A-Za-z ]{3,20}$/;
			if (!ck_name.test(a)) {
				document.getElementById("c_city_x").innerHTML = "** name must be valid **";
				return false;
			} else {
				document.getElementById("c_city_x").innerHTML = "";
			}

			a = document.getElementById("c_state").value;
			if (a == "") {
				document.getElementById("c_state_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			ck_name = /^[A-Za-z ]{3,20}$/;
			if (!ck_name.test(a)) {
				document.getElementById("c_state_x").innerHTML = "** name must be valid **";
				return false;
			} else {
				document.getElementById("c_state_x").innerHTML = "";
			}

			a = document.getElementById("c_pin").value;
			if (a == "") {
				document.getElementById("c_pin_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			if (isNaN(a)) {
				document.getElementById("c_pin_x").innerHTML = "** Only numbers allowed **";
				return false;
			}
			if ((a.length != 6)) {
				document.getElementById("c_pin_x").innerHTML = "** Enter valid numbers **";
				return false;
			} else {
				document.getElementById("c_pin_x").innerHTML = "";
			}

			a = document.getElementById("p_add").value;
			if (a == "") {
				document.getElementById("p_add_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			ck_name = /^[a-zA-Z0-9\s\,\''\-]*$/;
			if (!ck_name.test(a)) {
				document.getElementById("p_add_x").innerHTML = "** name must be valid **";
				return false;
			} else {
				document.getElementById("p_add_x").innerHTML = "";
			}

			a = document.getElementById("p_city").value;
			if (a == "") {
				document.getElementById("p_city_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			ck_name = /^[A-Za-z ]{3,20}$/;
			if (!ck_name.test(a)) {
				document.getElementById("p_city_x").innerHTML = "** name must be valid **";
				return false;
			} else {
				document.getElementById("p_city_x").innerHTML = "";
			}

			a = document.getElementById("p_state").value;
			if (a == "") {
				document.getElementById("p_state_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			ck_name = /^[A-Za-z ]{3,20}$/;
			if (!ck_name.test(a)) {
				document.getElementById("p_state_x").innerHTML = "** name must be valid **";
				return false;
			} else {
				document.getElementById("p_state_x").innerHTML = "";
			}

			a = document.getElementById("p_pin").value;
			if (a == "") {
				document.getElementById("p_pin_x").innerHTML = "** Please Enter Your Name **";
				return false;
			}
			if (isNaN(a)) {
				document.getElementById("p_pin_x").innerHTML = "** Only numbers allowed **";
				return false;
			}
			if ((a.length != 6)) {
				document.getElementById("p_pin_x").innerHTML = "** Enter valid numbers **";
				return false;
			} else {
				document.getElementById("p_pin_x").innerHTML = "";
			}


		}
	</script>













	<div class="all">
		<nav class="navbar fixed-top">
			<div class="header">
				<h2 class="text_style">Hostel Managemant System</h2>
				<!--  <a href="admin.html"><button id="button" class="logbtn">Admin Login</button></a> -->
			</div>
		</nav>

		<div class="vishal">
			<h2 class="page-title">Update Registration </h2>
			<h5 class="page-title">Fill all Info</h5>

			<!--     <h5 class="page-title">Fill all Info</h5> -->
		</div>

		<div class="login-box">
			<div class="kishan">

				<form id="my-form" name="myform" action="update.php" method="POST" onsubmit="return validation()">
					<div class="form-group">
						<label class="col-sm-4 control-label">
							<h3 style="color: white" align="left">Room Related info </h3>
						</label>
					</div>







					<div class="form-group">
						<label class="col-sm-2 control-label">Seater</label>
						<div class="col-sm-8">
							<input type="text" name="seater" id="seater" class="form-control" value="<?php echo htmlspecialchars($seater) ?>" required="required" />
							<div class="pop1" id="seater_x"></div>
						</div>
					</div>







					<!-- 					<div class="form-group">
					<label class="col-sm-2 control-label">Seater</label>
					<div class="col-sm-8">
					<select name="seater" id="seater" class="form-control"  value="<?php echo htmlspecialchars($seater) ?>" required="required" >
					<option value="">Select...</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
			        </select>
			        <div class="pop1" id="seater_x"></div>
			       
					</div>
					</div> -->



					<div class="form-group">
						<label class="col-sm-2 control-label">Fees Per Month</label>
						<div class="col-sm-8">
							<input type="number" name="fees" id="fees" class="form-control" value="<?php echo htmlspecialchars($fees) ?>" readonly />

						</div>
					</div>
					<script>
						myform.seater.onblur = function() {
							var myform = document.forms.myform;
							var bbb;
							bbb = myform.seater.value;
							if (!(bbb >= 1 && bbb <= 3)) {
								document.getElementById("seater_x").innerHTML = "** Seater can be 1/2/3 **";
							} else if (bbb == 1) {
								myform.fees.value = 4000;
								document.getElementById("seater_x").innerHTML = "";
							} else if (bbb == 2) {
								myform.fees.value = 3000;
								document.getElementById("seater_x").innerHTML = "";
							} else if (bbb == 3) {
								myform.fees.value = 2000;
								document.getElementById("seater_x").innerHTML = "";
							} else {
								myform.fees.value = "";
								document.getElementById("seater_x").innerHTML = "";
							}
						};
					</script>

					<!-- 					<div class="form-group">
					<label class="col-sm-2 control-label">Food Status</label>
					<div class="col-sm-8">
					<input type="radio"  value="0" id="foodstatus" name="foodstatus" checked="checked" required="required"> Without Food
					<input type="radio" id="foodstatus"  value="1" name="foodstatus" required="required"> With Food(Rs 2000.00 Per Month Extra)
					</div>
					</div> -->

					<div class="form-group">
						<label class="col-sm-2 control-label">Food Status</label>
						<div class="col-sm-8">
							<input type="text" name="foodstatus" id="foodstatus" class="form-control" value="<?php echo htmlspecialchars($foodstatus) ?>" required="required" />
							<div class="pop1" id="foodstatus_x"></div>
						</div>
					</div>

					<script>
						myform.foodstatus.onblur = function() {
							var myform = document.forms.myform;
							var bbb;
							bbb = myform.foodstatus.value;
							if (!(bbb >= 0 && bbb <= 1)) {
								document.getElementById("foodstatus_x").innerHTML = "** foodstatus can be 0/1 **";
							} else {
								document.getElementById("foodstatus_x").innerHTML = "";
							}
						};
					</script>

					<div class="form-group">
						<label class="col-sm-2 control-label">Stay From</label>
						<div class="col-sm-8">
							<input type="date" name="stay" id="stay" class="form-control" value="<?php echo htmlspecialchars($stay) ?>" required="required" />

						</div>
					</div>

					<!-- 					<div class="form-group">
					<label class="col-sm-2 control-label">Duration</label>
					<div class="col-sm-8">
					<select name="duration" id="duration" class="form-control" value="<?php echo htmlspecialchars($duration) ?>" required="required">
					<option value="">Select Duration in Month</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					</select>
					</div>
					</div> -->

					<div class="form-group">
						<label class="col-sm-2 control-label">Duration</label>
						<div class="col-sm-8">
							<input type="text" name="duration" id="duration" class="form-control" value="<?php echo htmlspecialchars($duration) ?>" required="required" />
							<div class="pop1" id="duration_x"></div>
						</div>
					</div>

					<!-- <script>
	 myform.duration.onblur=function(){
	var myform=document.forms.myform;
	var bbb;
    bbb=myform.duration.value;
    if(!(bbb>=1 && bbb<=12))
		{ 
         document.getElementById("duration_x").innerHTML="** duration can be 1 to 12 **";
		}
     else
     	 {
     	  document.getElementById("duration_x").innerHTML=""; 	}
    };
</script>
 -->
					<div class="form-group">
						<label class="col-sm-2 control-label">Total Amount</label>
						<div class="col-sm-8">
							<input type="number" name="total_amount" id="total_amount" class="form-control" value="<?php echo htmlspecialchars($total_amount) ?>" readonly required="required" />

						</div>
					</div>



					<script type="text/javascript">
						var myform = document.forms.myform;
						myform.duration.onblur = function() {
							var myform = document.forms.myform;
							var bbb;
							var aaa;
							var ccc;
							bbb = myform.foodstatus.value;
							aaa = myform.fees.value;
							ccc = myform.duration.value;

							if (!(ccc >= 1 && ccc <= 12)) {
								document.getElementById("duration_x").innerHTML = "** duration can be 1 to 12 **";
							} else {
								if (bbb == 0) {
									var temp = Number(aaa) * Number(ccc);
									myform.total_amount.value = temp;
									document.getElementById("duration_x").innerHTML = "";
								} else if (bbb == 1) {
									var temp = Number(aaa);
									temp = (2000 + temp) * Number(ccc);
									myform.total_amount.value = temp;
									document.getElementById("duration_x").innerHTML = "";
								} else {
									document.getElementById("duration_x").innerHTML = "";
								}
							}
						};
					</script>




					<div class="form-group">
						<label class="col-sm-4 control-label">
							<h3 style="color: white" align="left">Personal info </h3>
						</label>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Course</label>
						<div class="col-sm-8">
							<select name="course" id="course" class="form-control" value="<?php echo htmlspecialchars($course) ?>" required="required">
								<option value="<?php echo htmlspecialchars($course) ?>"><?php echo htmlspecialchars($course) ?></option>
								<option value="B.Tech Bachelor  of Technology">B.Tech Bachelor of Technology</option>
								<option value="B.Com Bachelor Of commerce">B.Com Bachelor Of commerce </option>
								<option value="BSC Bachelor  of Science">BSC Bachelor of Science</option>
								<option value="BCA Bachelor Of Computer Application">BCA Bachelor Of Computer Application</option>
								<option value="MCA Master of Computer Application">MCA Master of Computer Application</option>
								<option value="MBA Master of Business Administration">MBA Master of Business Administration</option>
								<option value="BE Bachelor of Engineering">BE Bachelor of Engineering</option>
							</select>

						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Email id : </label>
						<div class="col-sm-8">
							<input type="email" name="email" id="email" class="form-control" value="<?php echo htmlspecialchars($email) ?>" readonly />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Registration No : </label>
						<div class="col-sm-8">
							<input type="text" name="reg_no" id="reg_no" class="form-control" value="<?php echo htmlspecialchars($reg_no) ?>" required="required" />
							<div class="pop1" id="reg_no_x"></div>

						</div>
					</div>



					<div class="form-group">
						<label class="col-sm-4 control-label">Emergency Contact: </label>
						<div class="col-sm-8">
							<input type="text" name="e_contact" id="e_contact" class="form-control" value="<?php echo htmlspecialchars($e_contact) ?>" required="required" />
							<div class="pop1" id="e_contact_x"></div>

						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Guardian Name : </label>
						<div class="col-sm-8">
							<input type="text" name="gar_name" id="gar_name" class="form-control" required="required" value="<?php echo htmlspecialchars($gar_name) ?>" required="required" />
							<div class="pop1" id="gar_name_x"></div>

						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Guardian Relation : </label>
						<div class="col-sm-8">
							<input type="text" name="gar_relation" id="gar_relation" class="form-control" value="<?php echo htmlspecialchars($gar_relation) ?>" required="required" />
							<div class="pop1" id="gar_relation_x"></div>

						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Guardian Contact no : </label>
						<div class="col-sm-8">
							<input type="text" name="gar_contact" id="gar_contact" class="form-control" value="<?php echo htmlspecialchars($gar_contact) ?>" required="required" />
							<div class="pop1" id="gar_contact_x"></div>

						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-6 control-label">
							<h3 style="color: white" align="left">Correspondense Address </h3>
						</label>
					</div>


					<div class="form-group">
						<label class="col-sm-2 control-label">Address : </label>
						<div class="col-sm-8">
							<input type="text" name="c_add" id="c_add" class="form-control" value="<?php echo htmlspecialchars($c_add) ?>" required="required" />
							<div class="pop1" id="c_add_x"></div>

						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">City : </label>
						<div class="col-sm-8">
							<input type="text" name="c_city" id="c_city" class="form-control" value="<?php echo htmlspecialchars($c_city) ?>" required="required" />
							<div class="pop1" id="c_city_x"></div>

						</div>
					</div>

					<!-- 					<div class="form-group">
					<label class="col-sm-2 control-label">State </label>
					<div class="col-sm-8">
					<select name="c_state" id="c_state"class="form-control" value="<?php echo htmlspecialchars($c_state) ?>" required="required"/> 
					<option value="">Select State</option>
                    <option value="uuuuuuu">uttar pradesh</option>
                    </select> 
                   
                    </div>
					</div>	 -->

					<div class="form-group">
						<label class="col-sm-2 control-label">State </label>
						<div class="col-sm-8">
							<input type="text" name="c_state" id="c_state" class="form-control" value="<?php echo htmlspecialchars($c_state) ?>" required="required" />
							<div class="pop1" id="c_state_x"></div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Pincode : </label>
						<div class="col-sm-8">
							<input type="text" name="c_pin" id="c_pin" class="form-control" required="required" value="<?php echo htmlspecialchars($c_pin) ?>" />
							<div class="pop1" id="c_pin_x"></div>

						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-6 control-label">
							<h3 style="color: white" align="left">Permanent Address </h3>
						</label>
					</div>


					<div class="form-group">
						<label class="col-sm-12 control-label">Permanent Address same as Correspondense address : </label>
						<div class="col-sm-4">
							<input type="checkbox" id="adcheck" name="adcheck" value="1" />
						</div>
					</div>

					<script>
						myform.adcheck.onblur = function() {
							var myform = document.forms.myform;
							var bbb;
							bbb = myform.adcheck.value;
							if (bbb == "1") {
								myform.p_add.value = myform.c_add.value;
								myform.p_city.value = myform.c_city.value;
								myform.p_state.value = myform.c_state.value;
								myform.p_pin.value = myform.c_pin.value;

							} else {}
						};
					</script>











					<div class="form-group">
						<label class="col-sm-2 control-label">Address : </label>
						<div class="col-sm-8">
							<input type="text" name="p_add" id="p_add" class="form-control" required="required" value="<?php echo htmlspecialchars($p_add) ?>" />
							<div class="pop1" id="p_add_x"></div>

						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">City : </label>
						<div class="col-sm-8">
							<input type="text" name="p_city" id="p_city" class="form-control" required="required" value="<?php echo htmlspecialchars($p_city) ?>" />
							<div class="pop1" id="p_city_x"></div>

						</div>
					</div>

					<!-- 					<div class="form-group">
					<label class="col-sm-2 control-label">State </label>
					<div class="col-sm-8">
					<select name="p_state" id="p_state"class="form-control"  value="<?php echo htmlspecialchars($p_state) ?>" required="required"/> 
					<option value="">Select State</option>

                    <option value="uuuuuuu">uttar pradesh</option>

					</select>
					
				    </div>
					</div>	 -->

					<div class="form-group">
						<label class="col-sm-2 control-label">State </label>
						<div class="col-sm-8">
							<input type="text" name="p_state" id="p_state" class="form-control" value="<?php echo htmlspecialchars($p_state) ?>" required="required" />
							<div class="pop1" id="p_state_x"></div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Pincode : </label>
						<div class="col-sm-8">
							<input type="text" name="p_pin" id="p_pin" class="form-control" required="required" value="<?php echo htmlspecialchars($p_pin) ?>" />
							<div class="pop1" id="p_pin_x"></div>

						</div>
					</div>




					<div class="col-sm-4 col-sm-offset-4">
						<button id="signup" type="submit" name="submit" value="submit" class="btn btn-light">Update</button>
					</div>






				</form>

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