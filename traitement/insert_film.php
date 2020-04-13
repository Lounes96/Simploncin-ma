<?php

  include ('../include/connectbdd.php');

  $titre = !empty($_POST['titre']) ? $_POST['titre'] : NULL;
  $duree = !empty($_POST['duree']) ? $_POST['duree'] : NULL;
  $date_de_sortie = !empty($_POST['date_de_sortie']) ? $_POST['date_de_sortie'] : NULL;
  $affiche = !empty($_POST['affiche']) ? $_POST['affiche'] : NULL;
  $bande_annonce = !empty($_POST['bande_annonce']) ? $_POST['bande_annonce'] : NULL;
  $note = !empty($_POST['note']) ? $_POST['note'] : NULL;
  $synopsis = !empty($_POST['synopsis']) ? $_POST['synopsis'] : NULL;

  $sql = $bdd->prepare ("INSERT INTO Film (titre, duree, date_de_sortie, affiche, bande_annonce, note, synopsis  )
                        VALUES ( :titre, :duree, :date_de_sortie, :affiche, :bande_annonce, :note, :synopsis)");

  $sql->execute(array(
      'titre' => $titre,
      'duree' => $duree,
      'date_de_sortie' => $date_de_sortie,
      'affiche' => $affiche,
      'bande_annonce' => $bande_annonce,
      'note' => $note,
      'synopsis' => $synopsis
  ));

  $sql-> closeCursor();
  header('location:../include/formADMIN.php');

?>
