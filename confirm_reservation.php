<?php session_start();?>
<?php
require("inc_connexion.php");

  if(isset($_SESSION["open"])){
      //table utilisateur
      $req1="SELECT *FROM user where id=".$_SESSION['id'];
      $rst1=$idconnexion->query($req1);
      $tableau=$rst1->fetch(PDO::FETCH_OBJ);
  
      $req2="SELECT *FROM voitures where id=".$_POST["id_voiture"];
      $rst2=$idconnexion->query($req2);
      $tableau2=$rst2->fetch(PDO::FETCH_OBJ);
  
      $req="INSERT INTO reservation (id_user,nom,prenom,marque,photo,date_debut,date_fin,telephone,passeport_cin,prix_location) VALUES('".$tableau->id."','".$tableau->nom."','".$tableau->prenom."','".$tableau2->marque."','".$tableau2->photo."','".$_POST["datedebut"]."','".$_POST["datefin"]."','".$tableau->telephone."','".$tableau->passport_cin."','".$tableau2->prix_location."')";
      $rst=$idconnexion->exec($req);
      if($rst){
          header("location:divHome.php");
      }
      else{
          header("location:404.html");
      }
  }
   

?>