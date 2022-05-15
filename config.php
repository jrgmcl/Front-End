<<<<<<< HEAD
<?php
#import that latest database file from https://github.com/jrgmcl/Front-End
$host ="localhost";
$username = "root";
$password = "";
$dbname = "fr";

$conn = new mysqli($host, $username, $password, $dbname);
if($conn->connect_error){
	die("Connection Failed!");

}
=======
<?php
#import that latest database file from https://github.com/jrgmcl/Front-End
$host ="localhost";
$username = "root";
$password = "frpi";
$dbname = "fr";

$conn = new mysqli($host, $username, $password, $dbname);
if($conn->connect_error){
	die("Connection Failed!");

}
?>
>>>>>>> 5f5b14b61e94c55a9a23ed64613097463a6bfb08
