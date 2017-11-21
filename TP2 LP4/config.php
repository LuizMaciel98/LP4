<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "lp4";

$con = mysqli_connect($host, $user, $password, $db);

function getConnection() {
	global $con;
	return $con;
}

?>