<?php
include "config.php";
$drop_id = intval(0);


$delete_pending = mysqli_query($conn, "UPDATE `fr_registered-users` 
                                       SET `ru_firstname` = NULL, `ru_lastname` = NULL, `ru_studentid` = NULL, `ru_course` = NULL
                                       WHERE `id` = '$drop_id'");
if ($delete_pending) {
    echo "Deleted!";
}

?>