
<?php
require("pdo.php");
if(isset($_POST['execute'])){
$nom_l = $_POST['nom_l'];
$prenom_l = $_POST['prenom_l'];
$profession = $_POST['profession'];
$n_piece = $_POST['n_piece'];
$nom_employeur = $_POST['nom_employeur'];
$sql = "INSERT INTO locataire(nom_l,prenom_l,profession,n_piece,nom_employeur) VALUES(?,?,?,?,?)";
$requete = $pdo->prepare($sql);
$requete->execute([$nom_l,$prenom_l,$profession,$n_piece,$nom_employeur]);
echo "Locataire enregistré avec succès.";

}

?>