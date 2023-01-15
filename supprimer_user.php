<?php
//Script permet de supprimer un enregistrement via la table user de la BD pfe
if(isset($_POST['id'])){
require("inc_connexion.php");
	$req="DELETE FROM user where id=".$_POST['id'];
	$rst=$idconnexion->exec($req);
	if($rst){
		header("location:admin_pannel.php");
	}
	else{
		echo"Enregistrement n'est supprimer !!!!!!!!";
	}
	
	
	}
?>