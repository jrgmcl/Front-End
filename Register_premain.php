<?php

// connection to database via config.php
include 'err.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>


    <!-- CSS FOR SIDE BAR and NAVBAR -->


    <!-- CSS FOR SIDE BAR and NAVBAR -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel=" stylesheet" type="text/css" href="css/design.css">
    <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

</head>


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
        margin-right: 2rem;
        float: right;
    }

    a {
        font-size: 18px;
        font-weight: 600;
    }

    button {
        font-weight: 600;
        font-size: 18px;
        margin-top: 15px;
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
        height: 500px;
        margin-top: 50px;
        margin-left: 31rem;
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

    <div class="w3-bar w3-cyan">
        <center>
            <div class=" image">
                <img src="images/logo.png" width="110" height="110">
            </div>
        </center><a href=" Dashboard.php" class="w3-bar-item w3-text-white w3-button w3-hover-white">Dashboard</a>

        <div class="w3-dropdown-hover">
            <a class="w3-bar-item w3-text-white w3-button w3-hover-white">Records</a>
            <div class=" w3-dropdown-content w3-bar-block w3-card-4">
                <a href="Records.php" class="w3-bar-item w3-hover-cyan  w3-button">Registered Users</a>

            </div>
        </div>

        <div class="w3-dropdown-hover">
            <a href=" Dashboard.php" class="w3-bar-item w3-text-white w3-button w3-hover-white">Logs</a>
            <div class=" w3-dropdown-content w3-bar-block w3-card-4">
                <a href="Logs.php" class="w3-bar-item w3-hover-cyan  w3-button">Face Recognition Logs</a>
                <a href="Logs_qr.php" class="w3-bar-item w3-hover-cyan  w3-button">Visitor Logs</a>
                <a href="QR_Code_Users.php" class="w3-bar-item w3-hover-cyan  w3-button">QR User Logs</a>
            </div>
        </div>

        <a href=" Register.php" class="w3-bar-item w3-text-white w3-button w3-hover-white">Register</a>

        <a href=" Request.php" class="w3-bar-item w3-text-white w3-button w3-hover-white">Request</a>

        <div class="logout">
            <form action="Logout.php" method="post">
                <a href=" Logout.php" class="w3-bar-item w3-text-white w3-button w3-hover-white">Logout</a>
            </form>
        </div>
    </div>



    </div>
    </header>
    </header>

    <!-- NAVIGATION ENDS -->


    <div class="fade-in-image">
        <div class="reg-container">

            <h2 class="w3-cyan text-white"> User Registration </h2>

            <form action="Register_signup.php" method="post" id="reg_users">

                <center> <?php if (isset($_GET['error'])) { ?>
                        <p class="regerror-msg w3-text-red"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                </center>

                <H5 class=" w3-text-black">Please enter the following details:</h5>



                <input type="name" name="ru_firstname" value="<?php
                                                                if (empty($_GET['ru_firstname'])) {
                                                                    echo "";
                                                                } else {
                                                                    echo $_GET['ru_firstname'];
                                                                } ?>" placeholder="First Name">




                <input type="name" name="ru_lastname" value="<?php
                                                                if (empty($_GET['ru_lastname'])) {
                                                                    echo "";
                                                                } else {
                                                                    echo $_GET['ru_lastname'];
                                                                } ?>" placeholder="Last Name">

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

                <select class="select" name="ru_course" value="<?php
                                                                if (empty($_GET['ru_course'])) {
                                                                    echo "";
                                                                } else {
                                                                    echo $_GET['ru_course'];
                                                                } ?>" placeholder="Course">
                    <option disabled selected value>Select a Course</option>
                    <option class="option" value="ASCT">ASCT</option>
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



                <button>Register</button>
            </form>


        </div>
    </div>

</body>

</html>