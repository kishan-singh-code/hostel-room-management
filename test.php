<?php  
    
    include('config/db_connect.php');

if(isset($_POST['submit'])){
            $first_name = 'bbbb';
            $middle_name = 'bbb';
            $last_name = 'bbbb';
            $gender = 'male';
            $contact = '9876543210';
            $email = 'zzz@gzz.zz';
            $password = 'zzzz';
echo $email;
            // create sql
            $sql = "INSERT INTO user_signup(first_name,middle_name,last_name,gender,contact,email,password) VALUES('$first_name','$middle_name','$last_name','$gender','$contact','$email','$password')";
            
            if(mysqli_query($conn, $sql)){
               
                
            } else {
                echo 'query error: '. mysqli_error($conn);
            }



 mysqli_close($conn);


      }


        

    // end POST check
?>

<!DOCTYPE html>

<html>

<head>

    <title>php tuts</title>

</head>

<body>



    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        <input type="text" name="name">

        <input type="submit" name="submit" value="submit">

    </form>



</body>

</html