<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">Details des tableaux</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col" >ID</th>
          <th  scope="col">Nom du peintre</th>
          <th  scope="col">Nom du tableau</th>
          <th  scope="col">Quantite</th>
          <th  scope="col">Reference</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              
              if (isset($_GET['tableau_id'])) {
                  $userid = $_GET['tableau_id']; 

                  $query="SELECT * FROM tableaux WHERE id = {$userid} ";  
                  $vu_tableaux= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($vu_tableaux))
                  {
                      $id = $row['id'];
                      $nom_peintre = $row['nom_peintre'];
                      $nom_tableau = $row['nom_tableau'];
                      $quantite = $row['quantite'];
                      $reference = $row['reference'];

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$nom_peintre}</td>";
                        echo " <td > {$nom_tableau}</td>";
                        echo " <td >{$quantite} </td>"; 
                        echo " <td >{$reference} </td>"; 
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>