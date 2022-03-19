<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOADING FILES </title>

</head>
<link rel= "stylesheet" type="type/css">
<style>

    
  
.form-container form .form-upload{
   margin-top: -20%; 
   background: #555d5d;
   color:#f2f8ee;
   text-transform: capitalize;
   font-size: 15px;
   cursor: pointer;
   width: 100px;
}


</style>


<body>
    <br>
    <form action= "fileupload.php" method="POST" enctype="multipart/form-data">
        Choose File from PC: <input type = "file" name ="file"> 
        <input type="submit" name="submit" value= "Upload" class="form-upload">
    </form>
</body>
</html>