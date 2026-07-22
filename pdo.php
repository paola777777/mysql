

<?php
  $serveur = "localhost";
  $base = "agence_immobiliere";
  $utilisateur = "root";
  $motdepasse = "";
  try{
$pdo = new 
PDO("mysql:host=$serveur;dbname=$base;charset=utf8",$utilisateur,$motdepasse);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo "Connexion réussie a ma base de donnees. "; 
}catch(PDOException $e){
die("Erreur : ".$e->getMessage());
}
?>