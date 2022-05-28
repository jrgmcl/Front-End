<?php

include 'config.php';


#Fetch the data from database
$sel = "SELECT * FROM log_qr";
$query = $conn->query($sel);



?>




<!DOCTYPE HTML PUBLIC �-//W3C//DTD HTML 4.01//EN� �http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>


    <!--BOOSTRAP -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--JS BUNDLE -->
    <script src="file:///C:/XAMPP/htdocs/Front-End/js/bootstrap.bundle.min.js"></script>
</head>

<!-- CSS FOR SIDE BAR and NAVBAR -->
<link rel="stylesheet" type="text/css" href="css/design.css">

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



    h1 {
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        font-weight: 700;
        margin-top: 10px;
        padding: 2px;
        color: #000;

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

    table-container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
            0 10px 10px rgba(0, 0, 0, 0.22);
        position: relative;
        margin-top: 50px;
        margin-left: 13rem;
    }

    h1 {
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        font-weight: 700;
        margin-top: 10px;
        padding: 2px;
        color: #fff;

    }

    .title-container {


        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.20),
            0 5px 5px rgba(0, 0, 0, 0.22);
        position: relative;
        overflow: hidden;
        width: 10rem;
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

    a {
        color: white;
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


    <!-- RECORDS TABLE HTML -->
    <div class="fade-in-image">
        <div class="title-container" id="title-page">
            <h1>QR User Log</h1>
        </div>

        <div class="table-container">


            <!-- TABLE FOR EXCEL EXPORT -->
            <table id="example-table" class=" table ">
                <thead>
                    <tr>
                        <th>id no.</th>
                        <th>First Name </th>
                        <th>Last Name</th>
                        <th>Department</th>
                        <th> Temp </th>
                        <th>Time in </th>
                        <th>Time out </th>

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
                    #Fetch the data from database
                    $sel = "SELECT * FROM `log_qr` ";
                    $query = $conn->query($sel);

                    $num = mysqli_num_rows($query);
                    if ($num > 0) {
                        while ($result = $query->fetch_assoc()) {

                            echo "
          <tr>

          <td>" . $result['qr_studentid'] . " </td>
          <td>" . $result['qr_firstname'] . " </td>
          <td>" . $result['qr_lastname'] . " </td>
          <td>" . $result['qr_course'] . " </td>
          <td>" . $result['qr_temp'] . " </td>

          <td> " . $result['qr_time_in'] . "</td>
          <td> " . $result['qr_time_out'] . "</td>
          
          </tr> 
          


        ";
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