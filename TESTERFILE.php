<?php
#include "config.php";

/*
$drop_id = intval(0);


$delete_pending = mysqli_query($conn, "UPDATE `fr_registered-users` 
                                       SET `ru_firstname` = NULL, `ru_lastname` = NULL, `ru_studentid` = NULL, `ru_course` = NULL
                                       WHERE `id` = '$drop_id'");
if ($delete_pending) {
    echo "Deleted!";
}
*/

#rename ("/home/pi/Desktop/facerecognitionsystem-backend/datasets/0.Nesha.Sorita", "/home/pi/Desktop/facerecognitionsystem-backend/dropped/Nesha.Sorita");


?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body { background:gray; }
.first{
    position:absolute; /* fixed also works */
    background:red;
    top:30px;
    left:30px;
    right:30px;
    bottom:30px;
}
iframe{
    width: 50vw;
    height: 50vh;
    margin-top: 25vh;
    margin-left: auto;
    margin-right: auto;
}
</style>


</head>
<body>
<center>
<iframe src="index.php" name="page"></iframe>
</center>
</body>
</html>