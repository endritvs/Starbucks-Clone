<?php include_once("include/navbar.php");
?>

<head>
    <link rel="stylesheet" href="css/register.css">
</head>
<style>
    .register111 {
        visibility: hidden;
        text-align: center;
        font-size: 20px;

    }

    #msg {
        color: #fff;
        text-align: center;
        background-color: #005536;
        width: 600px;
        border-radius: 10px;
        padding: 10px;
        position: relative;
        top: 50px;
        left: 430px;
    }

    .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
        width: 50%;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
</style>

<?php

use libs\client;

include_once('dashboard/libs/client.php');
$user = new client();
global $dbcon;

$dbcon = mysqli_connect('localhost', 'root', '', 'starbucks');
if (!$dbcon) {
    die("DESHTOI LIDHJA ME DATABAZE!");
}

if (isset($_POST['regjistro'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $numriTel = $_POST['tel'];
    $password = $_POST['password'];



    $check_email = mysqli_query($dbcon, "SELECT email FROM klient where email ='$email' ");

    $check_username = mysqli_query($dbcon, "SELECT username FROM klient where username = '$username'");
    if (mysqli_num_rows($check_email) > 0 || mysqli_num_rows($check_username) > 0) {
?>
        <br>
        <center>
            <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>ERROR IN CREATING ACCOUNT!</strong> EMAIL OR USERNAME ALREADY TAKEN! TRY ANOTHER
            </div>
        </center>

        <?php
    } else {
        $sql = "INSERT INTO klient(emri,mbiemri,email,username,numriTel,passwordi) ";
        $sql .= " VALUES('$name','$lastname','$email','$username','$numriTel','$password')";

        $klientit = mysqli_query($dbcon, $sql);
        if ($klientit) {

        ?>

            <p id="msg"></p>
            <br>
            <br>

            <script>
                var msg = "Success! You have successfully created an account in STARBUCKS.";
                document.getElementById("msg").innerHTML = msg;

                setTimeout(function() {
                    document.getElementById("msg").style.display = 'none';
                }, 5500);
            </script>

<?php

        }
    }
}





?>

<form method="post">
    <div class="container">
        <label>Name : </label>
        <input type="text" placeholder="Enter Name" id="name" name="name" required>
        <p style="color:red; font-size:12px;" id="nameID"></p>
        <label>Last Name : </label>
        <input type="text" placeholder="Enter Last Name" id="lastname" name="lastname" required>
        <p style="color:red; font-size:12px;" id="lastnameID"></p>
        <label>Email : </label>
        <input type="email" placeholder="Enter Email" id="email" name="email" required>
        <p style="color:red; font-size:12px;" id="emailID"></p>
        <label>Username : </label>
        <input type="text" placeholder="Enter Username" id="username" name="username" required>
        <p style="color:red; font-size:12px;" id="usernameID"></p>
        <label>Phone no : </label>
        <input type="text" placeholder="Enter Phone no." id="tel" name="tel" required>
        <p style="color:red; font-size:12px;" id=""></p>
        <label>Password : </label>
        <input type="password" placeholder="Enter Password" id="password" name="password" required>
        <p style="color:red; font-size:12px;" id="passwordID"></p>
        <button type="submit" name="regjistro" onclick="valido1()">Register</button>
        You Have Account?
        <button type="button" class="cancelbtn"><a href="join.php">Log In</a></button>

    </div>
</form>
<script>
    function valido1() {
        var name = document.getElementById('name').value;
        var lastname = document.getElementById('lastname').value;
        var email = document.getElementById('email').value;
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        //regex for name and lastname
        regex = /^[a-zA-Z ]{2,30}$/;
        nameRegex = regex.test(name);
        lastnameRegex = regex.test(lastname);
        //regex for name and lastname

        //regex for email hope works
        ///\S+@\S+\.\S+/
        regexEmail = /\S+@\S+\.\S+/;
        regexE = regexEmail.test(email);
        //regex for email it works hahahahaha

        //regex for username 
        regexUsername = /^(?=.{8,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/;
        regexU = regexUsername.test(username);
        //regex for username 

        //regex for password
        regexPassword = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        regexP = regexPassword.test(password);
        //regex for password

        if (!nameRegex) {
            document.getElementById('nameID').innerHTML = "Shtyp si duhet emrin! Emri nuk duhet te pranoj asgje tjeter pos shkronjave!";
        }
        if (!lastnameRegex) {
            document.getElementById('lastnameID').innerHTML = "Shtyp si duhet mbiemrin! Mbiemri nuk duhet te pranoj asgje tjeter pos shkronjave!";
        }
        if (!regexE) {
            document.getElementById('emailID').innerHTML = "Email-i duhet te jete valid!";
        }
        if (!regexU) {
            document.getElementById('usernameID').innerHTML = "Shkruaj si duhet username!";
        }
        if (!regexP) {
            document.getElementById('passwordID').innerHTML = "Shkruaj si duhet passwordin se paku te kete nje karakter dhe nje numer!";
        }


    }
</script>




<?php include_once("include/footer.php");
?>