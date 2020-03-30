<div class="container">
  <form id="contact" action="traitement.php" method="post">
    <h3><center>Form - Cinéma Insertion</center></h3>
    <h4><center>Exercice d'utilisation CRUD, ajout dans une table simple</center></h4>
    <fieldset>
      <input placeholder="titre" name="titre" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="duree" name="duree" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="date_de_sortie" name="date_de_sortie" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="affiche" name="affiche" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="bande_annonce" name="bande_annonce" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <input placeholder="note" name="note" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <input placeholder="synopsis" name="synopsis" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>