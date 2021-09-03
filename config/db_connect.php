<?php

// connect to the database
//for localhost
// $conn = mysqli_connect('localhost', 'kishan', '1234', 'hostel1');
//for remote sql
$conn = mysqli_connect('remotemysql.com', 'oXjGEcnwxa', 'DMO5aCywGt', 'oXjGEcnwxa');
// check connection
if (!$conn) {
	echo 'Connection error: ' . mysqli_connect_error();
}
