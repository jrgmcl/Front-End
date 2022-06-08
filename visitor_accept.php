<?php
include 'config.php';

$from = mysqli_query($conn, "SELECT * FROM `qr_pending-visitors`");
$from_row = mysqli_fetch_assoc($from);
$pending_id = $from_row['id'];
$firstname = $from_row['qr_firstname'];
$lastname = $from_row['qr_lastname'];
$number = $from_row['qr_number'];
$purpose = $from_row['qr_purpose'];


#Counter function
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `qr_logs-visitors`");
$count_array = mysqli_fetch_array($count_id);
$count = $count_array[0];

for ($i = 0; $i < $count; $i++) {
    $registered = mysqli_query($conn, "SELECT * FROM `qr_logs-visitors` WHERE `id` = $pending_id");
    $row = mysqli_fetch_row($registered);
    if (empty($row[1])) {

        $destination = mysqli_query($conn, "REPLACE INTO `qr_logs-visitors` (`id`, `qr_firstname`, `qr_lastname`, `qr_number`, `qr_purpose`) VALUES ('$i','$firstname','$lastname','$number','$purpose')");
        if ($destination) {
            $delete_pending = mysqli_query($conn, "DELETE FROM `qr_pending-visitors` WHERE `id` = $pending_id");
            if ($delete_pending) {


                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Successfully approved the visitor!');
                window.location.href='qr_visitor.php';
                </script>");
            }
        }
    }
}
