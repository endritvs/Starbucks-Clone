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

    img {
        width: 20%;
        margin: 15px;
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

use  dashboard\libs\Porosit;

include('libs/porosit.php');
$u1 = new Porosit();

if (isset($_GET['id'])) {
    $u1 = $u1->get_Order_ID($_GET['id']);
}


if (isset($_POST['update2'])) {
    $u1->setEmri($_POST['emri']);
    $u1->setMbiemri($_POST['mbiemri']);
    $u1->setEmail($_POST['email']);
    $u1->setNumriTel($_POST['numriTel']);
    $u1->setEmriUshqimit($_POST['emriUshqimit']);
    $u1->setCmimi($_POST['cmimi']);

    $u1->setLloji($_POST['lloji']);

    $u1->delete_order1($_GET['id']);
}
?>
<title>Edit Order</title>
<br>
<br>
<div class="login-box">
    <h2>Delete Order</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="user-box"><input type="text" name="emri" value="<?php if (!empty($u1->getEmri())) {
                                                                        echo $u1->getEmri();
                                                                    } ?>"><label>Emri</label></div>
        <div class="user-box"><input type="text" name="mbiemri" value="<?php if (!empty($u1->getMbiemri())) {
                                                                            echo $u1->getMbiemri();
                                                                        } ?>"><label>Mbiemri</label></div>
        <div class="user-box"><input type="email" name="email" value="<?php if (!empty($u1->getEmail())) {
                                                                            echo $u1->getEmail();
                                                                        } ?>"></div>
        <div class="user-box"><input type="number" name="numriTel" value="<?php if (!empty($u1->getNumriTel())) {
                                                                                echo $u1->getNumriTel();
                                                                            } ?>"><label>Numri Tel</label></div>
        <div class="user-box"><input type="text" name="emriUshqimit" value="<?php if (!empty($u1->getEmriUshqimit())) {
                                                                                echo $u1->getEmriUshqimit();
                                                                            } ?>"><label>Emri Ushqimit</label></div>
        <div class="user-box"><input type="number" name="cmimi" value="<?php if (!empty($u1->getCmimi())) {
                                                                            echo $u1->getCmimi();
                                                                        } ?>"><label>Cmimi</label></div>


        <div class="user-box"><input type="text" name="lloji" value="<?php if (!empty($u1->getLloji())) {
                                                                            echo $u1->getLloji();
                                                                        } ?>"><label>Lloji</label></div>

        <input class="update1" type="submit" value="Delete Order" name="update2">

    </form>
</div>