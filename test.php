<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "fr";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection Failed!");
}
echo ("<script LANGUAGE='JavaScript'>
window.location.href='Front-End/index.php';
window.alert('Error on reading the selected file! Please check your file if it is an ".$host."image file.');
</script>");
?>

