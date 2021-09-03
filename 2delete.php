<?php

include('config/db_connect.php');

$email = $_GET['email'];

            $sql = "SELECT email FROM user_signup WHERE email='$email'";

             $result = mysqli_query($conn, $sql);
             $final = mysqli_fetch_all($result, MYSQLI_ASSOC);

            if(isset($final[0])){
              // success
            	  $q = " DELETE FROM `user_signup` WHERE `user_signup`.`email` = '$email' ";

                    mysqli_query($conn, $q);

                    header('location:admin_more.php');
            }
            else {
                  echo "<script type='text/javascript'>alert('Delete Unsuccessfull');window.location = 'admin_more.php';</script>";
                    
                     exit();

                   }

            
         // "DELETE FROM `user_signup` WHERE `user_signup`.`email` = \'qqq@qqq.qq\'"?





?>