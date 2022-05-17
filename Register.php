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


   <!--BOOSTRAP -->

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <!--JS BUNDLE -->
   <script src="file:///C:/XAMPP/htdocs/Front-End/js/bootstrap.bundle.min.js"></script>
</head>



<body class="body">
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Admin Dashboard </title>


   <!-- CSS FOR MAIN -->

   <style>
      body {
         background-image: url("images/BGpic.jpg");
         background-position: center;
         display: flex;
         justify-content: center;
         flex-direction: column;
         font-family: 'Montserrat', sans-serif;

      }

      .logout {
         margin-right: 54rem;
      }

      a {
         font-size: 18px;
         font-weight: 600;
      }

      button {
         font-weight: 600;
         font-size: 18px;
      }

      .image {
         margin-top: -2px;
         margin-left: -35px;
      }

      li {
         margin-top: 1.5rem;
      }

      .reg-container {

         border-radius: 10px;
         box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
            0 10px 10px rgba(0, 0, 0, 0.22);
         position: relative;
         overflow: hidden;
         width: 50rem;
         height: 550px;
         margin-top: 50px;
         margin-left: 21rem;
         background-color: #fff;

      }

      h2 {
         font-family: 'Montserrat', sans-serif;
         text-align: center;
         font-weight: 600;
         padding: 10px;


      }

      form {
         padding: 30px;

      }

      input {
         background-color: #eee;
         border: none;
         border-radius: 15px;
         padding: 12px 15px;
         margin: 6px 0;
         width: 100%;
      }

      select {
         background-color: #eee;
         border-radius: 15px;
         padding: 12px 15px;
         margin: 8px 0;
         width: 100%;
      }

      select:after {}

      select:hover {}

      option {
         background: #eee;
         color: #000;
         font-size: 14px;
      }

      button {
         border-radius: 20px;
         border: 1px solid #5DB1B9;
         background-color: #5DB1B9;
         color: #FFFFFF;
         font-size: 12px;
         font-weight: bold;
         padding: 12px 45px;
         letter-spacing: 1px;
         text-transform: uppercase;
         transition: transform 80ms ease-in;
      }

      button:active {
         transform: scale(0.95);
      }

      button:focus {
         outline: none;
      }

      button.ghost {
         background-color: transparent;
         border-color: #FFFFFF;
      }
   </style>



   <!-- CSS MAIN ENDS -->

   <body>

      <header>

         <ul class=" nav justify-content-center bg-info p-1">

            <div class=" image">
               <img src="images/logo.png" width="95" height="95">
            </div>

            <li class="nav-item ">
               <a class="nav-link text-white " href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white  " href="index.php">Records</a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white  " href="Register.php">Register</a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white " href="request.php">Requests</a>
            </li>

            <div class="logout"></div>
            <li class="nav-item" id="#logout">
               <button class="nav-link bg-info text-white " href="Logout.php">Logout</button>
            </li>
            </div>
         </ul>


         </div>
      </header>



      <!-- NAVIGATION ENDS -->
      <!-- NAVIGATION ENDS -->


      <div class="reg-container">

         <h2 class="bg-info text-white"> User Registration </h2>

         <form action="" method="post">

            <?php if (isset($_GET['error'])) { ?>
               <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <H5>Please enter the following details:</h5>

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