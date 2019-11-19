<?php 
  require_once "konekcija.php";

  $sql = "SELECT * FROM instrumenti";
  $query = mysqli_query($db,$sql);
          

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
    <link rel="stylesheet" type="text/css" href="stajl.css">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="medi.php">Medijateka</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="korisnici_tabela.php">Korisnici</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transakcije_tabela.php">Transakcije</a>
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
                <th>instrumenti</th>
                <th>vrsta</th>
                <th>proizvodjac</th>
                <th>cena</th>               
            </tr>
        </thead>
        <tbody>
        


          <?php 
          require_once "konekcija.php";

          $sql = "SELECT * FROM instrumenti";
          $query = mysqli_query($db,$sql);
          
          while ($rezultat = mysqli_fetch_array($query)) { 

            echo "<tr>";
            echo "<td>".$rezultat['id']. "</td>";
            echo "<td>".$rezultat['naziv']. "</td>";
            echo "<td>".$rezultat['vrsta']. "</td>";
            echo "<td>".$rezultat['proizvodjac']. "</td>";
            echo "<td>".$rezultat['cena']. "</td>";



            

          }

         ?>
          

        </tbody>
    </table>

<div class="container">
    <div class="row">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
  Iznajmi instrument
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       
    <div class="form-group col-md-4">
      <label for="inputState">Instrument</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>violina</option>
        <option>saks</option>
        <option>gitara</option>
        <option>virkla</option>
      </select>
    </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>


    <hr><br><br>

    <div class="row">
      <div class="col-6 offset-3">
        <form action="instrumenti.php" method="POST">
          <input type="text" name="naziv" placeholder="naziv" class="form-control" required=""><br>
          <input type="text" name="vrsta" placeholder="vrsta" class="form-control" required=""><br>
          <input type="text" name="proizvodjac" placeholder="proizvodjac" class="form-control" required=""><br>
          <input type="text" name="cena" placeholder="cena" class="form-control" required=""><br>
          <button type="submit" class="btn btn-secondary form-control">Dodaj instrument</button>
          <br><br>
          <button type="submit" name="subBtn" class="btn btn-danger form-control">Obrisi instrument</button>
          <br><br>

          
          
  
        </form>
      </div>
    </div>

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