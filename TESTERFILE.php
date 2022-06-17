<?php
include 'config.php';

$selected_id = '0';
$from = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `qr_pending-users` WHERE `count` = '$selected_id'"));
print_r ($from);
echo $from['approve'];

?>
