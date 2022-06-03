<?php
include 'config.php';

$from = mysqli_query($conn, "SELECT * FROM `archived`");
$from_row = mysqli_fetch_assoc($from);
$retrieved_id = $from_row['id'];
$firstname = $from_row['ru_firstname'];
$lastname = $from_row['ru_lastname'];
$course = $from_row['ru_course'];
$studentid = $from_row['ru_studentid'];
$email = $from_row['ru_email'];

$destination = mysqli_query($conn, "REPLACE INTO `rgstrd_users` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`, `ru_email`) VALUES (NULL,'$firstname','$lastname','$studentid','$course','$email')");
if ($destination) {
    $delete_pending = mysqli_query($conn, "DELETE FROM `archived` WHERE `id` = $retrieved_id");
    if ($delete_pending) {

        header('location: Deactivated.php');
    }
}
