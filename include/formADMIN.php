
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crud </title>
  <link rel="stylesheet" href="..\css\style.css">

</head>
<body>





<div class="container">
  <form id="contact" action="../traitement/insert_film.php" method="post">
    <h3><center>Insertion Film</center></h3>
    
    <fieldset>
      <input placeholder="Titre du Film" name="titre" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Durée 00:00:00" name="duree" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Date de sortie AAAA/MM/JJ" name="date_de_sortie" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Image du film" name="affiche" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Bande annonce" name="bande_annonce" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <input placeholder="Note" name="note" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <input placeholder="Synopsis" name="synopsis" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
           <select  name="id_cinema" tabindex="" require >
            <?php
                include ('connectbdd.php');

                $req = $bdd->prepare(" SELECT nom, id_genre FROM genre ");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option value="<?= $donnees['id_genre']; ?>"> Genre : <?= $donnees['nom']; ?> | id genre : <?= $donnees['id_genre']; ?> </option>


              <?php  }

             ?>





            </select>
    </fieldset>


    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>

<div class="container">
  <form id="contact" action="../traitement/insert_acteur.php" method="post">
    <h3><center>Insertion Acteur</center></h3>
    
    <fieldset>
      <input placeholder="Nom" name="nom" type="text" tabindex="6" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Prénom" name="prenom" type="text" tabindex="7" required>
    </fieldset>
    <fieldset>
      <input placeholder="Photo " name="photo_acteur" type="text" tabindex="8" required>
    </fieldset>
    

    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>

<div class="container">
  <form id="contact" action="../traitement/insert_real.php" method="post">
    <h3><center>Insertion Realisateur</center></h3>
    
    <fieldset>
      <input placeholder="Nom" name="nom" type="text" tabindex="9" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Prénom" name="prenom" type="text" tabindex="10" required>
    </fieldset>
    <fieldset>
      <input placeholder="Photo " name="photo_realisateur" type="text" tabindex="11" required>
    </fieldset>
    <fieldset>
      <input placeholder="Infos " name="info_realisateur" type="text" tabindex="12" required>
    </fieldset>
    

    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>

<div class="container">
  <form id="contact" action="../traitement/insert_genre.php" method="post">
    <h3><center>Insertion Genre</center></h3>
    
    <fieldset>
      <input placeholder="Genre" name="nom" type="text" tabindex="13" required autofocus>
    </fieldset>
    
  

    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>



    
    









</body>
</html>
