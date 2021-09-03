<?php


include('config/db_connect.php');
$email = $_GET['email'];

$sql = "SELECT * FROM user_signup WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$final = mysqli_fetch_all($result, MYSQLI_ASSOC);


$first_name = $final[0]['first_name'];
$middle_name = $final[0]['middle_name'];
$last_name = $final[0]['last_name'];
$gender = $final[0]['gender'];
$contact = $final[0]['contact'];
$oldemail = $final[0]['email'];
$password = $final[0]['password'];




if (isset($_POST['submit'])) {


  $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
  $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
  $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $oldemail = mysqli_real_escape_string($conn, $_POST['oldemail']);
  // $q= "INSERT INTO book_hostel(seater,fees,stay,duration,total_amount,course,reg_no,e_contact,gar_name,gar_relation,gar_contact,c_add,c_city,c_state,c_pin,p_add,p_city,p_state,p_pin,email,foodstatus) VALUES('$seater','$fees','$stay','$duration','$total_amount','$course','$reg_no','$e_contact','$gar_name','$gar_relation','$gar_contact','$c_add','$c_city','$c_state','$c_pin','$p_add','$p_city','$p_state','$p_pin','$email','$foodstatus')";








  //             // create sql
  // $sql = "SELECT email FROM user_signup WHERE email='$email'";

  //  $result = mysqli_query($conn, $sql);
  //  $final = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //   // print_r($final);
  //   // echo $result;
  // //save to db and check









  // if(isset($final[0]))
  // { echo "<script type='text/javascript'>alert('Email already exist');window.location ='2update.php';</script>";
  //   exit();}

  // else 
  // {} 







  $q = "UPDATE user_signup SET first_name='$first_name',middle_name= '$middle_name',last_name='$last_name',gender='$gender',contact='$contact',email='$email',password='$password' WHERE email='$oldemail'";

  $query = mysqli_query($conn, $q);
  // echo "<script type='text/javascript'>alert('Invalid Email or Password');</script>";
  header('location:admin_more.php');
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

  <style type="text/css">
    .login-box {
      width: 800px;
      height: 400px;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      border-radius: 5px;

      /*      margin: 23% 18% 0% 16%;
    
      padding: 50px 30px;*/

      margin: 120px 200px 120px 260px;

      padding: 40px 0px;


    }

    .main {
      width: 1366px;
      height: 590px;


    }

    .header {
      background-color: rgba(0, 0, 0, 0.5);
      width: 1366px;
      height: 65px;
      text-decoration: white;

    }

    body {
      margin: 0px;
      padding: 0px;
      font-family: sans-serif;

    }

    .logbtn {
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

    .logbtn:hover {
      background-position: right;
    }

    #button {
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

    .text_style {


      color: white;
      font-family: sans-serif;

      padding: 14px 0px 0px 20px;
      width: 500px;

      letter-spacing: 2.6px;

    }

    #signup {
      /*font-size: 15px;*/
      text-align: center;
      /*width:auto;
      height:auto;*/
      margin-left: 39%;
      margin-right: 35%;

    }

    .pop {
      font-size: 13px;
      text-align: center;
      color: red;

      margin-top: 0px;
      margin-bottom: 0px;
      font-family: sans-serif;
      letter-spacing: 3px;


    }

    .pop1 {
      font-size: 15px;
      text-align: center;
      color: red;

      font-family: sans-serif;
      /*  letter-spacing: 3px;*/


    }
  </style>

</head>

<body>


  <script type="text/javascript">
    function validation() {
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;

      var a = document.getElementById("first_name").value;
      if (a == "") {
        document.getElementById("first_name_x").innerHTML = "** Please Enter Your Name **";
        return false;
      }
      if (!isNaN(a)) {
        document.getElementById("first_name_x").innerHTML = "** Please Enter Only Characters **";
        return false;
      }
      if ((a.length == 1) && (a.length > 14)) {
        document.getElementById("first_name_x").innerHTML = "** Your Character must be 5 to 15 Character **";
        return false;
      } else {
        document.getElementById("first_name_x").innerHTML = "";


      }

      a = document.getElementById("middle_name").value;
      if (a == "") {
        // document.getElementById("middle_name_x").innerHTML = "** Please Enter Your Name **";
        return true;
      }
      if (!isNaN(a)) {
        document.getElementById("middle_name_x").innerHTML = "** Please Enter Only Characters **";
        return false;
      }
      if ((a.length == 1) && (a.length > 14)) {
        document.getElementById("middle_name_x").innerHTML = "** Your Character must be 5 to 15 Character **";
        return false;
      } else {
        document.getElementById("middle_name_x").innerHTML = "";
      }
      a = document.getElementById("last_name").value;
      if (a == "") {
        // document.getElementById("last_name_x").innerHTML = "** Please Enter Your Name **";
        return true;
      }
      if (!isNaN(a)) {
        document.getElementById("last_name_x").innerHTML = "** Please Enter Only Characters **";
        return false;
      }
      if ((a.length == 1) && (a.length > 14)) {
        document.getElementById("last_name_x").innerHTML = "** Your Character must be 5 to 15 Character **";
        return false;
      } else {
        document.getElementById("last_name_x").innerHTML = "";
      }

      var gender = document.getElementById("gender").value;
      if (gender == "") {
        document.getElementById("gender_x").innerHTML = "** please select one **";
        return false;
      } else {
        document.getElementById("gender_x").innerHTML = "";
      }


      a = document.getElementById("phone").value;
      if (a == "") {
        document.getElementById("phone_x").innerHTML = "** Please Enter Your Name **";
        return false;
      }
      if (isNaN(a)) {
        document.getElementById("phone_x").innerHTML = "** Only numbers allowed **";
        return false;
      }
      if ((a.length != 10)) {
        document.getElementById("phone_x").innerHTML = "** Enter valid numbers **";
        return false;
      }
      if ((a.charAt(0) != 9) && (a.charAt(0) != 8) && (a.charAt(0) != 7)) {
        document.getElementById("phone_x").innerHTML = "** Starting from 9/8/7 **";
        return false;
      } else {
        document.getElementById("phone_x").innerHTML = "";
      }




      if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value))) {
        if (email == "") {
          document.getElementById("email_x").innerHTML = "** please fill email **";
          return false;
        }

        document.getElementById("email_x").innerHTML = "** please fill valid email **";
        return false;
      } else {
        document.getElementById("email_x").innerHTML = "";
      }

      if (password == "") {
        document.getElementById("password_x").innerHTML = "** please fill password **";
        return false;
      }
      if ((password.length < 4) && (password.length > 19)) {
        document.getElementById("password_x").innerHTML = "** password is btw 3 and 20 **";
        return false;
      } else {
        document.getElementById("password_x").innerHTML = "";
      }




    }
  </script>











  <div class="header">
    <h2 class="text_style">Hostel Managemant System</h2>
    <!-- <button id="button" class="logbtn">Admin Login</button> -->
  </div>

  <div class="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-indicators login-box">



        <form action="2update.php" method="POST" onsubmit="return validation()">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="first_name">First name</label>
              <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First name" value="<?php echo htmlspecialchars($first_name) ?>" />
              <div class="pop1" id="first_name_x"></div>
            </div>
            <div class="form-group col-md-4">
              <label for="middle_name">Middle name</label>
              <input type="text" name="middle_name" class="form-control" id="middle_name" placeholder="Middle name" value="<?php echo htmlspecialchars($middle_name) ?>" />
              <div class="pop1" id="middle_name_x"></div>
            </div>
            <div class="form-group col-md-4">
              <label for="last_name">Last name</label>
              <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last name" value="<?php echo htmlspecialchars($last_name) ?>" />
              <div class="pop1" id="last_name_x"></div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="gender">Gender</label>
              <select class="custom-select" name="gender" id="gender" value="<?php echo htmlspecialchars($gender) ?>">
                <option value="<?php echo htmlspecialchars($gender) ?>" selected><?php echo htmlspecialchars($gender) ?></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
              </select>
              <div class="pop1" id="gender_x"></div>
            </div>

            <!--    <div class="form-group col-md-6">
      <label for="5">Gender</label>
      <input type="text" name="gender" class="form-control" id="5" placeholder="gender" value="<?php echo htmlspecialchars($gender) ?>" />
       <div class="red-text"><?php echo $errors['gender']; ?></div>
    </div> -->




            <div class="form-group col-md-6">
              <label for="phone">Contact No.</label>
              <input type="numbers" name="contact" class="form-control" id="phone" placeholder="phone" value="<?php echo htmlspecialchars($contact) ?>" />
              <div class="pop1" id="phone_x"></div>
            </div>
          </div>



          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo htmlspecialchars($email) ?>" readonly />
              <input type="hidden" id="oldemail" name="oldemail" value="<?php echo htmlspecialchars($email) ?>" />
              <div class="pop" id="email_x"></div>
            </div>
            <div class="form-group col-md-6">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="<?php echo htmlspecialchars($password) ?>" />
              <div class="pop" id="password_x"></div>
            </div>
          </div>

          <!-- <li><a href="registration.html"><i class=""></i> User Registration</a></li>

  <a class="btn btn-primary" href="#" role="button">Link</a> -->
          <!--   <button id="signup" href="rigistration.html" class="logbtn">Sign Up</button>  -->

          <button id="signup" type="submit" name="submit" value="submit" class="logbtn">Update</button>
        </form>


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