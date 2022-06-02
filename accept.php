<?php
include 'config.php';

$from = mysqli_query($conn, "SELECT * FROM `pending_users`");
$from_row = mysqli_fetch_assoc($from);
$pending_id = $from_row['id'];
$firstname = $from_row['ru_firstname'];
$lastname = $from_row['ru_lastname'];
$course = $from_row['ru_course'];
$studentid = $from_row['ru_studentid'];
$email = $from_row['ru_email'];


#Counter function
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM rgstrd_users");
$count_array = mysqli_fetch_array($count_id);
$count = $count_array[0];

for ($i = 0; $i < $count; $i++) {
    $registered = mysqli_query($conn, "SELECT * FROM `rgstrd_users` WHERE `id` = $i");
    $row = mysqli_fetch_row($registered);
    if (empty($row[1])) {

        $destination = mysqli_query($conn, "REPLACE INTO `rgstrd_users` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`, `ru_email`) VALUES ('$i','$firstname','$lastname','$studentid','$course','$email')");
        if ($destination) {
            $delete_pending = mysqli_query($conn, "DELETE FROM `pending_users` WHERE `id` = $pending_id");
            if ($delete_pending) {
                header("location: Request.php");
            }
        }
    }
}
