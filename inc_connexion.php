<?php
require("inc_config.php");
try{
    $dsn="mysql:host=".HOST.";dbname=".DB;
    $idconnexion=new PDO($dsn,USER,PWD);
    $idconnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
    die("Erreur :".$e->getMessage());
    exit();

}

?>