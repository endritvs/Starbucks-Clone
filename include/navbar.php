<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Starbucks</title>
</head>

<body>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            padding: 20px 40px;
            background-color: #fff;
            display: flex;

        }

        .topnav a {
            float: left;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropbtn {
            background-color: #3498DB;
            color: white;
            padding: 5px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover,
        .dropbtn:focus {
            background-color: #2980B9;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: auto;
        }


        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            margin-top: 50px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }
    </style>

    <body>
        <?php

        session_start();



        echo "  <div class='topnav'>
            <a href='index.php' style='font-weight:bold; background: #1e3932; color:#ddd;'>
                STARBUCKS
            </a>";

        echo " <a id='rewards' href='rewards.php'><i class='fas fa-award'></i> Rewards</a>";
        echo " <a href='gift-cards.php'><i class='fas fa-gift'></i> Gift Cards</a>";
        if (isset($_SESSION['klienti'])) {
            echo "<a href='menu-2.php'><i class='fas fa-book-open'></i> Menu</a>";

            echo "<a href='my-orders.php?id=" . $_SESSION['klienti']['idKlientit'] . "'><i class='fas fa-shopping-cart'></i> My Orders</a>";
        ?>

            <div class="dropdown">
                <?php echo "<a onclick='myFunction()' class='dropbtn' style='color:white; background:black; font-weight:bold;text-transform: uppercase'><i class='fas fa-user'></i> " . $_SESSION['klienti']['emri'] . " " . $_SESSION['klienti']['mbiemri'] . "</a>"; ?>
                <div id="myDropdown" class="dropdown-content">
                    <?php
                    echo  "<a href='editcustomer.php?id=" .  $_SESSION['klienti']['idKlientit'] . "'><i class='fas fa-user-edit'></i>Personal Info</a>";
                    if ($_SESSION['klienti']['roli'] == 1) {
                        echo " <a href='dashboard/dashboard.php'><i class='fas fa-info'></i> Dashboard</a>";
                    }

                    echo " <a href='logout.php'><i class='fas fa-sign-out-alt'></i> Log Out</a>";

                    ?>
                </div>

            </div>




        <?php





        } else {
            echo "<a href='menu-1.php'><i class='fas fa-book-open'></i> Menu</a>";
            echo " <a href='join.php'><i class='fas fa-sign-in-alt'></i> Sign In</a>";
            echo " <a href='register.php'><i class='fas fa-user-plus'></i> Register</a>";
        }
        echo " </div>";

        ?>
        <hr>

        <script>
            var rewards = document.getElementById('rewards');

            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>
    </body>

</html>