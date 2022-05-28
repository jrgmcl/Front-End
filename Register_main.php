<?php
include 'err.php';
session_start();
$ru_firstname = $_GET["ru_firstname"];
$ru_lastname = $_GET["ru_lastname"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
</head>

<body>


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

            #reg_users {
                padding: 30px;

            }

            input {
                background-color: #eee;
                border: none;
                border-radius: 15px;
                padding: 8px 10px;
                margin: 6px 0;
                width: 100%;
            }

            select {
                background-color: #eee;
                border-radius: 15px;
                padding: 8px 10px;
                margin: 8px 0;
                width: 100%;
            }

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
            <!-- NAVIGATION ENDS -->

            <div class="fade-in-image">
                <div class="reg-container">

                    <h2 class="bg-info text-white"> User Registration </h2>

                    <form action="Register_signup.php" method="post" id="reg_users">

                        <?php if (isset($_GET['error'])) { ?>
                            <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                        <?php } ?>

                        <H5>Please enter the following details:</h5>




                        <input type="name" name="ru_firstname" value="<?php
                                                                        if (empty($_GET['ru_firstname'])) {
                                                                            echo "";
                                                                        } else {
                                                                            echo $_GET['ru_firstname'];
                                                                        } ?>" placeholder="First Name" Disabled>

                        <input type="name" name="ru_lastname" value="<?php
                                                                        if (empty($_GET['ru_lastname'])) {
                                                                            echo "";
                                                                        } else {
                                                                            echo $_GET['ru_lastname'];
                                                                        } ?>" placeholder="Last Name" Disabled>

                        <input type="studentid" name="ru_studentid" value="<?php
                                                                            if (empty($_GET['ru_studentid'])) {
                                                                                echo "";
                                                                            } else {
                                                                                echo $_GET['ru_studentid'];
                                                                            } ?>" placeholder="Student ID number" Disabled>

                        <input type="email" name="ru_email" value="<?php
                                                                    if (empty($_GET['ru_email'])) {
                                                                        echo "";
                                                                    } else {
                                                                        echo $_GET['ru_email'];
                                                                    } ?>" placeholder="Email" Disabled>

                        <select name="ru_course" value="<?php
                                                        if (empty($_GET['ru_course'])) {
                                                            echo "";
                                                        } else {
                                                            echo $_GET['ru_course'];
                                                        } ?>" placeholder="Course" Disabled>
                            <option value="<?php
                                            if (empty($_GET['ru_course'])) {
                                                echo "";
                                            } else {
                                                echo $_GET['ru_course'];
                                            } ?>" disabled selected value>"<?php
                                                                        if (empty($_GET['ru_course'])) {
                                                                            echo "";
                                                                        } else {
                                                                            echo $_GET['ru_course'];
                                                                        } ?>"</option>
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

                        <!-- Button for Popup Upload -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Upload">Upload Images</button>
                    </form>

                    <!-- Popup Upload -->
                    <div class="modal" id="Upload">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Upload 5 Face Images</h4>
                                    <a class="close" data-dismiss="modal"></a>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">

                                    <!-- Form for file uploading -->

                                    <form class="form-upload" action="fileupload.php<?php echo "?ru_name=" . $ru_name . "&ru_studentid=" . $ru_studentid . "&ru_course=" . $ru_course . "&ru_email=" . $ru_email ?>" method="POST" enctype="multipart/form-data">
                                        Choose file from PC: <input type="file" name="register[]" multiple>
                                        <br>
                                        <!-- Direct to fileupload.php to put the file selected to a PHP variable -->
                                        <button class="button" type="submit" name="submit">Submit</button>
                                    </form>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <br>

                                        </br>

                                    </div>
                                </div>




        </body>
        <script>
            $(document).ready(function() {
                if ($('#msg').val() != "") {
                    alert($('#msg').val()); // or replace with a JQuery modal
                }
            });
        </script>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</html>