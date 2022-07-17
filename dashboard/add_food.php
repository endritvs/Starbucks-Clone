<title>Add Food</title>
<style>
    html {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: linear-gradient(#141e30, #243b55);
    }

    .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, .5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }

    .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }

    .update1 {
        border: none;
        background: #03e9f4;
        padding: 10px;
        border-radius: 100px;
        color: #fff;
        font-weight: bold;
    }

    .update1:hover {
        background: #243b55;
        color: #03e9f4;
    }
</style>
<?php

use  dashboard\libs\Ushqimet;

include('libs/ushqimet.php');
$u1 = new Ushqimet();



if (isset($_POST['add'])) {
    $u1->setEmri($_POST['emri']);
    $u1->setCmimi($_POST['cmimi']);
    $u1->setFotoUshqimit($_POST['foto']);
    $u1->setLloji($_POST['lloji']);

    $u1->create_food();
}
?>
<br>
<br>
<div class="login-box">
    <h2>Edit Food</h2>
    <form method="post">
        <div class="user-box"><input type="text" name="emri" required=""><label>Name</label></div>
        <div class="user-box"><input type="number" name="cmimi" required=""><label>Price</label></div>
        <div class="user-box"><input type="file" name="foto" required=""></div>
        <div class="user-box"><input type="text" name="lloji" required=""><label>Type</label></div>

        <input class="update1" type="submit" value="Add Food" name="add">

    </form>
</div>