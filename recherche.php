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
                <div style="height:auto;backgroun-color:silver;">'.$val->marque.' <span> <a data-role="afficherplus" id="'.$val->id.'" style="color:blue;">plus</a></span></div>
            </div>';
        }    
		}
		else{
			echo "aucun enregistrement trouvé !!!!";
		}
	$resultat->closeCursor();
	
}
?>
<script src="js/jQuery_v3.6.0_min.js"></script>
<script src="js/brand.js"></script>
