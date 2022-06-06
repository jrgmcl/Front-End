<?php
include '../err.php';

include '../config.php';

?>



<!DOCTYPE HTML ">
<html>

<head>

   <!--BOOSTRAP -->

   <link rel=" stylesheet" href="css/bootstrap.min.css">



<body class="body">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <link rel="stylesheet" type="text/css" href="css/w3.css">
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
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
            margin-right: rem;
            float: right;



        }

        a {
            font-size: 18px;
            font-weight: 800;
            font-family: 'Montserrat', sans-serif;

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
            height: 360px;
            margin-top: 50px;
            margin-bottom: 5rem;
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
            background-color: #008fb3;
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

        ul {
            background-color: #008fb3;
        }

        .card-header {
            background-color: #008fb3;
        }

        .w3-bar {
            font-family: 'Montserrat', sans-serif;
            text-align: center;
            background-color: #008fb3;

        }

        .container-navbar {
            background-color: #008fb3;
            text-align: center;
        }
    </style>



    <!-- CSS MAIN ENDS -->

    <body>


        <div class="w3-bar >
            <center>
                <div class=" image">
            <img src="images/logo.png" width="110" height="110">
        </div>
        </center>

        <center>
            <div class="container-navbar">
                <a href=" guard_dashboard.php" class="w3-bar-item w3-text-white w3-button w3-hover-white">Dashboard</a>

                <div class="w3-dropdown-hover">
                    <a href="Logs_qr.php" class="w3-bar-item w3-text-white w3-button w3-hover-white">Logs</a>
                    <div class=" w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="Logs_qr.php" class="w3-bar-item w3-hover-cyan  w3-button">Visitor Logs</a>
                        <a href="QR_Code_Users.php" class="w3-bar-item w3-hover-cyan  w3-button">QR User Logs</a>
                    </div>
                </div>

                <div class="w3-dropdown-hover">
                    <a href="" class="w3-bar-item w3-text-white w3-button w3-hover-white">QR Code </a>
                    <div class=" w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="reg_qr_users.php" class="w3-bar-item w3-hover-cyan  w3-button">QR Registered Request</a>
                        <a href="qr_visitor.php" class="w3-bar-item w3-hover-cyan  w3-button">QR Visitor Request</a>
                    </div>

                </div>


                <div class="logout">
                    <form action="Logout.php" method="post">
                        <a href=" Logout.php" class="w3-bar-item w3-text-white w3-button w3-hover-white">Logout</a>
                    </form>
                </div>
            </div>
            </div>

        </center>


        </header>

        <!-- NAVIGATION ENDS -->
        <div class="fade-in-image">
            <center>
                <div class=" container" id="datetime">


                    <h2> Welcome back, Guard! </h2>


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
                            <center>
                                <div class="card-header text-white ">QR CODE</div>
                                <br>

                                <img src="images/frame.png" width="100px" height="100px">
                                <p> Entrance </p>
                                <img src="images/frame.png" width="100px" height="100px">
                                <p> Exit </p>

                            </center>
                        </div>
                    </div>


                    <div class="card">

                        <center>
                            <div class="card-body text-dark">
                                <div class="card-header text-white ">REQUESTS</div>
                                <br>
                                <center>
                                    <?php

                                    require 'config.php';


                                    $query = "SELECT id FROM qr_pending ORDER BY id"; // To fetch data throough id
                                    $query_run = mysqli_query($conn, $query);

                                    $row = mysqli_num_rows($query_run); //Fetch number of row

                                    ?>

                                    <?php

                                    require 'config.php';


                                    $q = "SELECT id FROM reg_qr ORDER BY id"; // To fetch data throough id
                                    $query_ran = mysqli_query($conn, $q);

                                    $raw = mysqli_num_rows($query_ran); //Fetch number of row

                                    ?>
                                    <br>
                                    <h3> Visitor Requests: <?php echo " $row "; ?> </h3>
                                    <h3> Registered Users: <?php echo "$raw"; ?> </h3>

                                </center>
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

        <script src="/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>