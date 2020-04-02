<!--Liste acteurs-->


<div class="acteurs-titre">Acteurs</div>



<section class="liste-acteurs">

<?php include ('connectbdd.php'); 

$id=$_GET['id'];

$req = $bdd ->prepare("SELECT id_acteur FROM jouer WHERE id_film=$id");
$req ->execute();

echo "BLABLA : ".$req->rowCount();  

while($donnees= $req->fetch()){
    $reqact = $bdd ->prepare("SELECT * FROM acteur WHERE id_acteur= ?");
    $reqact ->execute([$donnees->id_acteur]);
    $act = $reqact->fetch();
    var_dump($act->nom);
    var_dump($donnees);

?>
    <div class="acteur">
        <img class="img-acteur" src=<?php echo $act['photo_acteur']; ?> alt="">
        <div><p><?php echo $act['nom']."   ". $act['prenom']; ?></p></div>
    </div>

<?php } ?>

</section>
