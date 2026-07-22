
<?php
require("pdo.php");
if(isset($_POST['execute'])){
$nom_a = $_POST['nom_a'];
$poste = $_POST['poste'];

$sql = "INSERT INTO agent(nom_a,poste) VALUES(?,?)";
$requete = $pdo->prepare($sql);
$requete->execute([$nom_a,$poste]);
echo " Agent enregistre avec succès.";

}

?>