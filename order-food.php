<?php include_once("include/navbar.php");
?>
<style>
    .main {
        width: 100%;
        height: 400px;
        background-color: rgb(31, 57, 51);
    }

    .foto-pershkrimi {
        display: flex;
    }

    .foto img {
        width: 50%;
        border-radius: 100px;
        position: relative;
        top: 50px;
        left: 50px;

    }

    .pershkrimiii h1 {
        font-size: 35px;
        font-weight: bold;
    }



    .pershkrimiii h1 {
        color: white;
        position: relative;
        top: 150px;
        left: 100px;

    }

    .pershkrimiii h3 {
        color: white;
        position: relative;
        top: 160px;
        left: 100px;
    }

    form {
        position: relative;
        left: 350px;
    }

    input {
        width: 50%;
        padding: 10px;
        border: 1px solid rgb(31, 57, 51);
        border-radius: 10px;
    }

    button {
        padding: 15px;
        border: none;
        background-color: rgb(31, 57, 51);
        color: white;
        border-radius: 10px;
        font-weight: bold;
    }

    button:hover {
        color: rgb(31, 57, 51);
        background-color: white;
    }
</style>
<?php


use dashboard\libs\Ushqimet, dashboard\libs\Porosit, libs\Client;


include_once('dashboard/libs/ushqimet.php');
include_once('dashboard/libs/porosit.php');
include_once('dashboard/libs/client.php');




$ushqimi = new Ushqimet();
if (isset($_GET['id'])) {
    $ushqimi = $ushqimi->get_food_id($_GET['id']);
}

$client = new Client();
if (isset($_GET['idK'])) {
    $client = $client->get_user_id($_GET['idK']);
}

//	emriKlientit	mbiemriKlientit	emailKlientit	numriTel	idPorosis	emriUshqimit	cmimi	fotoUshqimit	lloji	idKlientit	idUshqimit
$ushqimi1 = new Porosit();
if (isset($_POST['order'])) {
    $ushqimi1->setEmri($_POST['emriKlientit']);
    $ushqimi1->setMbiemri($_POST['mbiemriKlientit']);
    $ushqimi1->setEmail($_POST['emailKlientit']);
    $ushqimi1->setNumriTel($_POST['numriTel']);
    $ushqimi1->setEmriUshqimit($_POST['emriUshqimit']);
    $ushqimi1->setCmimi($_POST['cmimi']);
    $ushqimi1->setFotoUshqimit($_POST['fotoUshqimit']);
    $ushqimi1->setLloji($_POST['lloji']);
    $ushqimi1->setIDKlientit($_POST['idKlientit']);
    $ushqimi1->setIDUshqimit($_POST['idUshqimit']);
    $ushqimi1->create_orders();
}


?>
<div class="main">

    <div class="foto-pershkrimi">
        <div class="foto">
            <img src="img/<?php echo $ushqimi->getFotoUshqimit(); ?>" alt="" />
        </div>
        <div class="pershkrimiii">
            <h1><?php echo strtoupper($ushqimi->getEmri()); ?></h1>
            <h3>Price: <?php echo $ushqimi->getCmimi(); ?>$</h3>
        </div>

    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="forma1">

    <form action="" method="post">
        <label>Emri Ushqimit: </label>
        <br>



        <input type="text" placeholder="Emri Ushqimit" name="emriUshqimit" required value="<?php if (!empty($ushqimi->getEmri())) {
                                                                                                echo strtoupper($ushqimi->getEmri());
                                                                                            } ?>">
        <br>
        <br>
        <label>Cmimi : </label>
        <br>
        <input type="number" placeholder="Cmimi Ushqimit" name="cmimi" required value="<?php if (!empty($ushqimi->getCmimi())) {
                                                                                            echo strtoupper($ushqimi->getCmimi());
                                                                                        } ?>">
        <input type="hidden" name="fotoUshqimit" required value="<?php if (!empty($ushqimi->getFotoUshqimit())) {
                                                                        echo strtoupper($ushqimi->getFotoUshqimit());
                                                                    } ?>">
        <input type="hidden" name="idUshqimit" required value="<?php if (!empty($ushqimi->getIdUshqimit())) {
                                                                    echo strtoupper($ushqimi->getIdUshqimit());
                                                                } ?>">

        <input type="hidden" name="lloji" required value="<?php if (!empty($ushqimi->getLloji())) {
                                                                echo strtoupper($ushqimi->getLloji());
                                                            } ?>">


        <input type="hidden" name="idKlientit" required value="<?php if (!empty($client->getID())) {
                                                                    echo strtoupper($client->getID());
                                                                } ?>">
        <br>
        <br>
        <label>Emri : </label>
        <br>
        <input type="text" name="emriKlientit" required value="<?php if (!empty($client->getEmri())) {
                                                                    echo strtoupper($client->getEmri());
                                                                } ?>">
        <br>
        <br>
        <label>Mbiemri : </label>
        <br>
        <input type="text" name="mbiemriKlientit" required value="<?php if (!empty($client->getMbiemri())) {
                                                                        echo strtoupper($client->getMbiemri());
                                                                    } ?>">

        <br>
        <br>
        <label>Email : </label>
        <br>
        <input type="text" name="emailKlientit" required value="<?php if (!empty($client->getEmail())) {
                                                                    echo strtoupper($client->getEmail());
                                                                } ?>">

        <br>
        <br>
        <label>Numri Telefonit : </label>
        <br>
        <input type="text" name="numriTel" required value="<?php if (!empty($client->getNumriTel())) {
                                                                echo strtoupper($client->getNumriTel());
                                                            } ?>">

        <br>
        <br>
        <button class="order" type="submit" name="order">Order</button>
    </form>
</div>
<br>
<br>
<br>
<?php include_once("include/footer.php");
?>