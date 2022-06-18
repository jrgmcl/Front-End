<?php
include '../err.php';
include '../session_checker.php';
include '../config.php';


$get_id = $_GET['count'];
$from = mysqli_query($conn, "SELECT * FROM `qr_pending-users` WHERE `count` = '$get_id'");
$from_row = mysqli_fetch_assoc($from);
$pending_id = $from_row['count'];
$qr_firstname = $from_row['qr_firstname'];
$qr_lastname = $from_row['qr_lastname'];
$qr_studentid = $from_row['qr_studentid'];
$qr_course = $from_row['qr_course'];
$qr_pin = $from_row['qr_pin'];


#Counter function
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `qr_logs-users`");
$count_array = mysqli_fetch_array($count_id);
$count = $count_array[0];


$timein =  date('Y-m-d H:i:s');

$destination = mysqli_query($conn, "REPLACE INTO `qr_logs-users` (`count`, `qr_firstname`, `qr_lastname`, `qr_studentid`, `qr_course`, `qr_pin`, `time_in`) VALUES ('$count','$qr_firstname','$qr_lastname','$qr_studentid','$qr_course', '$qr_pin', '$timein')");
if ($destination) {
    $delete_pending = mysqli_query($conn, "DELETE FROM `qr_pending-users` WHERE `count` = $pending_id");
    if ($delete_pending) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Successfully registered the user!');
        window.location.href='reg_qr_users.php';
        </script>");
    }
}
