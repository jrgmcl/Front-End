<?php
include 'err.php';
include 'session_checker.php';
include 'config.php';


$pickle = "/home/pi/Desktop/facerecognitionsystem-backend/pickle/datasets.pickle";

$selected_id = intval($_GET['id']);
$from = mysqli_query($conn, "SELECT * FROM `fr_registered-users` WHERE `id` = '$selected_id'");
$from_row = mysqli_fetch_assoc($from);
$drop_id = intval($from_row['id']);
$firstname = $from_row['ru_firstname'];
$lastname = $from_row['ru_lastname'];
$course = $from_row['ru_course'];
$studentid = $from_row['ru_studentid'];
$old_name = $selected_id.".".$firstname.".".$lastname;
$new_name = $firstname.".".$lastname;

#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `fr_dropped-users`");
$count_array = mysqli_fetch_array($count_id);
$id = intval($count_array[0]);

#Count folders in dropped folder
$drop_dir = "/home/pi/Desktop/facerecognitionsystem-backend/dropped";
$drop_count = iterator_count(new FilesystemIterator($drop_dir, FilesystemIterator::SKIP_DOTS));

$destination = mysqli_query($conn, "REPLACE INTO `fr_dropped-users` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`)
                                            VALUES ('$id','$firstname','$lastname','$studentid','$course')");

if ($destination) {
    $delete_pending = mysqli_query($conn, "UPDATE `fr_registered-users` SET `ru_firstname` = NULL, `ru_lastname` = NULL, `ru_studentid` = NULL, `ru_course` = NULL WHERE `id` = '$drop_id'");

    if ($delete_pending) {
        rename("/home/pi/Desktop/facerecognitionsystem-backend/datasets/".$old_name, "/home/pi/Desktop/facerecognitionsystem-backend/dropped/".$drop_count."_".$new_name);
        chmod("/home/pi/Desktop/facerecognitionsystem-backend/dropped/".$drop_count."_".$new_name, 0777);

        $deletepickle = unlink($pickle);
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Successfully disabled $firstname $lastname.');
        window.location.href='Records.php';
        </script>");
    }
}

?>
