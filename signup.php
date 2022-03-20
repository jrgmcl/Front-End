<?php  

include 'config.php';
include 'err.php';


#Grab input values
$ru_name = $_GET["ru_name"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];
$id = 0;


#Compare Input email and student ID from the database
$select = mysqli_query($conn, "SELECT * FROM rgsted_users WHERE ru_email = '$ru_email' ru_studentid = '$ru_studentid'");

#If email add and student ID exists on the database
if (!$select || mysqli_num_rows($select) == 0) {
	header("Location: main_register.php?error=".$userexist_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email);
	exit();
}

#If input email is not a valid email address
elseif (!filter_var($ru_email, FILTER_VALIDATE_EMAIL)) {
	header("Location: main_register.php?error=".$emailvalid_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email);
	exit();
}

#Else register the information from the input values
else {
	$register = "INSERT INTO `rgsted_users` (id, ru_name, ru_studentid, ru_course, ru_email) 
	VALUES ('$id', '$ru_name', '$ru_studentid', '$ru_course', '$ru_email')";
	$rs = mysqli_query($conn, $register);

	if($rs)
	{
		echo "Records Inserted";
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
	}

	else {
		?>
		<script>
			alert('Oops! Something went wrong.');
		</script>
		<?php
	}
}
?>
