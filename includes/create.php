<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $nom_peintre = $_POST['nom_peintre'];
        $nom_tableau = $_POST['nom_tableau'];
        $quantite = $_POST['quantite'];
        $reference = $_POST['reference'];
      
        // requete sql pour inserer un tableau dans la table
        $query= "INSERT INTO tableaux(nom_peintre, nom_tableau, quantite, reference) VALUES('{$nom_peintre}','{$nom_tableau}',{$quantite},'{$reference}')";
        
        $add_tableau = mysqli_query($conn,$query);
    
        // Afficher un message pour verifier si l'ajout a ete fait
          if (!$add_tableau) {
              echo "Desole, nous avons recontre un probleme ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Tableau ajoute!')</script>";
              }         
    }
?>

<h1 class="text-center">Ajouter un tableau</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="nom_peintre" class="form-label">Nom du peintre</label>
        <input type="text" name="nom_peintre"  class="form-control">
      </div>
      
      <div class="form-group">
        <label for="nom_tableau" class="form-label">Nom du tableau</label>
        <input type="text" name="nom_tableau"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="quantite" class="form-label">Quantite en stock</label>
        <input type="text" name="quantite"  class="form-control">
      </div> 
      
      <div class="form-group">
        <label for="reference" class="form-label">Reference</label>
        <input type="text" name="reference"  class="form-control">
      </div>

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- Button pour retourner a la page d'acceuil -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>