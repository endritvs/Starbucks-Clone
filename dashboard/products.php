<?php

include_once('libs/navbar-dashboard.php');

use dashboard\libs\ushqimet;

include_once('libs/ushqimet.php');

?>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">USERS OF STARBUCKS</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card bg-primary">
                <br>

                <i class="fas fa-utensils fs-1 text-center text-light"></i>
                <br>
                <div class="card-body">
                    <h5 class="card-title text-center text-light">Total Products:</h5>
                    <p class="card-text fs-3 text-center text-light"><?php $testObj = new ushqimet();
                                                                        $testObj->getRowsNumber() ?></p>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-danger">
                <br>

                <i class="fas fa-dollar-sign fs-1 text-center text-light"></i>
                <br>
                <div class="card-body">
                    <h5 class="card-title  text-center text-light">AVG Price of Products</h5>
                    <p class="card-text text-center fs-3 text-light"><?php $testObj = new ushqimet();
                                                                        $testObj->avgCmimi() ?>$</p>
                </div>
            </div>
        </div>


    </div>

    <br>
    <h2>Users Data</h2>
    <br>
    <a class="btn btn-primary text-light" href="add_food.php">ADD FOOD</a>

    <div class="table-responsive">
        <table id="example" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class='text-center' scope="col">ID USHQIMIT</th>
                    <th class='text-center' scope="col">EMRI USHQIMIT</th>
                    <th class='text-center' scope="col">CMIMI</th>
                    <th class='text-center' scope="col">FOTO USHQIMIT</th>
                    <th class='text-center' scope="col">LLOJI</th>
                    <th class='text-center' scope="col">EDIT</th>
                    <th class='text-center' scope="col">DELETE</th>
                    <th class='text-center' scope="col">ADD FOOD</th>

                </tr>
            </thead>
            <tbody id="myTable">
                <?php
                $ushqimet = new Ushqimet();
                foreach ($ushqimet->get_all_foods() as $u) {
                    echo "<tr>";
                    echo  "<td class='text-center'>" . $u->getIdUshqimit() . "</td>";
                    echo  "<td class='text-center'>" . $u->getEmri() . "</td>";
                    echo "<td class='text-center'>" . $u->getCmimi() . "$</td>";
                    echo "<td class='text-center'>" . $u->getFotoUshqimit() . "</td>";
                    echo "<td class='text-center'>" . $u->getLloji() . "</td>";


                    echo "<td class='text-center'><a href='edit_food.php?id=" . $u->getIdUshqimit() . "'><i class='fas fa-pen-alt'></i></a></td>";
                    echo "<td class='text-center'><a href='delete_food.php?id=" . $u->getIdUshqimit() . "'><i class='fas fa-trash-alt'></i></a></td>";
                    echo "<td class='text-center'><a href='add_food.php'><i class='fas fa-plus-square'></i></a></td>";


                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>