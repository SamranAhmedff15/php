 <!-- Header -->
<?php  include "../header.php" ?>

<?php 
     if(isset($_GET['delete']))
     {
         $tableau_id= $_GET['delete'];

         // Requete SQL pour supprimer un element de la table tableau ou id = $tableau_id
         $query = "DELETE FROM tableaux WHERE id = {$tableau_id}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
              ?>