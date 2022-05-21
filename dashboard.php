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


      .container {
         background-color: #fff;
         border-radius: 10px;
         box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
            0 10px 10px rgba(0, 0, 0, 0.22);
         position: relative;
         overflow: hidden;
         width: 70rem;
         height: 400px;
         margin-top: 50px;
      }

      .card-header {

         font-weight: 500;
         font-family: 'Montserrat', sans-serif;
         font-size: 25px;

      }

      .title-container {


         border-radius: 10px;
         box-shadow: 0 5px 20px rgba(0, 0, 0, 0.20),
            0 5px 5px rgba(0, 0, 0, 0.22);
         position: relative;
         overflow: hidden;
         width: 70rem;
         height: 400px;
         margin-top: 50px;
         margin-left: 13rem;
      }


      #title-page {

         background-color: #008fb3;
         border-radius: 10px;
         position: relative;
         width: 70rem;
         height: 80px;
         margin-top: 40px;
      }

      h1 {
         font-family: 'Montserrat', sans-serif;
         text-align: center;
         font-weight: 700;
         margin-top: 10px;
         padding: 2px;
         color: #fff;

      }

      button {
         border-radius: 20px;
         border: 1px solid #5DB1B9;
         background-color: #5DB1B9;
         color: #FFFFFF;
         font-size: 12px;
         font-weight: bold;
         padding: 10px 30px;
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
               <a class="nav-link text-white  " href="Records.php">Records</a>
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
      <div class="title-container" id="title-page">
         <h1> Welcome Back, Admin! </h1>


      </div>

      <div class="container" id="container">


         <!-- CARD FACE RECOGNITION -->



         <div class="card-group">

            <div class="card">

               <div class="card-body">
                  <div class="card-header text-white bg-dark">QR Code</div>
                  <br>
                  <h5 class="card-text"> Status:</h5>
                  <p class="card-text"> Updated QR Code</p>



               </div>
            </div>

            <div class="card">

               <div class="card-body">
                  <div class="card-header text-white bg-info">Face Recognition</div>
                  <br>
                  <h5 class="card-text"> Status:</h5>


                  <?php

                  require 'config.php';


                  $query = "SELECT id FROM rgstrd_users ORDER BY id"; // To fetch data throough id
                  $query_run = mysqli_query($conn, $query);

                  $row = mysqli_num_rows($query_run); //Fetch number of row

                  echo '<p>' . $row . '</p>'; // To call rows inside <p>


                  ?>
               </div>
            </div>
         </div>

      </div>

      </div>

   </body>

</html>