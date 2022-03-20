<?php
$files = $_FILES ['file'];
$fileName = $files ['name'];
$fileSize = $files ['size'];
$fileTmpLoc = $files ['tmp_name']; //storing temporary location
$fileError = $files ['error'];
header('Location:main_register.php?success=true?fileName='.$fileName.'?fileTmpLoc='.$fileTmpLoc);
?>
