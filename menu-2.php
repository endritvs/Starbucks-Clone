<?php include_once("include/navbar.php");
?>

<head>
    <link rel="stylesheet" href="css/style-menu.css">
</head>
<style>
    .all-content {
        height: 100%;
    }

    .foto-caffe {
        height: auto;

    }

    .grid-container {
        display: grid;
        grid-template-columns: auto auto;

    }

    .grid-item {


        padding: 20px;
        font-size: 30px;
        text-align: center;
        margin: 10px;
    }

    .grid-item:hover {
        background-color: #D3D3D3;
    }

    .grid-item a,
    img {
        border-radius: 100px;
        width: 25%;
        position: relative;
        right: 70px;
        top: 10px;
        text-decoration: none;
        color: black;
    }

    .grid-item h4 {
        position: relative;
        /* right: 30px; */
        left: 70px;
        bottom: 60px;
        font-size: 20px;

    }
</style>
<div class="all-content">
    <?php include_once('include/sidebar-menu.php') ?>

    <div class="foto-text-caffe">

        <h2>Menu</h2>
        <br>
        <br>
        <?php

        use dashboard\libs\Ushqimet;
        use libs\Client;

        include_once('dashboard/libs/ushqimet.php');
        include_once('dashboard/libs/client.php');

        $food = new Ushqimet();
        $client = new Client();
        if (isset($_GET['id'])) {
            $food = $food->get_food_id($_GET['id']);
        }
        if (isset($_GET['idK'])) {
            $client = $client->get_user_id($_GET['idK']);
        }


        ?>
        <div class="foto-caffe">
            <h3>Drinks</h3>
            <hr>
            <div class='grid-container'>
                <?php foreach ($food->get_all_foods_lloji('kafe') as $f) { ?>

                    <div class='grid-item'><a href='<?php echo "order-food.php?id=" . $f->getIdUshqimit() . "&idK=" .  $_SESSION['klienti']['idKlientit']; ?>'>


                            <img src=' img/<?php echo $f->getFotoUshqimit(); ?>' alt='' />
                            <h4 style='margin-left:15px;'><?php echo strtoupper($f->getEmri()); ?> </h4>
                            <p style='position:relative; left:70px; bottom: 50px; font-size:15px; '>Price: <?php echo $f->getCmimi(); ?>$</p>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>



        <div class="foto-caffe">
            <h3>Food</h3>
            <hr>
            <div class='grid-container'>
                <?php foreach ($food->get_all_foods_lloji('food') as $f) { ?>

                    <div class='grid-item'><a href='<?php echo "order-food.php?id=" . $f->getIdUshqimit() . "&idK=" . $_SESSION['klienti']['idKlientit'];
                                                    ?>'>

                            <img src='img/<?php echo $f->getFotoUshqimit(); ?>' alt='' />
                            <h4 style='margin-left:15px;'><?php echo strtoupper($f->getEmri()); ?> </h4>
                            <p style='position:relative; left:70px; bottom: 50px; font-size:15px; '>Price: <?php echo $f->getCmimi(); ?>$</p>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>


        <div class="foto-caffe">
            <h3>At Home Coffe</h3>
            <hr>
            <div class='grid-container'>
                <?php foreach ($food->get_all_foods_lloji('home') as $f) { ?>

                    <div class='grid-item'><a href='<?php echo "order-food.php?id=" . $f->getIdUshqimit() . "&idK=" .  $_SESSION['klienti']['idKlientit'];
                                                    ?>'>

                            <img src='img/<?php echo $f->getFotoUshqimit(); ?>' alt='' />
                            <h4 style='margin-left:15px;'><?php echo strtoupper($f->getEmri()); ?> </h4>
                            <p style='position:relative; left:70px; bottom: 50px; font-size:15px; '>Price: <?php echo $f->getCmimi(); ?>$</p>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>

        <div class="foto-caffe">
            <h3>Merchandise</h3>
            <hr>
            <div class='grid-container'>
                <?php foreach ($food->get_all_foods_lloji('merch') as $f) { ?>

                    <div class='grid-item'><a href='<?php echo "order-food.php?id=" . $f->getIdUshqimit() . "&idK=" . $_SESSION['klienti']['idKlientit'];
                                                    ?>'>

                            <img src='img/<?php echo $f->getFotoUshqimit(); ?>' alt='' />
                            <h4 style='margin-left:15px;'><?php echo strtoupper($f->getEmri()); ?> </h4>
                            <p style='position:relative; left:70px; bottom: 50px; font-size:15px; '>Price: <?php echo $f->getCmimi(); ?>$</p>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>







    </div>

</div>