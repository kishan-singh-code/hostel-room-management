<?php

// connect to the database
//for localhost
// $conn = mysqli_connect('localhost', 'kishan', '1234', 'hostel1');
//for remote sql
//$conn = mysqli_connect('remotemysql.com', 'oXjGEcnwxa', 'DMO5aCywGt', 'oXjGEcnwxa');
//from freesqldatabase
$conn = mysqli_connect('sql6.freesqldatabase.com', 'sql6434926', 'NaJamC8Rft', 'sql6434926');
// check connection
if (!$conn) {
	echo 'Connection error: ' . mysqli_connect_error();
}
