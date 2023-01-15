<?php session_start()?>
<?php
require("inc_connexion.php");
$_SESSION["open"]="";
unset($_SESSION["open"]);
$_SESSION["prenom"]="";
unset($_SESSION["prenom"]);
$_SESSION["nom"]="";
unset($_SESSION["nom"]);
$_SESSION["id"]="";
unset($_SESSION["id"]);
session_destroy();
$idconnexion=NULL;
header("location:index1.php");
?>