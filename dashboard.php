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
   <link rel="stylesheet" type="text/css" href="css/design.css">
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
         margin-right: 40rem;
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
         height: 350px;
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
         height: 350px;
         margin-top: 50px;
         margin-left: 13rem;
      }



      h2 {
         font-family: 'Montserrat', sans-serif;
         text-align: center;
         font-weight: 700;
         margin-top: 10px;
         padding: px;
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


      #datetime {

         padding: 0;
         position: relative;
         box-sizing: border-box;
         width: 35rem;
         height: 10rem;
         align-items: center;
         text-align: center;
         margin-bottom: -1rem;
         font-size: 19px;
         color: white;
         font-family: 'Montserrat', sans-serif;
         background-color: #008fb3;
      }
   </style>



   <!-- CSS MAIN ENDS -->

   <body>

      <ul class=" nav   nav-tabs justify-content-center bg-info p-1">

         <div class=" image">
            <img src="images/logo.png" width="95" height="95">
         </div>

         <li class="nav-item ">
            <a class="nav-link text-white " href="Dashboard.php">Dashboard</a>
         </li>

         <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Records</a>
            <ul class=" bg-info dropdown-menu">
               <center>
                  <li><a class="dropdown-item bg-info text-white" href="Records.php">Registered Users</a></li>
               </center>
            </ul>

         </li>

         <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Logs</a>
            <ul class=" bg-info dropdown-menu">
               <center>
                  <li><a class="dropdown-item bg-info text-white" href="Logs.php">Face Recognition Logs</a></li>
                  <li><a class="dropdown-item bg-info text-white" href="Logs_qr.php">Visitors Logs</a></li>
                  <li><a class="dropdown-item bg-info text-white" href="QR_Code_Users.php">QR User Logs</a></li>

               </center>
            </ul>

         </li>

         <li class="nav-item">
            <a class="nav-link text-white  " href="Register.php">Register</a>
         </li>
         <li class="nav-item">
            <a class="nav-link text-white " href="Request.php">Requests</a>
         </li>

         <div class="logout"></div>
         <li class="nav-item" id="#logout">
            <form action="Logout.php" method="post">
               <a class="nav-link bg-info text-white " href="Logout.php">Logout</a>
         </li>
         </div>
         </form>
      </ul>


      </div>
      </header>


      <!-- NAVIGATION ENDS -->
      <div class="fade-in-image">
         <center>
            <div class=" container" id="datetime">


               <h2> Welcome back, Admin! </h2>


               <span><b> Current Time </b></span> <br>
               <span id="tick2" class="timeh1" style="font-size:18px;">
               </span>
               <br>
               <?php
               $date = new DateTime();
               echo $date->format('l, F jS, Y');
               ?>
            </div>
      </div>
      </div>
      </center>

      <div class="fade-in-image">
         <div class="container" id="container">


            <!-- CARD FACE RECOGNITION -->



            <div class="card-group">

               <div class="card">

                  <div class="card-body text-dark">
                     <div class="card-header text-white bg-dark">QR Code</div>
                     <br>
                     <center>
                        <img src="images/frame.png" width="200px" height="200px">

                     </center>
                  </div>
               </div>

               <div class=" card ">

                  <div class="card-body text-dark ">
                     <div class="card-header text-white bg-info">Face Recognition</div>
                     <br>

                     <h5> Status:</h5>

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

      </div>

      <script>
         // <!--/. tells about the time  -->
         function show2() {
            if (!document.all && !document.getElementById)
               return
            thelement = document.getElementById ? document.getElementById("tick2") : document.all.tick2
            var Digital = new Date()
            var hours = Digital.getHours()
            var minutes = Digital.getMinutes()
            var seconds = Digital.getSeconds()
            var dn = "PM"
            if (hours < 12)
               dn = "AM"
            if (hours > 12)
               hours = hours - 12
            if (hours == 0)
               hours = 12
            if (minutes <= 9)
               minutes = "0" + minutes
            if (seconds <= 9)
               seconds = "0" + seconds
            var ctime = hours + ":" + minutes + ":" + seconds + " " + dn
            thelement.innerHTML = ctime
            setTimeout("show2()", 1000)
         }
         window.onload = show2
         //-->
      </script>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
   </body>

</html>