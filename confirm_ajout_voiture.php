<?php

require("inc_connexion.php");

$req="INSERT INTO voitures (immatriculation,marque,modele,kilometrage,prix_location,nombre_en_stock,photo,couleur,dateVignette,dateVisiteTechnique,dateAssurance,info) VALUES('".$_POST["immatriculation"]."','".$_POST["marque"]."','".$_POST["modele"]."','".$_POST["kilometrage"]."','".$_POST["prixlocation"]."','".$_POST["nombreenstock"]."','".$_POST["photo"]."','".$_POST["couleur"]."','".$_POST["datevignette"]."','".$_POST["datevisitetechnique"]."','".$_POST["dateassurance"]."','".$_POST["info"]."')";
	$rst=$idconnexion->exec($req);
	$file_name=$_POST["photo"];
	$directori='images/'.$_POST["marque"].'/';
	$target_file=$directori.basename($_FILES[$file_name]["name"]);

		if($rst){
				//header("location:admin_pannel.php");
				if(move_uploaded_file($_FILES[$file_name]["tmp_name"],$target_file)){
					echo "Fichier bien  uploader";
				}
				else{
					echo "Fichier non  uploader";
				}
			}
			else{
				echo"Erreur d'envoie";
			}
?>
