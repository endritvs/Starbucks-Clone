<?php include_once("include/navbar.php");
?>

<head>
    <link rel="stylesheet" href="css/join.css">

    <head>

        <style>
            #msg {
                color: red;
                text-align: center;
                background-color: #005536;
                width: 600px;
                border-radius: 10px;
                padding: 10px;
                position: relative;
                top: 50px;
                left: 430px;
            }
        </style>

        <?php
        global $dbcon;
        function login($username, $password)
        {


            $dbcon = mysqli_connect('localhost', 'root', '', 'starbucks');
            $sql = "SELECT * FROM klient where username = '$username' and passwordi = '$password'";
            $logini = mysqli_query($dbcon, $sql);
            if (mysqli_num_rows($logini) == 1) {
                $logini = mysqli_fetch_assoc($logini);
                $klienti = array();
                $klienti['idKlientit'] = $logini['idKlientit'];
                $klienti['emri'] = $logini['emri'];
                $klienti['mbiemri'] = $logini['mbiemri'];
                $klienti['email'] = $logini['email'];
                $klienti['username'] = $logini['username'];
                $klienti['passwordi'] = $logini['passwordi'];
                $klienti['roli'] = $logini['roli'];
                $_SESSION['klienti'] = $klienti;
                header("Location: index.php");
            } else {
        ?>
                <p id="msg"></p>

                <script>
                    var msg = "We dont have account with these credentials! Try again!";
                    document.getElementById("msg").innerHTML = msg;

                    setTimeout(function() {
                        document.getElementById("msg").style.display = 'none';
                    }, 5500);
                </script>
        <?php
            }
        }

        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            login($username, $password);
        }

        ?>
        <form method="post">
            <div class="container">
                <label>Username : </label>
                <input type="text" placeholder="Enter Username" id="username" name="username" required>
                <p style="color:red; font-size:12px;" id="idUsername"></p>
                <label>Password : </label>
                <input type="password" placeholder="Enter Password" id="password" name="password" required>
                <p style="color:red; font-size:12px;" id="idPassword"></p>
                <button type="submit" name="login" onclick="valido()">Login</button>
                Don't have account?
                <button type="button" class="cancelbtn"><a href="register.php">Register Now!</a></button>
                Forgot <a href="#"> password? </a>
            </div>
        </form>
        <hr>


        <script>
            function valido() {


                username = document.getElementById("username").value;
                password = document.getElementById("password").value;

                if (!username) {



                    document.getElementById('idUsername').innerHTML = "Shtyp username!";
                }
                if (!password) {
                    document.getElementById('idPassword').innerHTML = "Shtyp password!";
                }
            }
        </script>





        <?php include_once("include/footer.php");
        ?>