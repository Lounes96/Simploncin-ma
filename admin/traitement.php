
<?php 

include ('include/connectbdd.php'); 

$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
$mot_de_passe = !empty($_POST['mot_de_passe']) ? $_POST['mot_de_passe'] : NULL;


//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT * FROM user WHERE mail = :mail');
$req->execute(array(
    'mail' => $mail));
$resultat = $req->fetch();

var_dump($resultat);

?>



