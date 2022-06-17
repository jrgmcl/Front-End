<?php
$drop_dir = "/home/pi/Desktop/facerecognitionsystem-backend/dropped";
$fi = iterator_count(new FilesystemIterator($drop_dir, FilesystemIterator::SKIP_DOTS));
echo $fi;

?>
