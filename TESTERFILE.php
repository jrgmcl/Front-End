<?php
include 'config.php';


$date = new DateTime();
$time = strval($date->format("Y-m-d H:i:s"));
echo $time."\n";
$count = 0;
$qr_firstname = 'Jorge';
$qr_lastname = 'Galang';
$qr_studentid = '1234576';
$qr_course = 'BSCPE';
$qr_pin = '123456';

$destination = mysqli_query($conn, "REPLACE INTO `qr_logs-users` (`count`, `qr_firstname`, `qr_lastname`, `qr_studentid`, `qr_course`, `qr_pin`, `time_in`)
                                                          VALUES ('$count','$qr_firstname','$qr_lastname','$qr_studentid','$qr_course', '$qr_pin', '$time')");
if ($destination){
    echo "Successful!"."\n";
}

$from = mysqli_query($conn, "SELECT * FROM `qr_logs-users`");
$from_row = mysqli_fetch_assoc($from);
echo date('Y-m-d H:i:s', strtotime($from_row['time_in']));

?>