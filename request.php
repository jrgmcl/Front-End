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

      <!-- Requesting form -->


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   </body>

</html>