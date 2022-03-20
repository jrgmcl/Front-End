<DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> STI Admin Portal</title>
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="dashstyles.css" />
    <link rel= "sytylesheet" type= "text/css">

    
<!--CSS FOR TABLE RECORDS -->
<style>
body{

  margin:0;
  padding:0;
  background: url(Default.jpg);
  background-position: center;
}

.table-container{

  padding:0;
  margin-left: 350px;
  margin-top: 50px; 
  position: absolute;
}


.heading {
  font-size: 40px;
  text-align: center;
  color: #555d5d;
  margin-bottom: 10px;
  margin-top: 20px;
}

.table {
  width: 100%;
  border-collapse: collapse;
  align-items: center;
}

.table thead {
  background-color: #5a9696;
}

.table thead tr th {
  font-size: 18px;
  font-weight: 200l;
  letter-spacing: 0.5px;
  color: #f2f8ee;
  opacity: 1;
  padding: 20px;
  vertical-align: center;
  border: 1.5px solid #f2f8ee;
  text-align: center;
}

.table tbody tr td {
  font-size: 14px;
  letter-spacing: 0.35px;
  font-weight: normal;
  color: #f2f8ee;
  background-color: #555d5d;
  padding: 8px;
  text-align: center;
  border: 1.5px solid #f2f8ee;
}

.table .text_status {
  font: 34px;
  font-weight: bold;
  letter-spacing: 0.35px;
  color: #87ff6f;
}

.table .off_status {
  font: 34px;
  font-weight: bold;
  letter-spacing: 0.35px;
  color: #ff5050;
}

@media (max-width: 770px) {
  .table thead {
    display: none;
  }

  .table,
  .table tbody,
  .table tr,
  .table td {
    display: block;
    width: 100%;
  }

  .table tr {
    margin-bottom: 15px;
  }

  .table tbody tr td {
    text-align: right;
    padding-left: 50%;
    position: relative;
  }

  .table td::before {
    content: attr(data-label);
    position: absolute;
    left: 0;
    width: 50%;
    padding-left: 15px;
    font-weight: 600;
    font-size: 14px;
    text-align: left;
  }

  .heading h1 {

    text-align: center;
    margin-bottom: 20px;
  }

}
</style>

<!--CSS FOR TABLE ENDS-->

  
  <!-- HTML PROGRAM SIDE BAR -->

    <body>
   
      <!--Sidebar Toggle-->
      <input type="checkbox" id="check">
      <header>
        <label for="check">
          <i class=" fa-solid fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
          <h3>STI College <span>Cubao</span></h3>
        </div>
        <div class="right_area"><a href="login.php" class="logout_btn">Log out</a>
        </div>
      </header>

      
      <div class="sidebar">
        <center>
          <h4>Admin</h4>
        </center>

        <!--Menu Sidebar Items-->
        <a href="#dash" class="dash-board">
        <span class="icon"><i class='fa-solid fa-bars' style='color:#fafcff'></i></span>
        <span class="item">Dashboard</span></a>

        <a href="index.php">
        <span class="icon">
        <i class='fa-regular fa-address-book' style='color:#f2f2f2'></i></span>
        <span class="item">Records</span></a>

        <a href="Register.php">
        <span class="icon">
        <i class='fa-solid fa-user-plus' style='color:#ffffff'></i></span>
        <span class="item">Register</span></a>

        <a href="#">
        <span class="icon">
        <i class='fa-solid fa-user-gear' style='color:#fdfcfc'></i></span>
        <span class="item">Request</span></a></li>
      </div>
      </div>

    <!-- RECORDS TABLE HTML -->

    <div class="table-container">
      <h1 class="heading">STI College Records</h1>
      <table class="table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email </th>
            <th>Student ID</th>
         
            <th>Time in </th>
            <th>Time out </th>
          </tr>
        <tbody>
        
<?php include ("config.php");

//error_reporting(0);
$query="select * from user_form";
$data=mysqli_query ($conn, $query);
$total=mysqli_num_rows ($data);



//echo $total;

if ($total !=0) {
  while ($result=mysqli_fetch_assoc ($data)) {

    echo "
<tr><td>". $result ['id'] . "</td>
<td>" . $result ['name'] . "</td>
<td>" . $result ['email'] ."</td>
<td>".  $result ['student_id'] . "</td>
<td>" .   $result ['time_in']  .  "</td>
<td>" .   $result ['time_out']  .  "</td></tr>";

  }
}

else {
  echo "No records.";
}
?>


</tbody>
        </thead>
      </table>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
  </html>