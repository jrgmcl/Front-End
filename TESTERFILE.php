<?php
include "config.php";

$select = intval($_GET['id']);
$from = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `fr_pending-users` WHERE `id` =  '$select';"));
$firstname = $from['ru_firstname'];
$lastname = $from['ru_lastname'];
$course = $from['ru_course'];
$studentid = $from['ru_studentid'];

$pending_path = "/var/www/html/pending/";
$target = "/var/www/html/datasets";

$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `fr_registered-users`");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];

$pending_foldername = $id.".".$firstname.".".$lastname;
$pending_folderpath = $pending_path.$pending_foldername;

$newtarget_path = $target."/".$pending_foldername;

rename($each_path, $each_newpath);

$accept = mysqli_query($conn,"REPLACE INTO `fr_registered-users` (id, ru_firstname, ru_lastname, ru_studentid, ru_course) 
                                        VALUES ('$id', '$ru_firstname', '$ru_lastname', '$ru_studentid', '$ru_course')");

$drop = mysqli_query($conn, "DELETE FROM `fr_pending-users` WHERE `id` = '$select'");

if ($drop) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Approved $firstname $lastname.');
    window.location.href='Register.php';
    </script>");;
    }
    
else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('An error occured, please try again.');
    window.location.href='Register.php';
    </script>");;
}

?>