<?php
include 'config.php';
include 'err.php';
include 'session_checker.php';
$from = mysqli_query($conn, "SELECT * FROM `reg_qr`");
$from_row = mysqli_fetch_assoc($from);
$pending_id = $from_row['id'];
$qr_firstname = $from_row['qr_firstname'];
$qr_lastname = $from_row['qr_lastname'];
$qr_studentid = $from_row['qr_studentid'];
$qr_course = $from_row['qr_course'];

$qr_pin = $from_row['qr_pin'];


#Counter function
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM log_qr");
$count_array = mysqli_fetch_array($count_id);
$count = $count_array[0];

for ($i = 0; $i < $count; $i++) {
    $registered = mysqli_query($conn, "SELECT * FROM `log_qr` WHERE `id` = $i");
    $row = mysqli_fetch_row($registered);
    if (empty($row[1])) {

        $destination = mysqli_query($conn, "REPLACE INTO `log_qr` (`id`, `qr_firstname`, `qr_lastname`, `qr_studentid`, `qr_course`, `qr_pin`) VALUES ('$i','$qr_firstname','$qr_lastname','$qr_studentid','$qr_course', '$pin')");
        if ($destination) {
            $delete_pending = mysqli_query($conn, "DELETE FROM `reg_qr` WHERE `id` = $pending_id");
            if ($delete_pending) {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Successfully registered the user!');
                window.location.href='Register.php';
                </script>");
            }
        }
    }
}
