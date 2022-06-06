<?php
include "config.php";

$from = "C:/Users/j/Desktop/folder/2/text.txt";
$target = "C:/Users/j/Desktop/folder/1/text.06-06-22.txt";
$dataset = "/var/www/html/pending/";


/*
chmod ("C:/Users/j/Desktop/folder/1/", 0777);
chmod ("C:/Users/j/Desktop/folder/2/", 0777);

#mkdir($dir.'/'.'folder', 0744);
if (empty($target)){
    if (rename($from, $target)){
        echo "Success!";
    }
    else{
        echo "Failed!";
    }
}



$imageFileType = ".".strtolower(pathinfo($target, PATHINFO_EXTENSION));
echo $imageFileType."\n";

$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `fr_pending-users`");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];
$newfilename =  "Jorge Michael"."."."Galang";

echo $id."\n";

#$register = mysqli_query ($conn, "REPLACE INTO `fr_pending-users` (id, ru_firstname, ru_lastname, ru_studentid, ru_course) 
#VALUES ('$id', 'Jorge Michael', 'Galang', '123456', 'BSCPE')");


if ($register){
    $count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `fr_pending-users`");
    $count_array = mysqli_fetch_array($count_id);
    $id = $count_array[0];
    echo $id."\n";
}


$newDIR = ($dataset.$id.'.'.$newfilename.'/'.'RAW/');
echo $newDIR."\n";
*/
$i = 0;

$from = mysqli_query($conn, "SELECT * FROM `fr_registered-users` WHERE `id` = '$i'");
$from_row = mysqli_fetch_assoc($from);
$drop_id = intval($from_row['id']);
$firstname = $from_row['ru_firstname'];
$lastname = $from_row['ru_lastname'];
$course = $from_row['ru_course'];
$studentid = $from_row['ru_studentid'];
echo $drop_id;

#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `fr_dropped-users`");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];

$destination = mysqli_query($conn, "REPLACE INTO `fr_dropped-users` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`)
                                            VALUES ('$id','$firstname','$lastname','$studentid','$course')");

if ($destination) {
    $delete_pending = mysqli_query($conn, "DELETE FROM `fr_registered-users` WHERE `id` = '$drop_id'");

    if ($delete_pending) {
        echo "Successfully Transferred!";        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Successfully disabled the user!');
        window.location.href='Records.php';
        </script>");
    }
}

?>