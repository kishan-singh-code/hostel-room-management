<?php

include('config/db_connect.php');

$seater = $fees = $stay = $duration = $total_amount = $course = $reg_no = $e_contact = $gar_name = $gar_relation = $gar_contact = $c_add = $c_city = $c_state = $c_pin = $p_add = $p_city = $p_state = $p_pin = $room_no = $email = '';
$errors = array('seater' => '', 'fees' => '', 'stay' => '', 'duration' => '', 'total_amount' => '', 'course' => '', 'reg_no' => '', 'e_contact' => '', 'gar_name' => '', 'gar_relation' => '', 'gar_contact' => '', 'c_add' => '', 'c_city' => '', 'c_state' => '', 'c_pin' => '', 'p_add' => '', 'p_city' => '', 'p_state' => '', 'p_pin' => '', 'room_no' => '', 'email' => '',);


session_start();


$email = $_SESSION['email'];
$sql = "SELECT first_name,middle_name,last_name,gender,contact FROM user_signup WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$final = mysqli_fetch_all($result, MYSQLI_ASSOC);
$first_name = $final[0]['first_name'];
$middle_name = $final[0]['middle_name'];
$last_name = $final[0]['last_name'];
$gender = $final[0]['gender'];
$contact = $final[0]['contact'];

$sql = "SELECT seater FROM book_hostel WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$final = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($final[0])) {
    $check = 1;
} else {
    $check = 0;
}







