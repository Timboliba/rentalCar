<?php session_start();?>
<style>
      
 input{
     border:none;
     outline:none;

 }
img{
    width:inherit;
}
hr{
    background-color:red;
}
.div{

border:1px solid pink;

}
td{
    margin-left:5%;
}
form{height:inherit;}
    </style>
  
<center><div class="div" style="height:750px;">
    <?php
    require("inc_connexion.php");
    $req="SELECT *FROM user WHERE id=".$_SESSION["id"];
    $rst=$idconnexion->query($req);
    $tab=$rst->fetch(PDO::FETCH_OBJ);

    
       echo' <form>
            <span style="font-size:22px;">PERSONAL INFORMATION</span>
            <hr>
            <table>
                <tr>
                    <td>NOM: </td>
                    <td><input type="text" readonly value="'.$tab->nom.'"></td>
                </tr>
                <tr>
                    <td>PRENOM: </td>
                    <td><input type="text" readonly value="'.$tab->prenom.'"></td>
                </tr>
                <tr>
                    <td>NOM D\'UTILISATEUR: </td>
                    <td><input type="text" readonly  value="'.$tab->username.'"></td>
                </tr>
                <tr>
                    <td>ADRESSE: </td>
                    <td><input type="text" readonly  value="'.$tab->adresse.'"></td>
                </tr>
                <tr>
                    <td>E-MAIL: </td>
                    <td><input type="tel" readonly  value="'.$tab->mail.'"></td>
                </tr>
                <tr>
                    <td>NUMÉRO DE TÉLÉPHONE: </td>
                    <td><input type="tel" readonly  value="'.$tab->telephone.'"></td>
                </tr>
                <tr>
                    <td>PASSEPORT/CIN: </td>
                    <td><input type="tel" readonly  value="'.$tab->passport_cin .'"></td>
            </tr>
            </table>
            
        </form>';
   
    ?>
     </div--></center>