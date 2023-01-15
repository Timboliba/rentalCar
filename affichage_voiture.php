<div>
<?php
require("inc_connexion.php");

    $req="SELECT *FROM voitures WHERE id=".$_POST['id'];
    $rst=$idconnexion->query($req);
    $tabvoiture=$rst->fetch(PDO::FETCH_OBJ);
echo'<div style="width:auto%;backgroiund-color:whitesmoke;margin-top:45px;" align="center">
<div style="width:500px;background-color:silver;height:auto;padding-top:25px;border:5px double black;box-shadow:1px -10px 19px 19px silver;border-radius:15px">
    <div style="width:470px;background-image:url(images/'.$tabvoiture->marque.'/'.$tabvoiture->photo.');background-size:cover;height:300px;">
    
    </div>
    <div style="display:flex;margin-top:25px;margin-bottom:15px;"align="center">
        <div><button style="background-color:rgba(38, 212, 66, 1);color:white;margin-left:110px;height:50px;border-radius:15px;" id="reserver">RESERVER</button></div>
        <div><button style="background-color:rgba(225, 171, 171, 1);color:white;margin-left:27px;height:50px;border-radius:15px;width:75px;" disabled="disabled" >'.$tabvoiture->prix_location.'€/DAY</button></div>
        <div><button style="background-color:rgba(249, 0, 0, 1);color:white;margin-left:30px;height:50px;border-radius:15px;" id="annuler">ANNULER</button></div>
    </div>
   
</div>
<div class="nom" id="'.$tabvoiture->id.'">'.$tabvoiture->info.'</div>
</div>
    
</div>';


//Pour la réservation le petit formulaire contenant les dates de début et fin de la réservation
echo'<div  id="divdate" method="post" style="display:none">
    <div>
        <div><input type="date" name="datedebut" id="0" placeholder="Date de début"></div><span id="err0" style="color:red;"></span>
        <div><input type="date" name="datefin" id="1" placeholder="Date de fin"></div><span id="err1" style="color:red;"></span>
    </div>
    <div><button id="confirmerreservation">Confirmer</button></div>
</div>';

?>

<script src="js/jQuery_v3.6.0_min.js"></script>

<style>
    table {
        
        width:inherit;
    }
</style>