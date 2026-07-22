
<?php
require("pdo.php");
if(isset($_POST['execute'])){
$date_verse = $_POST['date_verse'];
$montant = $_POST['montant'];
$date_location = $_POST['date_location'];
$mode_paiement = $_POST['mode_paiement'];
$sql = "INSERT INTO paiement(date_verse,montant,date_location,mode_paiement) VALUES(?,?,?,?)";
$requete = $pdo->prepare($sql);
$requete->execute([$date_verse,$montant,$date_location,$mode_paiement]);
echo "Paiement enregistré avec succès.";

}

?>