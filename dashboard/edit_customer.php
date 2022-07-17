<style>
    html {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-color: #141e30;
        height: 900px;
    }

    .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 500px;
        margin-top: 100px;
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

use libs\Client;

include('libs/client.php');

$client1 = new Client();

if (isset($_GET['id'])) {
    $client1 = $client1->get_user_id($_GET['id']);
}



if (isset($_POST['update'])) {
    $client1->setEmri($_POST['emri']);
    $client1->setMbiemri($_POST['mbiemri']);
    $client1->setEmail($_POST['email']);
    $client1->setUsername($_POST['username']);
    $client1->setPassword($_POST['passwordi']);
    $client1->setRoli($_POST['roli']);
    $client1->setNumriTel($_POST['numriTel']);
    $client1->update_client();
}



?>

<div class="login-box">

    <h2>Edit Client</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="user-box">
            <input type="text" name="emri" required="" value="<?php echo !empty($client1->getEmri()) ? $client1->getEmri() : ""; ?>" />
            <label>Name</label>
        </div>

        <div class="user-box"><input type="text" name="mbiemri" required="" value="<?php if (!empty($client1->getMbiemri())) {
                                                                                        echo $client1->getMbiemri();
                                                                                    } ?>"><label>Surname</label></div>
        <div class="user-box"><input type="email" name="email" required="" value="<?php if (!empty($client1->getEmail())) {
                                                                                        echo $client1->getEmail();
                                                                                    } ?>"><label>Email</label></div>
        <div class="user-box"><input type="text" name="username" required="" value="<?php if (!empty($client1->getUsername())) {
                                                                                        echo $client1->getUsername();
                                                                                    } ?>"><label>Username</label></div>
        <div class="user-box"><input type="password" name="passwordi" required="" value="<?php if (!empty($client1->getPassword())) {
                                                                                                echo $client1->getPassword();
                                                                                            } ?>"><label>Password</label></div>
        <div class="user-box"><input type="number" name="roli" required="" value="<?php if (!empty($client1->getRoli())) {
                                                                                        echo $client1->getRoli();
                                                                                    } ?>"><label>Role</label></div>
        <div class="user-box"><input type="number" name="numriTel" required="" value="<?php if (!empty($client1->getNumriTel())) {
                                                                                            echo $client1->getNumriTel();
                                                                                        } ?>"><label>Numri Tel</label></div>
        <input class="update1" type="submit" value="Update Customer" name="update">

    </form>

</div>