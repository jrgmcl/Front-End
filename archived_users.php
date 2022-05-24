<?php
include 'config.php';

$from = mysqli_query($conn, "SELECT * FROM `rgstrd_users`");
$from_row = mysqli_fetch_assoc($from);
$archived_id = $from_row['id'];
$firstname = $from_row['ru_firstname'];
$lastname = $from_row['ru_lastname'];
$course = $from_row['ru_course'];
$studentid = $from_row['ru_studentid'];
$email = $from_row['ru_email'];


#Counter function
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `archived`");
$count_array = mysqli_fetch_array($count_id);
$count = $count_array[0];

for ($i = 0; $i < $count; $i++) {
    $registered = mysqli_query($conn, "SELECT * FROM `archived` WHERE `id` = $i");
    $row = mysqli_fetch_row($registered);
    if (empty($row[1])) {

        $destination = mysqli_query($conn, "REPLACE INTO `archived` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`, `ru_email`) VALUES ('$i','$firstname','$lastname','$studentid','$course','$email')");
        if ($destination) {
            $delete_pending = mysqli_query($conn, "DELETE FROM `rgstrd_users` WHERE `id` = $archived_id");
            if ($delete_pending) {
                echo "<script LANGUAGE='JavaScript'>
                    window.alert('Accepted '.$firstname.' '.$lastname.'!');
                    window.location.href='Records.php';
                    </script>";
            }
        }
    }
}
