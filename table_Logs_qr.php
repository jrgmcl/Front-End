<?php
#Fetch the data from database
$sel = "SELECT * FROM `qr_logs-users`";
$query = $conn->query($sel);

?>

<!DOCTYPE HTML>
<html>

<head>

    <link rel=" icon" href="images/logo.png">
</head>

<!-- CSS FOR SIDE BAR and NAVBAR -->
<link rel=" stylesheet" type="text/css" href="css/design.css">
<link rel="stylesheet" type="text/css" href="css/w3.css">

<!-- CSS SEARCHBAR -->
<link rel="stylesheet" href="css/searchbar.css">
<link rel="stylesheet" href="css/search.css">


<!-- SCRIPT FOR EXCEL EXPORT-->

<script src="table2excel.js"></script>

<script type="text/JavaScript">
    <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
</script>

</head>

<body onload="JavaScript:AutoRefresh(5000);">


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





    <!-- RECORDS TABLE HTML -->
    <div class="fade-in-image">


        <div class="table-container">


            <h1 class="w3-cyan w3-text-white">Visitor Logs</h1>

            <!-- TABLE FOR EXCEL EXPORT -->
            <table id="example-table" class=" table ">

                <body onload="JavaScript:AutoRefresh(5000);">

                </body>
                <thead>
                    <tr>

                        <th>#</th>
                        <th>First Name </th>
                        <th>Last Name</th>
                        <th>Mobile No.</th>
                        <th>Purpose</th>

                        <th>Time in </th>
                        <th>Time out </th>

                    </tr>
                <tbody>

                    <div class="search-container bg-info">

                        <form action=" search_qr.php" method="post" class="search-bar">

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
                    $sel = "SELECT * FROM `qr_logs-visitors` ";
                    $query = $conn->query($sel);

                    $num = mysqli_num_rows($query);
                    if ($num > 0) {
                        while ($result = $query->fetch_assoc()) {
                            if ($result['time_in']) {
                                $timein = date('Y-m-d H:i:s', strtotime($result['time_in']));
                            }
                            if ($result['time_out']) {
                                $timeout = date('Y-m-d H:i:s', strtotime($result['time_out']));
                            }
                            elseif ($result['time_out'] == NULL){
                                $timeout = " ";
                            }
                            
                            echo "
          <tr>
          <td>" . $result['id'] . " </td>

          <td>" . $result['qr_firstname'] . " </td>
          <td>" . $result['qr_lastname'] . " </td>
          <td>" . $result['qr_number'] . " </td>
          <td>" . $result['qr_purpose'] . " </td>
        
          <td> " . $timein . "</td>
          <td> " . $timeout . "</td>
          
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