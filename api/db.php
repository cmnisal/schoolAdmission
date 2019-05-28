<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("mysqldbuser@admission-lk-site-mysqldbserver","mysqldbuser@admission-lk-site-mysqldbserver","lkadmin@123","admissionlk");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>