<?php
include 'config.php';

$from = mysqli_query($conn, "SELECT * FROM `qr_pending`");
$from_row = mysqli_fetch_assoc($from);
$pending_id = $from_row['id'];
$firstname = $from_row['qr_firstname'];
$lastname = $from_row['qr_lastname'];
$number = $from_row['qr_number'];
$gender = $from_row['qr_gender'];
$purpose = $from_row['qr_purpose'];
$pin = $from_row['qr_pin'];


#Counter function
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM qr_users");
$count_array = mysqli_fetch_array($count_id);
$count = $count_array[0];

for ($i = 0; $i < $count; $i++) {
    $registered = mysqli_query($conn, "SELECT * FROM `qr_users` WHERE `id` = $i");
    $row = mysqli_fetch_row($registered);
    if (empty($row[1])) {

        $destination = mysqli_query($conn, "REPLACE INTO `qr_users` (`id`, `qr_firstname`, `qr_lastname`, `qr_number`, `qr_gender`, `qr_purpose`, `qr_pin`) VALUES ('$i','$firstname','$lastname','$number','$gender','$purpose', '$pin')");
        if ($destination) {
            $delete_pending = mysqli_query($conn, "DELETE FROM `qr_pending` WHERE `id` = $pending_id");
            if ($delete_pending) {
                header("location: qr_visitor.php");
            }
        }
    }
}
