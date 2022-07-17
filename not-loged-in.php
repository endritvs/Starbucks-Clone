<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No user!</title>
</head>
<style>
    #a {
        text-decoration: none;
        text-align: center;
        border-radius: 10px;
        padding: 10px;
        color: white;
        background-color: #1e3932;
    }

    #a:hover {
        background-color: white;
        color: #1e3932;
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

<body>
    <?php include_once('include/navbar.php') ?>
    <br>
    <center>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>You cannot order!</strong> To be able to order something at STARBUCKS create a account!
        </div>
        <br>
        <br>
        <img src="img/Tablet login.gif" alt="">
        <br>
        <br>
        <a id="a" href="register.php">Click here to register!</a>
    </center>


    <br>
    <br>
    <br>
    <?php include_once('include/footer.php') ?>
</body>

</html>