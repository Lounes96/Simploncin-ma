<?php 

 
if (!(isset($_POST['INSCRIPTION']))) {
   //On récupère les valeurs entrées par l'utilisateur :
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mot_de_passe = htmlspecialchars(hash("Whirlpool", $_POST['mot_de_passe'])); // hash = Génère une valeur de hachage (empreinte numérique)
   $mail = htmlspecialchars($_POST['mail']);
   $mail = strtolower($mail); // met tout en minuscule dans le bdd
   //On construit la date d'aujourd'hui
   //strictement comme sql la construit0
   //$today = date("y-m-d");
   //On se connecte
   function create_user($pseudo, $mot_de_passe, $mail)
   {
       $DB_NAME = "dbs296625"; //database_name
       $DB_DSN = "mysql:host=db5000303638.hosting-data.io=" . $DB_NAME; //database_datasourcename
       $DB_USER = "dbu526569"; //database_user
       $DB_PASSWORD = "*8y.4YNe"; //database_mot_de_passe
       try {
           $bdd = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
           $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configure un attribut PDO
           $query = $bdd->prepare("SELECT pseudo FROM user WHERE pseudo=:pseudo OR mail=:mail"); // verifie que les données rentrées sont bonnes par rapport a la bdd 
           $query->execute(array(':pseudo' => $pseudo, ':mail' => $mail)); // Exécute une requête préparée
           $val = $query->fetch(); //recupere les valeurs
           if ($val != null) {
               $query->closeCursor();
               return (-1);
           }
           $query->closeCursor(); // Ferme le curseur, permettant à query d'être de nouveau exécuté
           $query = $bdd->prepare("INSERT INTO user (pseudo, mail, mot_de_passe) VALUES (:pseudo, :mail, :mot_de_passe)"); // inserer des valeurs dans la base
           $query->execute(array(':pseudo' => $pseudo, ':mail' => $mail, 'mot_de_passe' => $mot_de_passe)); // Exécute une requête préparée
           echo 'Create success !';
           return (0);
       } catch (PDOException $e) {
           echo $e;
       }
   }
   if (($val = create_user($pseudo, $mot_de_passe, $mail)) == -1) {
       echo "User already Exist";
   }
}

?>