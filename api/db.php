<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("admission-lk-site-mysqldbserver.mysql.database.azure.com", "mysqldbuser@admission-lk-site-mysqldbserver", "lkadmin@123", "admissionlk");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
}

function getData($url)
{
	$curlSession = curl_init();
	curl_setopt($curlSession, CURLOPT_URL, $url);
	curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
	$jsonData = json_decode(curl_exec($curlSession), true);
	curl_close($curlSession);
	return $jsonData;
}
