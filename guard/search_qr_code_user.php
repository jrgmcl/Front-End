<?php
include '../err.php';
include '../session_checker.php';
include '../config.php';
error_reporting(0);


#Reject the reuqest from the database
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = mysqli_query($conn, "DELETE FROM `qr_logs-users` WHERE `id` = '$id'");

    if ($delete) {

        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully registered the user!');
    window.location.href='Register.php';
    </script>");;
    }
}


#Fetch the data from database
$sel = "SELECT * FROM `reg_qr` ";
$query = $conn->query($sel);


?>




<!DOCTYPE HTML">

<link rel="icon" href="images/logo.png">
<html>

<head>

    <link rel=" icon" href="images/logo.png">

    <!-- CSS FOR SIDE BAR and NAVBAR -->
    <link rel=" stylesheet" type="text/css" href="css/design.css">
    <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="icon" href="images/logo.png">

    <!-- CSS SEARCHBAR -->
    <link rel="stylesheet" href="css/searchbar.css">
    <link rel="stylesheet" href="css/search.css">



    <!-- CSS SEARCHBAR -->
    <link rel="stylesheet" href="css/searchbar.css">
    <link rel="stylesheet" href="css/search.css">


    <!-- SCRIPT FOR EXCEL EXPORT-->

    <script src="table2excel.js"></script>


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

        h1 {

            background-color: #008fb3;
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






    <!-- RECORDS TABLE HTML -->
    <div class="fade-in-image">


        <div class="table-container">


            <center>
                <b>
                    <h1 class=" w3-text-white">QR Users Logs</h1>
                </b>
            </center>
            <!-- TABLE FOR EXCEL EXPORT -->
            <table id="example-table" class=" table ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name </th>
                        <th>Last Name</th>
                        <th> ID no. </th>
                        <th>Department</th>
                        <th>Pin</th>
                        <th>Time in </th>
                        <th>Time out </th>
                        <th>Settings </th>
                    </tr>
                <tbody>

                    <div class="search-container bg-info">

                        <form action="search_qr_code_user.php" method="post" class="search-bar">

                            <!-- To link for the search table in Search.php -->
                            <input type=" text" placeholder="search" name="search">
                            <button name="submit"> SEARCH </button><button id="downloadexcel"> EXPORT </button>


                        </form>



                        <br>
                        </br>
                    </div>

                    <?php
                    error_reporting(0);

                    $conn = new PDO("mysql:host=localhost;dbname=fr", 'root', '');

                    if (isset($_POST["submit"])) {
                        $str = $_POST["search"];
                        $sth = $conn->prepare("SELECT * FROM `qr_logs-users` WHERE qr_studentid = '$str'");

                        $sth->setFetchMode(PDO::FETCH_OBJ);
                        $sth->execute();

                        if ($result = $sth->fetch()) {
                    ?>



                            <tr>
                                <td><?php echo $result->id; ?></td>
                                <td><?php echo $result->qr_firstname; ?></td>
                                <td><?php echo $result->qr_lastname; ?></td>
                                <td><?php echo $result->qr_studentid; ?></td>
                                <td><?php echo $result->qr_course; ?></td>
                                <td><?php echo $result->qr_pin; ?></td>
                                <td><?php echo $result->qr_time_in; ?></td>
                                <td><?php echo $result->qr_time_out; ?></td>



                            </tr>


                    <?php
                        } else {
                            echo "";
                        }
                    }



                    ?>




                </tbody>
                </thead>
            </table>

</body>
</div>

<!-- JS FOR EXPORTING TO EXCEL -->
<script>
    document.getElementById('downloadexcel').addEventListener('click', function() {

        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("#example-table"));

    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>

</html>