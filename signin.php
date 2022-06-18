<?php

include 'config.php';
include 'err.php';

$username = $_GET["username"];
$password = $_GET["password"];
$salt = "fr";
$password_encrypted = sha1($password);


if (empty($username) && empty($password)) {
	header("Location: index.php?error=" . $emptyuserpass_err . "&username=" . $username);
	exit();
} else if (empty($username)) {
	header("Location: index.php?error=" . $emptyusername_err . "&username=" . $username);
	exit();
} else if (empty($password)) {
	header("Location: index.php?error=" . $emptypassword_err . "&username=" . $username);
	exit();
}


$sql = mysqli_query($conn, "SELECT count(*) as total from admin WHERE username = '" . $username . "' and 
	password = '" . $password_encrypted . "'");

$row = mysqli_fetch_array($sql);

if ($row["total"] > 0) {
	session_start();
	$_SESSION['username'] = $username;
	if ($_SESSION['username'] == 'admin') {
		echo ("<script LANGUAGE='JavaScript'>
		window.alert('Welcome back, Admin.');
		window.location.href='Dashboard.php';
		</script>");
	}
	else if ($_SESSION['username'] == 'guard') {
		echo ("<script LANGUAGE='JavaScript'>
		window.alert('Welcome back, Guard.');
		window.location.href='guard/guard_dashboard.php';
		</script>");
	}
} else {
	header("Location: index.php?error=" . $invalidcredentials_err . "&username=" . $username);
	exit();
}
