<?php

$from = "C:/Users/j/Desktop/folder/2/text.txt";
$target = "C:/Users/j/Desktop/folder/1/text.06-06-22.txt";

chmod ("C:/Users/j/Desktop/folder/1/", 0777);
chmod ("C:/Users/j/Desktop/folder/2/", 0777);
#mkdir($dir.'/'.'folder', 0744);
if (rename($from, $target)){
    echo "Success!";
}
else{
    echo "Failed!";
}
?>