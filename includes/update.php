<!-- Header -->
<?php include "../header.php"?>

<?php
   
   if(isset($_GET['tableau_id']))
    {
      $tableau_id = $_GET['tableau_id']; 
    }
      
      $query="SELECT * FROM tableaux WHERE id = $tableau_id ";
      $view_tableaux= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_tableaux))
        {
          $id = $row['id'];
          $nom_peintre = $row['nom_peintre'];
          $nom_tableau = $row['nom_tableau'];
          $quantite = $row['quantite'];
          $reference = $row['reference'];
        }
 
    
    if(isset($_POST['update'])) 
    {
      $nom_peintre = $_POST['nom_peintre'];
      $nom_tableau = $_POST['nom_tableau'];
      $quantite = $_POST['quantite'];
      $reference = $_POST['reference'];
      
      
      $query = "UPDATE tableaux SET nom_peintre = '{$nom_peintre}' , nom_tableau = '{$nom_tableau}', quantite = {$quantite} , reference = '{$reference}' WHERE id = $tableau_id";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Les informations du tableau ont ete mis a jour!')</script>";
    }             
?>

<h1 class="text-center">Mettre a jour les informations du tableau</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="nom_peintre" >Nom du peintre</label>
        <input type="text" name="nom_peintre" class="form-control" value="<?php echo $nom_peintre  ?>">
      </div>

      <div class="form-group">
        <label for="nom_tableau" >Nom du tableau</label>
        <input type="text" name="nom_tableau"  class="form-control" value="<?php echo $nom_tableau  ?>">
      </div>

      <div class="form-group">
        <label for="quantite" >Quantite en stock</label>
        <input type="text" name="quantite"  class="form-control" value="<?php echo $quantite  ?>">
      </div>
        
      <div class="form-group">
        <label for="reference" >Reference</label>
        <input type="text" name="reference"  class="form-control" value="<?php echo $reference  ?>">
      </div>    

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>