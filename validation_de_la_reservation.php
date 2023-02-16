<?php
require("inc_connexion.php");
$req="UPDATE reservation  SET statut='Approuver' where id=".$_POST["id"];
$rst=$idconnexion->exec($req);
if($rst){
    echo "<h1>Success!!!</h1>";
}
else{
    echo"erreur!";
}
?>