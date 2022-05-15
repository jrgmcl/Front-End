<<<<<<< HEAD
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
        <link rel="stylesheet" type="text/css">

        <!-- CSS FOR SEARCHBAR and TABLE-->
        <link rel="stylesheet" href="search.css">
        <link rel="stylesheet" href="searchbar.css">


        <!-- HTML PROGRAM SIDE BAR -->

    <body>

        <!--Sidebar Toggle-->
        <input type="checkbox" id="check">

        <header>

            <label for="check">
                <i class=" fa-solid fa-bars" id="sidebar_btn"></i>
            </label>

            <!--LOGO LOCATION-->
            <div class="left_area">
                <h3> STI College <span> Cubao</span></h3>
            </div>

            <!--SHOWS CURRENT DATE AND TIME-->
            <div class="date_time">
                <span>Date/Time:
                    <?php echo (strftime("%m/%d/%Y %H:%M")); ?></span>

            </div>

            <!-- LOG OUT BUTTON-->
            <div class="right_area">
                <a href="Logout.php" class="logout_btn">Log out</a>
            </div>

        </header>



        <div class="sidebar">

            <center>
                <br>
                <br>
                <H4> Welcome, Admin! </h4>
                <br>
                <br>
            </center>

            <!--Menu Sidebar Items-->
            <a href="dashboard.php" class="dash-board">
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

            <a href="request.php">
                <span class="icon">
                    <i class='fa-solid fa-user-gear' style='color:#fdfcfc'></i></span>
                <span class="item">Request</span></a></li>
        </div>
        </div>

        <!-- TABLE HTML -->

        <div class="table-container">
            <h1 class="heading">STI College Records</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email </th>
                        <th>Student ID</th>
                        <th>Course</th>

                        <th>Time in </th>
                        <th>Time out </th>
                    </tr>
                    </tbody>

                    <div class="search-container">
                        <form action=" search.php" method="post" class="search-bar">
                            <!-- To link for the search table in search.php -->
                            <input type=" text" placeholder="search " name="search">
                            <button name="submit"> SEARCH </button>
                        </form>

                        <br>
                        </br>
                    </div>

                    <?php
                    error_reporting(0);

                    $conn = new PDO("mysql:host=localhost;dbname=fr", 'root', '');

                    if (isset($_POST["submit"])) {
                        $str = $_POST["search"];
                        $sth = $conn->prepare("SELECT * FROM `rgstrd_users` WHERE ru_studentid = '$str'");

                        $sth->setFetchMode(PDO::FETCH_OBJ);
                        $sth->execute();

                        if ($result = $sth->fetch()) {


                    ?>

                            <tr>
                                <td><?php echo $result->id; ?></td>
                                <td><?php echo $result->ru_name; ?></td>
                                <td><?php echo $result->ru_email; ?></td>
                                <td><?php echo $result->ru_studentid; ?></td>
                                <td><?php echo $result->ru_course; ?></td>
                                <td><?php echo $result->time_in; ?></td>
                                <td><?php echo $result->time_out; ?></td>
                            </tr>

                    <?php
                        } else {
                            echo "NAME DO NOT EXIST";
                        }
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

=======
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
        <link rel="stylesheet" type="text/css">

        <!-- CSS FOR SEARCHBAR and TABLE-->
        <link rel="stylesheet" href="search.css">
        <link rel="stylesheet" href="searchbar.css">


        <!-- HTML PROGRAM SIDE BAR -->

    <body>

        <!--Sidebar Toggle-->
        <input type="checkbox" id="check">

        <header>

            <label for="check">
                <i class=" fa-solid fa-bars" id="sidebar_btn"></i>
            </label>

            <!--LOGO LOCATION-->
            <div class="left_area">
                <h3> STI College <span> Cubao</span></h3>
            </div>

            <!--SHOWS CURRENT DATE AND TIME-->
            <div class="date_time">
                <span>Date/Time:
                    <?php echo (strftime("%m/%d/%Y %H:%M")); ?></span>

            </div>

            <!-- LOG OUT BUTTON-->
            <div class="right_area">
                <a href="Logout.php" class="logout_btn">Log out</a>
            </div>

        </header>



        <div class="sidebar">

            <center>
                <br>
                <br>
                <H4> Welcome, Admin! </h4>
                <br>
                <br>
            </center>

            <!--Menu Sidebar Items-->
            <a href="dashboard.php" class="dash-board">
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

            <a href="request.php">
                <span class="icon">
                    <i class='fa-solid fa-user-gear' style='color:#fdfcfc'></i></span>
                <span class="item">Request</span></a></li>
        </div>
        </div>

        <!-- TABLE HTML -->

        <div class="table-container">
            <h1 class="heading">STI College Records</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email </th>
                        <th>Student ID</th>
                        <th>Course</th>

                        <th>Time in </th>
                        <th>Time out </th>
                    </tr>
                    </tbody>

                    <div class="search-container">
                        <form action=" search.php" method="post" class="search-bar">
                            <!-- To link for the search table in search.php -->
                            <input type=" text" placeholder="search " name="search">
                            <button name="submit"> SEARCH </button>
                        </form>

                        <br>
                        </br>
                    </div>

                    <?php
                    error_reporting(0);

                    $conn = new PDO("mysql:host=localhost;dbname=fr", 'root', '');

                    if (isset($_POST["submit"])) {
                        $str = $_POST["search"];
                        $sth = $conn->prepare("SELECT * FROM `rgstrd_users` WHERE ru_studentid = '$str'");

                        $sth->setFetchMode(PDO::FETCH_OBJ);
                        $sth->execute();

                        if ($result = $sth->fetch()) {


                    ?>

                            <tr>
                                <td><?php echo $result->id; ?></td>
                                <td><?php echo $result->ru_name; ?></td>
                                <td><?php echo $result->ru_email; ?></td>
                                <td><?php echo $result->ru_studentid; ?></td>
                                <td><?php echo $result->ru_course; ?></td>
                                <td><?php echo $result->time_in; ?></td>
                                <td><?php echo $result->time_out; ?></td>
                            </tr>

                    <?php
                        } else {
                            echo "NAME DO NOT EXIST";
                        }
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

>>>>>>> 5f5b14b61e94c55a9a23ed64613097463a6bfb08
    </html>