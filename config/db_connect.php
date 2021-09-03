<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'kishan', '1234', 'hostel1');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>
