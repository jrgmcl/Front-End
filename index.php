<?php

include 'config.php';
error_reporting(0);


$select = "SELECT * FROM rgstrd_users ";
$query = mysqli_query($conn, $select);

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
<link rel="stylesheet" href="dashstyles.css" />
<link rel="sytylesheet" type="text/css">

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



  h1 {
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    font-weight: 700;
    margin-top: 10px;
    padding: 2px;
    color: #black;

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
    width: 70rem;
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
</style>



<!-- CSS MAIN ENDS -->

<body>

  <ul class=" nav justify-content-center bg-info p-1">

    <div class=" image">
      <img src="images/logo.png" width="95" height="95">
    </div>

    <li class="nav-item ">
      <a class="nav-link text-white " href="dashboard.php">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white  " href="index.php">Records</a>
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




  <!-- RECORDS TABLE HTML -->

  <div class="title-container" id="title-page">
    <h1>STI College Records</h1>
  </div>

  <div class="table-container">


    <!-- TABLE FOR EXCEL EXPORT -->
    <table id="example-table" class=" table ">
      <thead>
        <tr>

          <th>Name</th>
          <th>Email </th>
          <th>Student ID</th>
          <th>Course</th>

          <th>Time in </th>
          <th>Time out </th>
        </tr>
      <tbody>

        <div class="search-container bg-info">

          <form action=" search.php" method="post" class="search-bar">

            <!-- To link for the search table in search.php -->
            <input type=" text" placeholder="search" name="search">
            <button name="submit"> SEARCH </button><button id="downloadexcel"> EXPORT </button>


          </form>



          <br>
          </br>
        </div>


        <?php
        $sel = "SELECT * FROM rgstrd_users";
        $query = $conn->query($sel);
        while ($result = $query->fetch_assoc()) {

          echo "
          <tr>

         
          <td>" . $result['ru_name'] . " </td>
          <td>" . $result['ru_email'] . " </td>
          <td>" . $result['ru_studentid'] . " </td>
          <td>" . $result['ru_course'] . " </td>
          <td>" . $result['time_out'] . " </td>
          <td>" . $result['time_in'] . " </td>


        ";
        }



        ?>



      </tbody>
      </thead>
    </table>
  </div>
</body>

<!-- JS FOR EXPORTING TO EXCEL -->
<script>
  document.getElementById('downloadexcel').addEventListener('click', function() {

    var table2excel = new Table2Excel();
    table2excel.export(document.querySelectorAll("#example-table"));

  });
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

</html>