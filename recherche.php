<?php
if(isset($_POST['marque']) ){
require("inc_connexion.php");
		$requete="SELECT * FROM voitures WHERE marque LIKE '%".$_POST['marque']."%' ";
		$resultat=$idconnexion->query($requete);
		$nbenregistrement=$resultat->rowCount();
		if($nbenregistrement>0){
		$tab=$resultat->fetchALL(PDO::FETCH_OBJ);
        foreach($tab as $value=>$val){
            echo' 
            <div class="divGride">
                <section style="background-image:url(images/'.$val->marque.'/'.$val->photo.');">
                    
                </section>
                <div style="height:auto;backgroun-color:silver;">'.$val->marque.' <span> <a data-role="afficher" href="affichage_voiture.php?id='.$val->id.'" id="'.$val->id.'">plus</a></span></div>
            </div>';
        }    
		}
		else{
			echo "aucun enregistrement trouvé !!!!";
		}
	$resultat->closeCursor();
	
}
?>