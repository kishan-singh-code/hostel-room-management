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
        <!--                  <a href="admin.html"><button id="button" class="logbtn">Admin Login</button> </a> -->
      </div>

    </nav>


    <div class="vishal">
      <h2 class="page-title">All Student Info. </h2>
    </div>


    <br><br>


    <div class="">
      <div class="">

        <div class="table-responsive">
          <table class="table table-striped table-dark table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Handle</th>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Handle</th>

              </tr>
              <?php

              include('config/db_connect.php');
              session_start();
              $email = $_SESSION['email'];

              $q = "SELECT * FROM book_hostel WHERE email='$email'";

              $query = mysqli_query($conn, $q);


              while ($res = mysqli_fetch_array($query)) {
              ?>
                <tr class="text-center">
                  <td> <button class="btn-danger btn"> <a href="delete.php?email=<?php echo $res['email']; ?>" class="text-white"> Delete </a> </button> </td>
                  <td> <button class="btn-primary btn"> <a href="update.php?email=<?php echo $res['email']; ?>" class="text-white"> Update </a></button> </td>

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
                  <td> <?php echo $res['email'];  ?> </td>



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