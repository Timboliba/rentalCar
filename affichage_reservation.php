
<div id="rental" style="display:flex;justify-content: space-between;margin-top:10%;">
    <?php
    //require("inc_connexion.php");
    $req="SELECT *FROM voitures";
    $rst=$idconnexion->query($req);
    $table=$rst->fetchALL(PDO::FETCH_OBJ);
    ?>
   
</div>