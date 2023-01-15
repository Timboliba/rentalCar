<?php
//Script permet de supprimer un enregistrement via la table voitures de la BD pfe
if(isset($_POST['id'])){
require("inc_connexion.php");
	$req="DELETE FROM voitures where id=".$_POST['id'];
	$rst=$idconnexion->exec($req);
	/*if($rst){
		header("location:admin_pannel.php");
	}*/
	if(!$rst){
		echo"Enregistrement n'est supprimer !!!!!!!!";
	}
}
?>