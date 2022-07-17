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

        include_once('dashboard/libs/ushqimet.php');

        $food = new Ushqimet();

        ?>
        <div class="foto-caffe">
            <h3>Drinks</h3>
            <hr>
            <?php
            echo  "<div class='grid-container'>";
            foreach ($food->get_all_foods_lloji('kafe') as $f) {



                echo "<div class='grid-item'><a href='not-loged-in.php'>
                        <img src='img/" . $f->getFotoUshqimit() . "'" . " alt=''>";
                echo  "<h4 style='margin-left:15px;'>" . strtoupper($f->getEmri()) . "</h4>";
                echo  "<p style='position:relative; left:70px; bottom: 50px; font-size:15px; '>Price:" . $f->getCmimi() . "$</p>";
                echo "</a>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>


        <div class="foto-caffe">
            <h3>Food</h3>
            <hr>
            <?php
            echo  "<div class='grid-container'>";
            foreach ($food->get_all_foods_lloji('food') as $f) {



                echo "<div class='grid-item'><a href='not-loged-in.php'>
                        <img src='img/" . $f->getFotoUshqimit() . "'" . " alt=''>";
                echo  "<h4 style='margin-left:15px;'>" . strtoupper($f->getEmri()) . "</h4>";
                echo  "<p style='position:relative; left:70px; bottom: 50px; font-size:15px; '>Price:" . $f->getCmimi() . "$</p>";
                echo "</a>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>


        <div class="foto-caffe">
            <h3>At Home Coffe</h3>
            <hr>
            <?php
            echo  "<div class='grid-container'>";
            foreach ($food->get_all_foods_lloji('home') as $f) {



                echo "<div class='grid-item'><a href='not-loged-in.php'>
                        <img src='img/" . $f->getFotoUshqimit() . "'" . " alt=''>";
                echo  "<h4 style='margin-left:15px;'>" . strtoupper($f->getEmri()) . "</h4>";
                echo  "<p style='position:relative; left:70px; bottom: 50px; font-size:15px; '>Price:" . $f->getCmimi() . "$</p>";
                echo "</a>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>

        <div class="foto-caffe">
            <h3>Merchandise</h3>
            <hr>
            <?php
            echo  "<div class='grid-container'>";
            foreach ($food->get_all_foods_lloji('merch') as $f) {



                echo "<div class='grid-item'><a href='not-loged-in.php'>
                        <img src='img/" . $f->getFotoUshqimit() . "'" . " alt=''>";
                echo  "<h4 style='margin-left:15px;'>" . strtoupper($f->getEmri()) . "</h4>";
                echo  "<p style='position:relative; left:70px; bottom: 50px; font-size:15px; '>Price:" . $f->getCmimi() . "$</p>";
                echo "</a>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>






    </div>

</div>