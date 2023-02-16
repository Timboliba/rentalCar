<?php
require("inc_connexion.php");

    $req="SELECT *FROM voitures WHERE id=".$_POST["id"];
    $rst=$idconnexion->query($req);
    $tabvoiture=$rst->fetch(PDO::FETCH_OBJ);
echo'<div style="width:100%;backgroiund-color:whitesmoke;margin-top:45px;" align="center">
<div style="width:500px;background-color:silver;height:auto;padding-top:25px;border:5px double black;box-shadow:1px -10px 19px 19px silver;border-radius:15px">
    <div style="width:470px;background-image:url(images/'.$tabvoiture->marque.'/'.$tabvoiture->photo.');background-size:cover;height:300px;">
    
    </div>
    <div style="display:flex;margin-top:25px;margin-bottom:15px;"align="center">
        <div><button style="background-color:rgba(38, 212, 66, 1);color:white;margin-left:110px;height:50px;border-radius:15px;" id="reserver">RESERVER</button></div>
        <div><button style="background-color:rgba(225, 171, 171, 1);color:white;margin-left:27px;height:50px;border-radius:15px;width:75px;" disabled="disabled" >'.$tabvoiture->prix_location.'€/DAY</button></div>
        <div><button style="background-color:rgba(249, 0, 0, 1);color:white;margin-left:30px;height:50px;border-radius:15px;" id="annuler">ANNULER</button></div>
    </div>
    <div>'.$tabvoiture->info.'</div>
</div>
</div>
    
</div>';
/*Tableau detaillé sur les caracteristiques due la voiture
echo'<div style="width: 250px;height:auto;background-color:grey;position:absolute;z-index:80;margin-left:78%;margin-top:-15%">';
    echo'<table border="2">';
        echo'<tr>';
            echo'<td>Climatisation</td>';
            echo'<td>';
            if($tabvoiture->dateVisiteTechnique){ echo "ok";}
            echo'</td>';
        echo'</tr>';
        echo'<tr>';
            echo'<td>Carburant</td>';
            echo'<td>';
            if($tabvoiture->dateVisiteTechnique){ echo "ok";}
            echo'</td>';
        echo'</tr>';
        echo'<tr>';
            echo'<td>Contrôle technique</td>';
            echo'<td>';

            echo'</td>';
        echo'</tr>';
        echo'<tr>';
            echo'<td>Assurance</td>';
            echo'<td>';
            if($tabvoiture->dateVisiteTechnique){ echo "ok";}
            echo'</td>';
        echo'</tr>';
        echo'<tr>';
            echo'<td>Airbag côté conducteur </td>';
            echo'<td>';
            echo'</td>';
        echo'</tr>';
        echo'<tr>';
            echo'<td>Airbag côté passager </td>';
            echo'<td>';
            echo'</td>';
        echo'</tr>';
        echo'<tr>';
            echo'<td>Capteur Accident</td>';
            echo'<td>';

            echo'</td>';
        echo'</tr>';
    echo'</table>';
echo'</div>';*/


?>
<script src="js/jQuery_v3.6.0_min.js"></script>
<script>
    $(document).ready(function(){
        var validate=true;
        $("#reserver").click(function(){
        $("#div").fadeIn(1000);
        
    });
    $("#annuler").click(function(){
        $("#div").fadeOut(1000);
    });
    $("#confirmer").click(function(){
            var tab=Array("Date de début","Date de fin");
           for(var i=0;i<tab.length;i++){
            if($("#"+i).val()==""){
               $("#err"+i).text("Veuillez selectionner une "+tab[i]+" reservation!");
               validate=false;
            }
          else if($("#0").val()==$("#1").val()){
                $("#err1").text("Veuillez selectionner une de fin de reservation differente de la date de début!");
               validate=false;
            }
            
            else{
                $("#err"+i).text("");
                
                validate=true; 
            }
           }
        })
    })
</script>
<style>
    table {
        
        width:inherit;
    }
</style>