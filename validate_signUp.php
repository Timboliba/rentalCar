<?php
require("inc_connexion.php");
$_POST["nom"];
$_POST["prenom"];
$_POST["username"];
$_POST["password"];
$_POST["adresse"];
$_POST["mail"];
$_POST["telnum"];
$_POST["passeportnum"];

	$req="INSERT INTO user(nom,prenom,username,password,adresse,mail,telephone,passport_cin) VALUES('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["adresse"]."','".$_POST["mail"]."','".$_POST["telnum"]."','".$_POST["passeportnum"]."')";
	$rst=$idconnexion->exec($req);
	if($rst){
		
		header("location:sign_in.php");
	}
	else{
	header("location:sin_up.php");
	}
?>