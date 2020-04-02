<?php
try   {
  $servername = "db5000303638.hosting-data.io";
  $user = "dbu526569";
  $pass = "*8y.4YNe";
  $dbname = "dbs296625";
  // Je me connecte à ma bdd
  $bdd = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}catch(Exception $e)
{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}


?>
