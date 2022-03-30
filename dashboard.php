
<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01//EN” “http://www.w3.org/TR/html4/strict.dtd">
  <html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>



<body class="body">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registration  </title>
 

   <!-- CSS FOR MAIN -->

   <style>
      body {

         margin: 0;
         padding: 0;
         background: url(Default.jpg);
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
         margin-top: -18px;
         margin-right: 20px;
         border-radius: 14px;
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


      <div class="right_area">
      <a href="Logout.php" class="logout_btn">Log out</a> 

      </div>

      

         <!--- HTML SEARCH BOX-->

      <link rel="stylesheet" href="search.css">
       
     <div class="search-container">
     <form action ="http://localhost/Front-End/index.php" method = "get" class="search-bar"> <!-- To link for the search table in index.php -->
        <input type=" text" placeholder ="search " name ="q">
        <button type ="submit"> <i class="fa-solid fa-magnifying-glass "></i></button>
        </form>
    </div>

    </header>


  <div class="sidebar">
    
     <center> <H4> <a href="dashboard.php"> Admin </a></h4> </center>
       
       <!--Menu Sidebar Items-->
      <a href="#dash" class="dash-board">
       <span class="icon"><i class='fa-solid fa-bars' style='color:#55d5d'></i></span>
       <span class="item">Dashboard </span></a> 

      <a href="index.php">
       <span class="icon"><i class='fa-regular fa-address-book ' style='color:#55d5d'></i></span>
       <span class="item">Records</span> <br>

      <a href="Register.php">
       <span class="icon"><i class='fa-solid fa-user-plus ' style='color:#55d5d'></i></span>
       <span class="item"> Register</span </a>  <br>
      
      <a href="request.php">
       <span class="icon"><i class='fa-solid fa-user-gear ' style='color:#55d5d'></i></span>
       <span class="item">Request</span></a>
      
     </div>

     <!-- NAVIGATION ENDS -->

     <!-- CARD FACE RECOGNITION -->
   <div class = "card-container">
   <div class=" card-deck">
   <div class="card-group">
  
         <div class="card bg-light mb-3 " style="width:15rem; height: 15rem;">
             <div class="card-body" > 

                 <a href=" index.php">  <h5 class="card-title" style=" color:#000">FACE RECOGNITION:</h5> </a>
       


                    <br>
                    <p class="card-text" style=" color: #00ff00">ACTIVE</p>
 
                   <?php

                   require 'config.php';

                    $query = "SELECT id FROM rgstrd_users ORDER BY id"; // To fetch data throough id
                    $query_run = mysqli_query($conn,$query);
               
                    $row = mysqli_num_rows($query_run); //Fetch number of row

                          echo '<p>'.$row.'</p>'; // To call rows inside <p>


                   ?>


                   </br>
              </div>
          </div>

           <div class="card bg-light mb-3" style="width:15rem; height: 15rem;">
             <div class="card-body" > 
                 <br>
                 <a href=" index.php">  <h5 class="card-title" style=" color:#000">Registered User</h5> </a>
       


                    <br>
                    <p class="card-text">Total:</p>
 
                   <?php

                   require 'config.php';

                    $query = "SELECT id FROM rgstrd_users ORDER BY id"; // To fetch data throough id
                    $query_run = mysqli_query($conn,$query);
               
                    $row = mysqli_num_rows($query_run); //Fetch number of row

                          echo '<p>'.$row.'</p>'; // To call rows inside <p>


                   ?>


                   </br>
              </div>
          </div>

          
           <div class="card bg-light mb-3 " style="width:15rem; height: 15rem;">
             <div class="card-body" > 
                <br>
                 <a href=" index.php">  <h5 class="card-title" style=" color:#000">Requests:</h5> </a>
       


                    <br>
                    <p class="card-text">Total:</p>
 
                   <?php

                   require 'config.php';

                    $query = "SELECT id FROM rgstrd_users ORDER BY id"; // To fetch data throough id
                    $query_run = mysqli_query($conn,$query);
               
                    $row = mysqli_num_rows($query_run); //Fetch number of row

                          echo '<p>'.$row.'</p>'; // To call rows inside <p>


                   ?>


                   </br>
              </div>
          </div>




      </div>
    </div>







 </div>

</div>

</body>
</html>


