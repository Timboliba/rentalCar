<div style="height: 550px;">
    <center>
        <h1>Modification de voiture</h1><hr>
        <?php
    if(isset($_POST['id']) ){
		require("inc_connexion.php");
		$req="SELECT * FROM voitureS where id=".$_POST['id']."";
		$res=$idconnexion->query($req);
		$resobj=$res->fetch(PDO::FETCH_OBJ);
?>		
		<div class="col-md-12 text-end">
        		
       	</div>
        	<div class="col-md-6">
				<div class="form-group">
        			<label class="col-form-label col-form-label-sm" for="clientCity">Photo: </label><span class="msgerr" id="err0"></span><br>
                    <input type="text" name="immatriculation"  id="11" class="form-control"  value="<?php echo $resobj->photo; ?>" readonly="">
				</div>
       		</div>                           
			<div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" for="clientCity">Immatriculation: </label><span class="msgerr" id="err0"></span><br>
                    <input type="text" name="immatriculation"  id="0" class="form-control"  value="<?php echo $resobj->immatriculation; ?>">
				</div>
       		 </div>
       		<div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" >Marque: </label><span class="msgerr" id="err1"></span><br>
                    <input type="text" id="1"  name="marque" class="form-control"  value="<?php echo $resobj->marque; ?>">
				</div>
			</div>
         	<div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" >Modéle: </label><span class="msgerr" id="err2"></span><br>
                    <input type="text"  id="2" name="modele" class="form-control" value="<?php echo $resobj->modele; ?>">
				</div>
        	</div>
            
         	<div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" >Kilométrage: </label><span class="msgerr" id="err3"></span><br>
                    <input  type="number" id="3" name="etdemail" class="form-control" value="<?php echo $resobj->kilometrage; ?>">
				</div>
        	</div>    
            <div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" >Prix Location: </label><span class="msgerr" id="err4"></span><br>
                    <input  type="text" id="4" name="prixloc" class="form-control" value="<?php echo $resobj->prix_location; ?>">
				</div>
        	</div> 
            <div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" >Nombre en stock: </label><span class="msgerr" id="err5"></span><br>
                    <input  type="text" id="5" name="stock" class="form-control" value="<?php echo $resobj->nombre_en_stock; ?>">
				</div>
        	</div> 
            <div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" >Couleur: </label><span class="msgerr" id="err6"></span><br>
                    <input  type="text" id="6" name="couleur" class="form-control" value="<?php echo $resobj->couleur; ?>">
				</div>
        	</div> 
            <div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" >Date vignette: </label><span class="msgerr" id="err7"></span><br>
                    <input  type="date" id="7" name="vignette" class="form-control" value="<?php echo $resobj->dateVignette; ?>">
				</div>
        	</div>
            <div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" >Date visite technique: </label><span class="msgerr" id="err8"></span><br>
                    <input  type="date" id="8" name="visitetech" class="form-control" value="<?php echo $resobj->dateVisiteTechnique; ?>">
				</div>
        	</div>         
            <div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" >Date assurance: </label><span class="msgerr" id="err9"></span><br>
                    <input  type="date" id="9" name="assurance" class="form-control" value="<?php echo $resobj->dateAssurance; ?>">
				</div>
        	</div>
            <div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" >Info </label><span class="msgerr" id="err10"></span><br>
                    <textarea name="info" id="10" cols="30" rows="10" value="<?php echo $resobj->info; ?>"></textarea>
				</div>
        	</div>
		
			<br>
            <div class="col-md-6">
        		<div class="form-group">
        			<button id="btncomfir">Confirmer</button>&nbsp;&nbsp;&nbsp;
                    <button id="btnannuler">Annuler</button>
				</div>
        	</div>    
		
<?php			
    }
?>

    </center>
</div>
<script src="js/jQuery_v3.6.0_min.js"></script>
<script src="js/admin_pannel.js"></script>