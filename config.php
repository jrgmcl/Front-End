<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "fr";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection Failed!");
}
?>