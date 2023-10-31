<?php

// define('DB_HOST', '167.99.193.7');
// define('DB_USERNAME', 'herosuper');
// define('DB_PASSWORD', '8f19d5cfa468e3cbd3936331f73e1');
// define('DB_NAME', 'image_upload');
define('DB_HOST', '127.0.0.1:9999');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'image_upload');

$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);


function escape($string)
{
	global $conn;
	return mysqli_real_escape_string($conn, $string);
}

function clean($string)
{
	$string = trim($string);
	$string = stripcslashes($string);
	$string = htmlentities($string);

	return $string;
}
