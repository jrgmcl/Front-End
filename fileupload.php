<?php
$url = $_SERVER['PHP_SELF'];

$files = $_FILES ['file'];

$fileName = $files ['name'];
$fileSize = $files ['size'];
$fileTmpLoc = $files ['tmp_name']; //storing temporary location
$fileError = $files ['error'];
        
// allowed only jpg jpeg png filesJPG //
        
$f =explode('.',$fileName);
$fileExt=strtolower($f[1]);
            
$allowedExt = array('jpg','jpeg','png');
if(in_array($fileExt,$allowedExt)){
    if($fileSize <20000000){ //file size will not exceed to 200000
            $fileNewName= uniqid('TEST_', false ); //Entropy (true or false) 
                                            // if true: 23 char long the id
                                            // if false:  13 char unique id
            $dest= 'uploads/'.$fileNewName.'.'.$fileExt; //file destination that provides extension
            move_uploaded_file($fileTmpLoc,$dest);
            header('Location:main_register.php?registration_success=true'); //indicating that the file is uploaded successfully
    }
    else { 
        //validations
        header('Location:main_register.php?registration_success=true');
        echo "File size exceed" ; // if the image uploaded exceeds the allowed file size
    }
}
else {
    header('Location:main_register.php?registration_success=true');
    echo "File type not Supported" ; // if the file does not mention the file type in $allowedExt
}
?>
