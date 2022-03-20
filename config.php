<?php
#import that latest database file from https://github.com/jrgmcl/Front-End
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "fr";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("Connection Failed!");
}
?>