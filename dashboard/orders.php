<?php

namespace dashboard\libs;

include_once('libs/navbar-dashboard.php');
include_once('libs/porosit.php');

use libs\Database, dashboard\libs\porosit;

$porosit11 = new Porosit();
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <br>
            <br>
            <div class="card bg-primary">
                <br>

                <i class="fas fa-utensils fs-1 text-center text-light"></i>
                <br>
                <div class="card-body">
                    <h5 class="card-title text-center text-light">Total Orders:</h5>
                    <p class="card-text fs-3 text-center text-light">
                        <?php $porosit11->rCmimi(); ?> </p>

                </div>
            </div>
        </div>
        <div class="col">
            <br>
            <br>
            <div class="card bg-danger">
                <br>

                <i class="fas fa-dollar-sign fs-1 text-center text-light"></i>
                <br>
                <div class="card-body">
                    <h5 class="card-title  text-center text-light">SUM Price:</h5>
                    <p class="card-text text-center fs-3 text-light">
                        <?php $porosit11->coutCmimi(); ?>$</p>
                </div>
            </div>
        </div>


    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <br>
    <br>

    <h2>Orders Data</h2>
    <div class="table-responsive">
        <table id="example" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class='text-center' scope="col">EMRI KLIENTIT</th>
                    <th class='text-center' scope="col">MBIEMRI KLIENTIT</th>
                    <th class='text-center' scope="col">EMAIL KLIENTIT</th>
                    <th class='text-center' scope="col">NUMRI TEL</th>
                    <th class='text-center' scope="col">ID POROSIS</th>
                    <th class='text-center' scope="col">EMRI USHQIMIT</th>
                    <th class='text-center' scope="col">CMIMI</th>
                    <th class='text-center' scope="col">FOTO USHQIMIT</th>
                    <th class='text-center' scope="col">LLOJI</th>

                    <th class='text-center' scope="col">DELETE</th>

                </tr>
            </thead>
            <tbody id="myTable">
                <?php
                $porosit1 = new Porosit();

                foreach ($porosit1->getAll_orders() as $p1) {
                    echo "<tr>";
                    echo  "<td class='text-center'>" . $p1->getEmri() . "</td>";
                    echo  "<td class='text-center'>" . $p1->getMbiemri() . "</td>";
                    echo  "<td class='text-center'>" . $p1->getEmail() . "</td>";
                    echo "<td class='text-center'>" . $p1->getNumriTel() . "</td>";
                    echo "<td class='text-center'>" . $p1->getIdPorosis() . "</td>";
                    echo "<td class='text-center'>" . $p1->getEmriUshqimit() . "</td>";
                    echo "<td class='text-center'>" . $p1->getCmimi() . "</td>";
                    echo "<td class='text-center'>" . $p1->getFotoUshqimit() . "</td>";
                    echo "<td class='text-center'>" . $p1->getLloji() . "</td>";


                    echo "<td class='text-center'><a href='delete_order1.php?id=" . $p1->getIdPorosis() . "'>DELETE </a></td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>