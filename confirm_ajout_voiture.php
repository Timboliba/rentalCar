<?php
/*echo "photo".$_POST["photo"]."<br>";
echo "immatriculation".$_POST["immatriculation"]."<br>";
echo "marque".$_POST["marque"]."<br>";
echo "modele".$_POST["modele"]."<br>";
echo "kilometrage".$_POST["kilometrage"]."<br>";
echo "prixlocation".$_POST["prixlocation"]."<br>";
echo "nombreenstock".$_POST["nombreenstock"]."<br>";
echo "couleur".$_POST["couleur"]."<br>";
echo "datevignette".$_POST["datevignette"]."<br>";
echo "datevisitetechnique".$_POST["datevisitetechnique"]."<br>";
echo "dateassurance".$_POST["dateassurance"]."<br>";
echo "info".$_POST["info"]."<br>";*/
$file_name=$_POST["photo"];
$upload_d="./images/".$_POST["marque"];
$_FILES[$file_name]['tmp_name'];
require("inc_connexion.php");
move_uploaded_file($_FILES['fichier']['tmp_name'],"img/".$_FILES['fichier']['name']);
$req="INSERT INTO voitures (immatriculation,marque,modele,kilometrage,prix_location,nombre_en_stock,photo,couleur,dateVignette,dateVisiteTechnique,dateAssurance,info) VALUES('".$_POST["immatriculation"]."','".$_POST["marque"]."','".$_POST["modele"]."','".$_POST["kilometrage"]."','".$_POST["prixlocation"]."','".$_POST["nombreenstock"]."','".$_POST["photo"]."','".$_POST["couleur"]."','".$_POST["datevignette"]."','".$_POST["datevisitetechnique"]."','".$_POST["dateassurance"]."','".$_POST["info"]."')";
	$rst=$idconnexion->exec($req);
	if($upload){
		if($rst){
			if($upload){
				//header("location:admin_pannel.php");
				echo "Envoie reussi";
			}
			else{
				echo"Erreur d'envoie";
			}
		}
	}
	

?>
