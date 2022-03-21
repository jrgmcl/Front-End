<?php
include 'config.php';


$ru_name = $_GET["ru_name"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];

$files = $_FILES ['file'];

$fileName = $files ['name'];
$fileSize = $files ['size'];
$fileTmpLoc = $files ['tmp_name']; //storing temporary location
$fileError = $files ['error'];

#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM rgstrd_users;");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];
$id = ++$id;

#Replace to insert a data to dropped indexes
$register = "REPLACE INTO `rgstrd_users` (id, ru_name, ru_studentid, ru_course, ru_email) 
VALUES ('$id', '$ru_name', '$ru_studentid', '$ru_course', '$ru_email')";
$rs = mysqli_query($conn, $register);

#Alert if succes or not
if($rs) {
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered');
    window.location.href='login.php';
    </script>");
}

else {
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Something went wrong. Please Try again later...');
    window.location.href='login.php';
    </script>");
}
?>
