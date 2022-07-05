<?php
$hostname = "localhost";/* 000webhost.com */
$username = "root";/* id18768126_raffa */
$password = "";/* \F9g~l)E9YP!@-hz */
$database = "library";/* id18768126_alqalamdb */


$db_conn = mysqli_connect($hostname, $username, $password, $database)
	or die(mysqli_connect_errno());
