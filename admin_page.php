<?php

@include 'config.php';
@include "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css">

   <style>

   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   background-image: url(Default.jpg);
}

.container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
   background: transparent;
}

.container .content{
   text-align: center;
     background: transparent;
}

.container .content h3{
   font-size: 30px;
   color:#555d5d;
   background: transparent;
}

.container .content h3 span{
   background: #5db1b9;
   color:#f2f8ee;
   border-radius: 5px;
   padding:0 15px;
}

.container .content h1{
   font-size: 50px;
   color: #f2f8ee;
   background: transparent;
   
}

.container .content h1 span{
   color: #555d5d;
   background: transparent;
   
}

.container .content p{
   font-size: 25px;
   margin-bottom: 20px;
   background: transparent;
   
}

.container .content .btn{
   display: inline-block;
   padding:10px 30px;
   font-size: 20px;
   background: #333;
   color:#fff;
   margin:0 5px;
   text-transform: capitalize;
}

.container .content .btn:hover{
   background: #5db1b9;
}

</style>

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome </h1>
      <p>this is an admin page</p>
      <a href="index.php" class="btn">Records</a>
      <a href="Register.php" class="btn">register</a>
      <a href="Logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>