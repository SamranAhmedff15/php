<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >Data to perform CRUD Operations</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Creer un nouveau tableau</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Nom du peintre</th>
              <th  scope="col">Nom du tableau</th>
              <th  scope="col"> Quantite en stock</th>
              <th  scope="col"> Reference</th>
              <th  scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM tableaux";  // Requete pour recuperer tous les enrengistrements
            $vu_tableaux= mysqli_query($conn,$query);

            //  En utilisant la boucle while on va afficher toutes les informations
            while($row= mysqli_fetch_assoc($vu_tableaux)){
              $id = $row['id'];                
              $nom_peintre = $row['nom_peintre'];        
              $nom_tableau = $row['nom_tableau'];         
              $quantite = $row['quantite'];
              $reference = $row['reference'];      

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$nom_peintre}</td>";
              echo " <td > {$nom_tableau}</td>";
              echo " <td >{$quantite} </td>";
              echo " <td >{$reference} </td>";

              echo " <td class='text-center'> <a href='view.php?tableau_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&tableau_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Back </a>
    <div>