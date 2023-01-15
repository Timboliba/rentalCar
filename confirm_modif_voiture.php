<?php
require("inc_connexion.php");
$req=$idconnexion->exec("update voitures set immatriculation='".$_POST['immatriculation']."', marque='".$_POST['marque']."',modele='".$_POST['modele']."',kilometrage='".$_POST['kilometrage']."',prix_location='".$_POST['prixlocation']."',nombre_en_stock='".$_POST['nombreenstock']."',photo='".$_POST['photo']."',couleur='".$_POST['couleur']."',dateVignette='".$_POST['datevignette']."',dateVisiteTechnique='".$_POST['datevisitetechnique']."',dateAssurance='".$_POST['dateassurance']."',info='".$_POST['info']."' where id='".$_POST['id']."'");
if(!$req){

    echo "Echeque de la modification";
}


?>