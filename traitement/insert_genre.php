<?php

  include ('../include/connectbdd.php');

  $nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
 
  

  $sql = $bdd->prepare ("INSERT INTO genre (nom)
                        VALUES ( :nom)");

  $sql->execute(array(
      'nom' => $nom,
      
      
  ));

  $sql-> closeCursor();
  header('location:../include/formADMIN.php');

?>
