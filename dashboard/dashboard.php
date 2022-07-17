<?php

use libs\client, dashboard\libs\Ushqimet, dashboard\libs\Porosit;

include_once('libs/Client.php');
include_once('libs/ushqimet.php');
include_once('libs/porosit.php');
include_once('libs/navbar-dashboard.php');

?>

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
    <h1 class="h2">Dashboard - STARBUCKS</h1>

  </div>



  <h2>Users Data</h2>
  <div class="table-responsive">
    <table id="example" class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col" class='text-center'>ID KLIENTIT</th>
          <th scope="col" class='text-center'>EMRI</th>
          <th scope="col" class='text-center'>MBIEMRI</th>
          <th scope="col" class='text-center'>EMAIL</th>
          <th scope="col" class='text-center'>USERNAME</th>
          <th scope="col" class='text-center'>NUMRI TEL</th>


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
          echo "<td class='text-center'>" . $c->getNumriTel() . "</td>";


          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <br>
  <br>
  <br>
  <script>
    $(document).ready(function() {
      $('#example1').DataTable();
    });
  </script>

  <h2>Food Data</h2>
  <div class="table-responsive">
    <table id="example1" class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col" class='text-center'>ID USHQIMIT</th>
          <th scope="col" class='text-center'>EMRI</th>
          <th scope="col" class='text-center'>CMIMI</th>
          <th scope="col" class='text-center'>FOTOUSHQIMIT</th>


        </tr>
      </thead>
      <tbody id="myTable">
        <?php
        $food = new Ushqimet();
        foreach ($food->get_all_foods() as $f) {
          echo "<tr>";
          echo  "<td class='text-center'>" . $f->getIdUshqimit() . "</td>";
          echo  "<td class='text-center'>" . $f->getEmri() . "</td>";
          echo "<td class='text-center'>" . $f->getCmimi() . "$</td>";
          echo "<td class='text-center'>" . $f->getFotoUshqimit() . "</td>";

          echo "</tr>";
        }
        ?>
      </tbody>

    </table>
  </div>

  <br>
  <br>
  <br>

  <script>
    $(document).ready(function() {
      $('#example11').DataTable();
    });
  </script>

  <h2>Orders Data</h2>
  <div class="table-responsive">
    <table id="example11" class="table table-striped table-sm">
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




          echo "</tr>";
        }
        ?>
      </tbody>

    </table>
  </div>

  <br>
  <br>
  <br>

</main>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
</body>

</html>