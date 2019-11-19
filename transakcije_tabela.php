<?php 
  require_once "konekcija.php";  
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="medi.php">Medijateka</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="instrumenti_tabela.php">Instrumenti <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="korisnici_tabela.php">Korisnici</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>

    <hr><br><br>

  </head>
  <body>
      <table id="table_id" class="display">
        <thead>
            <tr>
                <th>id</th>
                <th>korisnici_ID</th>
                <th>instrumenti_ID</th>
                <th>iznajmljeno</th>
                <th>datum_iznajmljivanja</th>
                <th>datum_vracanja</th>
            </tr>
        </thead>
        <tbody>

          <?php 
          require_once "konekcija.php";

          $sql = "SELECT * FROM transakcije";
          $query = mysqli_query($db,$sql);
          
          while ($rezultat = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$rezultat['korisnici_ID']. "</td>";
            echo "<td>".$rezultat['instrumenti_ID']. "</td>";
            echo "<td>".$rezultat['iznajmljeno']. "</td>";
            echo "<td>".$rezultat['datum_iznajmljivanja']. "</td>";
            echo "<td>".$rezultat['datum_vracanja']. "</td>";

          }

         ?>

        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <script>

      $(document).ready( function () {
      $('#table_id').DataTable();
      } );

    </script>

  </body>
</html>