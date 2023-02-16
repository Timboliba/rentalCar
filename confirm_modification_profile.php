<?php session_start();?>
<?php
require("inc_connexion.php");
$req=$idconnexion->exec("update user set nom='".$_POST['nom']."', prenom='".$_POST['prenom']."',username='".$_POST['username']."',password='".$_POST['password']."',adresse='".$_POST['adresse']."',mail='".$_POST['mail']."',telephone='".$_POST['telephone']."',passport_cin='".$_POST['passeportnum']."' where id='".$_SESSION['id']."'");
if(!$req){

    echo "Echeque de la modification";
}



?>