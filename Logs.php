<?php
include 'err.php';
include 'session_checker.php';
include 'config.php';

#Fetch the data from database
$sel = "SELECT * FROM fr_logs";
$query = $conn->query($sel);



?>




<!DOCTYPE html">
<html>

<head>



    <link rel=" icon" href="images/logo.png">
    <!-- CSS FOR SIDE BAR and NAVBAR -->
    <link rel=" stylesheet" type="text/css" href="css/design.css">
    <link rel="stylesheet" type="text/css" href="css/w3.css">
    <!-- CSS SEARCHBAR -->
    <link rel="stylesheet" href="css/searchbar.css">
    <link rel="stylesheet" href="css/search.css">



    <!-- SCRIPT FOR EXCEL EXPORT-->

    <script src="table2excel.js"></script>



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

        table-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            margin-left: auto;
        }

        h1 {
            font-family: 'Montserrat', sans-serif;
            text-align: center;
            font-weight: 700;
            margin-top: 10px;

        }

        .title-container {


            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.20),
                0 5px 5px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 15rem;
            height: auto;

        }




        a {
            color: white;
        }



        th,
        td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #DDD;
        }

        tr:hover {
            background-color: #D6EEEE;
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










    </header>


    <!-- RECORDS TABLE HTML -->
    <div class="fade-in-image">


        <div class="table-container">
            <h1 class="w3-cyan w3-text-white">FaceCognition Logs</h1>


            <!-- TABLE FOR EXCEL EXPORT -->
            <table id="example-table" class=" table ">
                <thead>
                    <tr>
                        <th></th>
                        <th>First Name </th>
                        <th>Last Name</th>
                        <th>Student ID</th>
                        <th>Department</th>
                        <th> Email </th>
                        <th>Time in </th>
                        <th>Time out </th>

                    </tr>
                <tbody>

                    <div class="search-container bg-info">

                        <form action=" search_fr.php" method="post" class="search-bar">

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
                    $sel = "SELECT * FROM `fr_logs` ";
                    $query = $conn->query($sel);

                    $num = mysqli_num_rows($query);
                    if ($num > 0) {
                        while ($result = $query->fetch_assoc()) {

                            echo "
          <tr>
          <td>" . $result['count'] . " </td>
          <td>" . $result['ru_firstname'] . " </td>
          <td>" . $result['ru_lastname'] . " </td>
          <td>" . $result['ru_studentid'] . " </td>
          <td>" . $result['ru_course'] . " </td>
          <td>" . $result['ru_email'] . " </td>
          <td> " . $result['time_in'] . "</td>
          <td> " . $result['time_out'] . "</td>
          
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

</head>

</html>