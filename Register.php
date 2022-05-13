<?php


@include 'config.php'; // connection to database via config.php

if (isset($_POST['submit'])) { // declaration of variables ang assigning data from database

   // declared name $ should be same from the database

   #Grab input values
   $ru_name = $_POST["ru_name"];
   $ru_studentid = $_POST["ru_studentid"];
   $ru_course = $_POST["ru_course"];
   $ru_email = $_POST["ru_email"];
   $id = 0;
   // fetching the email and student id from database

   $rs = mysqli_query($conn, $register);

   if ($rs) {

      $error[] = 'user already exist!';
   } else {
      $register = "INSERT INTO `rgstrd_users` (id, ru_name, ru_studentid, ru_course, ru_email) 
        VALUES ('$id', '$ru_name', '$ru_studentid', '$ru_course', '$ru_email')";
      $rs = mysqli_query($conn, $register);
      header('location:Register.php'); // When registering, page will go back to Register.php

      if (performQuery($query)) {
         echo "<script>alert('Your account request is now pending for approval! Please wait for confirmation. Thank you.')</script>";
      } else {
         echo "<script>alert('Unknown error occured.')</script>";
      }
   }
}

?>




<!DOCTYPE HTML PUBLIC �-//W3C//DTD HTML 4.01//EN� �http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
   <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css ">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>



<body class="body">
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Registration </title>


   <!-- CSS FOR MAIN -->

   <style>
      body {

         margin: 0;
         padding: 0;
         background-color: #f2f8ee;
         position: relative;


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
         margin-top: -20px;
         text-transform: uppercase;
         font-size: 22px;
         font-weight: 900;
         position: absolute;

      }

      .left_area span {
         color: #555d5d;

      }

      .logout_btn {
         padding: 5px 5px;
         background: #5db1b9;
         text-decoration: none;
         float: right;
         margin-top: -30px;
         margin-right: 20px;
         border-radius: 2px;
         font-size: 15px;
         font-weight: 600;
         color: #f2f8ee;
         transition-property: background;

      }

      .logout_btn:hover {
         background: white;
      }


      .date_time span {

         text-align: right;
         color: white;
         margin-left: 40rem;
         margin-top: -30rem;
         font-size: 19px;
      }

      .date_time {
         margin-top: -1.2rem;
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
         margin-top: -6px;
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

         <div class="date_time">
            <span>Date/Time:
               <?php echo (strftime("%m/%d/%Y %H:%M")); ?></span>

         </div>

         <div class="main">

            <div class="right_area">
               <a href="Logout.php" class="logout_btn">Log out</a>
            </div>
      </header>



      <div class="sidebar">

         <center>
            <br>
            <br>
            <H4> Welcome, Admin! </h4>
            <br>
            <br>
         </center>

         <!--Menu Sidebar Items-->
         <a href="dashboard.php">
            <span class="icon"><i class='fa-solid fa-bars' style='color:#fafcff'></i></span>
            <span class="item">Dashboard </span></a>

         <a href="index.php">
            <span class="icon"><i class='fa-regular fa-address-book ' style='color:#fafcff'></i></span>
            <span class="item">Records</span>

            <a href="Register.php">
               <span class="icon"><i class='fa-solid fa-user-plus ' style='color:#fafcff'></i></span>
               <span class="item"> Register</span </a>

               <a href="request.php">
                  <span class="icon"><i class='fa-solid fa-user-gear ' style='color:#fafcff'></i></span>
                  <span class="item">Request</span></a>

      </div>

      <!-- NAVIGATION ENDS -->

      <div class="gridcontainer">
         <div class="row">
            <div class="card" style="width: 40rem; height: 30rem;">
               <div class="card-body" style="width: 50rem; height: 30rem; ">
                  <h5 class="card-header"> Register User </h5>

                  <div class="form-container">

                     <form action="" id="form-id" method="post">

                        <?php if (isset($_GET['error'])) { ?>
                           <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                        <?php } ?>

                        <span>Provide the following.</span>

                        <br>

                        <input type="name" name="ru_name" value="<?php
                                                                  if (empty($_GET['ru_name'])) {
                                                                     echo "";
                                                                  } else {
                                                                     echo $_GET['ru_name'];
                                                                  } ?>" placeholder="Name">

                        <input type="studentid" name="ru_studentid" value="<?php
                                                                           if (empty($_GET['ru_studentid'])) {
                                                                              echo "";
                                                                           } else {
                                                                              echo $_GET['ru_studentid'];
                                                                           } ?>" placeholder="Student ID number">

                        <input type="email" name="ru_email" value="<?php
                                                                     if (empty($_GET['ru_email'])) {
                                                                        echo "";
                                                                     } else {
                                                                        echo $_GET['ru_email'];
                                                                     } ?>" placeholder="Email">

                        <select name="ru_course" value="<?php
                                                         if (empty($_GET['ru_course'])) {
                                                            echo "";
                                                         } else {

                                                            echo $_GET['ru_course'];
                                                         } ?>" placeholder="Course">
                           <option disabled selected value>Select a Course</option>
                           <option value="ASCT">ASCT</option>
                           <option value="BSCPE">BSCPE</option>
                           <option value="BSIT">BSIT</option>
                           <option value="BSCS">BSCS</option>
                           <option value="BSBA">BSBA</option>
                           <option value="BSA">BSA</option>
                           <option value="BSTM">BSTM</option>
                           <option value="BMMA">BMMA</option>
                           <option value="BSHM">BSHM</option>
                           <option value="TOP">TOP</option>
                           <option value="GAS">GAS</option>
                           <option value="STEM">STEM</option>
                           <option value="Faculty Staff">Faculty Staff</option>
                        </select>


                        <br>
                        <!-- Form for file uploading -->

                        <form class="form-upload" action="fileupload.php<?php echo "?ru_name=" . $ru_name . "&ru_studentid=" . $ru_studentid . "&ru_course=" . $ru_course . "&ru_email=" . $ru_email ?>" method="POST" enctype="multipart/form-data">
                           Upload Image: <input type="file" name="file" multiple>
                           <br>
                           <!-- Direct to fileupload.php to put the file selected to a PHP variable -->
                           <button class="button" type="submit" name="submit">Submit</button>



                        </form>


                        <br>



                        </br>

                  </div>
               </div>



            </div>

         </div>

      </div>
      </div>

      </div>
      </div>
      </div>
      </div>
      </div>
      </div>

      </div>

   </body>
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</html>