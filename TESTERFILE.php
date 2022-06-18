<?php
include 'config.php';

$pin = '2f139';
$select = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `qr_logs-users` WHERE `qr_pin` = '$pin'"));
echo ($select['qr_firstname']);

     



?>