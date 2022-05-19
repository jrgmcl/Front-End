<?php
session_start();
include 'config.php';
include 'err.php';

$_SESSION["username"] = $_GET["username"];
$password = $_GET["password"];
$salt = "fr";
$_SESSION["password_encrypted"] = sha1($password);


if (empty($username) && empty($password)) {
	header("Location: login.php?error=".$emptyuserpass_err."&username=".$_SESSION["username"]);
	exit();
}
else if (empty($username)) {
	header("Location: login.php?error=".$emptyusername_err."&username=".$_SESSION["username"]);
	exit();
}
else if(empty($password)){
    header("Location: login.php?error=".$emptypassword_err."&username=".$_SESSION["username"]);
	exit();
}


$sql = mysqli_query($conn, "SELECT count(*) as total from admin WHERE username = '".$_SESSION["username"]."' and 
	password = '".$_SESSION["password_encrypted"]."'");

$row = mysqli_fetch_array($sql);

if ($row["total"] > 0) {
	header("Location: dashboard.php");
	exit();
}
else{
	header("Location: login.php?error=".$invalidcredentials_err."&username=".$_SESSION["username"]);
	exit();
}
