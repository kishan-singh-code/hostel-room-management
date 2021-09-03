<?php

include('config/db_connect.php');

$email = $_GET['email'];

$q = " DELETE FROM `book_hostel` WHERE email = '$email' ";

mysqli_query($conn, $q);

header('location:admin_info.php');

?>