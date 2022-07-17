<?php include_once("include/navbar.php");


use  dashboard\libs\Porosit;


include_once('dashboard/libs/porosit.php');

$porosit = new Porosit();

if (isset($_GET['id'])) {

    $porosit = $porosit->get_order_byIDK($_GET['id']);
}
$porosit1 = new Porosit();
?>
<style>
    @media (min-width: 768px) {
        .row-cols-md-3>* {
            width: 100% !important;
        }
    }

    .btn {
        margin-top: -50px;
    }

    .card {
        flex-direction: row !important;
    }

    .card img {
        vertical-align: middle;
        width: 109px;
        /* float: left; */
        height: 112px;
    }

    p.card-text {
        width: fit-content;
        float: left;
        margin-right: 50px;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<br>

<div class="row row-cols-1 row-cols-md-3 g-4 m-5">

    <?php foreach ($porosit as $p) {



    ?>

        <div class="col">
            <div class="card h-100">

                <img src='img/<?php echo $p->getFotoUshqimit(); ?>' alt='' />
                <div class="card-body">
                    <h5 class="card-title">Food Name: <?php echo $p->getEmriUshqimit(); ?></h5>
                    <p class="card-text">Price: <?php echo $p->getCmimi(); ?>$</p>
                    <p class="card-text">Name: <?php echo $p->getEmri(); ?></p>
                    <p class="card-text">Surname: <?php echo $p->getMbiemri(); ?></p>
                    <p class="card-text">Email: <?php echo $p->getEmail(); ?></p>
                    <p class="card-text">Nr Kontakt.: <?php echo $p->getNumriTel(); ?></p>
                    <br>

                    <?php echo "<a class='btn btn-danger' href='dashboard/delete_order.php?id=" . $p->getIdPorosis() . "'>DELETE</a>"; ?>
                </div>
            </div>
        </div>
    <?php } ?>



</div>
<div class="row" style="justify-content: end;
    margin-right: 60px;">
    <div class="card text-white bg-success mb-3 ms-5 float-end " style="max-width: 18rem;">
        <div class="card-header " style="line-height: 48px;">Total</div>
        <div class="card-body">
            <h5 class="card-title">Price: <?php $porosit1->get_sum_of_orders($_SESSION['klienti']['idKlientit']); ?>$</h5>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<?php include_once('include/footer.php');
?>