<?php
include 'config.php';

$ru_name = $_GET["ru_name"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];
$id = 0;

$register = "INSERT INTO `rgstrd_users` (id, ru_name, ru_studentid, ru_course, ru_email) 
VALUES ('$id', '$ru_name', '$ru_studentid', '$ru_course', '$ru_email')";
$rs = mysqli_query($conn, $register);

if($rs)
{
	echo "Records Inserted";
}

else {
	?>
	<script>
		alert('Oops! Something went wrong.');
	</script>
	<?php
}
?>
