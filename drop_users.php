<?php
include 'config.php';
$selected_id = intval($result['id']);
$from = mysqli_query($conn, "SELECT * FROM `fr_registered-users` WHERE `id` = '$selected_id'");
$from_row = mysqli_fetch_assoc($from);
$drop_id = intval($from_row['id']);
$firstname = $from_row['ru_firstname'];
$lastname = $from_row['ru_lastname'];
$course = $from_row['ru_course'];
$studentid = $from_row['ru_studentid'];

#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `fr_dropped-users`");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];

$destination = mysqli_query($conn, "REPLACE INTO `fr_dropped-users` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`)
                                            VALUES ('$id','$firstname','$lastname','$studentid','$course')");

if ($destination) {
    $delete_pending = mysqli_query($conn, "DELETE FROM `fr_registered-users` WHERE `id` = '$drop_id'");

    if ($delete_pending) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Successfully disabled the user!');
        window.location.href='Records.php';
        </script>");
    }
}

?>