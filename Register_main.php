<?php
include 'err.php';
include 'session_checker.php';
include 'config.php';

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
    <title>Registration</title>

    <link rel=" icon" href="images/logo.png">



    <!-- CSS FOR SIDE BAR and NAVBAR -->
    <link rel=" stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <link rel="stylesheet" href="css/w3.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" href="images/logo.png">
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

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

    .container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
            0 10px 10px rgba(0, 0, 0, 0.22);
        position: relative;
        overflow: hidden;
        width: 50rem;
        height: 500px;
        margin-top: 50px;
    }
</style>


<body>

    <div class="w3-bar w3-cyan">
        <center>
            <div class=" image">
                <img src="images/logo.png" width="110" height="110">
            </div>
        </center><a href=" Dashboard.php" class="w3-bar-item w3-text-white w3-button w3-hover-white">Dashboard</a>
        <a href=" Register.php" class="w3-bar-item w3-text-white w3-button w3-hover-white">Register</a>
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
    </header>
    <!-- NAVIGATION ENDS -->

    <body class="body">

        <div class="container">

            <h2 class=" w3-cyan w3-text-white"> User Registration </h2>


            <br>
            <br>
            <form>


                <?php if (isset($_GET['error'])) { ?>
                    <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <h4> Please fill in the following: </h4>

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
                <button type="button" class="btn w3-cyan w3-text-white w3-hover-white" data-toggle="modal" data-target="#Upload">Upload Images</button>
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
                            <form class="form-upload" action="reg_append.php<?php echo "?&ru_firstname=" . $ru_firstname . "&ru_lastname=" . $ru_lastname . "&ru_studentid=" . $ru_studentid . "&ru_course=" . $ru_course . "&ru_email=" . $ru_email . "&upload[]=" . $_FILES['upload']; ?>" method="POST" enctype="multipart/form-data">
                                Choose File from PC: <input type="file" name="fileupload[]" multiple>
                                <!-- Direct to fileupload.php to put the file selected to a PHP variable -->
                                <button>Submit</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">

                        </div>

                    </div>
                </div>
            </div>

        </div>


        <script type="text/javascript">
            const signUpButton = document.getElementById('register');
            const signInButton = document.getElementById('login');
            const container = document.getElementById('container');

            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
                clearErrors();
            });

            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
                clearErrors();
            });

            function clearErrors() {
                Array.prototype.forEach.call(
                    document.getElementsByClassName("loginerror-msg"),
                    function(el) {
                        el.style.display = "none";
                    }
                );
            }
        </script>


    </body>

</html>