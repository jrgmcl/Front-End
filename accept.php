<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "fr";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Failed!");
} else {
    echo 'Connected.';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = mysqli_query($conn, "SELECT * FROM `pending_users`");
    $row = mysqli_fetch_assoc($location);
    $firstname = $row['ru_firstname'];
    $lastname = $row['ru_lastname'];
    $course = $row['ru_course'];
    $studentid = $row['ru_studentid'];
    $email = $row['ru_email'];


    #Counter function
    $count_id = mysqli_query($conn, "SELECT COUNT(*) FROM rgstrd_users");
    $count_array = mysqli_fetch_array($count_id);
    $count = $count_array[0];

    for ($i = 0; $i < $count; $i++) {
        $registered = mysqli_query($conn, "SELECT * FROM `rgstrd_users` WHERE `id` = $i");
        $row = mysqli_fetch_row($registered);
        if (empty($row[1])) {

            $destination = mysqli_query($conn, "REPLACE INTO `rgstrd_users` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`, `ru_email`) VALUES ('$i','$firstname','$lastname','$studentid','$course','$email')");
            if ($destination) {
                $location = mysqli_query($conn, "DELETE FROM `pending_users` WHERE `id` = $i");
                echo "DELETED";
            }
        }
    }
}
?>
<html>

<form method="POST">
    <button href="accept.php?id="> submit</button>
</form>

</html>