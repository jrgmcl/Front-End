<?php
session_start();
include 'config.php';
include 'err.php';

$_SESSION["username"] = $_GET["username"];
$password = $_GET["password"];
$salt = "fr";
$_SESSION["password_encrypted"] = sha1($password);


if (empty($username) && empty($password)) {
<<<<<<< HEAD
	header("Location: login.php?error=" . $emptyuserpass_err . "&username=" . $username);
	exit();
} else if (empty($username)) {
	header("Location: login.php?error=" . $emptyusername_err . "&username=" . $username);
	exit();
} else if (empty($password)) {
	header("Location: login.php?error=" . $emptypassword_err . "&username=" . $username);
=======
	header("Location: login.php?error=".$emptyuserpass_err."&username=".$_SESSION["username"]);
	exit();
}
else if (empty($username)) {
	header("Location: login.php?error=".$emptyusername_err."&username=".$_SESSION["username"]);
	exit();
}
else if(empty($password)){
    header("Location: login.php?error=".$emptypassword_err."&username=".$_SESSION["username"]);
>>>>>>> 5f5b14b61e94c55a9a23ed64613097463a6bfb08
	exit();
}


<<<<<<< HEAD
$sql = mysqli_query($conn, "SELECT count(*) as total from admin WHERE username = '" . $username . "' and 
	password = '" . $password_encrypted . "'");
=======
$sql = mysqli_query($conn, "SELECT count(*) as total from admin WHERE username = '".$_SESSION["username"]."' and 
	password = '".$_SESSION["password_encrypted"]."'");
>>>>>>> 5f5b14b61e94c55a9a23ed64613097463a6bfb08

$row = mysqli_fetch_array($sql);

if ($row["total"] > 0) {
	header("Location: admin_page.php");
	exit();
<<<<<<< HEAD
} else {
	header("Location: login.php?error=" . $invalidcredentials_err . "&username=" . $username);
=======
}
else{
	header("Location: login.php?error=".$invalidcredentials_err."&username=".$_SESSION["username"]);
>>>>>>> 5f5b14b61e94c55a9a23ed64613097463a6bfb08
	exit();
}
