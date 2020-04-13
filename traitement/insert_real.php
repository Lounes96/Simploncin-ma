<?php

  include ('../include/connectbdd.php');

  $nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
  $prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
  $photo_realisateur = !empty($_POST['photo_realisateur']) ? $_POST['photo_realisateur'] : NULL;
  $info_realisateur = !empty($_POST['info_realisateur']) ? $_POST['info_realisateur'] : NULL;
  

  $sql = $bdd->prepare ("INSERT INTO Realisateur (nom, prenom, photo_realisateur, info_realisateur)
                        VALUES ( :nom, :prenom, :photo_realisateur, :info_realisateur)");

  $sql->execute(array(
      'nom' => $nom,
      'prenom' => $prenom,
      'photo_realisateur' => $photo_realisateur,
      'info_realisateur' => $info_realisateur,
      
  ));

  $sql-> closeCursor();
  header('location:../include/formADMIN.php');

?>
