<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "fr";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$username = $_GET["username"];
$password = $_GET["password"];
$salt = "fr";
$password_encrypted = sha1($password);

#Errors
$emptyusername_err = 'Please enter your Username!';
$emptypassword_err = 'Please enter your Password!';
$emptyuserpass_err = 'Please enter your Username and Password!';
$invalidcredentials_err = 'Username/Password is incorrect!';

if (empty($username) && empty($password)) {
	header("Location: login.php?error=".$emptyuserpass_err."&username=".$username."&password=".$password);
	exit();
}
else if (empty($username)) {
	header("Location: login.php?error=".$emptyusername_err."&username=".$username."&password=".$password);
	exit();
}
else if(empty($password)){
    header("Location: login.php?error=".$emptypassword_err."&username=".$username."&password=".$password);
	exit();
}


$sql = mysqli_query($conn, "SELECT count(*) as total from admin WHERE username = '".$username."' and 
	password = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	header("Location: index.php");
	exit();
}
else{
	header("Location: login.php?error=".$invalidcredentials_err."&username=".$username."&password=".$password);
	exit();
}

?>
