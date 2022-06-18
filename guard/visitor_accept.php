<?php
include '../err.php';
include '../date_format.php';
include '../config.php';


$get_id = $_GET['count'];
$from = mysqli_query($conn, "SELECT * FROM `qr_pending-visitors` WHERE `count` = '$get_id'");
$from_row = mysqli_fetch_assoc($from);
$pending_id = $from_row['id'];
$firstname = $from_row['qr_firstname'];
$lastname = $from_row['qr_lastname'];
$number = $from_row['qr_number'];
$purpose = $from_row['qr_purpose'];
$qr_pin = $from_row['qr_pin'];



#Counter function
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `qr_logs-visitors`");
$count_array = mysqli_fetch_array($count_id);
$count = $count_array[0];


$timein =  date('Y-m-d H:i:s');

$destination = mysqli_query($conn, "REPLACE INTO `qr_logs-visitors` (`count`, `qr_firstname`, `qr_lastname`, `qr_number`, `qr_purpose`, `qr_pin`) VALUES ('$i','$firstname','$lastname','$number','$purpose',`$qr_pin`)");
if ($destination) {
	$delete_pending = mysqli_query($conn, "DELETE FROM `qr_pending-visitors` WHERE `count` = $pending_id");
	if ($delete_pending) {


		echo ("<script LANGUAGE='JavaScript'>
                window.alert('Successfully approved the visitor!');
                window.location.href='qr_visitor.php';
                </script>");
	}
}
