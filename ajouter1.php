
<?php
require("pdo.php");
if(isset($_POST['execute'])){
$nom = $_POST['nom'];
$telephone = $_POST['telephone'];
$adresse_email = $_POST['adresse_email'];
$coodonnee = $_POST['coodonnee'];
$sql = "INSERT INTO proprietaire(nom,telephone,adresse_email,coodonnee) VALUES(?,?,?,?)";
$requete = $pdo->prepare($sql);
$requete->execute([$nom,$telephone,$adresse_email,$coodonnee]);
echo "Proprietaire enregistré avec succès.";

}

?>

