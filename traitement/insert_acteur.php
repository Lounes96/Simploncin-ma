<?php

  include ('../include/connectbdd.php');

  $nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
  $prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
  $photo_acteur = !empty($_POST['photo_acteur']) ? $_POST['photo_acteur'] : NULL;
  

  $sql = $bdd->prepare ("INSERT INTO acteur (nom, prenom, photo_acteur)
                        VALUES ( :nom, :prenom, :photo_acteur)");

  $sql->execute(array(
      'nom' => $nom,
      'prenom' => $prenom,
      'photo_acteur' => $photo_acteur,
      
  ));

  $sql-> closeCursor();
  header('location:../include/formADMIN.php');

?>