if (isset($_POST['submit'])) {

    //   $seater = mysqli_real_escape_string($conn, $_POST['seater']);

    // $sql = "SELECT room_no FROM book_hostel";
    //    $result = mysqli_query($conn, $sql);
    //    $final = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //      print_r($final);
    //      if ($seater=='2') {
    //      	for ($i=1,$j=0;$i<=100;$i++,$j++) { 
    //      	if ($final[$j]['room_no']==$i) 
    //      	{}	
    //      	else
    //       { $room_no=$i;
    //         break; }
    //      }
    //    }
    //       elseif($seater=='1') {
    //      	for ($i=101;$i<=150;$i++) { 
    //      	if ($final[$i-1]['room_no']==$i) 
    //      	{}	
    //      	else
    //       { $room_no=$i;
    //         break; }
    //      }
    //    }
    //       elseif ($seater=='3') {
    //      	for ($i=151;$i<=200;$i++) { 
    //      	if ($final[$i-1]['room_no']==$i) 
    //      	{}	
    //      	else
    //       { $room_no=$i;
    //         break; }
    //      }
    //    }
    // check name


    if (empty($_POST['p_pin'])) {
        $errors['p_pin'] = 'A name is required';
    } else {
    }

    // if(empty($_POST['room_no'])){
    //     $errors['room_no'] = 'A name is required';
    // } else{

    // }    

    if (empty($_POST['c_pin'])) {
        $errors['c_pin'] = 'A name is required';
    } else {
    }

    if (empty($_POST['p_add'])) {
        $errors['p_add'] = 'A name is required';
    } else {
    }

    if (empty($_POST['p_city'])) {
        $errors['p_city'] = 'A name is required';
    } else {
    }

    if (empty($_POST['p_state'])) {
        $errors['p_state'] = 'A name is required';
    } else {
    }

    if (empty($_POST['c_add'])) {
        $errors['c_add'] = 'A name is required';
    } else {
    }

    if (empty($_POST['c_city'])) {
        $errors['c_city'] = 'A name is required';
    } else {
    }

    if (empty($_POST['c_state'])) {
        $errors['c_state'] = 'A name is required';
    } else {
    }


    if (empty($_POST['e_contact'])) {
        $errors['e_contact'] = 'A name is required';
    } else {
    }

    if (empty($_POST['gar_name'])) {
        $errors['gar_name'] = 'A name is required';
    } else {
    }

    if (empty($_POST['gar_relation'])) {
        $errors['gar_relation'] = 'A name is required';
    } else {
    }

    if (empty($_POST['gar_contact'])) {
        $errors['gar_contact'] = 'A name is required';
    } else {
    }

    if (empty($_POST['total_amount'])) {
        $errors['total_amount'] = 'A name is required';
    } else {
    }

    if (empty($_POST['course'])) {
        $errors['course'] = 'A name is required';
    } else {
    }

    if (empty($_POST['reg_no'])) {
        $errors['reg_no'] = 'A name is required';
    } else {
    }

    if (empty($_POST['seater'])) {
        $errors['seater'] = 'A name is required';
    } else {
    }

    if (empty($_POST['fees'])) {
        $errors['fees'] = 'A name is required';
    } else {
    }


    if (empty($_POST['stay'])) {
        $errors['stay'] = 'A name is required';
    } else {
    }


    if (empty($_POST['duration'])) {
        $errors['duration'] = 'A name is required';
    } else {
    }


    // check email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address';
        }
    }


    if (array_filter($errors)) {
        //echo 'errors in form';
    } else {
        // escape sql chars
        $seater = mysqli_real_escape_string($conn, $_POST['seater']);
        $fees = mysqli_real_escape_string($conn, $_POST['fees']);
        $stay = mysqli_real_escape_string($conn, $_POST['stay']);
        $duration = mysqli_real_escape_string($conn, $_POST['duration']);
        $total_amount = mysqli_real_escape_string($conn, $_POST['total_amount']);
        $course = mysqli_real_escape_string($conn, $_POST['course']);
        $reg_no = mysqli_real_escape_string($conn, $_POST['reg_no']);
        $e_contact = mysqli_real_escape_string($conn, $_POST['e_contact']);
        $gar_name = mysqli_real_escape_string($conn, $_POST['gar_name']);
        $gar_relation = mysqli_real_escape_string($conn, $_POST['gar_relation']);
        $gar_contact = mysqli_real_escape_string($conn, $_POST['gar_contact']);
        $c_add = mysqli_real_escape_string($conn, $_POST['c_add']);
        $c_city = mysqli_real_escape_string($conn, $_POST['c_city']);
        $c_state = mysqli_real_escape_string($conn, $_POST['c_state']);
        $c_pin = mysqli_real_escape_string($conn, $_POST['c_pin']);
        $p_add = mysqli_real_escape_string($conn, $_POST['p_add']);
        $p_city = mysqli_real_escape_string($conn, $_POST['p_city']);
        $p_state = mysqli_real_escape_string($conn, $_POST['p_state']);
        $p_pin = mysqli_real_escape_string($conn, $_POST['p_pin']);
        $foodstatus = mysqli_real_escape_string($conn, $_POST['foodstatus']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);








        // create sql
        $sql = "INSERT INTO book_hostel(seater,fees,stay,duration,total_amount,course,reg_no,e_contact,gar_name,gar_relation,gar_contact,c_add,c_city,c_state,c_pin,p_add,p_city,p_state,p_pin,email,foodstatus) VALUES('$seater','$fees','$stay','$duration','$total_amount','$course','$reg_no','$e_contact','$gar_name','$gar_relation','$gar_contact','$c_add','$c_city','$c_state','$c_pin','$p_add','$p_city','$p_state','$p_pin','$email','$foodstatus')";

        // save to db and check
        if (mysqli_query($conn, $sql)) {
            // success
            // echo "<script type='text/javascript'>alert('Invalid Email or Password');</script>";
            echo "<script type='text/javascript'>alert('Submit Successfully'); window.location = 'book_hostel.php'; history.go(-1);</script>";
            exit();
            // header('Location: index.php');
        } else {
            echo 'query error: ' . mysqli_error($conn);
            exit();
        }
    }
} // end POST check
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
            <h2 class="page-title">Registration </h2>


            <?php if ($check == 1) { ?>

                <h1 class="page-title" style="color: red;text-shadow: 2px 2px black;">You already Book room</h1>

            <?php } ?>

            <?php if ($check == 0) { ?>

                <h5 class="page-title">Fill all Info</h5>

            <?php } ?>

            <!--     <h5 class="page-title">Fill all Info</h5> -->
        </div>

        <div class="login-box">
            <div class="kishan">

                <form id="my-form" name="myform" action="book_hostel.php" method="POST" onsubmit="return validation()">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">
                            <h3 style="color: white" align="left">Room Related info </h3>
                        </label>
                    </div>















                    <div class="form-group">
                        <label class="col-sm-2 control-label">Seater</label>
                        <div class="col-sm-8">
                            <select name="seater" id="seater" class="form-control" value="<?php echo htmlspecialchars($seater) ?>" required="required">
                                <option value="" selected>Select...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <div class="pop1" id="seater_x"></div>
                            <div class="red-text"><?php echo $errors['seater']; ?></div>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-2 control-label">Fees Per Month</label>
                        <div class="col-sm-8">
                            <input type="number" name="fees" id="fees" class="form-control" value="<?php echo htmlspecialchars($fees) ?>" readonly />
                            <div class="red-text"><?php echo $errors['fees']; ?></div>
                        </div>
                    </div>
                    <script>
                        myform.seater.onblur = function() {
                            var myform = document.forms.myform;
                            var bbb;
                            bbb = myform.seater.value;
                            if (bbb == "") {} else if (bbb == 1) {
                                myform.fees.value = 4000;
                            } else if (bbb == 2) {
                                myform.fees.value = 3000;
                            } else if (bbb == 3) {
                                myform.fees.value = 2000;
                            } else {
                                myform.fees.value = "";
                            }
                        };
                    </script>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Food Status</label>
                        <div class="col-sm-8">
                            <input type="radio" value="0" id="foodstatus" name="foodstatus" checked="checked" required="required"> Without Food
                            <input type="radio" id="foodstatus" value="1" name="foodstatus" required="required"> With Food(Rs 2000.00 Per Month Extra)
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Stay From</label>
                        <div class="col-sm-8">
                            <input type="date" name="stay" id="stay" class="form-control" value="<?php echo htmlspecialchars($stay) ?>" required="required" />
                            <div class="red-text"><?php echo $errors['stay']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
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
                            <div class="red-text"><?php echo $errors['duration']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Total Amount</label>
                        <div class="col-sm-8">
                            <input type="number" name="total_amount" id="total_amount" class="form-control" value="<?php echo htmlspecialchars($total_amount) ?>" readonly required="required" />
                            <div class="red-text"><?php echo $errors['total_amount']; ?></div>
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

                            if (bbb == 0) {
                                var temp = Number(aaa) * Number(ccc);
                                myform.total_amount.value = temp;
                                // myform.foodstatus.value="0";
                            } else if (bbb == 1) {
                                var temp = Number(aaa);
                                temp = (2000 + temp) * Number(ccc);
                                myform.total_amount.value = temp;
                                // myform.foodstatus.value="1";
                            } else {}
                        };
                    </script>




                    <div class="form-group">
                        <label class="col-sm-4 control-label">
                            <h3 style="color: white" align="left">Personal info </h3>
                        </label>
                    </div>

                    <!-- 					<div class="form-group">
					<label class="col-sm-2 control-label">Course</label>
					<div class="col-sm-8">
					<select name="course" id="course" class="form-control"  value="<?php echo htmlspecialchars($course) ?>" required="required">
					<option value="">Select course</option>
					<option value="1">B.Tech Bachelor  of Technology</option>
					<option value="2">B.Com Bachelor Of commerce </option>
					<option value="3">BSC Bachelor  of Science</option>
					<option value="4">BCA Bachelor Of Computer Application</option>
					<option value="5">MCA Master of Computer Application</option>
					<option value="6">MBA Master of Business Administration</option>
					<option value="7">BE Bachelor of Engineering</option>
			        </select>
			        <div class="red-text"><?php echo $errors['course']; ?></div>
					</div>
					</div> -->

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Course</label>
                        <div class="col-sm-8">
                            <select name="course" id="course" class="form-control" value="<?php echo htmlspecialchars($course) ?>" required="required">
                                <option value="">Select Course</option>
                                <option value="B.Tech Bachelor  of Technology">B.Tech Bachelor of Technology</option>
                                <option value="B.Com Bachelor Of commerce">B.Com Bachelor Of commerce </option>
                                <option value="BSC Bachelor  of Science">BSC Bachelor of Science</option>
                                <option value="BCA Bachelor Of Computer Application">BCA Bachelor Of Computer Application</option>
                                <option value="MCA Master of Computer Application">MCA Master of Computer Application</option>
                                <option value="MBA Master of Business Administration">MBA Master of Business Administration</option>
                                <option value="BE Bachelor of Engineering">BE Bachelor of Engineering</option>
                            </select>
                            <div class="red-text"><?php echo $errors['course']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Registration No : </label>
                        <div class="col-sm-8">
                            <input type="text" name="reg_no" id="reg_no" class="form-control" value="<?php echo htmlspecialchars($e_contact) ?>" required="required" />
                            <div class="pop1" id="reg_no_x"></div>
                            <div class="red-text"><?php echo $errors['reg_no']; ?></div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">First Name : </label>
                        <div class="col-sm-8">
                            <input type="text" name="fname" id="fname" class="form-control" value="<?php echo htmlspecialchars($first_name) ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Middle Name : </label>
                        <div class="col-sm-8">
                            <input type="text" name="mname" id="mname" class="form-control" value="<?php echo htmlspecialchars($middle_name) ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Last Name : </label>
                        <div class="col-sm-8">
                            <input type="text" name="lname" id="lname" class="form-control" value="<?php echo htmlspecialchars($last_name) ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Gender : </label>
                        <div class="col-sm-8">
                            <input type="text" name="gender" value="<?php echo htmlspecialchars($gender) ?>" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Contact No : </label>
                        <div class="col-sm-8">
                            <input type="text" name="contact" id="contact" value="<?php echo htmlspecialchars($contact) ?>" class="form-control" readonly>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email id : </label>
                        <div class="col-sm-8">
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo htmlspecialchars($email) ?>" readonly />
                            <div class="red-text"><?php echo $errors['email']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Emergency Contact: </label>
                        <div class="col-sm-8">
                            <input type="text" name="e_contact" id="e_contact" class="form-control" value="<?php echo htmlspecialchars($e_contact) ?>" required="required" />
                            <div class="pop1" id="e_contact_x"></div>
                            <div class="red-text"><?php echo $errors['e_contact']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Guardian Name : </label>
                        <div class="col-sm-8">
                            <input type="text" name="gar_name" id="gar_name" class="form-control" required="required" value="<?php echo htmlspecialchars($gar_name) ?>" required="required" />
                            <div class="pop1" id="gar_name_x"></div>
                            <div class="red-text"><?php echo $errors['gar_name']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Guardian Relation : </label>
                        <div class="col-sm-8">
                            <input type="text" name="gar_relation" id="gar_relation" class="form-control" value="<?php echo htmlspecialchars($gar_relation) ?>" required="required" />
                            <div class="pop1" id="gar_relation_x"></div>
                            <div class="red-text"><?php echo $errors['gar_relation']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Guardian Contact no : </label>
                        <div class="col-sm-8">
                            <input type="text" name="gar_contact" id="gar_contact" class="form-control" value="<?php echo htmlspecialchars($gar_contact) ?>" required="required" />
                            <div class="pop1" id="gar_contact_x"></div>
                            <div class="red-text"><?php echo $errors['gar_contact']; ?></div>
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
                            <textarea rows="5" name="c_add" id="c_add" class="form-control" value="<?php echo htmlspecialchars($c_add) ?>" required="required" /></textarea>
                            <div class="pop1" id="c_add_x"></div>
                            <div class="red-text"><?php echo $errors['c_add']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">City : </label>
                        <div class="col-sm-8">
                            <input type="text" name="c_city" id="c_city" class="form-control" value="<?php echo htmlspecialchars($c_city) ?>" required="required" />
                            <div class="pop1" id="c_city_x"></div>
                            <div class="red-text"><?php echo $errors['c_city']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">State </label>
                        <div class="col-sm-8">
                            <input type="text" name="c_state" id="c_state" class="form-control" required="required" value="<?php echo htmlspecialchars($c_state) ?>" />
                            <div class="pop1" id="c_state_x"></div>
                            <div class="red-text"><?php echo $errors['c_state']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pincode : </label>
                        <div class="col-sm-8">
                            <input type="text" name="c_pin" id="c_pin" class="form-control" required="required" value="<?php echo htmlspecialchars($c_pin) ?>" />
                            <div class="pop1" id="c_pin_x"></div>
                            <div class="red-text"><?php echo $errors['c_pin']; ?></div>
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
                            <textarea rows="5" name="p_add" id="p_add" class="form-control" required="required" value="<?php echo htmlspecialchars($p_add) ?>" /></textarea>
                            <div class="pop1" id="p_add_x"></div>
                            <div class="red-text"><?php echo $errors['p_add']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">City : </label>
                        <div class="col-sm-8">
                            <input type="text" name="p_city" id="p_city" class="form-control" required="required" value="<?php echo htmlspecialchars($p_city) ?>" />
                            <div class="pop1" id="p_city_x"></div>
                            <div class="red-text"><?php echo $errors['p_city']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">State </label>
                        <div class="col-sm-8">
                            <input type="text" name="p_state" id="p_state" class="form-control" required="required" value="<?php echo htmlspecialchars($p_state) ?>" />
                            <div class="pop1" id="p_state_x"></div>
                            <div class="red-text"><?php echo $errors['p_state']; ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pincode : </label>
                        <div class="col-sm-8">
                            <input type="text" name="p_pin" id="p_pin" class="form-control" required="required" value="<?php echo htmlspecialchars($p_pin) ?>" />
                            <div class="pop1" id="p_pin_x"></div>
                            <div class="red-text"><?php echo $errors['p_pin']; ?></div>
                        </div>
                    </div>



                    <?php if ($check == 1) { ?>
                        <div class="col-sm-4 col-sm-offset-4">
                            <button id="signup" type="submit" name="submit" value="submit" class="btn btn-light" disabled>Submit</button>
                        </div>
                    <?php } ?>




                    <!--   <?php if ($check == 0) { ?> -->
                    <div class="col-sm-4 col-sm-offset-4">
                        <button id="signup" type="submit" name="submit" value="submit" class="btn btn-light">Submit</button>
                    </div>
                    <!--  <?php } ?> -->
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