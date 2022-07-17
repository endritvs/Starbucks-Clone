<?php

use libs\client;

include_once('libs/Client.php');
include_once('libs/navbar-dashboard.php');
?>



<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">USERS OF STARBUCKS</h1>
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
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col ">
            <div class="card h-100 bg-primary">
                <br>
                <i class="fas fa-users text-center text-light fs-1"></i>
                <br>
                <div class="card-body">
                    <h5 class="card-title text-center text-light">Total Users:</h5>
                    <h4 class="card-text text-center text-light"><?php $testObj = new client();
                                                                    $testObj->getRowsNumber() ?></h4>
                </div>
            </div>
        </div>


    </div>

    <h2>Users Data</h2>
    <div class="table-responsive">
        <table id="example" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class='text-center' scope="col">ID KLIENTIT</th>
                    <th class='text-center' scope="col">EMRI</th>
                    <th class='text-center' scope="col">MBIEMRI</th>
                    <th class='text-center' scope="col">EMAIL</th>
                    <th class='text-center' scope="col">USERNAME</th>
                    <th class='text-center' scope="col">PASSWORD</th>
                    <th class='text-center' scope="col">ROLI</th>
                    <th class='text-center' scope="col">NUMRI TEL</th>
                    <th class='text-center' scope="col">EDIT</th>
                    <th class='text-center' scope="col">DELETE</th>

                </tr>
            </thead>
            <tbody id="myTable">
                <?php
                $client = new Client();
                foreach ($client->get_all_clients() as $c) {
                    echo "<tr>";
                    echo  "<td class='text-center'>" . $c->getID() . "</td>";
                    echo  "<td class='text-center'>" . $c->getEmri() . "</td>";
                    echo "<td class='text-center'>" . $c->getMbiemri() . "</td>";
                    echo "<td class='text-center'>" . $c->getEmail() . "</td>";
                    echo "<td class='text-center'>" . $c->getUsername() . "</td>";
                    echo "<td class='text-center'>" . $c->getPassword() . "</td>";
                    echo "<td class='text-center'>" . $c->getRoli() . "</td>";
                    echo "<td class='text-center'>" . $c->getNumriTel() . "</td>";

                    echo "<td class='text-center'><a href='edit_customer.php?id=" . $c->getID() . "'><i class='fas fa-user-edit'></i></a></td>";
                    echo "<td class='text-center'><a href='delete_customer.php?id=" . $c->getID() . "'><i class='fas fa-user-slash'></i></a></td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>