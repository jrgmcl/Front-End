<?php



@include 'config.php'; // connection to database via config.php

if(isset($_POST['submit'])){ // declaration of variables ang assigning data from database

   // declared name $ should be same from the database

   $name = mysqli_real_escape_string($conn, $_POST['name']); 
   $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
   $course = $_POST['course'];

// fetching the email and student id from database

   $select = " SELECT * FROM user_form WHERE student_id = '$student_id' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, course, student_id) VALUES ('$name','$email','$course','$student_id') " ;
         mysqli_query($conn, $insert);
         header('location:Register.php'); //hEADER LOGIN
      }
   }

};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css ">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
   <title>Registration  </title>

   <!-- CSS FOR MAIN -->

   <style>
      body {

         margin: 0;
         padding: 0;
         background-position: center;
         background: #f2f8ee;
      }

      header {
         position: fixed;
         background: #5a9696;
         padding: 25px;
         width: 100%;
         height: 20px;
         padding: 30px;
         margin-bottom: 0;
      }

      .left_area h3 {
         color: #f2f8ee;
         margin-top: -35px;
         text-transform: uppercase;
         font-size: 22px;
         font-weight: 900;
         position: absolute;

      }

      .left_area span {
         color: #555d5d;
        
      }

      .logout_btn {
         padding: 5px;
         background: #5db1b9;
         text-decoration: none;
         float: right;
         margin-top: -37px;
         margin-right: 20px;
         border-radius: 2px;
         font-size: 15px;
         font-weight: 600;
         color: #f2f8ee;
         transition-property: background;

      }

      .logout_btn:hover {
         background: #555d5d;
      }

      .sidebar {
         background: #555d5d;
         margin-top: 60px;
         padding-top: 30px;
         position: fixed;
         left: 0;
         width: 250px;
         height: 100%;
         transition: 0.5s;
         transition-property: left;
         border: solid; 

      }


      .sidebar h4 {
         color: #f2f8ee;
         margin-bottom: 10px;
        padding: 10px; 
        background: #555d5d;
        margin-top: -30px;
      }

    

      .sidebar a {
         color: #f2f8ee;
         display: block;
         width: 100%;
         line-height: 60px;
         text-decoration: none;
         padding-left: 40px;
         box-sizing: border-box;
         transition: 0.5s;
         transition-property: background;
         font-size: 18px;
   
      }

      .sidebar a:hover {
         background: #5db1b9;
      }

      .sidebar i {
         padding-right: 10px;
      }

      label #sidebar_btn {
         z-index: 1;
         color: #f2f8ee;
         margin-top: -18px;
         position: absolute;
         cursor: pointer;
         left: 300px;
         font-size: 20px;
         margin-left: -20px;
         transition: 0.5s;
         transition-property: color;

      }

      label #sidebar_btn:hover {
         color: #f2f8ee;
      }

      #check:checked~.sidebar {
         left: -250px;
      }

      .content {
         margin-left: 250px;
         background-position: center;
         height: 100vh;
         transition: 0.5s;
      }

      #check:checked~.content {
         margin-left: 0;
      }

      #check {
         display: none;
      }
   </style>

   <!-- CSS MAIN ENDS -->

<body>


   <!--Sidebar Toggle-->
   <input type="checkbox" id="check">


   <header>
      <label for="check">
         <i class=" fa-solid fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
         <h3> STI College <span> Cubao</span></h3>
      </div>
      <div class="right_area">
         <a href="#" class="logout_btn">Log out</a> 
         <a href="#" class="log_btn> Admin</a>
         <a href="# class="register">Register User</a>
      </div>
   </header>

   <div class="sidebar">
      <center>
         <h4> Admin </h4>
   </center>


      <!--Menu Sidebar Items-->

      <a href="#dash" class="dash-board">
         <span class="icon"><i class='fa-solid fa-bars ' style='color:#55d5d'></i></span>
         <span class="item"  >Dashboard</span>
      </a>

      <a href="index.php">
         <span class="icon"><i class='fa-regular fa-address-book ' style='color:#55d5d'></i></span>
         <span class="item">Records</span>


         <a href="Register.php">
            <span class="icon"><i class='fa-solid fa-user-plus ' style='color:#55d5d'></i></span>
            <span class="item"> Register</span>

         </a>

         <a href="#"">
             <span class=" icon"><i class='fa-solid fa-user-gear ' style='color:#55d5d'></i></span>
            <span class="item">Request</span>
         </a>



      </a></li>


   </div>

   <!-- NAVIGATION ENDS -->

   <div class="form-container">

      <form action="" method="post">
        <b> <h3>Register User</h3> </b>
         <?php
          if(isset($error)){
             foreach($error as $error){
                echo '<span class="error-msg">' .$error. '</span>';
              };
            };
            ?>

            
        <p> User ID </p>
         </td>  <input type="student_id" name="student_id" required placeholder="User ID"> </td>

         <p>Full Name </p>
           <td><input type="text" name="name" required placeholder="Full name"></td>
         
      
        <p> Course </p> <select name="course">
             <option value="user">   </option>
             <option value="user">ASCT</option>
            <option value="user">BSCPE</option>
            <option value="user">BSIT</option>
            <option value="user">BSCS</option>
            <option value="user">BSBA</option>
            <option value="user">BSA</option>
            <option value="user">BSTM</option>
            <option value="user">BMMA</option>
            <option value="user">BSHM</option>
            <option value="user">TOP</option>
            <option value="user">GAS</option>
            <option value="user">STEM</option>
            <option value="user">Faculty Staff</option>

         </select>

         <input type="submit" name="submit" value="Proceed" class="form-btn">

   
         </form>
         

   <br>
   <br>
   <br>
   
   <br>
   <br>
   <br>
   <br>
   
   <br>
   <br>
   <br>
   <br>
   
   <br>
   <br>
   <br>
   <br>
   
   <br>
   <br>
   <br>
   <br>
   <br>
        
    <?php

    include 'upload.php';

    ?>

   </div>

</body>

</html>