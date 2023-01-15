<?php session_start();?>
<?php
    require("inc_connexion.php");
    if($_SESSION['open']=="ok"){
        $datepost=date('d-m-y');
        $heurepost=date('H:i:s');
        $req="INSERT INTO temoignage (id_user,nom,prenom,temoignage,date_poste,heure_poste) VALUES ('".$_SESSION['id']."','".$_SESSION['nom']."','".$_SESSION['prenom']."','".$_POST['commentaire']."','".$datepost."','".$heurepost."')";
        $rst=$idconnexion->query($req);
        if($rst){
            header("location:index1.php");
        }
       
    }
    else{
        header("location:poster_temoignage.php");
    } 
   
?>